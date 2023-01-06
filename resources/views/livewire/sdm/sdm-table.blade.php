<div>

    <x-table-header/>
    
    <div class="table-responsive">
        <table class="table mb-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Pendidikan Terakhir</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                <tr>
                    <td>{{ $data->firstItem()+$loop->index }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tempat_lahir }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->pendidikan_terakhir }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td><a href="/sdm/{{ $item->unik_id }}" class="btn btn-outline-secondary"><i class="lni lni-eye"></i></a></td>
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
