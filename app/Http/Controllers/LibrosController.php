<?php

namespace App\Http\Controllers;


use App\Models\Libro;

class LibrosController extends Controller
{
    //Mostrar libros
    public function index(){
        $libros = Libro::all();
        return view('páginas.principal', ['libros' => $libros]);
    }
}
