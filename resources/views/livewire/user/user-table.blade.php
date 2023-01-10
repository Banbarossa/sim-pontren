<div>
    <div class="d-flex justify-content-between">
        <div class="col-4 col-md-6 col-lg-8">
            <div class="col-4">
                <select name="perpage" wire:model="perpage" id="perpage" class="form-select">
                    <option value="10">10 Per Page</option>
                    <option value="25">25 Per Page</option>
                    <option value="50">50 Per Page</option>
                </select>
            </div>

        </div>
        <div class="col-8 col-md-6 col-lg-4 mb-3">
            <input type="text" placeholder="Search" wire:model="search" class="form-control">
        </div>
    </div>
    
    
    <table class="table table-invoice">
        <thead>
            <tr>
                <th>No</th>
                <th wire:click.prevent="sortBy('name')">Name</th>
                <th wire:click.prevent="sortBy('email')">Email</th>
                <th wire:click.prevent="sortBy('role')">Role</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $users->firstItem()+$loop->index }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td><button wire:click="$emit('editUser',{{ $user->id }})" class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEdit" aria-controls="offcanvasEdit">Edit</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {{ $users->links() }}
    
{{-- offcanvas add user --}}
<div wire:ignore class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEdit" aria-labelledby="offcanvasEditLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasEditLabel">Tambah Data User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="" wire:submit.prevent="update">
            
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"  wire:model="name" id="name" autofocus>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"  wire:model="email" id="email" autofocus>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="role">Role</label>
                <select name="role" id="role" wire:model="role" class="form-select @error($name) is-invalid @enderror">
                    <option value="admin">Admin</option>
                    <option value="mudir">Mudir</option>
                    <option value="maintenance">Maintenance</option>
                    <option value="user">User</option>
                </select>
                @error('role')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control @error('password') is-invalid @enderror"  wire:model="password" id="password" autofocus>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="">
                <button type="submit" class="btn btn-secondary px-3">Submit</button>
            </div>
        </form>
    </div>
</div>  
{{-- offcanvas add user end --}}
        
</div>
