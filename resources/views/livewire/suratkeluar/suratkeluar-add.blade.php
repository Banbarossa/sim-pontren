<div>
    <h4 class="border-bottom text-gray mb-3">Tambah data</h4>
    <h3 class="my-4"><pre>{{ $kode_surat }}</pre></h3>

    <form action=""  method="post" wire:submit.prevent="store" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nomor" class="form-label">Nomor Urut</label>
            <input type="number" class="form-control" wire:model="nomor"  id="nomor"  >
            
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror"  wire:model="tanggal" id="tanggal" autofocus>
            @error('tanggal')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tujuan" class="form-label">Tujuan</label>
            <input type="text" class="form-control @error('tujuan') is-invalid @enderror" wire:model="tujuan" id="tujuan" placeholder="Tujuan Surat">
            @error('tujuan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" wire:model="isi_ringkas" id="Deskripsi" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">File</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" wire:model="image" id="formFile">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div wire:loading wire:target="image" wire:key="image" class="mt-2">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div class="mt-3 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            {{-- @if ($image)
                <div class="mt-3">
                    <p>Preview</p>
                    <img class="d-block" src="{{ $image->temporaryUrl() }}" width="200px" alt="">
                </div>             
            @endif --}}
        </div>
    </form>
</div>
