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
    public function prestamo(Request $request) {
        $dias = 7;
        $id_libro = $request->input('id_libro');
        $id_sede = $request->input('id_sede');
        $id_user = Auth::user()->id;
        $fecha_inicio = now();
        $fecha_termino = $fecha_inicio->copy()->addWeek();
        
        // Verificar si el usuario ya ha realizado un préstamo para el mismo libro
        $prestamoExistente = Reserva::where('id_user', $id_user)
            ->where('id_libro', $id_libro)
            ->first();
    
        if ($prestamoExistente) {
            // Mostrar mensaje de alerta en la vista
            return redirect()->route('detalleLibro', ['id' => $id_libro])
                ->with('error', 'Ya has realizado un préstamo para este libro');
        } else {
            // Verificar si el usuario ha prestado cualquier libro
            $prestamoCualquierLibro = Reserva::where('id_user', $id_user)->first();
    
            // Insertar los datos en la tabla reserva
            Reserva::create([
                'dias' => $dias,
                'id_libro' => $id_libro,
                'id_sede' => $id_sede,
                'id_user' => $id_user,
                'fecha_inicio' => $fecha_inicio,
                'fecha_termino' => $fecha_termino,
            ]);
    
            return redirect()->route('detalleLibro', ['id' => $id_libro])
                ->with('success', 'Préstamo guardado');
        }
    }
}
