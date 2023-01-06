@extends('layouts.template')
@section('content')
@push('mystyle')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
   #select2{
        width: 100%!important;
    }
</style>
@endpush
<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">
                
                <x-page-title>
                    @slot('title')
                       {{ $data->nama }}
                    @endslot
                </x-page-title>

            </div>
            <div class="row mt-3">         
                <div class="col-lg-12">
                    <div class="card p-3">
                        {{-- content start here --}}
                        <div class="card border shadow-none">
                           <div class="card-header py-3">
                                <div class="row align-items-center g-3">
                                    <div class="col-12 col-lg-6">
                                       <h5 class="mb-0">Detail Inventaris</h5>
                                    </div>
                                    @can('mudir')
                                    <div class="col-12 col-lg-6 text-end">
                                       <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Approval</button>
                                    </div>
                                    @endcan
                                </div>
                           </div>
                           <div class="card-header py-2 bg-light">
                             <div class="row row-cols-1 row-cols-lg-3">
                               <div class="col">
                                 <div class="">
                                    <Table>
                                       <tr>
                                          <Td class="pe-2">Ruang</Td>
                                          <Td class="pe-2">:</Td>
                                          <Td class="pe-2"><small>{{ $data->Ruang->nama }}</small></Td>
                                       </tr>
                                       <tr>
                                          <Td class="pe-2">Nama Barang</Td>
                                          <Td class="pe-2">:</Td>
                                          <Td class="pe-2"><strong class="text-inverse">{{ $data->nama }}</strong></Td>
                                       </tr>
                                       <tr>
                                          <Td class="pe-2">Kategori</Td>
                                          <Td class="pe-2">:</Td>
                                          <Td class="pe-2">{{ $data->InventoryCategory->nama }}</Td>
                                       </tr>
                                       <tr>
                                          <Td class="pe-2">Merek</Td>
                                          <Td class="pe-2">:</Td>
                                          <Td class="pe-2">{{ $data->merek }}</Td>
                                       </tr>
                                       <tr>
                                          <Td class="pe-2">Nomor Seri</Td>
                                          <Td class="pe-2">:</Td>
                                          <Td class="pe-2">{{ $data->no_seri }}</Td>
                                       </tr>
                                    </Table>
                                 </div>
                               </div>
                               <div class="col">
                               
                              </div>
                              <div class="col">
                                 <table>
                                    <tr>
                                       <Td class="pe-2">Kondisi</Td>
                                       <Td class="pe-2">:</Td>
                                       <Td class="pe-2">{{ $data->kondisi }}</Td>
                                    </tr>
                                    <tr>
                                       <Td class="pe-2">Tanggal Pengadaan</Td>
                                       <Td class="pe-2">:</Td>
                                       <Td class="pe-2">{{ $data->tanggal }}</Td>
                                    </tr>
                                    <tr>
                                       <Td class="pe-2">Sumber dana</Td>
                                       <Td class="pe-2">:</Td>
                                       <Td class="pe-2">{{ $data->Danainventory->nama }}</Td>
                                    </tr>
                                    <tr>
                                       <Td class="pe-2">Sumber Perolehan</Td>
                                       <Td class="pe-2">:</Td>
                                       <Td class="pe-2">{{ $data->sumber_perolehan }}</Td>
                                    </tr>
                                    <tr>
                                       <Td class="pe-2">harga Perolehan</Td>
                                       <Td class="pe-2">:</Td>
                                       <Td class="pe-2">{{ $data->harga_perolehan }}</Td>
                                    </tr>
                                    <tr>
                                       <Td class="pe-2">Jumlah</Td>
                                       <Td class="pe-2">:</Td>
                                       <Td class="pe-2">{{ $data->jumlah }} {{ $data->satuan }}</Td>
                                    </tr>
                                    
                                 </table>
                              </div>
                             </div>
                           </div>
                          <div class="card-body">
                              <div>
                                 <strong>Laporan Kerusakan</strong><br>
                                 <span class="me-5">{{ $maint->created_at }}</span> <span>{{ $maint->deskripsi_kerusakan }}</span>
                              </div>
                              <hr>
                              @if ($maint->status_periksa==0)
                              <div>
                                 <strong>Hasil Pemeriksaan</strong><br>
                                 <small class="text-muted">Hasil pemeriksaan dan analisa kebutuhan biaya</small>
                                 <form action="/maintenance/inventory/{{ $maint->id }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div>
                                       @error('analisa_biaya')
                                          <small class="text-danger">{{ $message }}</small>
                                       @endError
                                       <textarea id="my-editor" class="@error('analisa_biaya')  is-invalid @endError" name="analisa_biaya">{{ old('analisa_biaya') }}</textarea>                       
                                    </div>
                                    <div class="text-end mt-4">
                                       <button type="submit" class="btn btn-secondary px-5">Submit</button>
                                    </div> 
                                 </form> 

                              </div>
                              @elseif($maint->status_periksa==1)
                              <div>
                                 <strong>Hasil Pemeriksaan</strong><br>
                                 {!! $maint->analisa_biaya !!}
                              </div>
                              @endif
                              
                           
                           </div>
                       
                         
                       </div>
                        

                        {{-- content end here --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- offcanvas approval --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header">
     <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
   </div>
   <div class="offcanvas-body">
      <livewire:inventory.maintenance.approved :maintenance_id="$maint->id"/>

   </div>
 </div>







@push('myscript')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
  </script>
<script>
   CKEDITOR.replace('my-editor',options);

</script>      
@endpush




@endsection