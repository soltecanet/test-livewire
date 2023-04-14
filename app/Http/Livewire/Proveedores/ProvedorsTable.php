<?php

namespace App\Http\Livewire\Proveedores;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Supplier;
use Carbon\Carbon;

class ProvedorsTable extends DataTableComponent
{
    protected $model = Supplier::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Direction", "direction")
                ->sortable(),
            Column::make("Region", "region.name")
                ->sortable(),
            Column::make("Commune id", "commune.name")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->format(
                    fn($value, $row, Column $column) =>  Carbon::createFromTimestamp(strtotime($row->updated_at))->format('d/m/Y')
                )
                ->deselected()
                ->sortable(),
            Column::make('Acciones','id')
                ->view('includes.actions-supplider'),
        ];
    }


    public function editar($id) {
        redirect()->route('supplier.edit', $id);
    }

    public function remove($id) {
        $reg = Supplier::find($id);
        $reg->delete();
        session()->flash('message','El Registro fue eliminado exitosamente.');
        redirect()->route('supplier.index');
    }






}
