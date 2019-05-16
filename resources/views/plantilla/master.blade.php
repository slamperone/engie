<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1"/>
        <title>{{ config('app.name', 'Laravel') }} </title>
        <link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('clientlibs/favicon.ico') }}"/>
        <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="{{ asset('clientlibs/favicon.ico') }}"/>


        <!-- G N R L -->
        <script src="{{ asset('clientlibs/jQuery/v.1.12.4/jquery.min.js') }}">   </script>
        <script src="{{ asset('clientlibs/jQuery/v.1.12.4/jquery-ui.min.js') }}"></script>
        


        <!-- parsley -->
        <script src="{{ asset('clientlibs/jQuery/parsley.js') }}"></script>
        <script src="{{ asset('clientlibs/jQuery/es.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/parsley.css') }}"/>


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




<!-- Modal Structure -->
    <div class="modal fade" id="myModal" aria-hidden="true">

        olabb
 </div>





<script type="text/javascript">

    
window.ParsleyValidator.setLocale('es');

$(function () {


    $('#concurso').on('click', function(event) {
        var target = $('.form-home');
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
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
            console.log($(this).val());

            $('#preguta1').val() = $('.p1').val($(this).val());
            }
    });

    $('.p2').click(function() {
        if ($('.p2').is(":checked"))
            {
            console.log($(this).val());
            $('#preguta1').val() = $('.p2').val($(this).val());
            }
    });

    $('.p3').click(function() {
        if ($('.p3').is(":checked"))
            {
            console.log($(this).val());
            $('#preguta1').val() = $('.p3').val($(this).val());

            }
    });

    $('#guardaTodo').click(function() {
        $('registro').submit();
    });


});  
</script>            
    </body>
</html>