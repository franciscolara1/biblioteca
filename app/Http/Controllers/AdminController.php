<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\reserva;
use App\Models\Morocidade;
use Carbon\Carbon;

class AdminController extends Controller
{
    //Método para ver todos los préstamos y buscar por nombre de alumno
    public function gestionarPrestamosAlumnos(Request $request){

        $query = Reserva::select('reservas.id','reservas.fecha_inicio','reservas.fecha_termino','reservas.deleted_at','reservas.id_user','reservas.sancion','users.name','libros.titulo')
                ->join('libros','libros.id','=','reservas.id_libro')
                ->join('users','users.id','=','reservas.id_user')
                ->orderBy('reservas.id','asc');
    
        $sanciones = Reserva::select(
                    'reservas.id',
                    'reservas.sancion',
                    'reservas.fecha_termino',
                    'reservas.deleted_at',
                    'users.name',
                    'reservas.id_user',                   
                    \DB::raw('(COALESCE(DAY(reservas.deleted_at) - DAY(reservas.fecha_termino))) AS dias_restantes')
                )
                ->join('users', 'users.id', '=', 'reservas.id_user')
                ->orderBy('reservas.id_user', 'asc');
        
        

    
        // Buscar por nombre de usuario si se proporciona un texto de búsqueda
        if ($request->has('nombre_texto')) {
            $texto = trim($request->get('nombre_texto'));
            $query->where('users.name','LIKE','%'.$texto.'%');
            $sanciones->where('users.name','LIKE','%'.$texto.'%');
        }
    
        $prestamos_alumnos = $query->paginate(10);

        $sanciones = $sanciones->paginate(10);
    
        foreach ($prestamos_alumnos as $prestamo) {
            $prestamo->fecha_inicio = Carbon::parse($prestamo->fecha_inicio);
            $prestamo->fecha_termino = Carbon::parse($prestamo->fecha_termino);
        }
    
        return view('páginas.admin',['prestamos_alumnos' => $prestamos_alumnos,'sanciones' => $sanciones]);
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

    //Sancionar alumno
    public function sancionar($id)
    {
    
    $reserva = Reserva::find($id);

    if ($reserva) {
        $reserva->update(['sancion' => $reserva->sancion == 1 ? 0 : 1]);
        
    }

    return redirect()->route('admin'); 
    }

    public function insertar_deuda(Request $request)
    {

        Morocidade::create([
            'dias_mora' => $request->get('dias_restantes'),
            'id_usuario' => $request->get('id_user'),
            'valor' => $request->get('valor'),
            ]
        ); 

        return redirect()->route('admin')->with('success','Deuda ingresada al sistema');
    }
}


         

