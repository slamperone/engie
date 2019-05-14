@extends('plantilla.master')
@section('content')


	@include('plantilla.nav')

    @include('plantilla.canvas')

<div class="premios-2">
<div class="title">
<h2>Premios</h2>
</div>
<div class="content">
<div class="photo"><img src="{{ asset('clientlibs/img/banner.png') }}" alt="Engie"></div>
<h2>Contesta correctamente nuestra trivia</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
<blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis consectetur</blockquote>
<p>*Para consultar los establecimientos en los que se puede pagar con la tarjeta de regalo, podrán visitar www.edenred.mx.</p>
<p>** Tarjetas de regalo de productos Denda México, S.A. de C.V. (“DENDA” y/o “DENDA MËXICO”), a través de su página oficial https//denda.com.mx. El ganador podrá utilizarlos para cualquier producto DENDA MÉXICO, en caso de elegir un producto de mayor precio, el ganador deberá pagar la diferencia, así como el costo de envío en caso de existir.</p>
<div class="clearfix"></div>
</div>
</div>

	@include('plantilla.footer')
	

@endsection

