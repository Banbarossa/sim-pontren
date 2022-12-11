<?php

namespace App\Http\Livewire\Gedung;

use Livewire\Component;
use App\Models\Gedung;
use Livewire\WithPagination;

class GedungTable extends Component
{
    public $listeners = ['gedungupdate' => 'render'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $gedung = Gedung::latest()->paginate(20);
        return view('livewire.gedung.gedung-table', ['data' => $gedung]);
    }

    public function view($id)
    {
        $gedung = Gedung::find($id);
        dd($gedung);
    }
}
