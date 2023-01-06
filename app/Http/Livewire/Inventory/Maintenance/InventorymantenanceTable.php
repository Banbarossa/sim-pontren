<?php

namespace App\Http\Livewire\Inventory\Maintenance;

use Livewire\Component;
use App\Models\InventoryMantenance;

class InventorymantenanceTable extends Component
{
    public function render()
    {
        $data = InventoryMantenance::latest()->with('Inventory')->paginate(10);
        return view('livewire.inventory.maintenance.inventorymantenance-table', ['data' => $data]);
    }
}
