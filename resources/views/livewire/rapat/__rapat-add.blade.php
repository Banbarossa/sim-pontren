<div>
    @push('mystyle')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endpush



    <section class="table-components">
        <div class="container-fluid mt-4">
            <form action="" wire:submit.prevent="store" enctype="multipart/form-data" wire:ignore>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-style mb-4">
                                <h3 class="mb-4 border-bottom">Record Rapat</h3>
                                <textarea name="" id="" wire:model="deskripsi" class="form-control mb-3" rows="3" placeholder="Agenda/Ringkasan"></textarea>
                                <select name="" id="select2" class="form-select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    
                                </select>                       
                                <textarea id="my-editor" wire:model="kesimpulan" name="editordata"></textarea> 
                                <div wire:ignore>
                                    <textarea wire:model="message"
                                              class="min-h-fit h-48 "
                                              name="message"
                                              id="message"></textarea>
                                </div>                      
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-style mb-4">
                            <h4 class="mb-4 border-bottom">Attachment</h4>
                            <div class="mb-3">
                                <label for="pimpinan"class="form-label">Pimpinan Rapat</label>
                                <input type="text" wire:model="pimpinan" id="pimpinan" class="form-control" placeholder="Pimpinan Rapat">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" id="tanggal" wire:model="tanggal" class="form-control" placeholder="Tanggal">
                            </div>
                            <div class="mb-3">
                                <label for="images" class="form-label">Foto</label>
                                <input type="file" id="images" wire:model="images" class="form-control" >
                            </div>
                            <div class="mb-4">
                                <label for="attachment" class="form-label">Lampiran</label>
                                <input type="file" id="attachment" wire:model="attachment" class="form-control">
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
    @endpush
</div>