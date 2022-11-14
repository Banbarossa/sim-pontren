<?php

namespace App\Http\Livewire\Sdm;

use App\Models\KeluargaSdm;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class KeluargaAdd extends Component
{
    public $nama, $sdm_id, $jenjang_pendidikan, $tanggal_lahir, $status;
    public $data;

    protected $rules = [
        'nama' => 'required|min:3',
        'status' => 'required',
    ];
    use LivewireAlert;


    public function mount()
    {
        $this->sdm_id = $this->data['id'];
    }

    public function render()
    {
        return view('livewire.sdm.keluarga-add');
    }


    public function store()
    {
        $this->validate();
        KeluargaSdm::create([
            'sdm_id' => $this->sdm_id,
            'nama' => $this->nama,
            'jenjang_pendidikan' => $this->jenjang_pendidikan,
            'tanggal_lahir' => $this->tanggal_lahir,
            'status' => $this->status,
        ]);
        $this->alert('success', 'Data Berhasil ditambahkkan', [
            'position' => 'center'
        ]);
        $this->emit('tambahkeluarga');
        $this->resetForm();
    }


    public function resetForm()
    {
        $this->nama = "";
        $this->jenjang_pendidikan = "";
        $this->tanggal_lahir = "";
        $this->status = "";
    }
}
