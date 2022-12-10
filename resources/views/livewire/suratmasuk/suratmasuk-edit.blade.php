<div>
    <form wire:submit.prevent="update" method="post">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah surat Masuk
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
            
            <x-forms.input name="pengirim" model="pengirim" type="text" label="Pengirim" placeholder="Pengirim">
            </x-forms.input>
            
            <x-forms.input name="nomor_surat" model="nomor_surat" type="text" label="Nomor Surat" placeholder="Nomor Surat">
            </x-forms.input>

            <x-forms.input name="tanggal" model="tanggal" type="date" label="Tanggal Surat" placeholder="Tanggal Surat">
            </x-forms.input>
            
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
