<?php

namespace App\Http\Livewire\Suratkeluar;

use App\Models\SuratKeluar;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class SuratkeluarUpdate extends Component
{
    public $surat_keluarId;
    public $kode_surat, $tanggal, $tujuan, $isi_ringkas, $image;

    protected $listeners = ['tampilsurat'];
    use LivewireAlert;
    use WithFileUploads;

    protected $rules = [
        'tanggal'       => 'required',
        'tujuan'        => 'required|min:4|max:255',
        // 'image'         => 'max:2*1024|mimes:jpg,png,pdf,xlsx,docx'
    ];

    public function tampilsurat($id)
    {
        $surat = SuratKeluar::find($id);
        $this->kode_surat  =   $surat->kode_surat;
        $this->tanggal  =   $surat->tanggal;
        $this->tujuan  =   $surat->tujuan;
        $this->isi_ringkas  =   $surat->isi_ringkas;
        $this->image  =   $surat->image;
        $this->surat_keluarId   = $id;
    }

    public function update()
    {
        $surat = SuratKeluar::where('id', $this->surat_keluarId)->first();

        if ($this->image == $surat->image) {
            $imagename = $surat->image;
        } else {
            $imagePath = public_path('storage/' . $surat->image);
            File::delete($imagePath);
            $imagename = $this->image->store('suratkeluar', 'public');
        }


        $surat->update([
            'tanggal'       => $this->tanggal,
            'tujuan'        => ucWords($this->tujuan),
            'isi_ringkas'   => ucFirst($this->isi_ringkas),
            'image'         => $imagename
        ]);
        $this->resetform();
        $this->alert('success', 'data berhasil diubah', [
            'position' => 'center'
        ]);
        $this->emit('suratkeluarAdded');
    }

    public function resetform()
    {
        $this->kode_surat = "";
        $this->tanggal = "";
        $this->tujuan = "";
        $this->isi_ringkas = "";
    }






    public function render()
    {
        return view('livewire.suratkeluar.suratkeluar-update');
    }
}
