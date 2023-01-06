<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\InventoryMantenance;

class MaintenanceinventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inventory.maintenance.inventory-table');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {

        $maint = InventoryMantenance::find($id);

        $data = Inventory::where('id', $maint->inventory_id)
            ->with('Ruang',)
            ->with('InventoryCategory')
            ->first();
        return view('inventory.maintenance.inventory-view', [
            'data' => $data,
            'maint' => $maint
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
        //
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
        $request->validate([
            'analisa_biaya' => 'required'
        ]);

        $barang = InventoryMantenance::find($id);
        $barang->pemeriksa = Auth()->user()->name;
        $barang->analisa_biaya = $request->analisa_biaya;
        $barang->status_periksa = 1;
        $barang->save();
        return redirect('/maintenance/inventory')->with('success', 'Data berhasil di tambahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function approved(Request $request, $id)
    {
        dd($request);
    }
    public function destroy($id)
    {
        //
    }
}
