<?php

namespace App\Http\Livewire\Inventory;

use App\Models\InventoryMantenance;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class InventorymantenanceAdd extends Component
{

    public $deskripsi;
    public $inventory_id;
    use LivewireAlert;

    protected $rules = [
        'deskripsi' => 'required'
    ];


    public function render()
    {
        return view('livewire.inventory.inventorymantenance-add');
    }


    public function store()
    {
        $this->validate();
        InventoryMantenance::create([
            'inventory_id' => $this->inventory_id,
            'user_id' => Auth()->user()->id,
            'deskripsi_kerusakan' => $this->deskripsi,

        ]);

        $this->alert('success', 'Data berhasil ditambahkan', [
            'position' => 'center'
        ]);
        $this->emit('inventorymantenanceupdate');
    }
}
