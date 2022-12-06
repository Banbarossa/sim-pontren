<?php

namespace App\Http\Livewire\Suratmasuk\Dayah;

use Livewire\Component;

class Master extends Component
{
    public function render()
    {
        return view('livewire.suratmasuk.dayah.master')
            ->extends('layouts.template')
            ->section('content');
    }
}
