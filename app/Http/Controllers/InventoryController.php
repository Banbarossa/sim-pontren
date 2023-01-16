<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\InventoryCategory;
use Illuminate\Http\Request;



class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inventory.masterinventory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = InventoryCategory::orderBy('nama', 'asc')->get();
        return view('inventory.inventory-create', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'nama' => 'required',

        ]);

        Inventory::create([
            'nama' => $request->nama,
            'kode' => $request->kode,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $data = Inventory::where('id', $id)
            ->with('Ruang',)
            ->with('InventoryCategory')
            ->first();
        $url = url('/inventaris/' . $data->kode);
        return view('inventory.inventory-view', [
            'data' => $data,
            'url' => $url
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('inventory.inventory-edit', ['data' => $id]);
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
        //
    }


    public function card($id)
    {
        $data = Inventory::find($id);
        $url = url('/inventaris/' . $data->kode);
        return view('inventory.card', [
            'data' => $data,
            'url' => $url
        ]);
    }

    public function scanqr($kode)
    {
        $data = Inventory::where('kode', $kode)
            ->with('Ruang',)
            ->with('InventoryCategory')
            ->first();

        return view('inventory.scanqr', ['data' => $data]);
    }
}
