<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenjang Pendidikan</th>
                <th>tanggal_lahir</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keluarga as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jenjang_pendidikan }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>{{ $item->status }}</td>
                <td class="text-center">
                    <button class="bg-transparent border-0 me-2" wire:click="$emit('keluargaedit',{{ $item->id }})" type="button" data-bs-toggle="offcanvas" data-bs-target="#sdmKeluargaEdit" aria-controls="sdmKeluargaEdit"><i class="lni lni-pencil"></i></button>
                    <button class="bg-transparent border-0 text-danger" wire:click="confirm({{ $item->id }})"><i class="lni lni-trash-can"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="offcanvas offcanvas-end px-4" tabindex="-1" id="sdmKeluargaEdit" aria-labelledby="offcanvasRightLabel"  >
        <div class="offcanvas-header border-bottom mb-3">
          <h4 class="offcanvas-title" id="offcanvasRightLabel">Edit Data</h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <livewire:sdm.keluarga.keluarga-edit/>
        </div>
    </div>
</div>
