<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TipoPersona;
use App\Models\Persona;

class DatosDueño extends Component
{
    public $_Cedula,$_Nombre,$_Apellido,$_Telefono,$_Direccion,$_id_tipopersona;

    public function render()
    {
        $t = TipoPersona::all();
        return view('livewire.datos-dueño',compact('t'));
    }

    public function Save(){
        Persona ::create([
            'Cedula' => $this->_Cedula,
            'Nombre' => $this->_Nombre,
            'Apellido' => $this->_Apellido,
            'Telefono' => $this->_Telefono,
            'Direccion' => $this->_Direccion,
            'id_tipopersona' => $this->_id_tipopersona,
        ]);
        $this->reset();
    }
}
