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
                  @if ($item->status_pereiksa == 0)
                      <button class="btn btn-outline-warning rounded-pill">Pending</button>
                  @elseif($item->status_pereiksa == 1)
                     <button class="btn btn-outline-success rounded-pill">Fixed</button>
                  @endif
                  
            </tr>
            @empty
                <div>Belum ada riwayat kerusakan</div>
            @endforelse
              
          
        </tbody>
     </table>
    

</div>
