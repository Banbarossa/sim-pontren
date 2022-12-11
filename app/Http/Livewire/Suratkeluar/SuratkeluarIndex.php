<?php

namespace App\Http\Livewire\Suratkeluar;

use App\Models\SuratKeluar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SuratkeluarIndex extends Component
{
    public $search;
    protected $queryString = ['search'];
    protected $listeners = [
        'suratkeluarAdded' => 'render',
        'confirmed' => 'destroy'
    ];

    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    public $surat_keluarId;


    public function confirm($id)
    {
        $this->surat_keluarId = $id;
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
        $delete = SuratKeluar::where('id', $this->surat_keluarId)->first();
        $image_path = public_path('storage/' . $delete->image);
        // File::delete($image_path);

        if (File::exists($image_path)) {
            //File::delete($image_path);
            File::delete($image_path);
        }

        SuratKeluar::where('id', $delete->id)->delete();
        $this->alert('success', 'Data berhasil dihapus', [
            'position' => 'center'
        ]);
    }


    public function render()
    {
        return view('livewire.suratkeluar.suratkeluar-index', [
            'surat' => SuratKeluar::where('tujuan', 'like', '%' . $this->search . '%')
                ->orWhere('kode_surat', 'like', '%' . $this->search . '%')
                ->orWhere('isi_ringkas', 'like', '%' . $this->search . '%')
                ->latest()->paginate(20),
        ]);
    }
}
