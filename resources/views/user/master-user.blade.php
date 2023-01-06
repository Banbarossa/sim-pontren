@extends('layouts.template')
@section('content')
<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">

                <x-page-title>
                    @slot('title')
                    User
                    @endslot
                    <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">+ Tambah Data</button>
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
                                        <h5 class="mb-0">Users Table</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-2 bg-light">
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive">                                          
                                            <livewire:user.user-table />
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

{{-- offcanvas add user --}}
<div wire:ignore class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Tambah Data User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <livewire:user.add-user/>
    </div>
</div>  
{{-- offcanvas add user end --}}

@endsection