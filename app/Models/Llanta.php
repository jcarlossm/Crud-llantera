<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Llanta extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'nombre',
        'anchoLlanta',
        'diametroRin',
        'presionMax',
        'fabricante',
        'stock',
        'calificacion',
    ];
}
