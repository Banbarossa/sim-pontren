<?php

namespace App\Http\Livewire\Inventory\Manager;

use App\Http\Livewire\Inventory\InventorymantenanceAdd;
use App\Models\InventoryMantenance;
use Livewire\Component;

class InventorymantenanceTable extends Component
{
    public function render()
    {
        $data = InventoryMantenance::with('Inventory')->get();
        return view('livewire.inventory.manager.inventorymantenance-table', ['data' => $data]);
    }
}
