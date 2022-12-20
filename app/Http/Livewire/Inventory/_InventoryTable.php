<?php

namespace App\Http\Livewire\Inventory;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Inventory;

class _InventoryTable extends DataTableComponent
{
    protected $model = Inventory::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("No Inventaris", "kode")
                ->sortable()
                ->searchable(),
            Column::make("Kategori", "inventorycategory.nama")
                ->sortable()
                ->searchable(),
            Column::make("ruang", "ruang.nama")
                ->sortable()
                ->searchable(),
            Column::make("Merk", "merek")
                ->sortable()
                ->searchable(),
            Column::make("No Seri", "no_seri")
                ->sortable(),
            Column::make("Kondisi", "kondisi")
                ->sortable(),
            Column::make("Tgl Pengadaan", "tanggal_pengadaan")
                ->sortable(),
            Column::make("Sumber Dana", "sumber_dana")
                ->sortable(),
            Column::make("Sumber Perolehan", "sumber_perolehan")
                ->sortable(),
            Column::make("Harga Perolehan", "harga_perolehan")
                ->sortable(),
            Column::make("Jumlah", "jumlah")
                ->sortable(),
            Column::make("satuan", "satuan")
                ->sortable(),
            Column::make('Actions')
                ->label(
                    function ($row, Column $column) {
                        $delete = '<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 rounded m-1" wire:click="delete(' . $row->id . ')">Trash</button>';
                        $edit = '<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 rounded m-1" wire:click="edit(' . $row->id . ')">Edit</button>';
                        return $edit . $delete;
                    }
                )->html(),

        ];
    }


    public function filters(): array
    {
        return [
            SelectFilter::make('sumber_dana')
                ->options([
                    '' => 'All',
                    'bos smp' => 'Bos SMP',
                ]),
        ];
    }
}
