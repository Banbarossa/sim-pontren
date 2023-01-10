@extends('layouts.template')
@section('content')
<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">
                
                {{-- <x-page-title>
                    @slot('title')
                        Notulensi Rapat
                    @endslot
                    @can('admin')
                    <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#suratmasukadd" aria-controls="suratmasukadd">+ Tambah Data</button>
                    @endcan
                </x-page-title> --}}

            </div>
            <div class="row mt-3">         
                <div class="col-lg-12">
                    <livewire:rapat.master-rapat/>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection