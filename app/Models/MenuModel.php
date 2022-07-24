<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    protected $table= 'menu';
    public $timestamps =false;
    public $fillable = ['Titulo','Descripcion','Valor','id_local','id_tipomenu'];
}
