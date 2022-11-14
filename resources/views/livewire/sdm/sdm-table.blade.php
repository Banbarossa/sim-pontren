<div>
    <div class="col-sm-8 col-md-4 mb-3 shadow-sm">
        <form action="">
            <input type="text" class="form-control" wire:model="search" placeholder="search">
        </form>
    </div>
    <div class="table-responsive">
        <table class="table mb-3">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Nama</td>
                    <td>Tempat Lahir</td>
                    <td>Tanggal Lahir</td>
                    <td>Jenis Kelamin</td>
                    <td>Penidikan Terakhir</td>
                    <td>No Hp</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                <tr>
                    <td></td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tempat_lahir }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->pendidikan_terakhir }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td><a href="/sdm/{{ $item->unik_id }}" class="btn btn-warning">View</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="100%"><h4 class="text-muted text-center">No Data Here!</h4></td>
                </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
    <div class="mt-5">
        {{ $data->links() }}
    </div>
</div>
