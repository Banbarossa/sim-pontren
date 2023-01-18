@extends('layouts.template')
@section('content')
<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">
                
                <x-page-title>
                    @slot('title')
                       {{ $data->nama }}
                    @endslot
                    {{-- <a href="/sarpras/inventory/create"class="btn btn-secondary">+ Tambah Data</a> --}}
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
                                  <div class="col-12 col-lg-6 text-md-end">
                                    <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#maintananceAdd" aria-controls="maintananceAdd">+ Ajukan Perbaikan</button>
                                    {{-- <a href="javascript:;" class="btn btn-sm btn-danger me-2"><i class="bi bi-file-earmark-pdf-fill"></i> Export as PDF</a>
                                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-secondary"><i class="bi bi-printer-fill"></i> Print</a> --}}
                                  </div>
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
                               <div class="col text-center">
                                 {!! QrCode::size(100)->generate($url); !!}
                                 <a href="/card/inventory/{{ $data->id }}"  class="d-block mx-auto mt-2 btn btn-primary">Cetak Kartu</a>
                                 {{-- <button class="d-block mx-auto mt-2 btn btn-primary">Cetak Kartu</button> --}}
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
                                       <Td class="pe-2">{{ $data->tanggal_pengadaan }}</Td>
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
                            <div class="table-responsive">
                              <livewire:inventory.inventorymantenance-table :inventory_id="$data->id"/>
                           </div>
                       
                         
                          {{-- <div class="card-footer py-3">
                              <p class="text-center mb-2">
                                 THANK YOU FOR YOUR BUSINESS
                              </p>
                              <p class="text-center d-flex align-items-center gap-3 justify-content-center mb-0">
                                 <span class=""><i class="bi bi-globe"></i> www.domain.com</span>
                                 <span class=""><i class="bi bi-telephone-fill"></i> T:+11-0462879</span>
                                 <span class=""><i class="bi bi-envelope-fill"></i> info@example.com</span>
                              </p>
                          </div> --}}
                       </div>
                        

                        {{-- content end here --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>




<div class="offcanvas offcanvas-end" tabindex="-1" id="maintananceAdd" aria-labelledby="maintananceAddLabel">
   <div class="offcanvas-header">
       
       <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
   </div>
   <div class="offcanvas-body">

      {{-- form start --}}
         <livewire:inventory.inventorymantenance-add  :inventory_id="$data->id"/>
      {{-- form end --}}
   </div>
</div>




@endsection