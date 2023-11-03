<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'dias',
        'id_libro',
        'id_sede',
        'id_user',
        'fecha_inicio',
        'fecha_termino',
    ];
}
