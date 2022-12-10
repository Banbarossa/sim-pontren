<div>
    <form wire:submit.prevent="store" method="post">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Ruangan
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
            
            <x-forms.input name="nama" model="nama" type="text" label="Nama" placeholder="Nama Ruangan">
            </x-forms.input>

            
            <div class="form-group">
                <label for="kondisi">Kondisi</label>
                <select name="kondisi" wire:model="kondisi" id="" class="form-select @error('kondisi') is-invalid @enderror">
                    <option value="">Silahkan Pilih kondisi</option>
                    <option value="Baik">Baik</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Rusak">Rusak</option>
                </select>
                @error('kondisi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary"
                data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Close</span>
            </button>
            <button type="submit" class="btn btn-primary ml-1"
            data-bs-dismiss="modal">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Submit</span>
            </button>
        </div>
    </form>
</div>
