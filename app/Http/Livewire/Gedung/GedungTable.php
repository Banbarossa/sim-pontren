<?php

namespace App\Http\Livewire\Gedung;

use Livewire\Component;
use App\Models\Gedung;

class GedungTable extends Component
{
    public $listeners = ['gedungupdate' => 'render'];

    public function render()
    {
        $gedung = Gedung::all();
        // dd($gedung);
        return view('livewire.gedung.gedung-table', ['data' => $gedung]);
    }

    public function view($id)
    {
        $gedung = Gedung::find($id);
        dd($gedung);
    }
}
