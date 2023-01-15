<?php

namespace App\Http\Livewire\Inventory\Maintenance;

use App\Models\InventoryMantenance;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Approved extends Component
{
    public $catatan;
    public $maintenance_id;
    use LivewireAlert;

    public function render()
    {
        return view('livewire.inventory.maintenance.approved');
    }

    public function update()
    {
        InventoryMantenance::where('id', $this->maintenance_id)->update([
            'approval' => 1,
            "catatan_approval" => $this->catatan,
            'approved_oleh' => Auth()->user()->name,
            'status_periksa' => 2
        ]);
        $this->alert('success', "proses Aprroval success");
    }
}
