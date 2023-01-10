<div>
    <form action="" wire:submit.prevent="store">
     
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
