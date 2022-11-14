<?php

namespace App\Http\Livewire\Sdm;

use App\Models\KeluargaSdm;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class KeluargaTable extends Component
{
    use LivewireAlert;
    public $data, $keluarga_id;
    protected $listeners = [
        'tambahkeluarga' => 'render',
        'destroy'
    ];


    public function confirm($id)
    {
        $this->keluarga_id = $id;
        $this->alert('question', 'Apakah Anda yakin Untuk Menghapus', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Hapus',
            'onConfirmed'     => 'destroy',
            'showCancelButton'     => true,
            'cancelButtonText'     => 'cancel',
            'position' => 'center',
        ]);
    }

    public function render()
    {
        $keluarga = KeluargaSdm::where('sdm_id', $this->data['id'])->get();

        return view('livewire.sdm.keluarga-table', ['keluarga' => $keluarga]);
    }

    public function destroy()
    {
        $data = KeluargaSdm::find($this->keluarga_id);
        $data->delete();
        $this->alert('success', 'Data berhasil dihapus', [
            'position' => 'center'
        ]);
    }
}
