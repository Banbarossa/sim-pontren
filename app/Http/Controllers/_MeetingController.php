<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationData;
use RealRashid\SweetAlert\Facades\Alert;

class MeetingController extends Controller
{

    public function index()
    {
        return view('rapat.tambah_rapat');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'tanggal'   => 'required',
            'pimpinan'  => 'required|min:4',
            'deskripsi' => 'required',
            'kesimpulan' => 'required|min:20',
            'images'    => 'image|file|max:2048|mimes:jpg,jpeg,gif,png',
            'attachment' => 'file|max:3*1024|mimes:docx,xslx,pdf',
        ]);

        if ($request->file('images')) {
            $validatedData['images'] = $request->file('images')->store('rapat', 'public');
        } else {
            $validatedData['images'] = "";
        }


        if ($request->file('attachment')) {
            $validatedData['attachment'] = $request->file('attachment')->store('rapat', 'public');
        } else {
            $validatedData['attachment'] = "";
        }

        Meeting::create([
            'unik_id' => Str::random(40),
            'tanggal' => $validatedData['tanggal'],
            'pimpinan' => $validatedData['pimpinan'],
            'deskripsi' => ucFirst($validatedData['deskripsi']),
            'kesimpulan' => $validatedData['kesimpulan'],
            'images' => $validatedData['images'],
            'attachment' => $validatedData['attachment']
        ]);
        Alert::toast('Data Berhasil ditambahkan', 'success');
        return redirect('/rapat');
    }


    public function show($unik_id)
    {
        $data = Meeting::where('unik_id', $unik_id)->first();
        $widget = Meeting::latest()->limit(5)->get();

        return view('rapat.show_rapat', [
            'data' => $data,
            'widget' => $widget,
        ]);
    }

    public function edit($unik_id)
    {
        $dataRapat = Meeting::where('unik_id', $unik_id)->first();

        return view('rapat.edit_rapat', ['data' => $dataRapat]);
    }
}
