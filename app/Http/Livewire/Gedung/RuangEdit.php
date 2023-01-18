<?php

namespace App\Http\Livewire\Gedung;

use App\Models\Ruang;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class RuangEdit extends Component
{
    use LivewireAlert;

    protected $listeners = ['tampilruang'];
    public $ruangId, $nama, $gedung_id, $kondisi;
    protected $rules = [
        'nama' => 'required|min:4'

    ];

    public function tampilruang($id)
    {
        $ruang = Ruang::where('id', $id)->first();
        $this->ruangId = $id;
        $this->nama = $ruang->nama;
        $this->kondisi = $ruang->kondisi;
    }

    public function render()
    {
        return view('livewire.gedung.ruang-edit');
    }

    public function update()
    {
        $this->validate();

        Ruang::where('id', $this->ruangId)->update([
            'nama' => ucWords($this->nama),
            'kondisi' => $this->kondisi,

        ]);
        $this->alert('success', 'Data Berhasil diubah', [
            'position' => 'center'
        ]);
        $this->emit('ruangupdate');
    }
}
