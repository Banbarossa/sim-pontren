<?php

namespace App\Http\Livewire\Inventory\Maintenance;

use Livewire\Component;

class Approved extends Component
{
    public $catatan;

    public function render()
    {
        return view('livewire.inventory.maintenance.approved');
    }

    public function update()
    {
        dd($this->catatan);
    }
}
