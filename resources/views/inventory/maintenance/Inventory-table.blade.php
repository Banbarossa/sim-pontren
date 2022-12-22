@extends('layouts.template')
@section('content')
<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">

                <x-page-title>
                    @slot('title')
                    Maintenance Inventaris
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
                                        <h5 class="mb-0">Detail Inventaris</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-2 bg-light">
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive">
                                            <livewire:inventory.maintenance.inventorymantenance-table />
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="card-body">
                               
                            </div>


                            {{-- content end here --}}

                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>


@endsection