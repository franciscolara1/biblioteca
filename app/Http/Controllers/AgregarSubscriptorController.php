<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Newsletter;

class AgregarSubscriptorController extends Controller
{

    public function agregarSub(Request $request)
    {

        $email = trim($request->get('subscriptor'));
        $contaremail = Newsletter::where('email',$email)->count();
        if($contaremail>0){
        /*colocar mensaje de que existe*/
        return redirect()->route('/')->with('success', 'Correo registrado con anterioridad, favor reintenta con un correo distinto');
        }else{
        Newsletter::create([
            'email' => $email]); 
        return redirect()->route('/')->with('success', 'Correo registrado correctamente');}
}

}

