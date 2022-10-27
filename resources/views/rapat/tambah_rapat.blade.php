@extends('layouts.template')
@section('content')
    
<div>
    @push('mystyle')
    <style>
    .note-editable ul{
        list-style: disc !important;
        list-style-position: inside !important;
      }
      
      .note-editable ol {
        list-style: decimal !important;
        list-style-position: inside !important;
      }
    </style>
    @endpush
    <section class="table-components">
        <div class="container-fluid mt-4">
            <form action="/rapat" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-style mb-4">
                                <h3 class="mb-4 border-bottom">Record Rapat</h3>
                                <div>
                                    <textarea id="" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror mb-3" rows="3" placeholder="Agenda/Ringkasan"></textarea>
                                    @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @endError
                                </div>
                                <div>
                                    @error('kesimpulan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @endError
                                    <textarea id="summernote" class="is-invalid" name="kesimpulan"></textarea>                       
                                </div>                       
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-style mb-4">
                            <h4 class="mb-4 border-bottom">Attachment</h4>
                            <div class="mb-3">
                                <label for="pimpinan"class="form-label">Pimpinan Rapat</label>
                                <input type="text" name="pimpinan" id="pimpinan" class="form-control @error('pimpinan') is-invalid @enderror" placeholder="Pimpinan Rapat">
                                @error('pimpinan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @endError
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal">
                            </div>
                            <div class="mb-3">
                                <label for="images" class="form-label">Foto</label>
                                <input type="file" id="images" name="images[]" class="form-control" multiple>
                            </div>
                            <div class="mb-4">
                                <label for="attachment" class="form-label">Lampiran</label>
                                <input type="file" id="attachment" name="attachment" class="form-control">
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
    <script>
        $('#summernote').summernote({
          placeholder: 'Conclution',
          tabsize: 2,
          height: 500,
          toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['codeview', 'help']]
          ]
        });
      </script>      
    @endpush
</div>

@endsection