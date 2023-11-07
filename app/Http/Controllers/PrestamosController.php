<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Reserva;

class PrestamosController extends Controller
{
    //Este controlador se usara para los prestamos
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Función para realizar el prestamo de un libro.
    public function prestamo(Request $request) {
        $dias = 7;
        $id_libro = $request->input('id_libro');
        $id_sede = $request->input('id_sede');
        $id_user = Auth::user()->id;
        $fecha_inicio = now();
        $fecha_termino = $fecha_inicio->copy()->addWeek();
        $reservado = false;
        
        // Verificar si el usuario ya ha realizado un préstamo para el mismo libro
        $prestamoExistente = Reserva::where('id_user', $id_user)
            ->where('id_libro', $id_libro)
            ->first();
    
        if ($prestamoExistente) {
            // Mostrar mensaje de alerta en la vista
            return redirect()->route('detalleLibro', ['id' => $id_libro])
                ->with('error', 'Ya has realizado un préstamo para este libro');
        } else {
            
            // Insertar los datos en la tabla reserva
            Reserva::create([
                'dias' => $dias,
                'id_libro' => $id_libro,
                'id_sede' => $id_sede,
                'id_user' => $id_user,
                'fecha_inicio' => $fecha_inicio,
                'fecha_termino' => $fecha_termino,
                'reservado'=> $reservado,
            ]);
    
            return redirect()->route('detalleLibro', ['id' => $id_libro])
                ->with('success', 'Préstamo guardado');
        }
    }
    
    //Función para poder visualizar los libros prestados
    public function verPrestamos(){
        $id_user = Auth::user()->id;
        //Seleccionamos los libros según el usuario.
        $prestamos = Reserva::select('libros.titulo','libros.autor','reservas.fecha_inicio','reservas.fecha_termino')
            ->join('libros','reservas.id_libro','=','libros.id')
            ->where('reservas.id_user', $id_user)
            ->get();
        $historialPrestamos = Reserva::select('libros.titulo','libros.autor','reservas.fecha_inicio','reservas.deleted_at')
        ->join('libros','reservas.id_libro','=','libros.id')
        ->where('reservas.id_user', $id_user)
        ->whereNotNull('reservas.deleted_at')
        ->get();
        // Convertir las fechas en objetos Carbon para poder ver solo dia/mes/año.
        foreach ($prestamos as $prestamo) {
            $prestamo->fecha_inicio = \Carbon\Carbon::parse($prestamo->fecha_inicio);
            $prestamo->fecha_termino = \Carbon\Carbon::parse($prestamo->fecha_termino);
        };
        foreach ($historialPrestamos as $historialPrestamo) {
            $historialPrestamo->fecha_inicio = \Carbon\Carbon::parse($historialPrestamo->fecha_inicio);
            $historialPrestamo->deleted_at = \Carbon\Carbon::parse($historialPrestamo->fecha_termino);
        };
        //**************************************************************** */
        return $prestamos->isEmpty()
            ? view('páginas.prestamo')->with('error', 'No tienes préstamos en este momento.')
            : view('páginas.prestamo')->with(['prestamos' => $prestamos,'historialPrestamos' => $historialPrestamos]);
    }
}