

    {{-- <a href="/sdm/create" class="btn btn-primary">tambah</a> --}}
@extends('layouts.template')
@section('content')



    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="d-flex justify-content-between">
                <h3 class="mb-4 border-bottom">Data Karyawan/Staff</h3>
                <a href="/sdm/create" class="btn btn-primary px-5 mb-3">Tambah</a>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-4">
                        <livewire:sdm.sdm-table>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection