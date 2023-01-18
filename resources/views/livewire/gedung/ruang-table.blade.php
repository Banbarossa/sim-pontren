<div class="table-responsive">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ruang</th>
                <th>Kondisi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ruang as $item)
            <tr>
                <td>{{ $ruang->firstItem()+$loop->index }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->kondisi }}</td>
                <td>
                    <a href="/sarpras/ruang/{{ $item->id }}" class="btn btn-outline-secondary"><i class="lni lni-eye"></i></a>
                    <button type="button" wire:click="$emit('tampilruang',{{ $item->id }})" class="btn btn-outline-warning block" data-bs-toggle="modal" data-bs-target="#ruangEdit">
                        <i class="lni lni-pencil"></i>
                    </button>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center mt-3"><h5 class="text-muted" >No Data Here</h5> </td>
                </tr>
            @endforelse
           
        </tbody>
    </table>
    <!-- Vertically Centered modal Modal -->
        <div class="modal fade" id="ruangEdit" tabindex="-1" role="dialog"
        aria-labelledby="ruangEditTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
            role="document">
            <div class="modal-content">
                <livewire:gedung.ruang-edit/>
            </div>
        </div>
        </div>
</div>