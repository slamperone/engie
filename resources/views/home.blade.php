@extends('plantilla.master')
@section('content')


	@include('plantilla.nav')

	@include('plantilla.canvas')

	@include('plantilla.proximamente')


	@include('plantilla.footer')
	


<style type="text/css">
	
	@font-face {
  font-family: "ClanOt-Bold";
  src: url("{{ asset('clientlibs/fonts/clanot-bold.eot') }}");
  src: url("{{ asset('clientlibs/fonts/clanot-bold.eot?') }}") format("embedded-opentype"), url("{{ asset('clientlibs/fonts/clanot-bold.woff') }}") format("woff"), url("{{ asset('clientlibs/fonts/clanot-bold.ttf') }}") format("truetype"), url("{{ asset('clientlibs/fonts/clanot-bold.svg#IDdelafuente') }}") format("svg");
}
@font-face {
  font-family: "ClanOt-Medium";
  src: url("{{ asset('clientlibs/fonts/clanot-medium.eot') }}");
  src: url("{{ asset('clientlibs/fonts/clanot-medium.eot?') }}") format("embedded-opentype"), url("{{ asset('clientlibs/fonts/clanot-medium.woff') }}") format("woff"), url("{{ asset('clientlibs/fonts/clanot-medium.ttf') }}") format("truetype"), url("{{ asset('clientlibs/fonts/clanot-medium.svg#IDdelafuente') }}") format("svg");
}

</style>
@endsection

