@extends('layouts.template')
@section('content')
<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">
                

                <x-page-title>
                    @slot('title')
                    Dashboard
                    @endslot
                </x-page-title>

                
            </div>
            <div class="row mt-4">
                
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Greating</div>
                        <div class="card-body">
                            Selamat Datang <strong>{{ Str::ucfirst(Auth()->User()->name) }}</strong> Anda Login Sebagai {{ Str::ucfirst(Auth()->User()->role)  }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection