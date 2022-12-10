<?php

namespace App\Http\Livewire\Gedung;

use Livewire\Component;
use App\Models\Ruang;
use GrahamCampbell\ResultType\Success;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class RuangCreate extends Component
{
    public $nama, $gedung_id, $kondisi;
    public $success = false;
    use LivewireAlert;

    protected $rules = [
        'nama' => 'required|min:4'

    ];

    public function mount($gedung_id)
    {
        $this->gedung_id = $gedung_id;
    }

    public function render()
    {
        return view('livewire.gedung.ruang-create');
    }



    public function store()
    {
        $this->validate();
        $success = Ruang::create([
            'nama' => ucWords($this->nama),
            'kondisi' => $this->kondisi,
            'gedung_id' => $this->gedung_id
        ]);
        $this->success = true;
        $this->alert('success', 'Data Berhasil Ditambahkan', [
            'position' => 'center'
        ]);
        $this->emit('ruangupdate');
    }
}
