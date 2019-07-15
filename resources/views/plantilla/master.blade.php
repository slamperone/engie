<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <meta name="theme-color" content="#00adef" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="msapplication-navbutton-color" content="#00adef">
        <meta name="apple-mobile-web-app-status-bar-style" content="#00adef">
        <meta name="description" content="¡Regístrate y gana hasta $20,000! ENGIE te premia">
        <meta name="keywords" content="premios, engie, premia, mexico, gas, natural, concurso, 20000">
        <meta name="author" lang="es" content="Engie" />
        <meta property="og:site_name" content="Engie te premia" />
        <meta property="og:title" content="Engie" />
        <meta property="og:description" content="¡Regístrate y gana hasta $20,000! ENGIE te premia" />
        <meta property="og:url" content="https://engietepremia.com.mx/" />
        <meta property="og:image" content="https://engietepremia.com.mx/clientlibs/img/engie.png" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="578" />
        <meta property="og:image:type" content="image/png" />
        <title>{{ config('app.name', 'Laravel') }} </title>



        <!-- G N R L -->
        <script src="{{ asset('clientlibs/jQuery/v.1.12.4/jquery.min.js') }}">   </script>
        <script src="{{ asset('clientlibs/jQuery/v.1.12.4/jquery-ui.min.js') }}"></script>
        


        <!-- parsley -->
        <script src="{{ asset('clientlibs/jQuery/parsley.js') }}"></script>
        <script src="{{ asset('clientlibs/jQuery/es.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('clientlibs/css/parsley.css') }}"/>


        <!-- Modal -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

        <!-- B A S E -->
        <link rel="stylesheet" href="{{ asset('clientlibs/fontawesome/v.4.7.0/font-awesome.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('clientlibs/css/styles.css') }}"/>
        <link rel="stylesheet" href="{{ asset('clientlibs/css/estilo.css') }}"/>
        <script src="{{ asset('clientlibs/scripts/header/script.js') }}"></script>

    </head>
     <body>
            <div class="main">

                 @yield('content')

            </div>


<script type="text/javascript">

    
window.ParsleyValidator.setLocale('es');

$(function () {


    $('#concurso').on('click', function(event) {
        var target = $('.form-home');
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top+105
            }, 1000);
        }
    });



  /*$('#registro').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);

    $('.modal').toggleClass('modal--show');

    console.log('¡válido!');

  })
  .on('form:submit', function(e) {
    //return false; // Don't submit form for this demo

    return false;

    
    });*/

    $("#registro").on('submit', function(e){
            e.preventDefault();
            var form = $(this);

            form.parsley().validate();

            if (form.parsley().isValid()){
                

               $("#encuesta").modal({
                    escapeClose: false,
                    clickClose: false,
                    showClose: false,
                    fadeDuration: 100
        });



            }//is valid
        });


    $('.p1').click(function() {
        if ($('.p1').is(":checked"))
            {
            
            valor = $(this).val();

            //console.log(valor);

            $('input[name=p1]').val(valor);

            //console.log($('input[name=p1]').val());

            }
    });

    $('.p2').click(function() {
        if ($('.p2').is(":checked"))
            {
            
            valor = $(this).val();

            $('input[name=p2]').val(valor);

            }
    });

    $('.p3').click(function() {
        if ($('.p3').is(":checked"))
            {

            valor = $(this).val();

            $('input[name=p3]').val(valor);

            }
    });

    /*$('#guardaTodo').click(function(e) {
        e.preventDefault();
        console.log('ola bb')
        $('#registro').submit();
    });*/


});  
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138366757-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138366757-1');
</script>
    </body>
</html>