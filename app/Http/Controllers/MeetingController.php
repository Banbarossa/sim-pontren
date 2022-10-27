<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationData;

class MeetingController extends Controller
{

    public function index()
    {
        return view('rapat.tambah_rapat');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'pimpinan' => 'required|min:4',
            'deskripsi' => 'required',
            'kesimpulan' => 'required|min:20',
        ]);

        Meeting::create([
            'unik_id' => Str::random(30),
            'tanggal' => $validatedData['tanggal'],
            'pimpinan' => $validatedData['pimpinan'],
            'deskripsi' => $validatedData['deskripsi'],
            'kesimpulan' => $validatedData['kesimpulan'],

        ]);
    }
}
