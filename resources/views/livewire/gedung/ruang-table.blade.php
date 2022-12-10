<div class="table-responsive">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Nama Ruang</th>
                <th>Kondisi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ruang as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->kondisi }}</td>
                <td><button class="btn btn-secondary">test</button></td>
            </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center mt-3"><h5 class="text-muted" >No Data Here</h5> </td>
                </tr>
            @endforelse
           
        </tbody>
    </table>
    
</div>