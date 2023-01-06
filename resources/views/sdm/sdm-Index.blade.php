

    {{-- <a href="/sdm/create" class="btn btn-primary">tambah</a> --}}
@extends('layouts.template')
@section('content')



    <section class="table-components">
        <div class="container-fluid mt-4">
            <x-page-title>
                @slot('title')
                    Data Guru dan Staff
                @endslot
                @can('admin')
                <a href="/sdm/create" class="btn btn-secondary px-5">Tambah</a>
                @endcan
            </x-page-title>



            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card-style mb-4">
                        <livewire:sdm.sdm-table>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection