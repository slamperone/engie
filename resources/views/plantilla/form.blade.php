<!--div class="bs-callout bs-callout-warning hidden">
  <h4>Oh snap!</h4>
  <p>This form seems to be invalid :(</p>
</div>

<div class="bs-callout bs-callout-info hidden">
  <h4>Yay!</h4>
  <p>Everything seems to be ok :)</p>
</div-->

<div class="form-home">

    <div class="content">
        <div class="title">
            <h2>Suscríbete y participa</h2>
            <div class="line"></div>
        </div>
        <div class="form">

             @if ( count( $errors ) > 0 )
            <div class="alert alert-warning" role="alert">
               @foreach ($errors->all() as $error)
                  <div>{{ $error }}</div>
              @endforeach
            </div>
        @endif </br>   


        @if(isset($datos))

           <div class="alert alert-warning" role="alert">
                  <div>{{ $datos['guardado'] }}</div>
            </div>
         @endif </br>



            <form action="{{ url('registroNuevo') }}" method="POST" id="registro" data-parsley-validate="">
                @csrf

                <div class="form-section">
                <p>Nombre: <br> <input type="text" name="nombre" required="" data-parsley-length="[3, 20]" value="{{ old('nombre') }}"> </p>
                </div>

                <p>Apellido: <br> <input type="text" name="apellido" required="" data-parsley-length="[3, 20]" value="{{ old('apellido') }}"></p>

                <p>Número de cliente: <br> <input type="text" name="cliente" required="" data-parsley-type="number" value="{{ old('cliente') }}"></p>

                <p class="space"><br></p>

                <p>Teléfono: <br> <input type="text" name="telefono" required="" value="{{ old('telefono') }}"></p>

                <p>Correo electrónico: <br> <input name="correo" required="" type="email" data-parsley-type="email" value="{{ old('correo') }}"></p>

                <p>Estado: <br> <input type="text" name="estado" required="" value="{{ old('estado') }}"></p>

                <p>Código postal: <br> <input type="text" name="cp" required="" minlength="5"  data-parsley-minlength="5" value="{{ old('cp') }}"></p>


                    <p>
    <input type="checkbox" class="radio" id="titular" name="titular" value="yes" required="">
    <label class="form-check-label" for="titular">¿Es usted titular de la cuenta?</label>

                    </p>

                <p class="space"><br></p>

                <div class="button"><input type="submit" value="Suscribirme" class="button-x"></div>

            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

 <div id="overlay">
    <img src="{{ asset('clientlibs/img/cargando.gif') }}">
    <div id="text">Estamos validando tus datos</div>
</div> 