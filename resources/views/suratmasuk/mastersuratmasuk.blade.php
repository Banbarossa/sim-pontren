@extends('layouts.template')
@section('content')
<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">
                
                <x-page-title>
                    @slot('title')
                        Data Surat Masuk
                    @endslot
                    <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#suratmasukadd" aria-controls="suratmasukadd">+ Tambah Data</button>
                </x-page-title>

            </div>
            <div class="row mt-3">         
                <div class="col-lg-12">
                    <livewire:suratmasuk.suratmasuk-table/>
                    {{-- <livewire:suratmasuk.incomming-letter/> --}}

                </div>
            </div>
        </div>
    </section>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="suratmasukadd" aria-labelledby="suratmasukaddLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-4">

        <livewire:suratmasuk.suratmasuk-create/>
    </div>
</div> 


@endsection