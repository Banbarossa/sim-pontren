@extends('layouts.template')
@section('content')
<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">
                
                <x-page-title>
                    @slot('title')
                        Data Bangunan/Gedung
                    @endslot
                    <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#gedungadd" aria-controls="gedungadd">+ Tambah Data</button>
                </x-page-title>

            </div>
            <div class="row mt-3">         
                <div class="col-lg-12">
                    <livewire:gedung.gedung-table/>
                </div>
            </div>
        </div>
    </section>
</div>


{{-- ofcanvas add-data --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="gedungadd" aria-labelledby="gedungaddLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-4">
        <livewire:gedung.gedung-create/>
    </div>
</div>    



@endsection