<div class="card p-4">
    {{-- Table Header disini --}}
    <x-table-header/>
    {{-- Table Header akhir --}}


    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Pengirim</th>
                    <th>Nomor surat</th>
                    <th>Tanggal</th>
                    <th class="px-3">Isi Ringkas</th>
                    @can('admin')
                    <th>Action</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                <tr>
                    <td>{{ $data->firstItem()+$loop->index}}</td>
                    <td class="text-wrap px-2">{{ $item->pengirim }}</td>
                    <td class="text-nowrap px-2">{{ $item->nomor_surat }}</td>
                    <td class="text-nowrap px-2">{{ \Carbon\Carbon::parse($item->tanggal)->format('d/m/Y') }}</td>
                    <td class="px-3">{{ $item->isi_ringkas }}</td>

                    {{-- akses admin --}}
                    @can('admin')
                    <td width="100px">
                        <button class="btn btn-outline-warning" wire:click="$emit('editsuratmasuk',{{ $item->id }})" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEdit" aria-controls="offcanvasEdit"><i class="lni lni-pencil"></i></button>
                        <button class="btn btn-outline-danger" wire:click="confirm({{ $item->id }})">
                            <span class="spinner-border spinner-border-sm" wire:loading wire:target="destroy" role="status" aria-hidden="true"></span>
                            <span><i class="lni lni-trash-can"></i></span>
                        </button>
                    </td>
                    @endcan
                    {{-- akses Admin --}}
                </tr class="text-nowrap">
                @empty
                    <tr>
                        <td colspan="6" class="text-center"><h3 class="text-muted">No data here</h3></td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div>
            {{ $data->links() }}
        </div>

    </div>


    {{-- ofcanvas edit --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEdit" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <livewire:suratmasuk.suratmasuk-edit/>
        </div>
    </div>   
</div>
