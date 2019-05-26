@extends('plantilla.master')
@section('content')


	@include('plantilla.nav')

	@include('plantilla.canvas')

	@include('plantilla.proximamente')

	@include('plantilla.form')

	@include('plantilla.footer')
	

<div id="bienvenida" class="modal">

		<img src="{{ asset('clientlibs/img/bienvenido.png') }}" width="100%" alt="">
		
</div>


<script type="text/javascript">
	
	/*
$("#bienvenida").modal({
                    fadeDuration: 100
              });


*/


               $("#gracias").modal({
                    escapeClose: false,
                    clickClose: false,
                    showClose: false,
                    fadeDuration: 100
        })


</script>
@endsection

