@extends('layouts.template')
@section('content')
<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">
                
                <x-page-title>
                    @slot('title')
                       Detail Ruang {{ $data->nama }}
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
                                    <h5 class="mb-0">Detail Ruang</h5>

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
                                          <Td class="pe-2"><strong>{{ $data->nama }}</strong></Td>
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
                                    
                                 </table>
                              </div>
                             </div>
                           </div>
                          <div class="card-body">
                            <div class="table-responsive">
                                {{-- table inventory start --}}
                                <livewire:inventory.inventory-table :ruang="$data->id"/>
                                {{-- table inventory end --}}
                              
                           </div>
                          </div>
                       </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>




@endsection