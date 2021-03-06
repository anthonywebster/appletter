<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META  -->
    <title>Notita.org</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- FIN META-->

    <link rel="stylesheet" type="text/css" href="{{asset('css/revolution-slider/extralayers.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/revolution-slider/settings.css')}}" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/styles_home.css')}}" media="screen" />

</head>
<body>
<!-- contenido completo-->
<div class="page-container" id="index">

    <!--  header -->
    <div class="page-header">

        <div class="page-header-holder">

            <!-- logo -->
            <div class="logo">
                <a href="/">Notita.org</a>
            </div>
            <!-- logo -->


            <!-- Buscar -->
            <div class="search">
                <div class="search-button"><span class="fa fa-search"></span></div>
                <div class="search-container animated fadeInDown">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar..."/>
                            <div class="input-group-btn">
                                <button class="btn btn-primary"><span class="fa fa-search"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ./Buscar -->

            <!--  mobile -->
            <div class="navigation-toggle">
                <div class="navigation-toggle-button"><span class="fa fa-bars"></span></div>
            </div>
            <!-- ./ mobile -->

            <!-- Menu -->
            <ul class="navigation" id="nav">
                <li><a href="#index">Inicio</a></li>
                <li><a href="#comprar">Solicite su carta</a></li>
                <li><a href="#plantillas">Plantillas</a></li>
                <li class="b-login"><a href="{{ isset(Auth::user()->id) ? url('/dashboard') :url('/login') }}">{{ isset(Auth::user()->id) ? "Dashboard" : "Login" }}</a> </li>

            </ul>
            <!-- ./Menu -->
        </div>
    </div>
<!-- ./ header -->

