<?php

namespace App\Http\Livewire\Gedung;

use Livewire\Component;
use App\Models\Ruang;

class RuangTable extends Component
{
    public $gedung_id;
    protected $listeners = ['ruangupdate' => 'render'];

    public function mount($gedung_id)
    {
        $this->gedung_id = $gedung_id;
    }

    public function render()
    {
        $ruang = Ruang::where('gedung_id', $this->gedung_id)->paginate(10);
        return view('livewire.gedung.ruang-table', ['ruang' => $ruang]);
    }
}
