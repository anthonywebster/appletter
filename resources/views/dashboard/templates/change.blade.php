@extends('layouts.dashboard.master')

@section('title','Plantillas')

@section('breadcrumbs')
    @parent
    <li><a href="active">Plantillas</a></li>
@endsection

@section('css')
.image {
    float: left;
    width: 25%;
    padding: 10px 5px 10px 5px;
    text-decoration: none;
    overflow:hidden;
}
.image img {
    width:100%;
}
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


            {!! Form::open(['url' => '/dashboard/templates/'.$id.'/cambiar', 'method' => 'POST']) !!}

            <div class="pull-left push-up-10">
                <button class="btn btn-primary" id="gallery-toggle-items">Cambiar</button>
            </div>

            @if ( !empty($templates) )

                <div class="gallery" id="links">

                    @foreach($templates as $template)

                    <div class="image">
                        <label for="">
                        <img src="{{ asset('template-'.$template->id.'/img/template-'.$template->id.'.png') }}" title="{{ $templatesMain[$template->id] }}" alt=""/>
                        <input type="radio" name="template" value="{{ $template->id }}"> {{ $template->name }}
                        </label>
                    </div>

                    @endforeach

                    <input type="hidden" name="template_user" value="{{ $id }}">


                </div>

            @endif

            {!! Form::close() !!}

        </div>
        <!-- fin de cuerpo-->

    </div>
@endsection
