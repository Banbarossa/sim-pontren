<?php

namespace App\Http\Livewire\Suratmasuk;

use App\Models\SuratMasuk;
use Livewire\Component;

class SuratmasukEdit extends Component
{

    public $listeners = ['editsuratmasuk'];
    public $suratmasuk_id, $pengirim, $nomor_surat, $tanggal, $isi_ringkas;

    public function editsuratmasuk($id)
    {
        $suratmasuk = SuratMasuk::where('id', $id)->first();
        $this->suratmasuk_id = $suratmasuk->id;
        $this->pengirim = $suratmasuk->pengirim;
        $this->nomor_surat = $suratmasuk->nomor_surat;
        $this->tanggal = $suratmasuk->tanggal;
        $this->isi_ringkas = $suratmasuk->isi_ringkas;
    }

    public function render()
    {
        return view('livewire.suratmasuk.suratmasuk-edit');
    }
    public function update()
    {
    }
}
