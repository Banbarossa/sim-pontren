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
                    <a href="/sarpras/inventory/create"class="btn btn-secondary">+ Tambah Data</a>
                </x-page-title>

            </div>
            <div class="row mt-3">         
                <div class="col-lg-12">
                    <div class="card p-3">
                        <livewire:inventory.inventory-table/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>




@endsection