<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table= 'venta';
    public $timestamps =false;
    public $fillable = ['Fecha','Descripcion','Total','id_persona','id_menu','id_estadocuenta'];
}
