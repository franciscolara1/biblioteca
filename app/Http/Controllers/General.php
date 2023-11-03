<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sede;

class General extends Controller
{
    //Traer Horario de biblioteca
    public function horarios() {
        $horarios = Sede::all();
        return view("páginas.horarios", ['horarios'=> $horarios]);
    }
}
