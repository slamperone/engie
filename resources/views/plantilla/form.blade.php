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
            <h2>Participa para ganar</h2>
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

                <p>¿Por qué medio te enteraste? : <br> 

                <select name="medio" class="slcEstados" required="">
                  <option value="">elige una</option>
                  <option value="Radio">Radio</option>
                  <option value="Facebook">Facebook</option>
                  <option value="Factura">Factura</option>
                  <option value="Emailing">Emailing</option>
                  <option value="Agencias">Agencias ENGIE</option>
                  <option value="Sitio Web">Sitio web ENGIE México</option>
                  <option value="Otro">Otro</option>
                </select>  

                </p>

                <p>Teléfono Fijo: <br> <input type="text" name="telefono" required="" value="{{ old('telefono') }}" data-parsley-minlength="10"></p>

                <p>Teléfono móvil: <br> <input type="text" name="cel" required="" value="{{ old('telefono') }}" data-parsley-minlength="10"></p>

                <p>Correo electrónico: <br> <input name="correo" required="" type="email" data-parsley-type="email" value="{{ old('correo') }}"></p>

                <!--p>Estado: <br> <input type="text" name="estado" required="" value="{{ old('estado') }}"></p -->

<p>Estado <br />
<select name="estado" class="slcEstados" required="">

<option value="">Todo México</option>

<option value="Edomex">Estado de México</option>

<option value="Jalisco">Jalisco</option>

<option value="Puebla">Puebla</option>

<option value="Queretaro">Querétaro</option>

<option value="Tampico">Tampico</option>

<option value="Matamoros">Matamoros</option>

<option value="Reynosa">Reynosa</option>


</select>
</p>

                <p>Código postal: <br> <input type="text" name="cp" required="" minlength="5" data-parsley-type="number" data-parsley-minlength="5" value="{{ old('cp') }}"></p>

                <p class="space"></p>


  <p class="che">
    <input type="checkbox" class="radio" id="titular" name="titular" value="yes" required="">
    <label class="form-check-label" for="titular">&nbsp;¿Eres titular de la cuenta?</label>
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
<h2>1. ¿Qué servicio te ofrece ENGIE?</h2>
<p><label><input type="radio" name="pr1" value="agua" class="radio p1" checked >Agua potable</label></p>
<p><label><input type="radio" name="pr1" value="energia" class="radio p1" >Energía eléctrica</label></p>
<p><label><input type="radio" name="pr1" value="gas" class="radio p1" >Gas natural</label></p>
<h2>2. ¿De qué color es el logo de ENGIE?</h2>
<p><label><input type="radio" name="pr2" value="rojo" class="radio p2" checked>Rojo</label></p>
<p><label><input type="radio" name="pr2" value="azul" class="radio p2">Azul</label></p>
<p><label><input type="radio" name="pr2" value="amarillo" class="radio p2">Amarillo</label></p>
<h2>3. El gas natural nos sirve para</h2>
<p><label><input type="radio" name="pr3" value="internet" class="radio p3" checked>Navegar en internet</label></p>
<p><label><input type="radio" name="pr3" value="cocinar" class="radio p3">Cocinar en la estufa</label></p>
<p><label><input type="radio" name="pr3" value="cargar" class="radio p3">Cargar el móvil</label></p>
<a class="btn" href="javascript:document.forms[0].submit()" id="guardaTodo">Enviar</a>

<div class="clearfix"></div>
<br>
<a class="btnClose" href="#" rel="modal:close">Cerrar</a>

<div class="clearfix"></div>
</div>
</div>


<div id="gracias" class="modal">

<div class="title">
<h2>¡Felicidades!</h2>
<div class="line"></div>
</div>


@if ( !empty($datos['guardado']) && $datos['guardado'] == 'exito' )


<p>Tu registro ha sido exitoso</p>

<div class="clearfix"></div>

<p> Tu número de folio es <br />{{ $datos['folio'] }}</p>

@endif



@if ( !empty($datos['guardado']) && $datos['guardado'] == 'error' )

<p>Vaya, algo ha salido mal, por favor reintentalo más tarde </p>

<div class="clearfix"></div>

@endif



<div class="clearfix"></div>
<br>
<a class="btnClose" href="#" rel="modal:close">Cerrar</a>

<div class="clearfix"></div>
</div>
</div>


        @if ( isset($errors) )
        
        <script type="text/javascript">

             $('html, body').stop().animate({
                scrollTop: $('.form-home').offset().top
            }, 1000);

        </script>
        @endif


             @if(isset($datos))
             

<script type="text/javascript">
             $("#gracias").modal({
                    escapeClose: false,
                    clickClose: false,
                    showClose: false,
                    fadeDuration: 100
              });


             $('html, body').stop().animate({
                scrollTop: $('.form-home').offset().top
            }, 1000);
</script>
            @endif
