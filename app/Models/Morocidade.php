<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morocidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'dias_mora',
        'valor',
        'id_usuario',
    ];
}
