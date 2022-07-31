<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MenuModel;
use App\Models\TipoMenu;
use App\Models\Local;
use Illuminate\Support\Facades\DB;
class Menu extends Component
{
    public $_id;
    public $_Titulo,$_Descripcion,$_Valor,$_id_local,$_id_tipomenu,$InsertOrUpdate=true;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $m = TipoMenu::all();
        $l = Local::all();
        $frm = DB::table('menu')
        ->join('local','menu.id_local','=','local.id')
        ->join('tipomenu','menu.id_tipomenu','=','tipomenu.id')
        ->select('local.Nombre','tipomenu.Menu','menu.Titulo','menu.Descripcion','menu.Valor','menu.id')
        ->where('menu.Estado',1)->paginate(3);;

        return view('livewire.menu',compact('m','l','frm'));
    }

    public function Save(){
        $this->validate();
        MenuModel ::create([
            'Titulo' => $this->_Titulo,
            'Descripcion' => $this->_Descripcion,
            'Valor' => $this->_Valor,
            'Estado' => 1,
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

    public function Edit($id){
        $m= MenuModel::find($id);
        $this->_id = $id;
        $this->_Titulo=$m->Titulo;
        $this->_Descripcion=$m->Descripcion;
        $this->_Valor=$m->Valor;
        $this->_id_local=$m->id_local;
        $this->_id_tipomenu=$m->id_tipomenu;
        $this->InsertOrUpdate = false;
    }

    public function Update(){
        $m =MenuModel::find( $this->_id);
        $m->update([
            'Titulo' => $this->_Titulo,
            'Descripcion' => $this->_Descripcion,
            'Valor' => $this->_Valor,
            'Estado' => 1,
            'id_local' => $this->_id_local,
            'id_tipomenu' => $this->_id_tipomenu,
        ]);
        $this->reset();
    }

    public function DestroyP($id){
        
        $m = MenuModel::find($id);
        $m->update([
            'Estado' => 0
        ]);
        $this->reset();
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
