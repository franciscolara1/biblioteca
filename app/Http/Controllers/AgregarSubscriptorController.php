<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Newsletter;

class AgregarSubscriptorController extends Controller
{

    public function agregarSub(Request $request)
    {

        Newsletter::create([
            'email' => $email]); 
        return redirect()->route('/')->with('success', 'Correo registrado correctamente');}
}

}