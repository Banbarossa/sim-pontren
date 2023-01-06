<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserTable extends Component
{

    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search = '';
    public $sortField = 'name';
    public $sortAsc = true;
    public $perpage = 10;
    protected $listeners = ['userUpdated' => 'render'];



    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }



    public function render()
    {
        $users = User::when($this->search, function ($query) {
            return $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->orWhere('role', 'like', '%' . $this->search . '%');
        })
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perpage);

        return view('livewire.user.user-table', compact('users'));
    }
}
