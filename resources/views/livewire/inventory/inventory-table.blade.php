<div class="">
    <div class="d-flex justify-content-between">
        <div class="col-6 col-md-4 col-lg-4">
            <div class="col-9 col-md-8 col-lg-6">
                <select name="perpage" wire:model="perpage" id="perpage" class="form-select">
                    <option value="10">10 Per Page</option>
                    <option value="25">25 Per Page</option>
                    <option value="50">50 Per Page</option>
                </select>
            </div>

        </div>
               
        <div class="col-6 col-md-4 col-lg-4 mb-3 d-flex justify-content-between">
            <input type="text" placeholder="Search" wire:model="search" class="form-control">
            
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>#</th>
                    <th wire:click="sortColumn('kode')" class="cursor"><span class="me-2"><x-sort-table/></span><span>Kode Inventaris</span></th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    @if ($ruang ==0)
                    <th>Ruang</th>
                    @endif
                    <th wire:click="sortColumn('danainventory_id')" class="cursor"><span class="me-2"><x-sort-table/></span><span>Sumber Dana</span></th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                       <td>{{ $data->firstItem()+$loop->index }}</td>
                       <td>{{ $item->kode }}</td>
                       <td>{{ $item->nama }}</td>
                       <td>{{ $item->inventorycategory->nama }}</td>
                       @if ($ruang ==0)
                       <td>
                            <a href="/sarpras/ruang/{{ $item->Ruang->id }}"class="btn btn-outline-secondary rounded-pill">{{ $item->Ruang->nama }}</a>
                            {{-- <button class="btn btn-outline-secondary rounded-pill" >{{ $item->ruang->nama }}</button> --}}
                        </td>
                           
                       @endif
                       <td>{{ $item->danainventory->nama}}</td>
                        <td>
                            <a href="/sarpras/inventory/{{ $item->id }}" class="btn btn-outline-secondary"><i class="lni lni-eye"></i></a>

                            @can('admin-maintenance')
                            <a href="/sarpras/inventory/{{ $item->id }}/edit" class="btn btn-outline-secondary"><i class="lni lni-pencil"></i></a>
                            <button class="btn btn-outline-danger" wire:click="showConfirm('{{ $item->id }}')"><i class="lni lni-trash-can"></i></button>
                                
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>{{ $data->links() }}</div>

    </div>
</div>
