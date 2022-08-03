<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menu extends Controller
{
    public function Principal(){
        return view('dashboard');
    }
    public function ShowDataOfOwner(){
        return view('Paginas.DatosDueño');
    }

    public function ShowDataOfLocal(){
        return view('Paginas.DatosLocal');
    }

    public function ShowDataOfOrder(){
        return view('Paginas.Pedido');
    }

    public function ShowDataOfMenu(){
        return view('Paginas.Menu');
    }

    public function ShowDataOfVenta(){
        return view('Paginas.Venta');
    }
}
