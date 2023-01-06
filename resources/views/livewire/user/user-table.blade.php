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
                    <td><button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEdit" aria-controls="offcanvasEdit">+ Edit</button></td>
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
        {{ $user->name }}
        {{-- <livewire:user.add-user/> --}}
    </div>
</div>  
{{-- offcanvas add user end --}}
        
</div>
