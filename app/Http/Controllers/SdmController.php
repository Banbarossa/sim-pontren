<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sdm;
use Illuminate\Validation\Rules\Exists;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class SdmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sdm.sdm-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sdm.sdm-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($unik_id)
    {
        $data = Sdm::with(['province', 'regency', 'district', 'village'])->where('unik_id', $unik_id)->first();

        return view('sdm.sdm-view', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($unik_id)
    {
        $data = Sdm::where('unik_id', $unik_id)->first();
        return view('sdm.sdm-edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Sdm::findOrFail($id);
        $image_path = public_path('storage/' . $data->avatar);

        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $data->delete();
        alert::toast('Data berhasil dihapus', 'success');
        return redirect('/sdm');
    }
}
