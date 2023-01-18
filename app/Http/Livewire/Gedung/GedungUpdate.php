<?php

namespace App\Http\Livewire\Gedung;

use App\Models\Gedung;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class GedungUpdate extends Component
{
    use LivewireAlert;
    public $nama, $jumlah_lantai, $kepemilikan = "Milik Sendiri", $kerusakan = "Baik", $tahun_dibangun, $luas;
    public $gedungId;

    protected $listeners = ['tampilgedung'];
    protected $rules = [
        'nama' => 'required',
        'jumlah_lantai' => 'required',
        'kepemilikan' => 'required',
        'kerusakan' => 'required',
        'tahun_dibangun' => 'required',
        'luas' => 'required',
    ];


    public function tampilgedung($id)
    {


        $gedung = Gedung::where('id', $id)->first();
        $this->gedungId = $id;
        $this->nama = $gedung->nama;
        $this->jumlah_lantai = $gedung->jumlah_lantai;
        $this->kepemilikan = $gedung->kepemilikan;
        $this->kerusakan = $gedung->kerusakan;
        $this->tahun_dibangun = $gedung->tahun_dibangun;
        $this->luas = $gedung->luas;
    }

    public function render()
    {
        return view('livewire.gedung.gedung-update');
    }

    public function update()
    {
        $this->validate();
        Gedung::where('id', $this->gedungId)->update([
            'nama' => $this->nama,
            'jumlah_lantai' => $this->jumlah_lantai,
            'kepemilikan' => $this->kepemilikan,
            'kerusakan' => $this->kerusakan,
            'tahun_dibangun' => $this->tahun_dibangun,
            'luas' => $this->luas,
        ]);
        $this->alert('success', 'Data Berhasil diubah', [
            'position' => 'center'
        ]);
        $this->emit('gedungupdate');
    }
}
