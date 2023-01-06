<div>

    <form action="" method="post" wire:submit.prevent="store">
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" wire:model="nama">
            @error('nama')
            <span class="invalid-feedback">
                {{ $message }}
            </span>
            @enderror
        </div>
        {{-- <input type="text" wire:model="sdm_id" name="" id=""> --}}
        <div class="mb-3">
            <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
            <select class="form-control @error('jenjang_pendidikan') is-invalid @enderror" name="jenjang_pendidikan" id="jenjang_pendidikan" wire:model="jenjang_pendidikan">
                <option value=""  >Pilih Jenjang Pendidikan</option>
                <option value="Belum Sekolah">Belum Sekolah</option>
                <option value="SD Sederajat">SD Sederajat</option>
                <option value="SMP Sederajat">SMP Sederajat</option>
                <option value="SMA Sederajat">SMA Sederajat</option>
                <option value="Sarjana">Sarjana</option>
            </select>
            @error('jenjang_pendidikan')
            <span class="invalid-feedback">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" wire:model="tanggal_lahir">
            @error('tanggal_lahir')
            <span class="invalid-feedback">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="status">Status</label>
            <select  class="form-control @error('status') is-invalid @enderror" name="status" id="status" wire:model="status">
                <option value="">Pilih Status</option>
                <option value="Istri/Suami">Istri/Suami</option>
                <option value="Anak Kandung">Anak Kandung</option>
                <option value="Anak Tiri">Anak Tiri</option>
                <option value="Anak angkat">Anak angkat</option>
            </select>
            @error('status')
            <span class="invalid-feedback">
                {{ $message }}
            </span>
            @enderror
        </div>


        <button type="submit" class="btn btn-secondary mt-3">Submit</button>
        
    </form>
</div>
