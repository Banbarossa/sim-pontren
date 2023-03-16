<div>

    <div class="row mb-3">
        <x-page-title>
            @slot('title')
                Daftar Surat Keluar
            @endslot
            @can('admin')
            <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">+ Tambah Data</button>
            @endcan
        </x-page-title>

    </div>


    <div class="card p-4">
        
        <x-table-header/>
      

        <div class="table-responsive">
            <table class="table text-gray table-responsive table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Surat</th>
                        <th>Tanggal</th>
                        <th>Tujuan</th>
                        <th class="">Isi ringkas</th>


                        @can('admin')
                        <th>Aksi</th>
                        @endcan

                    </tr>
                </thead>
                <tbody>
                    @forelse ($surat as $item)
                    <tr>
                        <td>{{ $surat->firstItem()+$loop->index}}</td>
                        <td>{{ $item->kode_surat }}</td>
                        <td class="text-nowrap">{{ \Carbon\Carbon::Parse($item->tanggal)->format('d-m-Y') }}</td>
                        <td>{{ $item->tujuan }}</td>
                        <td class="px-2">{{ $item->isi_ringkas }}</td>

                        {{-- akses admin --}}
                        @can('admin')
                        <td>
                            <button class="btn btn-outline-warning" wire:click="$emit('tampilsurat',{{ $item->id }})" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEdit" aria-controls="offcanvasEdit"><i class="lni lni-pencil"></i></button>
                            <button wire:click="confirm({{ $item->id }})" class="btn btn-outline-danger"><i class="lni lni-trash-can"></i></button>
                            @if ($item->image)
                                <a href="http:/storage/{{ $item->image }}" class="btn btn-outline-success btn-pills mt-2 me-2" target="_blank" rel="noopener noreferrer"><i class="lni lni-empty-file"></i></a>    
                            @endif
                        </td>
                        @endcan
                        {{-- akses admin end --}}
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
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Tambah Data Surat</h5>
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

