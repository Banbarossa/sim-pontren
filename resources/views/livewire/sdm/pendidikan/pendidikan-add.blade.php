<div>
    <form action="" wire:submit.prevent="store">
           {{-- <x-forms.input type="select" name="jenjang" id="jenjang" label="Jenjang" model="jenjang"/> --}}

           <div class="form-group mb-3">
                <label for="jenjang">Jenjang</label>
                <select class="form-select @error('jenjang') is_invalid @enderror" name="jenjang" id="jenjang" wire:model="jenjang" aria-label="Default select example">
                    <option selected>Pilih Jenjang</option>
                    @foreach ($pendidikan as $item)
                    <option value="{{ $item }}">{{ $item }}</option>
                        
                    @endforeach

                </select>
                @error('jenjang')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
           
           <div class="mb-3">
                <label for="nama_lembaga" class="form-label">Nama Lembaga</label>
                <input type="text" class="form-control @error('nama_lembaga') is-invalid @enderror"  wire:model="nama_lembaga" id="nama_lembaga" autofocus>
                @error('nama_lembaga')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
           
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror"  wire:model="jurusan" id="jurusan" autofocus>
                @error('jurusan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
         
            <div class="mb-3">
                <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                <input type="number" class="form-control @error('tahun_masuk') is-invalid @enderror"  wire:model="tahun_masuk" id="tahun_masuk" autofocus>
                @error('tahun_masuk')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

           
            <div class="mb-3">
                <label for="lulus" class="form-label">Lulus</label>
                <input type="number" class="form-control @error('lulus') is-invalid @enderror"  wire:model="lulus" id="lulus" autofocus>
                @error('lulus')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
           

            <div class="mb-3">
                <label for="ipk" class="form-label">IPK</label>
                <input type="number" step=0.01 class="form-control @error('ipk') is-invalid @enderror"  wire:model="ipk" id="ipk" autofocus>
                @error('ipk')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>



        <button type="submit" class="btn btn-secondary">Submit</button>
    </form>
</div>
