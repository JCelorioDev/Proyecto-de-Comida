<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Persona;
use App\Models\MenuModel;
use App\Models\EstadoVenta;
use App\Models\Venta;

class Pedido extends Component
{
    public $Fecha_,$Descripcion_,$Total_,$_id_persona,$_id_menu,$_id_estadocuenta;

    public function render()
    {
        $p = Persona::where('id_tipopersona',2)->get();
        $m = MenuModel::all();
        $d = Persona::where('id_tipopersona',1)->get();
        $ec = EstadoVenta::all();
        return view('livewire.pedido',compact('p','m','ec'));
    }

    public function Save(){
        Venta ::create([
            'Fecha' => $this->Fecha_,
            'Descripcion' => $this->Descripcion_,
            'Total' => $this->Total_,
            'id_persona' => $this->_id_persona,
            'id_menu' => $this->_id_menu,
            'id_estadocuenta' => $this->_id_estadocuenta,
        ]);
        $this->reset();
    }
}
