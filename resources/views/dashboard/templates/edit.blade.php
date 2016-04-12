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

@section('css')
#Cont_Carta {
    height: auto;
    float: left;
    margin-left: 10%;
}

    p.img {
float:right;
    }
@endsection

@section('content')

    <div class="content-frame">
        <?php $dirImage = asset($templateMain->template_name.'/img\/'); ?>

        {!! str_replace('img/',$dirImage,$template->content) !!}

    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/redactor/redactor.js') }}"></script>
    <script type="text/javascript">
        $(function()
        {
            $('.content-frame p').redactor({
                buttons: []
            });
        });
    </script>
@endsection