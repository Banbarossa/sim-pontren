@extends('layouts.template')
@section('content')

@push('mystyle')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
   #select2{
        width: 100%!important;
    }
</style>
@endpush
    
<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <form action="/rapat" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-style mb-4">
                                <h3 class="mb-4 border-bottom">Record Rapat</h3>
                                <div class="mb-3">
                                    <textarea id="" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="3" placeholder="Judul">{{ old('deskripsi') }}</textarea>
                                    @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @endError
                                </div>


                                <div>
                                    @error('kesimpulan')
                                        <small class="text-danger">{{ $message }}</small>
                                    @endError
                                    <textarea id="my-editor" class="@error('kesimpulan')  is-invalid @endError" name="kesimpulan">{{ old('kesimpulan') }}</textarea>                       
                                </div>                       
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-style mb-4">
                            <h4 class="mb-4 border-bottom">Attachment</h4>
                            <div class="mb-3">
                                <label for="pimpinan"class="form-label">Pimpinan Rapat</label>
                                <input type="text" name="pimpinan" id="pimpinan" class="form-control @error('pimpinan') is-invalid @enderror" placeholder="Pimpinan Rapat" value="{{ old('pimpinan') }}">
                                @error('pimpinan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @endError
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @endError" placeholder="Tanggal" value="{{ old('tanggal') }}">
                                @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @endError
                            </div>
                            <img src="" alt="" id="img-container" class="img-fluid">
                            <div class="mb-3">
                                <label for="images" class="form-label">Foto Andalan</label>
                                <input type="file" id="images" name="images" onchange="showPreview(event)" accept="image/*" class="form-control @error('images') is-invalid @endError">
                                @error('images')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @endError
                            </div>
                            <div class="mb-4">
                                <label for="attachment" class="form-label">Lampiran</label>
                                <input type="file" id="attachment" name="attachment" class="form-control @error('attachment') is-invalid @endError" accept=".doc,.docx,.pdf,.xls,.xlsx,.ppt,.pptx">
                                @error('images')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @endError
                            </div> 
                            <div class="d-flex  justify-content-end">
                                <button type="submit" class="btn btn-primary px-5">Submit</button>
                            </div>                    
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @push('myscript')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
        $('.js-example-basic-multiple').select2({placeholder:"Pilih peserta Rapat"});
        });
    </script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
          filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
          filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
          filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
          filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
      </script>
    <script>
         CKEDITOR.replace('my-editor',options);

        function showPreview(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("img-container")

                preview.src = src;
                preview.style.display="block";
            }
        }
      </script>      
    @endpush
</div>

@endsection