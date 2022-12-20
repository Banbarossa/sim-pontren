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
                                  <div class="col-12 col-lg-6 text-md-end">
                                    <a href="javascript:;" class="btn btn-sm btn-danger me-2"><i class="bi bi-file-earmark-pdf-fill"></i> Export as PDF</a>
                                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-secondary"><i class="bi bi-printer-fill"></i> Print</a>
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
                              <table class="table table-invoice">
                                 <thead>
                                    <tr>
                                       <th>TASK DESCRIPTION</th>
                                       <th class="text-center" width="10%">RATE</th>
                                       <th class="text-center" width="10%">HOURS</th>
                                       <th class="text-right" width="20%">LINE TOTAL</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <span class="text-inverse">Website design &amp; development</span><br>
                                          <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sagittis arcu.</small>
                                       </td>
                                       <td class="text-center">$50.00</td>
                                       <td class="text-center">50</td>
                                       <td class="text-right">$2,500.00</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <span class="text-inverse">Branding</span><br>
                                          <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sagittis arcu.</small>
                                       </td>
                                       <td class="text-center">$50.00</td>
                                       <td class="text-center">40</td>
                                       <td class="text-right">$2,000.00</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <span class="text-inverse">Redesign Service</span><br>
                                          <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id sagittis arcu.</small>
                                       </td>
                                       <td class="text-center">$50.00</td>
                                       <td class="text-center">50</td>
                                       <td class="text-right">$2,500.00</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                       
                           <div class="row bg-light align-items-center m-0">
                             <div class="col col-auto p-4">
                                <p class="mb-0">SUBTOTAL</p>
                                <h4 class="mb-0">$4,500.00</h4>
                             </div>
                             <div class="col col-auto p-4">
                                <i class="bi bi-plus-lg text-muted"></i>
                             </div>
                             <div class="col col-auto me-auto p-4">
                                <p class="mb-0">PAYPAL FEE (5.4%)</p>
                                <h4 class="mb-0">$108.00</h4>
                             </div>
                             <div class="col bg-dark col-auto p-4">
                              <p class="mb-0 text-white">TOTAL</p>
                              <h4 class="mb-0 text-white">$4508.00</h4>
                             </div>
                           </div><!--end row-->
                       
                           <hr>
                         <!-- begin invoice-note -->
                         <div class="my-3">
                          * Make all cheques payable to [Your Company Name]<br>
                          * Payment is due within 30 days<br>
                          * If you have any questions concerning this invoice, contact  [Name, Phone Number, Email]
                         </div>
                       <!-- end invoice-note -->
                          </div>
                       
                          <div class="card-footer py-3">
                              <p class="text-center mb-2">
                                 THANK YOU FOR YOUR BUSINESS
                              </p>
                              <p class="text-center d-flex align-items-center gap-3 justify-content-center mb-0">
                                 <span class=""><i class="bi bi-globe"></i> www.domain.com</span>
                                 <span class=""><i class="bi bi-telephone-fill"></i> T:+11-0462879</span>
                                 <span class=""><i class="bi bi-envelope-fill"></i> info@example.com</span>
                              </p>
                          </div>
                       </div>
                        

                        {{-- content end here --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>




@endsection