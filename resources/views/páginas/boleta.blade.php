@extends('index')
@section('boleta')

<div class="container boleta bg-white">
    <section class="contenido-boleta">
        <img src="{{ url('img/webpay_logo.png') }}" width="300" height="70" class="logo-transbank"alt="">
        <h2 class="titulo-boleta">Comprobante de Pedido</h2>
        @if(isset($_GET['compra_id']))
            <?php $compra = \App\Models\Pago::find($_GET['compra_id']); ?>
            @if($compra)
            <p class="subtitulo-boleta text-muted">El pago ha sido procesado de manera correcta por <span class="text-primary">Webpay</span>
            para la Biblioteca de Duoc UC.A continuación se muestran los datos de la compra:</p>
            <hr/>
            <h5>Método de pago<span>Debito</span></h5>
            <hr/>
            <h5>Orden</h5>
            <h5 class="text-primary">{{$compra->token_ws}}</h5>
            <hr/>
            <h5>Cuotas<span>0</span></h5>
            <hr/>
            <h5>Fecha:<span>{{$compra->created_at}}</span></h5>
            <hr/>
            <h5 style="font-weight: bold">Monto Total<span class="text-success">${{$compra->total}}</span></h5>
            <hr/>
            @else
                <p>Compra no encontrada.</p>
            @endif
        @else
            <p>No se proporcionó el ID de la compra.</p>
        @endif
    </section>
    <p class="footer-boleta text-muted">Pago procesado por Transbank.</p>
</div>

@endsection