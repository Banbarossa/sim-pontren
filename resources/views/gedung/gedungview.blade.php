@extends('layouts.template')
@section('content')
<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="card py-3 px-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="mb-3">Detail Gedung {{ $data->nama }}</h3>
                                {{-- <h3 class="text-muted mb-2">{{ $data->nama }}</h3> --}}
                                <p class="d-block">Kepemilikan : {{ $data->kepemilikan }}</p>
                            </div>
                           <div>
                            <p class="d-block mb-2">Kerusakan : {{ $data->kerusakan }}</p>
                            <p class="d-block mb-2">Tahun : {{ $data->tahun_dibangun }}</p>
                            <p class="d-block">Luas : {{ $data->luas }}</p>
                           </div>
                        </div>

                        
                    </div>

                </div>
                <div class="col-12 mt-2">
                    <div class="card px-4 py-3">
                        <div class=" card-header d-flex justify-content-between border-bottom align-items-center p-2 mb-3">
                            <h5>Data Ruangan</h5>
                            @can('admin-maintenance')
                            <button type="button" class="btn btn-outline-secondary block"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            Tambah Ruangan
                            </button>
                                
                            @endcan
                        </div>
                        {{-- tabel ruang --}}
                        <livewire:gedung.ruang-table gedung_id="{{ $data->id }}"/>


                    </div>
                </div>
            </div>

        </div>
    </section>

</div>




<!-- Vertically Centered modal Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <livewire:gedung.ruang-create gedung_id="{{ $data->id }}"/>
    </div>
</div>
</div>


@endsection