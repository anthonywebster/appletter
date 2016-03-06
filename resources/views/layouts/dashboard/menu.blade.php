<!-- START X-NAVIGATION -->
<ul class="x-navigation">
    <li class="xn-logo">
        <a href="index.html">Notita</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
        <a href="#" class="profile-mini">
            <img src="{{asset('img/avatar.jpg')}}" alt="Jonathan Cortez"/>
        </a>
        <div class="profile">
            <div class="profile-image">
                <img src="{{asset('img/avatar.jpg')}}" alt="John Doe"/>
            </div>
            <div class="profile-data">
                <div class="profile-data-name">Jonathan Cortez</div>
                <div class="profile-data-title">Web Developer/Designer</div>
            </div>

        </div>
    </li>
    <li class="xn-title">Barra de navegación</li>
    <li class="active"><a href="/dashboard"><span class="fa fa-edit"></span><span class="xn-text">Edición</span></a></li>
    <li>
    <li class="xn-openable">
        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Crear cartas</span></a>
        <ul>

            <li><a href="{{url('dashboard/templates')}}"><span class="fa fa-edit"></span>Mis Plantillas</a></li>
            <li><a href="#"><span class="fa fa-shopping-cart"></span> Comprar Nueva</a></li>

        </ul>
    </li>
    </li>


    <li><a href="{{url('dashboard/pago')}}"><span class="fa fa-shopping-cart"></span><span class="xn-text"> Mis compras</a></span></li>
    <li><a href="{{url('dashboard/profile')}}"><span class="fa fa-user"></span><span class="xn-text"> Mi perfil</span></a></li>
    <li><a href="{{url('dashboard/faq')}}"><span class="fa fa-question-circle"></span><span class="xn-text"> Preguntas frecuentes</span></a></li>
    <li><a href="#"><span class="fa fa-lightbulb-o"></span><span class="xn-text"> Tutorial edición</span></a></li>
    <li><a href="#"><span class="fa fa-check-circle"></span><span class="xn-text"> Licencia</span></a></li>


</ul>
<!-- END X-NAVIGATION -->
</div>
<!-- FIN SIDEBAR -->


<div class="page-content">

    <!-- MENU VERTICAL -->
    <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
        <!-- ICON -->
        <li class="xn-icon-button">
            <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
        </li>
        <!-- FIN ICON-->
        <!-- BUSCAR -->
        <li class="xn-search">
            <form role="form">
                <input type="text" name="search" placeholder="Buscar..."/>
            </form>
        </li>
        <!--  FIN BUSCAR -->
        <!-- CERRAR SESION -->
        <li class="xn-icon-button pull-right">
            <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
        </li>
        <!-- FIN CERRAR SESION -->

    </ul>
    <!-- FIN FIN -->