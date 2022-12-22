<div>
    <table class="table table-invoice">
        <thead>
           <tr>
              <th>RIWAYAT PERBAIKAN</th>
              <th class="text-center" width="10%">TANGGAL LAPORAN</th>
              <th class="text-center" width="10%">STATUS</th>
           
           </tr>
        </thead>
        <tbody>
           @forelse ($data as $item)
           <tr>
               <td>
                  <small>{{ $item->deskripsi_kerusakan }}</small>
               </td>
               <td class="text-center">{{\Carbon\Carbon::parse( $item->created_at)->diffForHumans()}}</td>
               <td class="text-center " id="status">
                  @if ($item->status_periksa == 0)
                     Uncheck
                  @elseif($item->status_periksa == 1)
                     Checked
                  @elseif($item->status_periksa == 2)
                     Approved
                  @else
                     Cancel
                  @endif
               </td>
                  
            </tr>
            @empty
                <tr>
                  <td colspan="4">Belum ada riwayat Kerusakan</td>
                </tr>
            @endforelse
              
          
        </tbody>
     </table>
    

</div>
