<div>
    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
        <h4 class="text-gray">Daftar Surat Keluar</h4>
        <form action="">
            <input class="form-control" type="text" wire:model="search" placeholder="Search">
        </form>
    </div>
    {{-- <hr> --}}
   
    <div class="card">
        @forelse ($surat as $item)
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="me-3 text-primary kode" id="kode">{{ $item->kode_surat }}</h5>
                        <p class="text-gray">{{ $item->tanggal }}</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-2">{{ ucWords($item->tujuan )}}</h5>
                                <div class="d-flex justify-content-end">
                                    @if ($item->image)
                                    <a href="http:/storage/{{ $item->image }}" class="btn btn-outline-success btn-pills mt-2 me-2" target="_blank" rel="noopener noreferrer"><i class="lni lni-empty-file"></i></a>    
                                    @endif
                                    <button wire:click="$emit('showForm',{{ $item->id }})" class="btn btn-outline-warning btn-pills mt-2"><i class="lni lni-pencil"></i></button>
                                    <button wire:click="confirm({{ $item->id }})" class="btn btn-outline-danger btn-pills mt-2 mx-2"><i class="lni lni-trash-can"></i></button>
                                </div>
                                                
                            </div>
                            <p>{{ $item->isi_ringkas }}</p>
                        
                        </div>
                    </div>   
                </div>
            </div>
        @empty
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="me-3 text-muted kode" id="kode">No Data Here!</h4>
                </div>
            </div>
        @endforelse
        {{ $surat->links() }}
    </div>
</div>

