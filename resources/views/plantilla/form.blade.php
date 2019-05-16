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

<option value="Aguascalientes">Aguascalientes</option>

<option value="Baja California">Baja California</option>

<option value="Baja California Sur">Baja California Sur</option>

<option value="Campeche">Campeche</option>

<option value="Coahuila">Coahuila de Zaragoza</option>

<option value="Colima">Colima</option>

<option value="Chiapas">Chiapas</option>

<option value="Chihuahua">Chihuahua</option>

<option value="CDMX">Ciudad de México</option>

<option value="Durango">Durango</option>

<option value="Edomex">Estado de México</option>

<option value="Guanajuato">Guanajuato</option>

<option value="Guerrero">Guerrero</option>

<option value="Hidalgo">Hidalgo</option>

<option value="Jalisco">Jalisco</option>

<option value="Michoacan">Michoacán de Ocampo</option>

<option value="Morelos">Morelos</option>

<option value="Nayarit">Nayarit</option>

<option value="Nuevo Leon">Nuevo León</option>

<option value="Oaxaca">Oaxaca</option>

<option value="Puebla">Puebla</option>

<option value="Queretaro">Querétaro</option>

<option value="Quintana Roo">Quintana Roo</option>

<option value="San Luis Potosi">San Luis Potosí</option>

<option value="Sinaloa">Sinaloa</option>

<option value="Sonora">Sonora</option>

<option value="Tabasco">Tabasco</option>

<option value="Tamaulipas">Tamaulipas</option>

<option value="Tlaxcala">Tlaxcala</option>

<option value="Veracruz">Veracruz de Ignacio de la Llave</option>

<option value="Yucatan">Yucatán</option>

<option value="Zacatecas">Zacatecas</option>

</select>
</p>

                <p>Código postal: <br> <input type="text" name="cp" required="" minlength="5" data-parsley-type="number" data-parsley-minlength="5" value="{{ old('cp') }}"></p>


  <p class="che">
    <input type="checkbox" class="radio" id="titular" name="titular" value="yes" required="">
    <label class="form-check-label" for="titular">&nbsp;¿Es usted titular de la cuenta?</label>
                    </p>

    <p class="che">
                  <input type="checkbox" class="radio" id="condiciones" name="aviso" value="yes" required="">
    <label class="form-check-label" for="aviso">&nbsp; Acepto <a href="{{url('aviso-de-privacidad') }}" target="_blank">Aviso de Privacidad</a></label></p>

                    

                
                <input type="submit" name="" value="Participa" class="btn">

                <input type="hidden" name="p1" value="agua" id="pregunta1">
                <input type="hidden" name="p2" value="rojo" id="pregunta2">
                <input type="hidden" name="p3" value="internet" id="pregunta3">

            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


<div id="encuesta" class="modal">

<div class="title">
<h2>Trivia</h2>
<div class="line"></div>
</div>
<div class="form">
<h2>1. ¿Que servicio te ofrece Engie?</h2>
<p><input type="radio" name="p1" value="agua" class="radio p1" checked >Agua potable</p>
<p><input type="radio" name="p1" value="energia" class="radio p1" >Energía eléctrica</p>
<p><input type="radio" name="p1" value="gas" class="radio p1" >Gas natural</p>
<h2>2. ¿De qué color es el logo de ENGIE?</h2>
<p><input type="radio" name="p2" value="rojo" class="radio p2" checked>Rojo</p>
<p><input type="radio" name="p2" value="azul" class="radio p2">Azul</p>
<p><input type="radio" name="p2" value="amarillo" class="radio p2">Amarillo</p>
<h2>3. ¿El gas natural nos sirve para?</h2>
<p><input type="radio" name="p3" value="internet" class="radio p3" checked>Navegar en internet</p>
<p><input type="radio" name="p3" value="cocinar" class="radio p3">Cocinar en la estufa</p>
<p><input type="radio" name="p3" value="cargar" class="radio p3">Cargar el móvil</p>
<a class="btn" href="#" id="guardaTodo">Enviar</a>
<div class="clearfix"></div>
<br>
<a class="btnClose" href="#" rel="modal:close">Close</a>

<div class="clearfix"></div>
</div>
</div>

