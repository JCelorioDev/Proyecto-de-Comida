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
        $p = Persona::where('id_tipopersona',1)->get();
        return view('livewire.datos-dueño',compact('t','p'));
    }

    public function Save(){
        $this->validate();
        Persona ::create([
            'Cedula' => $this->_Cedula,
            'Nombre' => $this->_Nombre,
            'Apellido' => $this->_Apellido,
            'Telefono' => $this->_Telefono,
            'Direccion' => $this->_Direccion,
            'id_tipopersona' => $this->_id_tipopersona,
        ]);
        $this->reset();
        session()->flash('message', 'Guardado Correctamente.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $rules = [
        '_Cedula' => 'required|min:10|max:10',
        '_Nombre' => 'required|min:3',
        '_Apellido' => 'required|min:5',
        '_Telefono' => 'required|min:10|max:10',
        '_Direccion' => 'required|min:3',
    ];

    protected $messages = [
        '_Cedula.required' => 'El Campo es Requerido',
        '_Cedula.min' => 'El Campo es de 10 Dígitos Minimo',
        '_Cedula.max' => 'El Campo es de 10 Dígitos Máximo',
        '_Nombre.required' => 'El Campo es Requerido',
        '_Nombre.min' => 'El Campo es de 3 Caracteres Minimo',
        '_Apellido.required' => 'El Campo es Requerido',
        '_Apellido.min' => 'El Campo es de 5 Caracteres Minimo',
        '_Telefono.required' => 'El Campo es Requerido',
        '_Telefono.min' => 'El Campo es de 10 Dígitos Minimo',
        '_Telefono.max' => 'El Campo es de 10 Dígitos Máximo',
        '_Direccion.required' => 'El Campo es Requerido',
        '_Direccion.min' => 'El Campo es de 3 Caracteres Minimo',
    ];
}
