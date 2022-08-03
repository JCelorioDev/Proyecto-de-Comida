<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MenuModel;
use App\Models\TipoMenu;
use App\Models\Local;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;
class Menu extends Component
{
    public $_id,$id_cliente;
    public $_Titulo,$_Descripcion,$_Valor,$_id_local,$_id_tipomenu,$InsertOrUpdate=true,$buscar;
    protected $queryString = ['buscar'];
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $m = TipoMenu::all();
        $l = Local::all();
        $frm = DB::table('menu')
        ->join('local','menu.id_local','=','local.id')
        ->join('tipomenu','menu.id_tipomenu','=','tipomenu.id')
        ->select('local.Nombre','tipomenu.Menu','menu.Titulo','menu.Descripcion','menu.Valor','menu.id')
        ->where('menu.id_tipomenu',1)->get();
        $frm2 = DB::table('menu')
        ->join('local','menu.id_local','=','local.id')
        ->join('tipomenu','menu.id_tipomenu','=','tipomenu.id')
        ->select('local.Nombre','tipomenu.Menu','menu.Titulo','menu.Descripcion','menu.Valor','menu.id')
        ->where('menu.id_tipomenu',2)->get();
        $frm3 = DB::table('menu')
        ->join('local','menu.id_local','=','local.id')
        ->join('tipomenu','menu.id_tipomenu','=','tipomenu.id')
        ->select('local.Nombre','tipomenu.Menu','menu.Titulo','menu.Descripcion','menu.Valor','menu.id')
        ->where('menu.id_tipomenu',3)->get();
        $Menus = MenuModel::all();
        $cliente = Persona::where( 'Cedula', 'like', '%'.$this->buscar.'%')->get();
        return view('livewire.menu',compact('m','l','frm','frm2','frm3','cliente','Menus'));
    }
}
