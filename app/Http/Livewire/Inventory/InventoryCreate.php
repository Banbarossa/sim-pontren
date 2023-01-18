<?php

namespace App\Http\Livewire\Inventory;

use App\Models\Danainventory;
use App\Models\Inventory;
use Livewire\Component;
use App\Models\InventoryCategory;
use App\Models\Ruang;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class InventoryCreate extends Component
{
    use LivewireAlert;
    public $nama, $kode, $ruang, $inventory_category, $merek, $no_seri, $kondisi = "baik", $tanggal, $sumber_dana, $sumber_perolehan, $harga_perolehan, $jumlah, $satuan, $image;

    protected $rules = [
        'nama' => 'required',
        'inventory_category' => "required",
        'ruang' => "required",
    ];


    public function updated()
    {
        $model = Inventory::latest()->first();
        $date = explode('-', $this->tanggal);
        if ($model) {
            $this->kode = str_pad($model->id + 1, 3, '0', STR_PAD_LEFT) . '-' . $this->sumber_dana . '-' . $date[0];
        } else {
            $this->kode = '001' . '-' . $this->sumber_dana . '-' . $date[0];
        }
    }
    public function render()
    {
        $dana = Danainventory::orderBy('nama', 'asc')->get();
        $data = InventoryCategory::orderBy('nama', 'asc')->get();
        $ruangan = Ruang::orderBy('nama', 'asc')->get();
        return view('livewire.inventory.inventory-create', [
            'data' => $data,
            'ruangan' => $ruangan,
            'dana' => $dana,
        ]);
    }

    public function store()
    {

        $this->validate();
        Inventory::create([
            'nama' => $this->nama,
            'kode' => $this->kode,
            'ruang_id' => $this->ruang,
            'inventory_category_id' => $this->inventory_category,
            'merek' => $this->merek,
            'no_seri' => $this->no_seri,
            'kondisi' => $this->kondisi,
            'tanggal_pengadaan' => $this->tanggal,
            'danainventory_id' => $this->sumber_dana,
            'sumber_perolehan' => $this->sumber_perolehan,
            'harga_perolehan' => $this->harga_perolehan,
            'jumlah' => $this->jumlah,
            'satuan' => $this->satuan,
            'user_id' => 1
        ]);
        return redirect('sarpras/inventory')->with($this->alert('success', "Data Berhasil Ditambahkan", ['position' => 'center']));
    }
}
