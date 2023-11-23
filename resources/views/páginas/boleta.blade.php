@extends('index')
@section('boleta')


<div class="container boleta bg-white">
    <section class="contenido-boleta">
        <img src="{{ url('img/webpay_logo.png') }}" width="300" height="70" class="logo-transbank"alt="">
        <h2 class="titulo-boleta">Comprobante de Pedido</h2>
        <p class="subtitulo-boleta text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Ad voluptatem tempora quisquam cupiditate hic, ut id animi vel ducimus mollitia?</p>
        <hr/>
        <h5>Método de pago<span>hola</span></h5>
        <hr/>
        <h5>Orden<span>hola</span></h5>
        <hr/>
        <h5>Cuotas<span>0</span></h5>
        <hr/>
        <h5 style="font-weight: bold">Monto Total<span class="text-success">$300</span></h5>
        <hr/>
    </section>
    <p class="footer-boleta text-muted">Pago procesado por Transbank.</p>
</div>








@endsection