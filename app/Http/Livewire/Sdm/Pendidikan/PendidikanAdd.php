<?php

namespace App\Http\Livewire\Sdm\Pendidikan;

use \App\Models\PendidikanSdm;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;


class PendidikanAdd extends Component
{
    public $jenjang,
        $nama_lembaga,
        $jurusan,
        $tahun_masuk,
        $lulus,
        $ipk,
        $data,
        $sdm_id;
    use LivewireAlert;

    public function mount()
    {
        $this->sdm_id = $this->data->id;
    }

    public function render()
    {
        $pendidikan = ['S3', 'S2', 'S1', 'SMA'];
        return view('livewire.sdm.pendidikan.pendidikan-add', ['pendidikan' => $pendidikan]);
    }

    public function store()
    {
        $this->validate([
            'jenjang' => 'required',
            'nama_lembaga' => 'required|min:4',
            'jurusan' => '',
        ]);

        if (strlen($this->tahun_masuk) > 0) {
            $this->validate([
                'tahun_masuk' => 'digits:4|numeric',
            ]);
        };
        if (strlen($this->lulus) > 0) {
            $this->validate([
                'lulus' => 'digits:4|numeric',
            ]);
        };
        if (strlen($this->ipk) > 0) {
            $this->validate([
                'ipk' => 'numeric',
            ]);
        };

        PendidikanSdm::create([
            'sdm_id' => $this->sdm_id,
            'jenjang' => $this->jenjang,
            'nama_lembaga' => $this->nama_lembaga,
            'jurusan' => $this->jurusan,
            'tahun_masuk' => $this->tahun_masuk,
            'lulus' => $this->lulus,
            'ipk' => $this->ipk,
        ]);

        $this->alert('success', 'Data Berhasil ditambahkan', [
            'position' => 'center'
        ]);
        $this->emit('addPendidikanSdm');
    }
}
