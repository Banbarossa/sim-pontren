<?php

namespace App\Http\Livewire\Sdm\Keluarga;

use App\Models\KeluargaSdm;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class KeluargaEdit extends Component
{
    use LivewireAlert;
    protected $listeners = ['keluargaedit' => 'keluargaedit'];
    public $keluarga_id, $nama, $sdm_id, $jenjang_pendidikan, $tanggal_lahir, $status;
    protected $rules = [
        'nama' => 'required|min:3',
        'status' => 'required',
    ];


    public function keluargaedit($id)
    {
        $data = KeluargaSdm::Find($id);
        $this->keluarga_id = $data->id;
        $this->nama = $data->nama;
        $this->jenjang_pendidikan = $data->jenjang_pendidikan;
        $this->tanggal_lahir = $data->tanggal_lahir;
        $this->status = $data->status;
    }

    public function render()
    {
        return view('livewire.sdm.keluarga.keluarga-edit');
    }

    public function update()
    {
        $this->validate();

        $data = KeluargaSdm::find($this->keluarga_id);
        $data->update([
            'nama' => $this->nama,
            'jenjang_pendidikan' => $this->jenjang_pendidikan,
            'tanggal_lahir' => $this->tanggal_lahir,
            'status' => $this->status,
        ]);
        $this->alert('success', 'Data Berhasil diubah', ['position' => 'center']);
        $this->emit('tambahkeluarga');
    }
}
