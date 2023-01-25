<?php

namespace App\Http\Livewire\Rapat;

use App\Models\Meeting;
use Livewire\Component;
use Livewire\WithPagination;

class MasterRapat extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search;
    protected $queryString = ['search'];

    public function render()
    {
        $data = Meeting::where('tanggal', 'like', '%' . $this->search . '%')
            ->orwhere('deskripsi', 'like', '%' . $this->search . '%')
            ->orwhere('kesimpulan', 'like', '%' . $this->search . '%')
            ->latest()->paginate(6);
        return view('livewire.rapat.master-rapat', ['data' => $data]);
    }
}