<!-- Cuerpo -->
<div class="page-content">


    <!-- revolution slider -->
    <div class="banner-container">
        <div class="banner">

            <ul>

                <li data-transition="fade" data-slotamount="1" data-masterspeed="500"  data-saveperformance="on">
                    <img src="{{asset('img/backgrounds/bg-4.png')}}" />

                    <div class="tp-caption lft customout rs-parallaxlevel-0"
                         data-x="150"
                         data-y="80"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="700"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         style="z-index: 2;">
                        <img src="{{asset('img/slider/titulo.png')}}" alt="Atlant"/>
                    </div>


                    <div class="tp-caption lft customout rs-parallaxlevel-0"
                         data-x="400"
                         data-y="230"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="700"
                         data-start="1200"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         style="z-index: 3;">
                        <img src="{{asset('img/slider/madres1.png')}}" alt="Atlant"/>
                    </div>
                    <div class="tp-caption lft customout rs-parallaxlevel-0"
                         data-x="750"
                         data-y="230"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="700"
                         data-start="1200"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         style="z-index: 3;">
                        <img src="{{asset('img/slider/madre2.png')}}" alt="Atlant"/>
                    </div>

                    <div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0"
                         data-x="50"
                         data-y="230"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="500"
                         data-start="1000"
                         data-easing="Back.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         style="z-index: 4;">
                        <img src="{{asset('img/slider/cartas1.png')}}" alt="Atlant"/>
                    </div>

                    <div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0"
                         data-x="0"
                         data-y="330"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="500"
                         data-start="1100"
                         data-easing="Back.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         style="z-index: 5;">
                        <img src="{{asset('img/slider/confiable.png')}}" alt="Atlant"/>
                    </div>

                </li>

                <li data-transition="fade" data-slotamount="1" data-masterspeed="700" >
                    <img src="{{asset('assets/video/video_typing_cover.jpg')}}"  alt="video_typing_cover"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption tp-fade fadeout fullscreenvideo"
                         data-x="0"
                         data-y="0"
                         data-speed="1000"
                         data-start="1100"
                         data-easing="Power4.easeOut"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1500"
                         data-endeasing="Power4.easeIn"
                         data-autoplay="true"
                         data-autoplayonlyfirsttime="false"
                         data-nextslideatend="true"
                         data-volume="mute" data-forceCover="1" data-aspectratio="16:9" data-forcerewind="on" style="z-index: 2;">

                        <video class="" preload="none" width="100%" height="100%" poster="{{asset('assets/video/video_typing_cover.jpg')}}">
                            <source src='{{asset('assets/video/computer_typing.mp4')}}' type='video/mp4'/>
                            <source src='{{asset('assets/video/computer_typing.webm')}}' type='video/webm'/>
                        </video>
                    </div>

                    <div class="tp-caption customin ltl"
                         data-x="600"
                         data-y="280"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="500"
                         data-start="1500"
                         data-easing="Power4.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3;">
                        <img src="{{asset('img/slider/second_1.png')}}"/>
                    </div>

                    <div class="tp-caption customin ltl"
                         data-x="600"
                         data-y="320"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="500"
                         data-start="1700"
                         data-easing="Power4.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3;">
                        <img src="{{asset('img/slider/second_2.png')}}"/>
                    </div>

                    <div class="tp-caption customin ltl"
                         data-x="600"
                         data-y="362"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="500"
                         data-start="1900"
                         data-easing="Power4.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3;">
                        <img src="{{asset('img/slider/second_3.png')}}"/>
                    </div>

                    <div class="tp-caption customin ltl"
                         data-x="600"
                         data-y="404"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="500"
                         data-start="2100"
                         data-easing="Power4.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3;">
                        <img src="{{asset('img/slider/second_4.png')}}"/>
                    </div>

                    <div class="tp-caption customin ltl"
                         data-x="600"
                         data-y="446"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="500"
                         data-start="2200"
                         data-easing="Power4.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3;">
                        <img src="{{asset('img/slider/second_5.png')}}"/>
                    </div>

                    <div class="tp-caption customin ltl"
                         data-x="600"
                         data-y="488"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="500"
                         data-start="2400"
                         data-easing="Power4.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3;">
                        <img src="{{asset('img/slider/second_6.png')}}"/>
                    </div>

                </li>
            </ul>

        </div>
    </div>
    <!-- ./revolution slider -->


    <div class="page-content-wrap bg-light">

        <div class="page-content-holder padding-v-20">

            <div class="text-center">
                <a href="#" class="btn btn-primary btn-xl"><span class="fa fa-eye"></span> Preview</a> <a href="#comprar" class="btn btn-success btn-xl"><span class="fa fa-shopping-cart"></span> solicita tu carta ahora </a>
            </div>

        </div>

    </div>


    <!-- seccion 1  -->
    <div class="page-content-wrap bg-img-1">

        <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>


        <div class="page-content-holder">

            <div class="row">
                <div class="col-md-8 this-animate" data-animate="fadeInLeft">

                    <div class="block-heading block-heading-centralized">
                        <h2 class="heading-underline">Seguro y Confiable</h2>
                        <div class="block-heading-text">
                            Personaliza tus cartas con la mejor herramienta de edición desde cualquier dispositivo y con la máxima seguridad; Procesamos tus pagos en PayPal con nuestros servidores 100 % seguros altamente calificados y certificados .
                        </div>
                    </div>
                    <div class="block this-animate" data-animate="fadeInLeft">
                        <img src="{{asset('img/paypal.png')}}" class="img-responsive center-block" style="width:50%"/>
                    </div>
                </div>
                <div class="col-md-4 this-animate text-center" data-animate="fadeInRight">
                    <img src="{{asset('img/responsive.png')}}" class="img-responsive-mobile"/>
                </div>
            </div>



        </div>

    </div>
    <!-- ./seccion 1 -->

    <!-- seccion 2 -->
    <div class="page-content-wrap bg-nice light-elements" id="comprar">

        <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>

        <!-- page content holder -->
        <div class="page-content-holder" >

            <div class="row">

                <div class="col-md-4">
                    <div class="text-column text-column-centralized tex-column-icon-lg this-animate" data-animate="fadeInLeft">
                        <div class="text-column-icon">
                            <span class="fa fa-support"></span>
                        </div>
                        <h4>Perfil de usuario</h4>
                        <div class="text-column-info">
                            Cuentas con un área privada donde estarán tus plantillas editada a lo largo de tu estancia en nuestro sitio, información de pagos, tutoriales de edición, preguntas frecuentes, etc.
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="text-column text-column-centralized tex-column-icon-lg this-animate" data-animate="fadeInUp">
                        <div class="text-column-icon">
                            <span class="fa fa-expand"></span>
                        </div>
                        <h4>Diseño responsive</h4>
                        <div class="text-column-info">
                            Podrás editar tus cartas desde cualquier dispositivo en cualquier lugar.
                        </div>
                    </div>
                </div>

                <div class="col-md-4" >
                    <div class="text-column text-column-centralized tex-column-icon-lg this-animate" data-animate="fadeInRight">
                        <div class="text-column-icon">
                            <span class="fa fa-clock-o"></span>
                        </div>
                        <h4>Ahorra tu tiempo</h4>
                        <div class="text-column-info">
                            Fácil de usar no necesitas de largas horas de edición.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ./seccion 2 -->
    <!-- Formularios y precios -->
        <div class="page-content-wrap bg-light bg-texture-1" >


            <section class="container" >
                <div class="row">
                    <div class="col-md-6 title_price">
                        <h2 >Datos del comprador</h2>

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p class="bg-danger alert">{{ $error }}</p>
                            @endforeach
                        @endif

                        <form role="form" method="POST" action="{{ url('/register') }}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre <span class="text-hightlight">*</span></label>
                                        <input type="text" name="name" class="form-control" value="" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telefono<span class="text-hightlight">*</span></label>
                                        <input type="text" name="telephone" value="" class="form-control" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email <span class="text-hightlight">*</span></label>
                                        <input type="email" name="email" value="" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Password <span class="text-hightlight">*</span></label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Confirm Password<span class="text-hightlight">*</span></label>
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>

                    <a href="{{url('/auth/facebook')}}"><img src="{{asset('img/facebook_register_es.gif')}}" alt="facebook register notita" class="img-responsive centerblock"></a>
                            </div>
                    <img src="{{asset('img/paypal-verified.png')}}" alt="paypal verificacion" class="img-responsive centerblock">
                      </div>
                    <div class="col-md-6 price">
                        <h1>Solicite su carta por solo</h1>
                        <img src="{{asset('img/price.png')}}" class="img-responsive center-block" alt="precio del servicio">
                        <div class="text-center" style="margin-top:70px;">
                            <button class="btn btn-success btn-xl" ><span class="fa fa-shopping-cart"></span>Comprar ahora</button>
                        </div>
                    </div>
                    </form>
                </div>
            </section>
        </div>
        <!--/formularios y precio -->
    <!-- Plantillas -->
    <div class="page-content-wrap bg-templates" id="plantillas">

        <div class="page-content-wrap">

            <div class="page-content-holder">

                <div class="block-heading this-animate" data-animate="fadeIn">
                    <h2>Plantillas</h2>
                    <div class="block-heading-text">
                        solicita tu carta y podrás elegir cualquiera de nuestras plantillas premium 100 % originales y totalmente personalizables <span><img style="width:5%;" src="img/stiker1.png" class="img-responsive center-block this-animate" data-animate="fadeInLeft"></span>
                    </div>
                </div>


                <div class="row mix-grid thumbnails">
                    <div class="col-md-6 col-xs-6 mix cat_nature cat_all">
                        <section class="thumbnail-item">
                            <img src="img/planti1.png" alt="Descripcion"/>

                        </section>
                    </div>
                    <div class="col-md-6 col-xs-6 mix cat_space cat_all">
                        <section class="thumbnail-item">
                            <img src="img/planti2.png" alt="Descripcion"/>

                        </section>
                    </div>

                </div>

            </div>

        </div>

        <!--/ Plantillas -->
    </div>
    <!-- ./cuerpo -->

    <!--  footer -->
    <div class="page-footer">


        <div class="page-footer-wrap bg-nice">

            <div class="page-footer-holder page-footer-holder-main">

                <div class="row">

                    <!-- Nosotros -->
                    <div class="col-md-3">
                        <h3>Acerca de Nosotros</h3>
                        <p>Lorem ipsum dolor natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                    </div>
                    <!-- ./Nosotros -->

                    <!--  links -->
                    <div class="col-md-3">
                        <h3>links</h3>

                        <div class="list-links">
                            <a href="#">Inicio</a>
                            <a href="#">Solicite su carta</a>
                            <a href="#">Plantillas</a>
                            <a href="#">Login</a>
                        </div>
                    </div>
                    <!-- ./ links -->



                    <!-- Contacto-->
                    <div class="col-md-3">
                        <h3>Contacto</h3>

                        <div class="footer-contacts">
                            <div class="fc-row">
                                <span class="fa fa-home"></span>
                                000 calle nombre, Suite 111,<br/>
                                City New York, ST 01234
                            </div>
                            <div class="fc-row">
                                <span class="fa fa-phone"></span>
                                +1 (212) 456-7890
                            </div>
                            <div class="fc-row">
                                <span class="fa fa-envelope"></span>
                                <strong>Notita</strong><br>
                                <a href="mailto:#">Info@notita.org</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h3>Suscríbete</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email"/>
                            <div class="input-group-btn">
                                <button class="btn btn-primary"><span class="fa fa-paper-plane"></span></button>
                            </div>
                        </div>
                    </div>
                    <!-- ./Contacto-->
                </div>
            </div>
        </div>
        <!-- ./ footer-->


        <div class="page-footer-wrap bg-darken-gray">

            <div class="page-footer-holder">

                <!-- copyright -->
                <div class="copyright">
                    &copy; 2016 Notita.org
                </div>
                <!-- ./copyright -->

                <!-- Redes Sociales -->
                <div class="social-links">
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-vimeo-square"></span></a>
                    <a href="#"><span class="fa fa-dribbble"></span></a>
                </div>
                <!-- ./Redes Sociales -->
            </div>
        </div>
    </div>
    <!-- ./ footer -->
</div>
<!-- ./contenido completo  -->

<!--  scripts -->
<script type="text/javascript" src="{{asset('js/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/plugins/mixitup/jquery.mixitup.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/appear/jquery.appear.js')}}"></script>

<script type="text/javascript" src="{{asset('js/plugins/revolution-slider/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/revolution-slider/jquery.themepunch.revolution.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/actions.js')}}"></script>
<script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
<!--One page -->
<script type="text/javascript" src="{{asset('js/jquery.nav.js')}}"></script>
<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>
<!-- ./ scripts -->
</body>
</html>