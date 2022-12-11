<div class="card p-2">
    <div class="col-8 col-md-6 col-lg-4 mb-3">
        <input type="text" placeholder="Search" wire:model="search" class="form-control">
    </div>
    <div class="table-responsive">
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
                        {{-- <td>{{ $loop->iteration }}</td> --}}
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jumlah_lantai }}</td>
                        <td>{{ $item->kepemilikan }}</td>
                        <td>{{ $item->kerusakan }}</td>
                        <td>{{ $item->tahun_dibangun }}</td>
                        <td>{{ $item->luas }}</td>
                        <td>
                            <a href="/sarpras/gedung/{{ $item->id }}" class="btn btn-outline-primary">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>{{ $data->links() }}</div>

    </div>
</div>
