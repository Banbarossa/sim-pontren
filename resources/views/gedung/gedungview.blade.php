@extends('layouts.template')
@section('content')
<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="card py-3 px-4">
                        <div class="d-flex align-items-center justify-content-between border-bottom pb-4">
                            <div>
                                <h3 class="text-muted mb-2">Data Gedung</h3>
                                <p class="d-block">Kepemilikan : {{ $data->kepemilikan }}</p>
                            </div>
                           <div>
                            <p class="d-block mb-2">Kerusakan : {{ $data->kerusakan }}</p>
                            <p class="d-block mb-2">Tahun : {{ $data->tahun_dibangun }}</p>
                            <p class="d-block">Luas : {{ $data->luas }}</p>
                           </div>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Nama Ruang</th>
                                        <th>Kondisi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>adfadfa</td>
                                        <td>baik</td>
                                        <td><button class="btn btn-secondary">test</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
</div>





@endsection