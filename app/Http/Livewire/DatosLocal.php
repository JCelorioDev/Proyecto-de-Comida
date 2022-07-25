<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Persona;
use App\Models\Local;
use App\Models\TipoPersona;
use App\Models\Sucursal;
use Illuminate\Support\Facades\DB;
class DatosLocal extends Component
{
    public $_id_persona,$_NombreLocal,$_NombreSucursal,$_Telefono,$_Apertura,$_id_sucursal;

    public function render()
    {
        $p = DB::table('persona')
        ->join('tipopersona','persona.id_tipopersona','=','tipopersona.id')
        ->select('persona.id','persona.Nombre','persona.Apellido','tipopersona.Tipo')
        ->get();

        $s = Local::all();
        $su = Sucursal::all();
        $d = Persona::where('id_tipopersona',1)->get();
        $l = DB::table('local')
        ->join('persona','local.id_persona','=','persona.id')
        ->select('local.Nombre','local.Telefono','local.AñoCreacion','persona.Cedula')
        ->get();
        
        return view('livewire.datos-local',compact('p','d','l','s','su'));
    }

    public function Save(){
            Local ::create([
                'Nombre' => $this->_NombreLocal,
                'Telefono' => $this->_Telefono,
                'AñoCreacion' => $this->_Apertura,
                'id_persona' => $this->_id_persona,
            ]);
            $this->reset();
    }

    public function Save2(){
            Sucursal ::create([
                'Nombre' => $this->_NombreSucursal,
                'id_local' => $this->_id_sucursal,
            ]);
            $this->reset();
    }
}
