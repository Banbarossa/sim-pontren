<div>
    <section class="components">
        <div class="container-fluid mt-4">
            <div class="row mb-3">
                <x-page-title>
                    @slot('title')
                    Notulensi Rapat          
                    @endslot
                    <div class="d-flex">
                        <input type="text" wire:model="search" class="form-control me-3" placeholder="Search">
                        <a href="/rapat/create" class="btn btn-primary px-2 d-inline">Tambah</a>
                    </div>
                </x-page-title>
            </div>
            {{-- <div class="d-flex justify-content-between  mb-4">
                <a href="/rapat/create" class="btn btn-primary px-2">Tambah Data</a>
                <input type="text" wire:model="search" class="form-control" placeholder="Search" style="width: 40%">
            </div> --}}
            @if ($message = Session::get('success'))
                <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-lg-4 col-md-6 ">
                        <div class="card mb-4 shadow rounded">
                            <div class="overflow-hidden" style="height: 200px">
                                @if ($item->images)
                                <img src="{{ asset('storage/'.$item->images) }}" class="card-img-top"  alt="...">                             
                                @else
                                <img src="{{ asset('images/no-image.jpg') }}" class="card-img-top" alt="...">     
                                @endif
                            </div> 
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="card-title">{{ \carbon\carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</h4>
                                    <small class="card-title text-muted">{{ \carbon\carbon::parse($item->tanggal)->diffForHumans() }}</small>
                                    {{-- <small class="text-muted">{{ $item->pimpinan }}</small> --}}
                                </div>  
                                <div class="overflow-auto mt-3" style="height: 5rem">
                                    <p class="card-text">{{ $item->deskripsi }}</p>
                                </div>
                                <a href="/rapat/{{ $item->unik_id }}" class=" d-block btn btn-outline-primary mt-4">Selengkapnya</a>
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
