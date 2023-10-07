<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Categoria;

use Illuminate\Support\Facades\DB;
class FiltrosController extends Controller
{

    
    public function filtro($categoria_id){
        // Obtener el nombre de la categoría
        $nombreCategoria = Categoria::where('id', $categoria_id)->value('nombre_categoria');

        // Obtener los libros de la categoría especificada
        $libros = Libro::select('libros.titulo', 'libros.img')
            ->where('categoria_id', $categoria_id)
            ->get();

        // Pasar los datos a la vista
        return view('páginas.libro', compact('libros', 'nombreCategoria'));
    }
    /*
    //Código para realizar la búsqueda de los libros.
    public function busqueda(Request $request){

        $texto=trim($request->get('texto));
        $libros=DB::table('libros')
                 ->select('nombre','img')
                 ->where('nombre','LIKE','%'.$texto.'%')
                 ->orWhere(')
                 ->orderBy('nombre','asc)
        return view('páginas.libro');
    }
    */
    
}
