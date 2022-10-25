<div>
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card-style mb-4">
                        
                        <form method="post">
                            <textarea id="summernote" name="editordata"></textarea>
                        </form>
                        
                        
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card-style mb-4">
                        Ini halaman Tambah rapat
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('myscript')
        <script>
            $(document).ready(function(){
                $('#summernote').summernote({
                    height:400,
                    tabSize:4,
                    
                });
            });
        </script>      
    @endpush
</div>