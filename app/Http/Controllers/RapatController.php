<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use App\Models\Meeting;
use App\Models\Sdm;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class RapatController extends Controller
{

    public function index()
    {
        return view('rapat.master');
    }


    public function create()
    {
        $this->authorize('admin');
        $sdm = Sdm::all();
        return view('rapat.tambah_rapat', ['data' => $sdm]);
    }


    public function store(Request $request)
    {
        $this->authorize('admin');
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
            'notulen' => Auth()->user()->name,
            'deskripsi' => ucFirst($validatedData['deskripsi']),
            'kesimpulan' => $validatedData['kesimpulan'],
            'images' => $validatedData['images'],
            'attachment' => $validatedData['attachment'],
        ]);
        Alert::toast('Data Berhasil ditambahkan', 'success');
        return redirect('/notulensi');
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


    public function update(Request $request, $id)
    {

        $data = Meeting::findOrFail($request->id);


        // pengecekan dan store file image
        if ($request->file('images')) {
            if ($data->images) {
                $public_path = public_path('storage/' . $data->images);
                File::delete($public_path);
            }

            $images = $request->file('images')->store('rapat', 'public');
        } else {
            $images = $data->images;
        }

        // pengecekan dan store file Attachment
        if ($request->attachment) {
            if ($data->attachment) {
                $public_path = public_path('storage/' . $data->attachment);
                File::delete($public_path);
            }

            $attachment = $request->file('attachment')->store('rapat', 'public');
        } else {
            $attachment = "";
        }

        // update data meeting
        $data->update([
            'tanggal'   => $request->tanggal,
            'pimpinan'  => $request->pimpinan,
            'deskripsi' => $request->deskripsi,
            'kesimpulan' => $request->kesimpulan,
            'images'    => $images,
            'attachment'    => $attachment,
        ]);

        alert::toast('Data berhasil diubah', 'success');
        return redirect('/notulensi/' . $data->unik_id);
    }


    public function destroy($id)
    {
        $data = Meeting::findOrFail($id);

        $image_path = public_path('storage/' . $data->images);
        $attachment_path = public_path('storage/' . $data->attachment);

        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        if (File::exists($attachment_path)) {
            File::delete($attachment_path);
        }

        $data->delete();
        alert::toast('Data berhhasil dihapus', 'success');
        return redirect('/notulensi');
    }

    public function createpdf($unik_id)
    {

        $data = Meeting::where('unik_id', $unik_id)->first();
        $pdf = Pdf::loadView('rapat.pdf_rapat', ['data' => $data]);
        return $pdf->stream();
    }
}
