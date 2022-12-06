<div>

    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
        {{-- <form action="" class="d-inline">
            <input class="form-control" type="text" wire:model="search" placeholder="Search">
        </form> --}}
        <h3>Daftar Surat Keluar</h3>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">+ Tambah Data</button>
    </div>


    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
            <form action="" class="d-inline">
                <input class="form-control" type="text" wire:model="search" placeholder="Search">
            </form>
        </div>
        <div class="table-responsive">
            <table class="table text-gray">
                <thead>
                    <tr>
                        <th>Kode Surat</th>
                        <th>Tanggal</th>
                        <th>Tujuan</th>
                        <th class="col-md-4">Isi ringkas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($surat as $item)
                    <tr>
                        <td>{{ $item->kode_surat }}</td>
                        <td class="text-nowrap">{{ \Carbon\Carbon::Parse($item->tanggal)->format('d-m-Y') }}</td>
                        <td>{{ $item->tujuan }}</td>
                        <td class="text-wrap text-break">{{ $item->isi_ringkas }}</td>
                        <td>
                            <button class="bg-transparent border-0 text-gray" wire:click="$emit('tampilsurat',{{ $item->id }})" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEdit" aria-controls="offcanvasEdit"><i class="lni lni-pencil"></i></button>
                            <button wire:click="confirm({{ $item->id }})" class="bg-transparent border-0 text-gray"><i class="lni lni-trash-can"></i></button>
                            @if ($item->image)
                                <a href="http:/storage/{{ $item->image }}" class="btn btn-outline-success btn-pills mt-2 me-2" target="_blank" rel="noopener noreferrer"><i class="lni lni-empty-file"></i></a>    
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td  colspan="5">No data here</td>
                    </tr>
                    @endforelse
                    
                </tbody>
    
            </table>
            {{ $surat->links() }}
        </div>
    </div>





    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <livewire:suratkeluar.suratkeluar-add/>
        </div>
    </div>    
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEdit" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Edit Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <livewire:suratkeluar.suratkeluar-update/>
        </div>
    </div>    
</div>

