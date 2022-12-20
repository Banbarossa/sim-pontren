<?php

namespace App\Http\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory;
use App\Models\Danainventory;
use App\Models\InventoryCategory;
use App\Models\Ruang;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class InventoryEdit extends Component
{

    use LivewireAlert;
    public $data;
    public $nama, $kode, $ruang, $inventory_category, $merek, $no_seri, $kondisi = "baik", $tanggal, $sumber_dana, $sumber_perolehan, $harga_perolehan, $jumlah, $satuan, $image;
    protected $rules = [
        'nama' => 'required',
        'inventory_category' => "required",
        'ruang' => "required",
    ];


    public function mount()
    {
        $inventory = Inventory::where('id', $this->data)
            ->with('ruang', 'Danainventory')
            ->with('InventoryCategory')
            ->first();

        $this->nama = $inventory->nama;
        $this->kode = $inventory->kode;
        $this->ruang = $inventory->ruang_id;
        $this->inventory_category = $inventory->inventory_category_id;
        $this->merek = $inventory->merek;
        $this->no_seri = $inventory->no_seri;
        $this->kondisi = $inventory->kondisi;
        $this->tanggal = $inventory->tanggal;
        $this->sumber_dana = $inventory->danainventory_id;
        $this->sumber_perolehan = $inventory->sumber_perolehan;
        $this->harga_perolehan = $inventory->harga_perolehan;
        $this->jumlah = $inventory->jumlah;
        $this->satuan = $inventory->satuan;
    }

    public function render()
    {
        // dd($this->inventory_category);
        $dana = Danainventory::orderBy('nama', 'asc')->get();
        $category = InventoryCategory::orderBy('nama', 'asc')->get();
        $ruangan = Ruang::orderBy('nama', 'asc')->get();
        return view('livewire.inventory.inventory-edit', [
            'category' => $category,
            'ruangan' => $ruangan,
            'dana' => $dana,
        ]);
    }

    public function update()
    {
        $inventory = Inventory::where('id', $this->data)->first();

        $this->validate();

        $inventory->update([
            'nama' => $this->nama,
            'ruang_id' => $this->ruang,
            'inventory_category_id' => $this->inventory_category,
            'merek' => $this->merek,
            'no_seri' => $this->no_seri,
            'kondisi' => $this->kondisi,
            'tanggal' => $this->tanggal,
            'danainventory_id' => $this->sumber_dana,
            'sumber_perolehan' => $this->sumber_perolehan,
            'harga_perolehan' => $this->harga_perolehan,
            'jumlah' => $this->jumlah,
            'satuan' => $this->satuan,
        ]);
        return redirect('sarpras/inventory')->with($this->alert('success', "Data Berhasil Diubah", ['position' => 'center']));
    }
}
