<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPersona extends Model
{
    protected $table= 'tipopersona';
    public $timestamps =false;
    public $fillable = ['Tipo'];
}
