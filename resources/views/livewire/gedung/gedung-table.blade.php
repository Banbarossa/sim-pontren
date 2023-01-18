<div class="card p-2">
    <x-table-header/>


    
    <div class="table-responsive mt-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Jumlah lantai</th>
                    <th>Kepemilikan</th>
                    <th>Kerusakan</th>
                    <th>Tahun Dibangun</th>
                    <th>Luas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $data->firstItem()+$loop->index }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jumlah_lantai }}</td>
                        <td>{{ $item->kepemilikan }}</td>
                        <td>{{ $item->kerusakan }}</td>
                        <td>{{ $item->tahun_dibangun }}</td>
                        <td>{{ $item->luas }}</td>
                        <td>
                            <a href="/sarpras/gedung/{{ $item->id }}" class="btn btn-outline-secondary"><i class="lni lni-eye"></i></a>
                            @can('admin-maintenance')
                                <button class="btn btn-outline-warning" wire:click="$emit('tampilgedung',{{ $item->id }})" type="button" data-bs-toggle="offcanvas" data-bs-target="#gedungedit" aria-controls="gedungedit"><i class="lni lni-pencil"></i></button>
                            @endcan
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>{{ $data->links() }}</div>

    </div>

    {{-- ofcanvas add-data --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="gedungedit" aria-labelledby="gedungeditLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-4">
        <livewire:gedung.gedung-update/>
    </div>
</div>   

</div>
