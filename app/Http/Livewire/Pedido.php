<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Persona;
use App\Models\MenuModel;
use App\Models\EstadoVenta;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
class Pedido extends Component
{
    public $_id,$venta,$incremento=0,$Valor;
    protected $paginationTheme = 'bootstrap';
    public $Fecha_,$Descripcion_,$Total_=0,$_id_persona,$_id_menu,$_id_estadocuenta,$InsertOrUpdate=true;

    public function render()
    {
        $p = Persona::where('id_tipopersona',2)->get();
        $m = MenuModel::all();
        $d = Persona::where('id_tipopersona',1)->get();
        $ec = EstadoVenta::where('Estado',1)->get();

        //$v = Venta::where('Estado',1)->get();
        return view('livewire.pedido',compact('p','m','ec'));
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $rules = [
        'Fecha_' => 'required',
        'Descripcion_' => 'required|min:5',
    ];

    public function Prueba(){
        $this->incremento +=1; 
    }
    protected $messages = [
        'Fecha_.required' => 'El Campo es Requerido',
        'Descripcion_.required' => 'El Campo es Requerido',
        'Descripcion_.min' => 'El Campo es de 5 Caracteres Minimo',
    ];

    public function Save(){
        $this->validate();
        Venta ::create([
            'Fecha' => $this->Fecha_,
            'Descripcion' => $this->Descripcion_,
            'Total' => $this->Total_,
            'Estado' => 1,
            'id_persona' => $this->_id_persona,
            'id_menu' => $this->_id_menu,
            'id_estadocuenta' => 1,
        ]);
        $this->reset();
        session()->flash('message', 'Guardado Correctamente.');
    }
}
