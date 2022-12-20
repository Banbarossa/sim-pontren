<div class="table-responsive">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ruang</th>
                <th>Kondisi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ruang as $item)
            <tr>
                <td>{{ $ruang->firstItem()+$loop->index }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->kondisi }}</td>
                <td><a href="/sarpras/ruang/{{ $item->id }}" class="btn btn-outline-secondary"><i class="lni lni-eye"></i></a></td>
            </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center mt-3"><h5 class="text-muted" >No Data Here</h5> </td>
                </tr>
            @endforelse
           
        </tbody>
    </table>
    
</div>