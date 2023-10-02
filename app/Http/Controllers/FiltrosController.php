<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Illuminate\Support\Facades\DB;
class FiltrosController extends Controller
{

    
    public function filtro($categoria_id){
        // Obtener los libros de la categoría especificada
        $libros = Libro::where('categoria_id', $categoria_id)->get();
        
        // Redirigir a una página y pasar los libros como datos
        return view('páginas.libro')->with('libros', $libros);
    }
    
}
