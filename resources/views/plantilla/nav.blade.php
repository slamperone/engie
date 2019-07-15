
<!------------------>
<!-- H E A D E R --->
<!------------------>

<!------------------>
<!-- M o d a l  --->
<!------------------>

<div id="bienvenida" class="modal">

    <img src="{{ asset('clientlibs/img/bienvenido.png') }}" width="100%" alt="">

</div>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script type="text/javascript">
    if(!Cookies.get('modalbienvenida')) {
        $("#bienvenida").modal({
            fadeDuration: 100
        });
        Cookies.set('modalbienvenida', true, { expires: 1});
    } else {
        console.log('Your modal won\'t show again as it\'s shown before.');
    }
</script>

<header>
    <div class="content">

        <div class="content-wrapper">
            <div class="line"><p>Dudas al 01 (55) 4161 6919</p><i class="fa fa-phone" aria-hidden="true"></i></div>
            <div class="content-01">
                <!--<a href="#nav" aria-label="Open Navigation">-->
                <!--<div class="icon-menu">-->
                <!--<i class="fas fa-bars"></i>-->
                <!--</div>-->
                <!--</a>-->
                <a href="{{url('/') }}">
                    <div class="logo"><a href="/"><img src="{{ asset('clientlibs/img/engie.png') }}" alt="Engie"></a> </div>
                </a>
            </div>
            <div class="content-02">
                <ul>
                    <li class="btn"><a href="{{url('/') }}">Inicio</a></li>
                    <!--li class="btn"><a href="{{url('instrucciones') }}">Instrucciones</a></li-->

                  
                    
                    <li class="btn"><a href="{{url('premios') }}">Premios</a></li>
                    <li class="btn"><a href="{{url('bases') }}">Bases</a></li>
                    <li class="btn"><a href="{{url('faqs') }}">Faqs</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</header>

