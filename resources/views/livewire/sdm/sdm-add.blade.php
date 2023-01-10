<div>
    <form action="" method="POST" wire:submit.prevent="store" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6 px-4">

                <div class="mb-3">
                    <label for="nama">Nama</label>
                
                    <input type="text" name="Nama" id="nama" class="form-control @error("nama") is-invalid @enderror" 
                    @if ('nama')
                        wire:model="nama"
                    @endif
                    >
                    
                    @error('nama')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                    @enderror
                
                </div>

                

                <div class="mb-3">
                    <label for="nik"> No induk Kependudukkan (N I K)</label>
                
                    <input type="text" name="Nama" id="nik" maxlength="16" class="form-control @error("nik") is-invalid @enderror" 
                    @if ('nik')
                        wire:model="nik"
                    @endif
                    >
                    
                    @error('nik')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                    @enderror
                
                </div>
                
                <div class="mb-3">
                    <label for="tempat_lahir"> Tempat Lahir</label>
                
                    <input type="text" name="Nama" id="tempat_lahir" class="form-control @error("tempat_lahir") is-invalid @enderror" 
                    @if ('tempat_lahir')
                        wire:model="tempat_lahir"
                    @endif
                    >
                    
                    @error('tempat_lahir')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                    @enderror
                
                </div>

                <div class="mb-3">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                
                    <input type="date" name="Nama" id="tanggal_lahir" class="form-control @error("tanggal_lahir") is-invalid @enderror" 
                    @if ('tanggal_lahir')
                        wire:model="tanggal_lahir"
                    @endif
                    >
                    
                    @error('tanggal_lahir')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                    @enderror
                
                </div>


                <div class="mb-3">
                    <label for="" class="mb-2">Jenis Kelamin</label>
                    <div class="d-flex justify content-start">
                        <div class="form-check me-5">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" wire:model="jenis_kelamin" value="Laki Laki">
                            <label class="form-check-label" for="jenis_kelamin1">
                              Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" wire:model="jenis_kelamin" value="Perempuan">
                            <label class="form-check-label" for="jenis_kelamin2">
                              Perempuan  
                            </label>
                        </div>
                    </div>
                    @error('jenis_kelamin')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="mb-2">Status</label>
                    <div class="d-flex justify content-start">
                        <div class="form-check me-5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" wire:model="status" value="menikah">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Menikah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" wire:model="status" value="Belum Menikah">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Belum  
                            </label>
                        </div>
                    </div>
                </div>
                    
                <div class="my-3">
                    <label for="pendidikan_terakhir">Pendidikan terakhir</label>
                    <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-select" wire:model="pendidikan_terakhir">
                        <option value="">Pendidikan Terakhir</option>
                        <option value="Doktoral (S-3)">Doktoral (S-3)</option>
                        <option value="Magister (S-2">Magister (S-2)</option>
                        <option value="Sarjana (S-1)">Sarjana (S-1)</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="pendidikan_terakhir">No Hp</label>
                
                    <input type="no_hp" name="no_hp" id="no_hp" maxlength="16" class="form-control @error("no_hp") is-invalid @enderror" 
                    @if ('no_hp')
                        wire:model="no_hp"
                    @endif
                    >
                    
                    @error('no_hp')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                    @enderror
                
                </div>
                
                <div class="mb-3">
                    <label for="tanggal_masuk">Tanggal Masuk</label>
                
                    <input type="date" name="tanggal_masuk" id="tanggal_masuk" wire:model="tanggal_masuk" class="form-control @error("tanggal_masuk") is-invalid @enderror" 
                    @if ('tanggal_masuk')
                        wire:model="tanggal_masuk"
                    @endif
                    >
                    
                    @error('tanggal_masuk')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                    @enderror
                
                </div>
                
            </div>



            <div class="col-6 px-4">
                <div class="mb-3">
                    <label for="province_id">Provinsi</label>
                    <select name="province_id" id="province_id" name="province_id" wire:model="province_id" class="form-select">
                        <option value="" class="text-muted" style="background-color: rgb(204, 209, 209)">Pilih Provinsi</option>
                        @foreach ($provinces as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option> 
                        @endforeach
                    </select>
                    @error('province_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="regency_id">Kabupaten</label>
                    <select name="regency_id" id="regency_id" name="regency_id" wire:model="regency_id" class="form-select">
                        <option value="" class="text-muted" style="background-color: rgb(204, 209, 209)">Pilih Kabupaten</option>
                        @if (count($regencies) > 0)
                        @foreach ($regencies as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option> 
                        @endforeach
                        @endif
                    </select>
                    @error('regency_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="district_id">Kecamatan</label>
                    <select name="district_id" id="district_id" name="district_id" wire:model="district_id" class="form-select">
                        <option value="" class="text-muted" style="background-color: rgb(204, 209, 209)">Pilih Kecamatan</option>
                        @if (count($districts) > 0)
                        @foreach ($districts as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option> 
                        @endforeach
                        @endif
                    </select>
                    @error('district_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="village_id">Desa</label>
                    <select name="village_id" id="village_id" name="village_id" wire:model="village_id" class="form-select">
                        <option value="" class="text-muted" style="background-color: rgb(204, 209, 209)">Pilih Desa</option>
                        @if (count($villages) > 0)
                        @foreach ($villages as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option> 
                        @endforeach
                        @endif
                    </select>
                    @error('village_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" wire:model="alamat"></textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                @if ($avatar)
                <div class="mb-3">
                    <div wire:loading wire:target="avatar" wire:key="avatar">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <img class="" src="{{ $avatar->temporaryUrl() }}" height="200px" alt="">
                </div>
                @endif
                

                <div class="mb-3">
                    <label for="avatar">Foto</label>
                    <input type="file" class="form-control" id="avatar" wire:model="avatar">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            
        </div>

    </form>

</div>
