@extends('layouts.dashboard.master')

@section('title','Mis plantillas')

@section('breadcrumbs')
    @parent
    <li><a href="active">Mis Plantillas</a></li>
@endsection

@section('files-templates')
    <link rel="stylesheet" type="text/css" href="{{ asset($templateMain->template_name.'/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset($templateMain->template_name.'/css/mama_1.css') }}">
    <link rel="stylesheet" href="{{ asset('js/redactor/redactor.css') }}" />
@endsection

@section('content')

    <div class="content-frame">
        <?php $dirImage = asset($templateMain->template_name.'/img\/'); ?>
        {!! Form::model($template, ['method' => 'PATCH', 'action' => ['TemplateController@update', $template->id], 'class' => 'form-horizontal']) !!}


        <div class="form-group">

            <div class="col-sm-10">
                {!! Form::textarea('content',str_replace('img/',$dirImage,$template->content), ['class' => 'form-control', 'id' => 'content' ]) !!}
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {!! Form::submit('Guardar', ['class' => 'btn btn-info' ]) !!}
            </div>
        </div>

        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/redactor/redactor.js') }}"></script>
    <script type="text/javascript">
        $(function()
        {
            $('#content').redactor();
        });
    </script>
@endsection