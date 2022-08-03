<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Venta;

class Ventas extends Component
{
    public $Total_,$incremento=0;

    public function render()
    {
        $v = DB::table('venta')
        ->join('persona','venta.id_persona','=','persona.id')
        ->join('menu','venta.id_menu','=','menu.id')
        ->join('estadocuenta','venta.id_estadocuenta','=','estadocuenta.id')
        ->select('persona.Cedula','persona.Nombre','persona.Apellido','venta.Fecha','venta.Descripcion','venta.Total','venta.id','menu.Titulo','menu.Valor','estadocuenta.estado')
        ->where( 'venta.Estado',1,2)->paginate(3);
        $ecv = DB::table('venta')
        ->join('estadocuenta','venta.id_estadocuenta','estadocuenta.id')
        ->select('estadocuenta.estado','estadocuenta.id')
        ->get();
        foreach ($ecv as $item) {
            $this->Prueba();
        }
        return view('livewire.ventas',compact('v','ecv'));
    }

    public function DestroyP($id){
        
        $venta = Venta::find($id);
        $venta->update([
            'Estado' => 0,
            'id_estadocuenta' => 3
        ]);
        $this->reset();
    }

    public function Prueba(){
        $this->incremento +=1; 
    }
}
