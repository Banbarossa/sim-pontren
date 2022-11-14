<?php

namespace App\Http\Livewire\Sdm;

use App\Models\Sdm;
use Livewire\Component;
use Livewire\WithPagination;

class SdmTable extends Component
{
    public $search;
    use WithPagination;
    protected $paginationTheme = "bootstrap";


    public function render()
    {
        $data = Sdm::where('nama', 'like', '%' . $this->search . '%')->orderBy('nama', 'asc')->paginate(5);

        return view('livewire.sdm.sdm-table', [
            'data' => $data,
        ]);
    }
}
