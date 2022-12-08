<?php

namespace App\Http\Livewire\Gedung;

use Livewire\Component;
use App\Models\Gedung;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class GedungCreate extends Component
{

    public $nama, $jumlah_lantai, $kepemilikan = "Milik Sendiri", $kerusakan = "Baik", $tahun_dibangun, $luas;
    use LivewireAlert;

    protected $rules = [
        'nama' => 'required',
        'jumlah_lantai' => 'required',
        'kepemilikan' => 'required',
        'kerusakan' => 'required',
        'tahun_dibangun' => 'required',
        'luas' => 'required',
    ];

    public function render()
    {
        return view('livewire.gedung.gedung-create');
    }




    public function store()
    {
        $this->validate();

        Gedung::create([
            'nama' => $this->nama,
            'jumlah_lantai' => $this->jumlah_lantai,
            'kepemilikan' => $this->kepemilikan,
            'kerusakan' => $this->kerusakan,
            'tahun_dibangun' => $this->tahun_dibangun,
            'luas' => $this->luas,
        ]);

        $this->alert('success', 'Data Berhasil ditambahkan', [
            'position' => 'center'
        ]);
        $this->emit('gedungupdate');
    }
}
