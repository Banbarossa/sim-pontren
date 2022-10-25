<?php

namespace App\Http\Livewire\Rapat;

use Livewire\Component;

class RapatAdd extends Component
{
    public function render()
    {
        return view('livewire.rapat.rapat-add')
            ->extends('layouts.template')
            ->section('content');
    }
}
