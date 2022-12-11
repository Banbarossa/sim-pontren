<?php

namespace App\Http\Livewire\Suratmasuk;

use App\Models\SuratMasuk;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class SuratmasukEdit extends Component
{
    use LivewireAlert;
    public $listeners = ['editsuratmasuk'];
    public $suratmasuk_id, $pengirim, $nomor_surat, $tanggal, $isi_ringkas;

    protected $rules = [
        'pengirim' => 'required',
        'nomor_surat' => 'required',
        'tanggal' => 'required',
    ];

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
        // $surat = SuratMasuk::where('id', $this->suratmasuk_id)->first();
        $this->validate();
        SuratMasuk::where('id', $this->suratmasuk_id)->update([
            'pengirim' => ucWords($this->pengirim),
            'nomor_surat' => $this->nomor_surat,
            'tanggal' => $this->tanggal,
            'isi_ringkas' => ucFirst($this->isi_ringkas),
        ]);

        $this->alert('success', 'data berhasil di perbaharui', [
            'position' => 'center'
        ]);
        $this->emit('suratmasukupdate');
    }
}
