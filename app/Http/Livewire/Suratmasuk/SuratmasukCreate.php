<?php

namespace App\Http\Livewire\Suratmasuk;

use App\Models\SuratMasuk;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class SuratmasukCreate extends Component
{
    public $pengirim, $nomor_surat, $tanggal, $isi_ringkas;
    use LivewireAlert;

    protected $rules = [
        'pengirim' => 'required',
        'nomor_surat' => 'required',
        'tanggal' => 'required',

    ];

    public function render()
    {
        return view('livewire.suratmasuk.suratmasuk-create');
    }

    public function store()
    {
        $this->validate();

        SuratMasuk::Create([
            'pengirim' => ucwords($this->pengirim),
            'nomor_surat' => $this->nomor_surat,
            'tanggal' => $this->tanggal,
            'isi_ringkas' => ucFirst($this->isi_ringkas),
        ]);
        $this->alert('success', 'data berhasil ditambahkan', [
            'position' => 'center'
        ]);
        $this->emit('suratmasukupdate');
    }
}
