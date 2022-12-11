<?php

namespace App\Http\Livewire\Suratmasuk;

use App\Models\SuratMasuk;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class SuratmasukTable extends Component
{

    public $listeners = [
        'suratmasukupdate' => 'render',
        'confirmed' => 'destroy'
    ];
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $surat_masukId, $search;



    public function updatingSearch(): void
    {
        $this->gotoPage(1);
    }

    public function render()
    {

        $data = SuratMasuk::where('pengirim', 'like', '%' . $this->search . '%')
            ->orWhere('isi_ringkas', 'like', '%' . $this->search . '%')
            ->paginate(20);
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
