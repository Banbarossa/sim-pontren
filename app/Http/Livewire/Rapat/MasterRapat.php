<?php

namespace App\Http\Livewire\Rapat;

use Livewire\Component;

class MasterRapat extends Component
{
    public function render()
    {
        return view('livewire.rapat.master-rapat')
            ->extends('layouts.template')
            ->section('content');
    }
}
