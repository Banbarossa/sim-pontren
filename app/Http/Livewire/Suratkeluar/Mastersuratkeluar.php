<?php

namespace App\Http\Livewire\Suratkeluar;

use Livewire\Component;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Mastersuratkeluar extends Component
{
    public $showUpdate = 0;

    public $listeners = [
        'showForm',
        'cancelsuratkeluar'
    ];


    public function showForm($id)
    {
        $this->showUpdate = 1;
        $this->emit('tampilsurat', $id);
    }

    public function cancelsuratkeluar()
    {
        $this->showUpdate = 0;
    }

    public function render()
    {
        return view('livewire.suratkeluar.mastersuratkeluar')
            ->extends('layouts.template')
            ->section('content');
    }
}
