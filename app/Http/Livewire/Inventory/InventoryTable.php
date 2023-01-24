<?php

namespace App\Http\Livewire\Inventory;

use App\Models\Inventory;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class InventoryTable extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    use LivewireAlert;

    public $perpage = 10;
    public $search;
    public $columns = 'nama';
    public $inventoryId;
    public $ruang = 0;
    public $listeners = ['confirmed' => 'confirmed'];


    public function render()
    {
        if ($this->ruang == 0) {
            $data = Inventory::with('InventoryCategory')
                ->with('Ruang')
                ->with('Danainventory')
                ->orderBy($this->columns, 'asc')
                ->where('status', 1)
                ->Where('nama', 'like', "%" . $this->search . "%")
                ->paginate($this->perpage);
        } else {
            $data = Inventory::with('InventoryCategory')
                ->with('Ruang')
                ->with('Danainventory')
                ->orderBy($this->columns, 'asc')
                ->where(['status' => 1, 'ruang_id' => $this->ruang])
                ->Where('nama', 'like', "%" . $this->search . "%")
                ->paginate($this->perpage);
        }


        return view('livewire.inventory.inventory-table', [
            'data' => $data
        ]);
    }
    public function sortColumn($column)
    {
        $this->columns = $column;
    }

    public function updatingSearch(): void
    {
        $this->gotoPage(1);
    }


    public function showConfirm($id)
    {
        $this->alert('question', 'Yakin untuk menghapus?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Ya',
            'onConfirmed'       => 'confirmed',
            'showCancelButton'  => true,
            'cancelButtonText'  => 'tidak',
            'position'          => 'center'
        ]);
        $this->inventoryId = $id;
    }

    public function confirmed()
    {
        Inventory::where('id', $this->inventoryId)->delete();
        $this->alert('success', 'data berhasil dihapus', [
            'position' => 'center'
        ]);
    }
}
