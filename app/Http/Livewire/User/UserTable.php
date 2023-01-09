<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class UserTable extends Component
{

    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = "bootstrap";
    public $search = '';
    public $sortField = 'name';
    public $sortAsc = true;
    public $perpage = 10;
    public $userId, $name, $email, $role, $password = '';
    protected $listeners = ['userUpdated' => 'render', 'editUser'];



    public function editUser($id)
    {
        $user = User::where('id', $id)->first();
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->role;
    }

    public function update()
    {
        $this->validate(
            [
                'name' => 'required',
                'email' => 'email|required',
                'role' => 'required',
            ]
        );
        if ($this->password != '') {
            $this->validate(['password' => 'min:8']);
        }

        $user = User::where('id', $this->userId)->first();

        $user->name = $this->name;
        $user->email = $this->email;
        $user->role = $this->role;

        if ($this->password != '') {
            $user->password = Hash::make($this->password);
        } else {
            $user->password;
        }

        $user->save();
        $this->alert('success', 'Data berhasil diubah', [
            'position' => 'center'
        ]);
        $this->emit('userUpdated');
    }


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
