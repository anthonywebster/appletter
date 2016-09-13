@extends('layouts.dashboard.master')

@section('title','Plantillas')

@section('breadcrumbs')
    @parent
    <li><a href="active">Plantillas</a></li>
@endsection

@section('content')
    <div class="content-frame">



        <!-- Contenido parte derecha categorias -->
        <div class="content-frame-right">
            <h4>Categorias:</h4>
            <div class="list-group border-bottom push-down-20">
                <a href="#" class="list-group-item active">Todos<span class="badge badge-primary">12</span></a>
                <a href="#" class="list-group-item">Dia de las madres <span class="badge badge-success">7</span></a>
                <a href="#" class="list-group-item">Dia del padre <span class="badge badge-danger">3</span></a>
                <a href="#" class="list-group-item">Conejo de pascua <span class="badge badge-info">2</span></a>
                <a href="#" class="list-group-item">Navidad <span class="badge badge-warning">3</span></a>
            </div>

        </div>
        <!-- Fin categorias -->

        <!-- Cuerpo del site -->
        <div class="content-frame-body content-frame-body-left">

            @if ( isset($new) )
                <div class="alert alert-info">
                    <p style="text-align: center; font-size:30px; ">Bienvenido a nuesto sitio Notita.org</p>
                </div>
            @endif

            <!--<div class="pull-left push-up-10">
                <button class="btn btn-primary" id="gallery-toggle-items">Seleccionar todo</button>
            </div>
            <div class="pull-right push-up-10">
                <div class="btn-group">
                    <button class="btn btn-primary"><span class="fa fa-pencil"></span> Editar</button>
                    <button class="btn btn-primary"><span class="fa fa-trash-o"></span> Borrar</button>
                </div>
            </div>-->

            <h1>Plantillas</h1>
            <hr style="border: 0; border-top: 1px solid #eee; border-bottom: 1px solid #fff;">

            @if ( !empty($templates) )

                <div class="gallery" id="links">

                    @foreach($templates as $template)

                        <a class="gallery-item" href="{{ asset('template-'.$template->id.'/img/template-'.$template->id.'.png') }}" title="{{ $template->name }}" data-gallery>
                            <div class="image">
                                <img src="{{ asset('template-'.$template->id.'/img/template-'.$template->id.'.png') }}" alt="Nature Image 1"/>
                                <ul class="gallery-item-controls">
                                    <!--
                                    <li>
                                        <label class="check">
                                            <input type="checkbox" class="icheckbox"/>
                                        </label>
                                    </li>
                                    <li>
                                        <span class="gallery-item-remove">
                                            <i class="fa fa-times"></i>
                                        </span>
                                    </li>
                                    -->
                                    <li><span data-url="/payment/{{ $template->id }}/comprar" class="gallery-item-edit"><i class="fa fa-download"></i></span></li>
                                </ul>
                            </div>
                            <div class="meta">
                                <strong></strong>
                                <span></span>
                            </div>
                        </a>

                    @endforeach


                </div>

            @endif

            <ul class="pagination pagination-sm pull-right push-down-20 push-up-20">
                <li class="disabled"><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
        <!-- fin de cuerpo-->

        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('links').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement;
            var link = target.src ? target.parentNode : target;
            var options = {index: link, event: event,onclosed: function(){
                setTimeout(function(){
                    $("body").css("overflow","");
                },200);
            }};
            var links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    </script>
@endsection