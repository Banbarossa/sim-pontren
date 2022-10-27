<?php

namespace App\Http\Livewire\Rapat;

use App\Models\Meeting;
use Livewire\Component;
use illuminate\support\Str;
use Jantinnerezo\LivewireAlert;
use Jantinnerezo\LivewireAlert\LivewireAlert as LivewireAlertLivewireAlert;

class RapatAdd extends Component
{
    public $tanggal, $pimpinan, $deskripsi, $kesimpulan, $images, $attachment;
    use LivewireAlertLivewireAlert;


    public function store()
    {

        dd($this->kesimpulan);

        Meeting::create([
            'unik_id'       => Str::random(30),
            'tanggal'       => $this->tanggal,
            'pimpinan'      => $this->pimpinan,
            'deskripsi'     => $this->deskripsi,
            'kesimpulan'    => $this->kesimpulan,
            'images'        => 'aaabbb',
            'attachment'    => 'cabakdaj'
        ]);
        $this->alert('success', 'data berhasil ditambahkan');
        return redirect()->to('/rapat');
    }

    public function render()
    {
        return view('livewire.rapat.rapat-add')
            ->extends('layouts.template')
            ->section('content');
    }
}
