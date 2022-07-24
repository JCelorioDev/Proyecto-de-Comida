<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Persona;
use App\Models\Local;
use Illuminate\Support\Facades\DB;
class DatosLocal extends Component
{
    public $_id_persona,$_NombreLocal,$_Telefono,$_Apertura;

    public function render()
    {
        $p = DB::table('persona')
        ->join('tipopersona','persona.id_tipopersona','=','tipopersona.id')
        ->select('persona.id','persona.Nombre','persona.Apellido','tipopersona.Tipo')
        ->get();

        return view('livewire.datos-local',compact('p'));
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
}
