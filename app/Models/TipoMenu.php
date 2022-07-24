<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMenu extends Model
{
    protected $table= 'tipomenu';
    public $timestamps =false;
    public $fillable = ['Menu'];
}