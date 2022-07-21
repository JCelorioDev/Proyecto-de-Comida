<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table= 'persona';
    public $timestamps =false;
    public $fillable = ['Cedula','Nombre','Apellido','Telefono','Direccion','id_tipopersona'];
}
