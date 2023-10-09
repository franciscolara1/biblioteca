<?php

namespace App\Http\Controllers;


use App\Models\Libro;

class LibrosController extends Controller
{

    public function mostrarResultados(){

        $informatica = $this->index();
        $turismo = $this->turismo();
        $literatura = $this->literatura();
        $historia = $this->historia();
        $biografia = $this->biografia();
        $diseño = $this->diseño();

        return view('páginas.principal', ['informatica' => $informatica, 'turismo' => $turismo
    , 'literatura' => $literatura, 'historia' => $historia, 'biografia' => $biografia, 'diseño' => $diseño]);
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
    public function historia(){
        $librosHistoria = Libro::all()->where('categoria_id','=',14);
        return $librosHistoria;
    }
    public function biografia(){
        $librosBiografia = Libro::all()->where('categoria_id','=',15);
        return $librosBiografia;
    }
    public function diseño(){
        $librosDiseño = Libro::all()->where('categoria_id','=',2);
        return $librosDiseño;
    }
}
