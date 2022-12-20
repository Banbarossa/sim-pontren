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
                    <x-forms.input name="nama" label="Nama" model="nama" id="nama" placeholder="Nama">
                    </x-forms.input>
                </div>
                <div class="mb-3">
                    <x-forms.input type="date" model="tanggal" name="tanggal" label="Tanggal Pengadaan" id="tanggal" placeholder="Tanggal Pengadaan">
                    </x-forms.input>
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
                    <x-forms.input name="merek" model="merek" label="Merek" id="merek" placeholder="Merek">
                    </x-forms.input>
                </div>
                <div class="mb-3">
                    <x-forms.input name="no_seri" model="no_seri" label="Nomor Seri Barang" id="no_seri" placeholder="Nomor Seri Barang">
                    </x-forms.input>
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
                <div class=" mb-3">
                    <x-forms.input type="number" name="harga_perolehan" model="harga_perolehan" label="Harga Perolehan" id="harga_perolehan" placeholder="Harga Perolehan" >
                    </x-forms.input>
                </div>
                
            </div>
            <div class=" col-md-6 col-lg-4">
                <div class=" mb-3">
                    <x-forms.input name="sumber_perolehan" model="sumber_perolehan" label="Sumber Perolehan" id="sumber_perolehan" placeholder="Sumber Perolehan">
                    </x-forms.input>
                </div>
                <div class="mb-3">
                    <x-forms.input type="number" model="jumlah" name="jumlah" label="Jumlah" id="jumlah" placeholder="Jumlah" >
                    </x-forms.input>
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
