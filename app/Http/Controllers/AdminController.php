<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reserva;

class AdminController extends Controller
{
    //METODO PARA BUSCAR A LOS ALUMNOS.
    /* 
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
    */

    //Método para ver todos los préstamos 
    public function gestionarPrestamosAlumnos(){

        $prestamos_alumnos = Reserva::select('reservas.id','reservas.fecha_inicio','reservas.fecha_termino','reservas.deleted_at','reservas.id_user','users.name','libros.titulo')
                ->join('libros','libros.id','=','reservas.id_libro')
                ->join('users','users.id','=','reservas.id_user')
                ->orderBy('reservas.id','asc')
                ->paginate(10);

        foreach ($prestamos_alumnos as $prestamo) {
            $prestamo->fecha_inicio = \Carbon\Carbon::parse($prestamo->fecha_inicio);
            $prestamo->fecha_termino = \Carbon\Carbon::parse($prestamo->fecha_termino);
            
        };

        return view('páginas.admin',['prestamos_alumnos' => $prestamos_alumnos]);


    }
    //Marcar como devuelto
    public function marcarDevuelto($id)
    {
    $reserva = Reserva::find($id);

    if ($reserva) {
        $reserva->update(['deleted_at' => now()]);
        
    }

    return redirect()->route('admin'); 
    }
}
