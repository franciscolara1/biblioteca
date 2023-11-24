<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Morocidade;
use Illuminate\Http\Request;
use Transbank\Webpay\WebpayPlus;
use Transbank\Webpay\WebpayPlus\Transaction;


class TransbankController extends Controller
{
    //
    public function __construct()
    {
        if( app()->environment('production')){
            WebpayPlus::configureForProduction(
                env('webpay_plus_cc'),
                env('webpay_plus_api_key')
            );
        } else {
            WebpayPlus::configureForTesting();
        }
    }

    public function iniciar_compra(Request $request)
    {
        $nueva_compra = new Pago();
        $nueva_compra->session_id = $request->get('id_sesion');
        $nueva_compra->total = $request->get('valor');
        $nueva_compra->status = 1; //Estado inicial
        $nueva_compra->save();
        $url_to_pay = self::start_web_pay_plus_transaction($nueva_compra);
        
        // Redirige al usuario a la URL de Transbank
        return redirect($url_to_pay);
        
    }

    public function start_web_pay_plus_transaction($nueva_compra)
    {
        $transaccion = (new Transaction)->create(
            $nueva_compra->id,  //buy_order
            $nueva_compra->session_id, // session_id
            $nueva_compra->total, //amount
            route('confirmar_pago')  //return url
        );
        $url = $transaccion->getUrl().'?token_ws='.$transaccion->getToken();
        return $url;
    }

    public function confirmar_pago(Request $request)
    {
        $confirmacion = (new Transaction)->commit($request->post('token_ws'));

        $compra = Pago::where('id', $confirmacion->buyOrder)->first();
        /*
        $quitar_mora = Morocidade::where('id_usuario',$compra->session_id)->get();
        $quitar_mora->dias_mora= 0;
        $quitar_mora->valor = 0;
        $quitar_mora->update();
        Morocidade::where('id_usuario', $compra->session_id)->update([
            'dias_mora' => 0,
            'valor' => 0,
        ]);
        */
        // Actualizar múltiples filas con el mismo id_usuario
        Morocidade::where('id_usuario', $compra->session_id)->delete();

        if($confirmacion->isApproved()) {
            $compra->status = 2; //Aprobada
            $compra->update();
            
            return redirect(env('URL_FRONTEND_AFTER_PAYMENT')."?compra_id={$compra->id}" );

        } else {
            //Fallida o Rechazada....
            return redirect(env('URL_FRONTEND_AFTER_PAYMENT')."?compra_id={$compra->id}" );
        }

    }
}
