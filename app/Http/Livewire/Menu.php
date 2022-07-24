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
        MenuModel ::create([
            'Titulo' => $this->_Titulo,
            'Descripcion' => $this->_Descripcion,
            'Valor' => $this->_Valor,
            'id_local' => $this->_id_local,
            'id_tipomenu' => $this->_id_tipomenu,
        ]);
        $this->reset();
    }
}
