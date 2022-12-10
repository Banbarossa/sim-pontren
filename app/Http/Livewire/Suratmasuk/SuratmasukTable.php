<?php

namespace App\Http\Livewire\Suratmasuk;

use App\Models\SuratMasuk;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class SuratmasukTable extends Component
{

    public $listeners = [
        'suratmasukupdate' => 'render',
        'confirmed' => 'destroy'
    ];
    use LivewireAlert;

    public $surat_masukId;

    public function render()
    {
        $data = SuratMasuk::all();
        return view('livewire.suratmasuk.suratmasuk-table', ['data' => $data]);
    }

    public function confirm($id)
    {
        $this->surat_masukId = $id;
        $this->alert('question', 'Yakin untuk menghapus?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Ya',
            'onConfirmed'       => 'confirmed',
            'showCancelButton'  => true,
            'cancelButtonText'  => 'tidak',
            'position'          => 'center'
        ]);
    }

    public function destroy()
    {
        SuratMasuk::where('id', $this->surat_masukId)->delete();
        $this->alert('success', 'Data berhasil dihapus', ['position' => 'center']);
        $this->emit('suratmasukupdate');
    }
}
