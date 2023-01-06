@extends('layouts.template')
@section('content')
<section class="table-components">
    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-between">
            <h3 class="mb-4 border-bottom">Detail Data</h3>
        </div>

        <div class="row">
            <div class="col-lg-3 mb-3">
                <div class="card-style mb-2">
                    
                    @if ($data->avatar)
                    <img src="/storage/{{ $data->avatar }}" class="d-block img-circle mx-auto" alt="" height="100px" width="100px" style="object-fit: cover">
                    @else
                    <img src="https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="d-block img-circle mx-auto" alt="" height="100px" width="100px" style="object-fit: cover">                 
                    @endif
                    <div>
                        <h3 class="text-muted text-center mt-5">{{ $data->nama }}</h3>
                        <p class="text-muted text-center ">{{ $data->tempat_lahir }}</p>
                        <p class="text-muted text-center">{{ \carbon\carbon::parse($data->tanggal_lahir)->format('d F Y') }}</p>
                        <hr>
                        <h5 class="text-center text-primary text-bold mt-3"><span class="me-3"><i class="lni lni-phone"></i></span>{{ $data->no_hp }}</h5>
                        <hr>
                        <div class="text-center px-2">
                            <a href="/sdm/{{ $data->unik_id }}/edit" class="me-2"><i class="lni lni-pencil"></i></a>
                            <form action="/sdm/{{ $data->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="border-0 bg-transparent text-danger" onclick="return confirm('apakah anda yakin untuk menghapus')"><i class="lni lni-trash-can"></i></button>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <div class="card-style">
                    <div class="border-bottom py-3">
                        <h5><span class="me-3"><i class="lni lni-license"></i></span>Nik</h5>
                        <p class="text-muted">{{ $data->nik }}</p>
                    </div>
                    <div class="border-bottom py-3">
                        <h5><span class="me-3"><i class="lni lni-graduation"></i></span>Pendidikan Terakhir</h5>
                        <p class="text-muted">{{ $data->pendidikan_terakhir }}</p>
                    </div>
                    <div class="border-bottom py-3">
                        <h5><span class="me-3"><i class="lni lni-map-marker"></i></span>Alamat</h5>
                        <p class="text-muted">{{ $data->alamat }}</p>
                        <p class="text-muted">{{ ucwords($data->village->name) }}</p>
                        <p class="text-muted">{{ ucwords($data->district->name) }}</p>
                        <p class="text-muted">{{ ucwords($data->regency->name) }}</p>
                        <p class="text-muted">{{ ucwords($data->province->name) }}</p>
                    </div>
                    <div class="border-bottom py-3">
                        <h5><span class="me-3"><i class="lni lni-handshake"></i></span>Status</h5>
                        <p class="text-muted">{{ $data->status }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card-style mb-4">
                    <ul class="nav nav-pills border-bottom pb-1 card-header" id="pills-tab" role="tablist">
                        <li class="nav-item me-2" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Keluarga</button>
                        </li>
                        <li class="nav-item me-2" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Pendidikan</button>
                        </li>
                    </ul>
                    {{-- <hr>  --}}
                    <div class="tab-content mt-3" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-secondary px-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#sdmKeluargaAdd" aria-controls="sdmKeluargaAdd">Tambah</button>
                            </div>
                            <livewire:sdm.keluarga-table :data="$data"/>   
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-secondary px-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#riwayatpedidikanAdd" aria-controls="riwayatpedidikanAdd">Tambah</button>
                            </div>
                            <livewire:sdm.pendidikan.pendidikan-table :data="$data"/>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- data kelauarga Add --}}
<div class="offcanvas offcanvas-end px-4" tabindex="-1" id="sdmKeluargaAdd" aria-labelledby="offcanvasRightLabel"  >
  <div class="offcanvas-header border-bottom mb-3">
    <h4 class="offcanvas-title" id="offcanvasRightLabel">Tambah Data</h4>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <livewire:sdm.keluarga-add :data="$data"/>
  </div>
</div>

{{-- Riwayat Pendidikan Add--}}
<div class="offcanvas offcanvas-end px-4" tabindex="-1" id="riwayatpedidikanAdd" aria-labelledby="offcanvasRightLabel"  >
  <div class="offcanvas-header border-bottom mb-3">
    <h4 class="offcanvas-title" id="offcanvasRightLabel">Tambah Data</h4>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <livewire:sdm.pendidikan.pendidikan-add :data="$data"/>
    
  </div>
</div>

@endsection