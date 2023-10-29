<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Categoria;
use App\Models\stock;

use Illuminate\Support\Facades\DB;
class FiltrosController extends Controller
{

    
    public function filtro($categoria_id){
        // Obtener el nombre de la categoría
        $nombreCategoria = Categoria::where('id', $categoria_id)->value('nombre_categoria');

        // Obtener los libros de la categoría especificada
        $libros = Libro::select('libros.id','libros.titulo', 'libros.img')
            ->where('categoria_id', $categoria_id)
            ->get();

        // Pasar los datos a la vista
        return view('páginas.libro', compact('libros', 'nombreCategoria'));
    }
    
    //Código para realizar la búsqueda de los libros por palabra clave.
    public function busqueda(Request $request){
        
        $texto=trim($request->get('texto'));
        $nombreCategoria = 'Resultados de búsqueda: '.$texto;
        $libros=DB::table('libros')
                 ->select('id','titulo','img')
                 ->where('titulo','LIKE','%'.$texto.'%')
                 ->orderBy('titulo','asc')
                 ->get();
        return view('páginas.libro',compact('libros', 'nombreCategoria'));
    }
    
    //Este código permite ver en detalle cada libro.
    public function detalle($id) {
        $libro = Libro::select('libros.*','categorias.nombre_categoria')
                ->join('categorias','libros.categoria_id','=','categorias.id')
                ->where('libros.id', $id)->first();
        $stock = Stock::select('libros.id','stocks.cantidad','sedes.nombre_sede')
        ->join('sedes','sedes.id','=','stocks.id_sede')
        ->join('libros','libros.id','=','stocks.id_libro')
        ->where('id_libro', $id)
        ->get(); 
        return view('páginas.detalleLibro',['libro' => $libro, 'stock' => $stock]);
    }
}
