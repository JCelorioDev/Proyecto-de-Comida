<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MenuModel;
use App\Models\TipoMenu;
use App\Models\Local;

class Menu extends Component
{
    public $_Titulo,$_Descripcion,$_Valor,$_id_local,$_id_tipomenu;
    public function render()
    {
        $m = TipoMenu::all();
        $l = Local::all();
        return view('livewire.menu',compact('m','l'));
    }

    public function Save(){
        $this->validate();
        MenuModel ::create([
            'Titulo' => $this->_Titulo,
            'Descripcion' => $this->_Descripcion,
            'Valor' => $this->_Valor,
            'id_local' => $this->_id_local,
            'id_tipomenu' => $this->_id_tipomenu,
        ]);
        $this->reset();
        session()->flash('message', 'Guardado Correctamente.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $rules = [
        '_Titulo' => 'required|min:3',
        '_Descripcion' => 'required|min:5',
        '_Valor' => 'required'
    ];

    protected $messages = [
        '_Titulo.required' => 'El Campo es Requerido',
        '_Titulo.min' => 'El Campo es de 3 Caracteres Minimo',
        '_Descripcion.required' => 'El Campo es Requerido',
        '_Descripcion.min' => 'El Campo es de 5 Caracteres Minimo',
        '_Valor.required' => 'El Campo es Requerido',
    ];
}
