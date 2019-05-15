@extends('plantilla.master')
@section('content')


	@include('plantilla.nav')

    @include('plantilla.canvas')

<div class="content-proximamente">
    <div class="banner-1"><img src="{{ asset('clientlibs/img/premios-1.png') }}" alt="Engie"></div>
    <div class="banner-2"><img src="{{ asset('clientlibs/img/premios-2.png') }}" alt="Engie"></div>
    <div class="clearfix"></div>
</div>

	@include('plantilla.footer')
	

@endsection

