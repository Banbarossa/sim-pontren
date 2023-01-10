@extends('layouts.template')
@section('content')

<section class="table-components">
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="card-style">
                <div class="row">
                    <div class="col-8">
                        <h2 class="text-bold mb-3">{{ $data->deskripsi }}</h2>
                        <div class="d-flex justify-content-between">
                            <small class="text-muted">{{ \carbon\carbon::parse($data->tanggal)->translatedFormat('d F Y') }}</small>
                            <div>
                                @if ($data->attachment)
                                <a href="{{ asset('storage/'.$data->attachment) }}" target="blank" class="me-2"><i class="lni lni-files"></i></a>
                                @endif

                                {{-- Admin Can Access start --}}
                                @can('admin')
                                <a href="/notulensi/{{ $data->unik_id }}/edit" class="me-2 btn btn-outline-warning"><i class="lni lni-pencil"></i></a>
                                <form action="/notulensi/{{ $data->id }}" method="post" class=" me-2 btn btn-outline-danger">
                                    @csrf
                                    @method('delete')
                                    <button class="border-0 text-danger" style="background-color: transparent" type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus')"><i class="lni lni-trash-can"></i></button>
                                </form>
                                    
                                @endcan
                                {{-- Admin Can Access end --}}

                                <a href="/notulensi/{{ $data->unik_id }}/savepdf" class="btn btn-danger">Export  Pdf</a>

                            </div>
                        </div>
                        <hr>
                        <P class="text-muted mb-3">Pimpinan Rapat : <span class="text-primary text-bold">{{ $data->pimpinan }}</span> | Notulen : <span class="text-primary text-bold">{{ $data->notulen }}</span></P>
                        <figure class="figure">
                            @if ($data->images)
                            <img src="/storage/{{ $data->images }}" class="figure-img img-fluid rounded" alt="...">
                            @else
                            <img src="/images/no-image.jpg" class="figure-img img-fluid rounded" alt="...">  
                            @endif
                            
                        </figure>
                        <div class="mt-3" style="font-size: 18px">
                            {!! $data->kesimpulan !!}
                        </div>
                    </div>
                    {{-- right widget --}}
                    <div class="col-4">
                        <h3 class=" d-block text-danger mb-4"><span class="me-2"><i class="lni lni-timer"></i></span> Terbaru</h3>
                        @foreach ($widget as $item)
                        <div class="row border-bottom pb-2 my-3">
                            <div class="col-4">
                                <div class="overflow-hidden" style="
                                    max-height:70px;
                                    width=100%;
                                    border-radius:5px">
                                    @if ($item->images)
                                        <a href="/notulensi/{{ $item->unik_id }}"><img src="{{ asset('storage/'.$item->images) }}" alt="" class="img-thumbnail"></a>
                                    @else
                                        <a href="/notulensi/{{ $item->unik_id }}"><img src="{{ asset('images/1.jpg')}}" alt="" class="img-thumbnail"></a>
                                    @endif
                                </div>
                                
                            </div>
                            <div class="col-8">
                                <a class="d-block" href="/notulensi/{{ $item->unik_id }}">{{ $item->deskripsi }}</a>
                                <small class="d-block mt-2">{{ $item->tanggal }}</small>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
