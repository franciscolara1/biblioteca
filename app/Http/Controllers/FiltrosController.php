<?php

namespace App\Http\Controllers;

use App\Models\Libro;

class FiltrosController extends Controller
{

    //
    public function filtro(){
        // Obtener los libros de la categoría especificada
        $libros = Libro::where('categoria_id','=',1)->get();
        
        // Redirigir a una página y pasar los libros como datos
        return view('páginas.libro')->with('libros', $libros);
    }
}
