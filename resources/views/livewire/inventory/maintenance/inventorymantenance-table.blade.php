<div>
    <table class="table table-invoice">
        <thead>
           <tr>
              <th>Nama Barang</th>
              <th class="text-center">Deskripsi Kerusakan</th>
              <th class="text-center" width="10%">TANGGAL LAPORAN</th>
              <th class="text-center" width="10%">STATUS</th>
           </tr>
        </thead>
        <tbody>
           @forelse ($data as $item)
           <tr>
               <td>{{ $item->inventory->nama }}</td>
               <td>
                  <small>{{ $item->deskripsi_kerusakan }}</small>
               </td>
               <td class="text-center">{{\Carbon\Carbon::parse( $item->created_at)->diffForHumans()}}</td>
               <td class="text-center " id="status">
                  @if ($item->status_periksa == 0)
                     <a href="/maintenance/inventory/{{ $item->inventory->id }}"class="btn btn-outline-danger rounded-pill">uncheked</a>
                  @elseif($item->status_periksa == 1)
                     <a href="/sarpras/inventory/{{ $item->inventory->id }}"class="btn btn-outline-danger rounded-pill">Checked</a>
                  @elseif($item->status_periksa == 2)
                     <a href="/sarpras/inventory/{{ $item->inventory->id }}"class="btn btn-outline-danger rounded-pill">Approved</a>
                  @else
                     <a href="/sarpras/inventory/{{ $item->inventory->id }}"class="btn btn-outline-danger rounded-pill">Cancel</a>
                  @endif
                  
            </tr>
            @empty
                <div>Belum ada riwayat kerusakan</div>
            @endforelse
              
          
        </tbody>
     </table>
    

</div>
