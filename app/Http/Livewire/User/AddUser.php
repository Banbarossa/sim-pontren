<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddUser extends Component
{
    use LivewireAlert;
    public $name, $email, $role = 'user', $password;

    protected $rules = [
        'name' => 'required',
        'email' => 'email|required|',
        'role' => 'required',
        'password' => 'required|min:8'
    ];

    public function render()
    {
        return view('livewire.user.add-user');
    }

    public function store()
    {
        $this->validate();
        User::Create([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role,
            'password' => $this->password,
        ]);
        $this->alert('success', 'Data Berhasil Ditambahkan', [
            'position' => 'center'
        ]);
        $this->emit('userUpdated');
    }
}
