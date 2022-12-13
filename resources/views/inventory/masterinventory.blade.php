@extends('layouts.template')
@section('content')
<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">
                
                <x-page-title>
                    @slot('title')
                        Inventaris Barang
                    @endslot
                    <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#gedungadd" aria-controls="gedungadd">+ Tambah Data</button>
                </x-page-title>

            </div>
            <div class="row mt-3">         
                <div class="col-lg-12">
                    {{-- <livewire:gedung.gedung-table/> --}}
                </div>
            </div>
        </div>
    </section>
</div>




@endsection