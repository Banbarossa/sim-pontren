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
           <x-forms.input type="text" name="nama_lembaga" id="nama_lembaga" label="Nama Lembaga" model="nama_lembaga"/>
           <x-forms.input type="text" name="jurusan" id="jurusan" label="Jurusan" model="jurusan"/>
           <x-forms.input type="text" name="tahun_masuk" id="tahun_masuk" label="Tahun Masuk" model="tahun_masuk"/>
           <x-forms.input type="text" name="lulus" id="lulus" label="Lulus" model="lulus"/>
           <x-forms.input type="number" step="0.01" name="ipk" id="ipk" label="IPK" model="ipk"/>

        <button type="submit" class="btn btn-secondary">Submit</button>
    </form>
</div>
