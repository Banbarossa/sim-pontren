<?php

namespace App\Http\Livewire\Suratmasuk;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\SuratMasuk;

class IncommingLetter extends DataTableComponent
{
    protected $model = SuratMasuk::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Pengirim", "pengirim")
                ->sortable()
                ->searchable(),
            Column::make("No Surat", "nomor_surat")
                ->sortable()
                ->searchable(),
            Column::make("Tanggal", "Tanggal")
                ->sortable()
                ->searchable(),
            Column::make("Isi Ringkas", "isi_ringkas")
                ->sortable()
                ->searchable(),
            Column::make('Actions')
                ->label(
                    function ($row, Column $column) {
                        $edit = '<button class="btn btn-outline-warning d-inline me-2" wire:click="edit(' . $row->id . ')" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEdit" aria-controls="offcanvasEdit">Edit</button>';
                        $delete = '<button class="btn btn-outline-danger d-inline" wire:click="delete(' . $row->id . ')">Trash</button>';
                        return $edit . $delete;
                    }
                )->html(),


        ];
    }
    public function edit($id)
    {
    }
}
