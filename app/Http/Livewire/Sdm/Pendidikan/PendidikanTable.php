<?php

namespace App\Http\Livewire\Sdm\Pendidikan;

use App\Models\PendidikanSdm;
use Livewire\Component;

class PendidikanTable extends Component
{

    public $data;


    protected $listeners = [
        'addPendidikanSdm' => 'render'
    ];

    public function mount()
    {
        $this->sdm_id = $this->data->id;
    }

    public function render()
    {

        $pendidikanSdm = PendidikanSdm::where('sdm_id', $this->data['id'])->get();


        return view('livewire.sdm.pendidikan.pendidikan-table', ['pendidikanSdm' => $pendidikanSdm]);
    }
}
