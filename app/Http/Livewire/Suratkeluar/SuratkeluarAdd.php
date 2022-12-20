<?php

namespace App\Http\Livewire\Suratkeluar;

use App\Models\SuratKeluar;
use Livewire\Component;
use illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class SuratkeluarAdd extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $tanggal, $tujuan, $isi_ringkas, $image, $generateDate, $generateId;
    public $kode_surat = '';
    protected $listeners = ['suratkeluarAdded' => 'mount'];

    protected $rules = [
        'tanggal'       => 'required',
        'tujuan'        => 'required|min:4|max:255',
        // 'image'         => 'max:2*1024|mimes:jpg,png,pdf,xlsx,docx'
    ];

    public function mount()
    {
    }

    public function updated($field)
    {
        $lastrow = SuratKeluar::orderBy('id', 'desc')->first();
        if ($lastrow) {
            $this->generateId = str_pad($lastrow->id + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $this->generateId = str_pad(1, 3, '0', STR_PAD_LEFT);
        }

        $generateDate = explode('-', $this->tanggal);
        if ($this->tanggal) {
            $this->kode_surat = $this->generateId . '/AR/' . $generateDate[1] . '/' . $generateDate[0];
        } else {
            $this->kode_surat = $this->generateId;
        }
    }

    public function store()
    {
        if ($this->image) {
            $imagename = $this->image->store('suratkeluar', 'public');
        } else {
            $imagename = '';
        }
        $kode_unik = str::random(30);


        SuratKeluar::create([
            'kode_unik'     => $kode_unik,
            'kode_surat'    => $this->kode_surat,
            'tanggal'       => $this->tanggal,
            'tujuan'        => ucWords($this->tujuan),
            'isi_ringkas'   => ucFirst($this->isi_ringkas),
            'image'         => $imagename
        ]);
        $this->resetform();
        $this->image = null;
        $this->generateId++;
        $this->alert('success', 'data berhasil ditambahkan', [
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
        return view('livewire.suratkeluar.suratkeluar-add');
    }
}
