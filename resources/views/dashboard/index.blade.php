@extends('layouts.dashboard.master')

@section('title','Home')

@section('breadcrumbs')
    @parent
    <li class="active">Dashboard Cliente</li>
@endsection

@section('content')
    <img class="center-block" src="{{asset('img/wysiwyg.png')}}">
    <img class="center-block" src="{{asset('img/cartaejemplo.png')}}">
@endsection