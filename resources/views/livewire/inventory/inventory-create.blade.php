<div>
    <form wire:submit.prevent="store" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class=" col-md-6 col-lg-4">
                <div class="mb-3">
                    <label for="kode">Kode Inventaris</label>
                    <input type="text" wire:model="kode" class="form-control" disabled data-bs-toggle="tooltip"
                    data-bs-placement="top" title="kode - sumber dana - tahun">
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror"  wire:model="nama" id="nama" autofocus>
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Pengadaan</label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror"  wire:model="tanggal" id="tanggal" autofocus>
                    @error('tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Ruang">Ruang</label>
                    <select name="ruang" id="ruang" wire:model="ruang" class="form-select @error('ruang') is-invalid @enderror">
                        <option value="">silahkan Pilih ruang penempatan</option>
                        @foreach ($ruangan as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    @error('ruang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sumber_dana">Sumber Dana</label>
                    <select name="sumber_dana" wire:model="sumber_dana" id="sumber_dana" class="form-select @error('sumber_dana') is-invalid @enderror">
                        <option value="">silahkan Pilih sumber dana</option>
                        @foreach ($dana as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            
                        @endforeach
                        
                    </select>
                    @error('sumber_dana')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class=" col-md-6 col-lg-4">
                <div class="mb-3">
                    <label for="inventory_category">Kategori</label>
                    <select name="inventory_category" wire:model="inventory_category" id="inventory_category" class="form-select @error('inventory_category') is-invalid @enderror">
                        <option value="">Silahkan Pilih Kategori</option>
                        @foreach ($data as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    @error('inventory_category')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror               
                </div>
                

                <div class="mb-3">
                    <label for="merek" class="form-label">Merek</label>
                    <input type="text" class="form-control @error('merek') is-invalid @enderror"  wire:model="merek" id="merek" autofocus>
                    @error('merek')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

               
                <div class="mb-3">
                    <label for="no_seri" class="form-label">Nomor Seri</label>
                    <input type="text" class="form-control @error('no_seri') is-invalid @enderror"  wire:model="no_seri" id="no_seri" autofocus>
                    @error('no_seri')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kondisi">Kondisi</label>
                    <select name="kondisi" id="kondisi" wire:model="kondisi" class="form-select @error('kondisi') is-invalid @enderror">
                        <option value="Baik">Baik</option>
                        <option value="Rusak Sedang">Rusak Sedang</option>
                        <option value="Rusak Berat">Rusak Berat</option>
                    </select>
                    @error('kondisi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    
                </div>
                
                
                <div class="mb-3">
                    <label for="harga_perolehan" class="form-label">Harga perolehan</label>
                    <input type="number" class="form-control @error('harga_perolehan') is-invalid @enderror"  wire:model="harga_perolehan" id="harga_perolehan" autofocus>
                    @error('harga_perolehan')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>



            </div>
            <div class=" col-md-6 col-lg-4">
                

                <div class="mb-3">
                    <label for="sumber_perolehan" class="form-label">sumber_perolehan</label>
                    <input type="text" class="form-control @error('sumber_perolehan') is-invalid @enderror"  wire:model="sumber_perolehan" id="sumber_perolehan" autofocus>
                    @error('sumber_perolehan')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>



                <div class="mb-3">
                    <label for="jumlah" class="form-label">jumlah</label>
                    <input type="number" class="form-control @error('jumlah') is-invalid @enderror"  wire:model="jumlah" id="jumlah" autofocus>
                    @error('jumlah')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="satuan">Satuan</label>
                    <select name="satuan" id="satuan" wire:model="satuan" class="form-select @error('satuan') is-invalid @enderror">
                        <option value="Buah">Buah</option>
                        <option value="Unit">Unit</option>
                        <option value="Set">Sett</option>
                    </select>
                    @error('satuan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
               
                <div class="mt-4 d-flex align-items-end justify-content-end">
                    <button type="submit" class="btn btn-secondary px-3">Submit</button>
                </div>
            </div>

        </div>
    </form>
</div>
