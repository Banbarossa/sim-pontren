<div>
    <form action="" wire:submit.prevent="store">
        <div class="mb-3">
            <x-forms.input type="text" model="name" name="name" label="Nama" id="name"></x-forms.input>
        </div>
        <div class="mb-3">
            <x-forms.input type="email" model="email" name="email" label="Email" id="email"></x-forms.input>
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
        <div class="mb-5">
            <x-forms.input type="text" model="password" name="password" label="Password" id="password"></x-forms.input>
        </div>
        <div class="">
            <button type="submit" class="btn btn-secondary px-3">Submit</button>
        </div>
    </form>
</div>
