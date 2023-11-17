<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Newsletter;

class AgregarSubscriptorController extends Controller
{

    public function agregarSub(Request $request)
    {

        Newsletter::create([
            'email' => $request->get('subscriptor')]
        ); 

        return redirect()->route('/');
    }

}

