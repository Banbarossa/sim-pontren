<div>
    <form wire:submit.prevent="store">
        <h4 class="border-bottom text-gray mb-3">Tambah data</h4>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror"  wire:model="nama" id="nama" autofocus>
            @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="jumlah_lantai" class="form-label">Jumlah lantai</label>
            <input type="number" class="form-control @error('jumlah_lantai') is-invalid @enderror"  wire:model="jumlah_lantai" id="jumlah_lantai" autofocus>
            @error('jumlah_lantai')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-grup mb-3">
            <label for="" class="mb-1">Kepemilikan</label>
            <select name="kepemilikan" wire:model="kepemilikan" id="" class="form-select">
                <option value="Milik Sendiri">Milik Sendiri</option>
                <option value="Pinjam">Pinjam</option>
                <option value="Sewa">Sewa</option>
                <option value="Hibah">Hibah</option>
            </select>
         
        </div>
        <div class="form-grup mb-3">
            <label for="" class="mb-1">Kerusakan</label>
            <select name="kerusakan" wire:model="kerusakan" id="" class="form-select">
                <option value="Baik">Baik</option>
                <option value="Rusak Sedang">Rusak Sedang</option>
                <option value="rusak berat">rusak berat</option>
            </select>
           
        </div>
        

        <div class="mb-3">
            <label for="tahun_dibangun" class="form-label">Tahun Dibangun</label>
            <input type="number" class="form-control @error('tahun_dibangun') is-invalid @enderror"  wire:model="tahun_dibangun" id="tahun_dibangun" autofocus>
            @error('tahun_dibangun')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

            
        <div class="mb-3">
            <label for="luas" class="form-label">Luas Bangunan</label>
            <input type="number" class="form-control @error('luas') is-invalid @enderror"  wire:model="luas" id="luas" autofocus>
            @error('luas')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mt-4 d-flex justify-content-end align-items-center">
            <div class="text-small spinner-border me-3" wire:loading wire:target="store" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <button type="submit" class="btn btn-secondary">
                Submit
            </button>
        </div>
    </form>
</div>
