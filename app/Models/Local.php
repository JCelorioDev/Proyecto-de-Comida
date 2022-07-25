<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table= 'local';
    public $timestamps =false;
    public $fillable = ['Nombre','Telefono','AñoCreacion','id_persona'];
}
