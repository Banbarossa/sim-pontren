<?php

namespace App\Http\Livewire\Inventory;

use App\Models\InventoryMantenance;
use Livewire\Component;

class InventorymantenanceTable extends Component
{

    public $listeners = ['inventorymantenanceupdate' => 'render'];
    public $inventory_id;


    public function render()
    {
        $data = InventoryMantenance::where('inventory_id', $this->inventory_id)->get();
        return view('livewire.inventory.inventorymantenance-table', ['data' => $data]);
    }
}
