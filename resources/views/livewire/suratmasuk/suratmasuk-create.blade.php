<div>
    <form wire:submit.prevent="store" method="post">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah surat Masuk
            </h5>
        </div>
        <div class="modal-body">
            
    
            <div class="mb-3">
                <label for="pengirim" class="form-label">Pengirim</label>
                <input type="text" class="form-control @error('pengirim') is-invalid @enderror"  wire:model="pengirim" id="pengirim" autofocus>
                @error('pengirim')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="nomor_surat" class="form-label">Nomor surat</label>
                <input type="text" class="form-control @error('nomor_surat') is-invalid @enderror"  wire:model="nomor_surat" id="nomor_surat" autofocus>
                @error('nomor_surat')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror"  wire:model="tanggal" id="tanggal" autofocus>
                @error('tanggal')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group mb-3">
                <label for="isi_ringkas" class="form-label">Isi Ringkas</label>
                <textarea class="form-control" id="isi_ringkas" wire:model="isi_ringkas"
                    rows="3"></textarea>
            </div>
           


        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-secondary ml-1"
            data-bs-dismiss="modal">
                <span wire:loading wire:target="store" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="">Submit</span>
            </button>
        </div>
    </form>
</div>
