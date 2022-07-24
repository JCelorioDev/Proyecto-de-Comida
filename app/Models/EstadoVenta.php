<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoVenta extends Model
{
    protected $table= 'estadocuenta';
    public $timestamps =false;
    public $fillable = ['Estado'];
}