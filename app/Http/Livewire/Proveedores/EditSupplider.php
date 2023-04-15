<?php

namespace App\Http\Livewire\Proveedores;

use App\Models\Region;
use App\Models\Commune;
use Livewire\Component;
use App\Models\Supplier;
use App\Http\Requests\SaveSupplierRequest;

class EditSupplider extends Component
{

    public Supplier $supplier;
    public $regiones;
    public $comunas;


    public function mount($id) {

        $suppl = Supplier::find($id);
        if ($suppl  == null) {
            return redirect()->route('supplier.index');
        } else {
            $this->supplier = $suppl;
            $this->regiones = Region::pluck('name', 'id');
            $this->getComunas($this->supplier->region_id);
        }

    }

    protected function rules() {
        $request = new SaveSupplierRequest();
        return $request->rules($this->supplier);
    }


    protected function messages() {
        $request = new SaveSupplierRequest();
        return $request->messages();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }



    public function getComunas($id) {
        $this->comunas = Commune::where('region_id', '=', $id)
                                ->pluck('name', 'id');
    }

    public function save() {
        $this->validate();
        $this->supplier->save();
        session()->flash('message','El proveedor fue actualizado exitosamente.');
        redirect()->route('supplier.index');
    }


    public function render()
    {
      //  dd($this->supplier, $this->regiones, $this->comunas );

        return view('livewire.proveedores.edit-supplider', [
            'regiones' => $this->regiones,
            'comunas' => $this->comunas
        ]);
    }


}
