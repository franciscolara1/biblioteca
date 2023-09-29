<?php

namespace App\Http\Controllers;


use App\Models\Libro;

class LibrosController extends Controller
{

    public function mostrarResultados(){

        $informatica = $this->index();
        $turismo = $this->turismo();
        $literatura = $this->literatura();

        return view('páginas.principal', ['informatica' => $informatica, 'turismo' => $turismo
    , 'literatura' => $literatura]);
    }
    //Mostrar libros de informática.
    public function index(){
        $libros = Libro::all()->where('categoria_id','=',1);
        return $libros;
    }
    //Mostrar libros de turismo.
    public function turismo(){
        $librosTurismo = Libro::all()->where('categoria_id','=',7);
        return $librosTurismo;
    }

    public function literatura(){
        $librosLiteratura = Libro::all()->where('categoria_id','=',13);
        return $librosLiteratura;
    }
}
