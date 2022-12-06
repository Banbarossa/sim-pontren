<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Jenjang</th>
                <th>Nama Lembaga</th>
                <th>Jurusan</th>
                <th>Tahun Masuk</th>
                <th>Tahun Lulus</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pendidikanSdm as $item)
            <tr>
                <td>{{ $item->jenjang }}</td>
                <td>{{ $item->nama_lembaga }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>{{ $item->tahun_masuk }}</td>
                <td>{{ $item->lulus }}</td>
                <td>{{ $item->ipk }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" > <h4>No data here</h4></td>
            </tr>
            @endforelse
            
        </tbody>
    </table>
</div>
