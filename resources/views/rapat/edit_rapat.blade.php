@extends('layouts.template')
@section('content')
    
<div>
    @push('mystyle')
    <style>
    /* .note-editable ul{
        list-style: disc !important;
        list-style-position: inside !important;
      }
      
      .note-editable ol {
        list-style: decimal !important;
        list-style-position: inside !important;
      } */
    </style>
    @endpush
    <section class="table-components">
        <div class="container-fluid mt-4">
            <form action="/rapat/{{ $data->unik_id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-style mb-4">
                                <h3 class="mb-4 border-bottom">Record Rapat</h3>
                                <div class="mb-3">
                                    <input type="hidden" name="id" class="form-control" id="" value="{{ $data->id }}">
                                    <textarea id="" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="3" placeholder="Judul">{{ old('deskripsi',$data->deskripsi) }}</textarea>
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
                                    <textarea id="editckeditor" class="@error('kesimpulan')  is-invalid @endError" name="kesimpulan">{{ old('kesimpulan',$data->kesimpulan) }}</textarea>                       
                                </div>                       
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-style mb-4">
                            <h4 class="mb-4 border-bottom">Attachment</h4>
                            <div class="mb-3">
                                <label for="pimpinan"class="form-label">Pimpinan Rapat</label>
                                <input type="text" name="pimpinan" id="pimpinan" class="form-control @error('pimpinan') is-invalid @enderror" placeholder="Pimpinan Rapat" value="{{ old('pimpinan',$data->pimpinan) }}">
                                @error('pimpinan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @endError
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @endError" placeholder="Tanggal" value="{{ old('tanggal',$data->tanggal) }}">
                                @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @endError
                            </div>
                            <img src="{{ asset('storage/'.$data->images) }}" alt="" id="img-container" class="img-fluid">
                            <div class="mb-3">
                                <label for="images" class="form-label">Foto</label>
                                <input type="file" id="images" name="images" onchange="showPreview(event)" accept="image/*" value="{{ old('images'),$data->images }}" class="form-control @error('images') is-invalid @endError">
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
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
          filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
          filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
          filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
          filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        
        CKEDITOR.replace('editckeditor')
    </script>
    <script>

        

        // $('#summernote').summernote({
        //   placeholder: 'Conclution',
        //   tabsize: 2,
        //   height: 500,
        //   toolbar: [
        //     ['style', ['style']],
        //     ['font', ['bold', 'underline', 'clear']],
        //     ['fontname', ['fontname']],
        //     ['fontsize', ['fontsize']],
        //     ['color', ['color']],
        //     ['para', ['ul', 'ol', 'paragraph']],
        //     ['table', ['table']],
        //     ['insert', ['link']],
        //     ['view', ['codeview', 'help']]
        //   ]
        // });

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