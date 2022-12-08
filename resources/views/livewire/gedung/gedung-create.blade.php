<div>
    <form wire:submit.prevent="store">
        <h4 class="border-bottom text-gray mb-3">Tambah data</h4>
        <x-forms.input type="text" model="nama" label="Nama" name="nama"/>
        <x-forms.input type="number" model="jumlah_lantai"  label="Jumlah lantai" name="jumlah_lantai"/> 
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
        <x-forms.input type="number" model="tahun_dibangun" label="Tahun dibangun" name="tahun_dibangun"/>
        <x-forms.input type="number" model="luas" label="Luas" name="luas"/>
        
        
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
