<!DOCTYPE html>
<html lang="es">
<head>
    <title>Notita - @yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('css/style.css')}}"/>
</head>
<body>
<!-- INICIO CONTAINER -->
<div class="page-container">

    <!-- SIDEBAR -->
    <div class="page-sidebar menucard">
        @include('layouts.dashboard.menu')
        <!-- BREADCRUMB -->
        <ul class="breadcrumb">
            @yield('breadcrumbs')
        </ul>
        <!-- FIN BREADCRUMB -->

        <!-- CONTENIDO DEL SITIO  -->
        <div class="page-content-wrap">
            @yield('content')
        </div>
        <!-- FIN DE CONTENIDO -->
    </div>

</div>
<!-- CIERRE CONTAINER -->
@include('layouts.dashboard.salir')
<!-- SONIDOS -->
<audio id="audio-alert" src="{{asset('audio/alert.mp3')}}" preload="auto"></audio>
<audio id="audio-fail" src="{{asset('audio/fail.mp3')}}" preload="auto"></audio>
<!-- FIN SONIDOS -->

<!-- START PLUGINS -->
<script type="text/javascript" src="{{asset('js/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/jquery/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-select.js')}}"></script>
<!-- END PLUGINS -->

<!-- GALERIA DE PLANTILLAS -->
<script type="text/javascript" src="{{asset('js/plugins/blueimp/jquery.blueimp-gallery.min.js')}}"></script>
<script type='text/javascript' src="{{asset('js/plugins/icheck/icheck.min.js')}}"></script>
<!-- FIN GALERIA -->

<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('js/actions.js')}}"></script>
<script type="text/javascript" src="{{asset('js/faq.js')}}"></script>


<!-- fin SCRIPTS -->
</body>
</html>
