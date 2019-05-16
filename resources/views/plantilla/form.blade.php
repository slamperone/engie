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

                <p>Número de cliente: <br> <input type="text" name="cliente" required="" data-parsley-type="number" data-parsley-minlength="9" value="{{ old('cliente') }}"></p>

                <p class="space"><br></p>

                <p>Teléfono: <br> <input type="text" name="telefono" required="" value="{{ old('telefono') }}" data-parsley-minlength="10"></p>

                <p>Correo electrónico: <br> <input name="correo" required="" type="email" data-parsley-type="email" value="{{ old('correo') }}"></p>

                <!--p>Estado: <br> <input type="text" name="estado" required="" value="{{ old('estado') }}"></p -->

<p>Estado <br />
<select name="estado" class="slcEstados" required="">

<option value="">Todo México</option>

<option value="1">Aguascalientes</option>

<option value="2">Baja California</option>

<option value="3">Baja California Sur</option>

<option value="4">Campeche</option>

<option value="5">Coahuila de Zaragoza</option>

<option value="6">Colima</option>

<option value="7">Chiapas</option>

<option value="8">Chihuahua</option>

<option value="9">Distrito Federal</option>

<option value="10">Durango</option>

<option value="11">Guanajuato</option>

<option value="12">Guerrero</option>

<option value="13">Hidalgo</option>

<option value="14">Jalisco</option>

<option value="15">México</option>

<option value="16">Michoacán de Ocampo</option>

<option value="17">Morelos</option>

<option value="18">Nayarit</option>

<option value="19">Nuevo León</option>

<option value="20">Oaxaca</option>

<option value="21">Puebla</option>

<option value="22">Querétaro</option>

<option value="23">Quintana Roo</option>

<option value="24">San Luis Potosí</option>

<option value="25">Sinaloa</option>

<option value="26">Sonora</option>

<option value="27">Tabasco</option>

<option value="28">Tamaulipas</option>

<option value="29">Tlaxcala</option>

<option value="30">Veracruz de Ignacio de la Llave</option>

<option value="31">Yucatán</option>

<option value="32">Zacatecas</option>

</select>
</p>

                <p>Código postal: <br> <input type="text" name="cp" required="" minlength="5" data-parsley-type="number" data-parsley-minlength="5" value="{{ old('cp') }}"></p>


                    <p>
    <input type="checkbox" class="radio" id="titular" name="titular" value="yes" required="">
    <label class="form-check-label" for="titular">&nbsp;¿Es usted titular de la cuenta?</label>

                    </p>

                <p><input type="checkbox" class="radio" id="condiciones" name="condiciones" value="yes" required="">
    <label class="form-check-label" for="titular">&nbsp; <a href="{{url('aviso-de-privacidad') }}" target="_blank">  Acepto Aviso de Privacidad</a></label></p>

                <input type="submit" name="" value="Participa" class="btn">

            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

 <div id="overlay">
    <img src="{{ asset('clientlibs/img/cargando.gif') }}">
    <div id="text">Estamos validando tus datos</div>
</div> 