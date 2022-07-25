<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Persona;
use App\Models\MenuModel;
use App\Models\EstadoVenta;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;

class Pedido extends Component
{
    public $_id,$venta;
    public $Fecha_,$Descripcion_,$Total_,$_id_persona,$_id_menu,$_id_estadocuenta,$InsertOrUpdate=true;

    public function render()
    {
        $p = Persona::where('id_tipopersona',2)->get();
        $m = MenuModel::all();
        $d = Persona::where('id_tipopersona',1)->get();
        $ec = EstadoVenta::all();
        $v = DB::table('venta')
        ->join('persona','venta.id_persona','=','persona.id')
        ->join('menu','venta.id_menu','=','menu.id')
        ->join('estadocuenta','venta.id_estadocuenta','=','estadocuenta.id')
        ->select('persona.Cedula','persona.Nombre','persona.Apellido','venta.Fecha','venta.Descripcion','venta.Total','venta.id','menu.Titulo','estadocuenta.estado')
        ->get();
        //$v = Venta::where('Estado',1)->get();
        return view('livewire.pedido',compact('p','m','ec','v'));
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $rules = [
        'Fecha_' => 'required',
        'Descripcion_' => 'required|min:5',
        'Total_' => 'required',
    ];

    protected $messages = [
        'Fecha_.required' => 'El Campo es Requerido',
        'Descripcion_.required' => 'El Campo es Requerido',
        'Descripcion_.min' => 'El Campo es de 5 Caracteres Minimo',
        'Total_.required' => 'El Campo es Requerido',
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
            'id_estadocuenta' => $this->_id_estadocuenta,
        ]);
        $this->reset();
        session()->flash('message', 'Guardado Correctamente.');
    }

    public function Edit($id){
        $v= Venta::find($id);
        $this->_id = $id;
        $this->Fecha_=$v->Fecha;
        $this->Descripcion_=$v->Descripcion;
        $this->Total_=$v->Total;
        $this->_id_persona=$v->id_persona;
        $this->_id_menu=$v->id_menu;
        $this->_id_estadocuenta=$v->id_estadocuenta;
        $this->InsertOrUpdate = false;
    }

    public function Update(){
        $this->validate();
        $venta =Venta::find( $this->_id);
        $venta->update([
            'Fecha' => $this->Fecha_,
            'Descripcion' => $this->Descripcion_,
            'Total' => $this->Total_,
            'Estado' => 1,
            'id_persona' => $this->_id_persona,
            'id_menu' => $this->_id_menu,
            'id_estadocuenta' => $this->_id_estadocuenta,
        ]);
        $this->reset();
        session()->flash('message', 'Actualizado Correctamente.');
    }

    public function DestroyP($id){
        
        $venta = Venta::find($id);
        $venta->update([
            'Estado' => 0
        ]);
        $this->reset();
    }
}
