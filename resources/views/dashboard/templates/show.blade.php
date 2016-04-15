@extends('layouts.dashboard.master')

@section('title','Mis plantillas')

@section('breadcrumbs')
    @parent
    <li><a href="active">Mis Plantillas</a></li>
@endsection

@section('files-templates')
    <link rel="stylesheet" type="text/css" href="{{ asset($templateMain->template_name.'/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset($templateMain->template_name.'/css/mama_1.css') }}">
@endsection

@section('content')
    <?php $dirImage = asset($templateMain->template_name.'/img\/'); ?>
    <div class="content-frame">
    {!! str_replace('img/',$dirImage,$template->content) !!}
    </div>
@endsection