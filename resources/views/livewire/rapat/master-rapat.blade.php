<div>
    <section class="components">
        <div class="container-fluid mt-4">
            <div class="d-flex justify-content-between  mb-4">
                <a href="{{ route('rapat.add') }}" class="btn btn-primary px-4">Tambah Data</a>
                <input type="text" wire:model="search" class="form-control" placeholder="Search" style="width: 22rem">
            </div>
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-lg-4">
                        <div class="card mb-4" style="height: 29rem">
                            <img src="https://source.unsplash.com/1000x600?computer" class="card-img-top" alt="...">
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="card-title">{{ $item->tanggal }}</h4>
                                    <small class="text-muted">{{ $item->pimpinan }}</small>
                                </div>  
                                <div class="overflow-auto mt-3" style="height: 5rem">
                                    <p class="card-text">{{ $item->deskripsi }}</p>
                                </div>
                                <a href="#" class="btn btn-primary mt-4">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-end">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </section>
</div>
