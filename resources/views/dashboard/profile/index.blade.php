
@extends('layouts.dashboard.master')

@section('title','Home')

@section('breadcrumbs')
    @parent
    <li class="active">Profile</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">

                @include('flash::message')

                <div class="panel-body profile" style="background: url('assets/images/gallery/music-4.jpg') center center no-repeat;">
                    <div class="profile-image">
                        <img src="{{asset('img/avatar.jpg')}}" alt="Nadia Ali"/>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name">Jonathan Abzalon Cortez Mendiola</div>
                        <div class="profile-data-title" style="color: #FFF;"></div>
                    </div>
                    <div class="profile-controls">
                        <a href="#" class="profile-control-left twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#" class="profile-control-right facebook"><span class="fa fa-facebook"></span></a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-info btn-rounded btn-block" href="profile/{{ $users->id }}/edit"><span class="fa fa-check"></span> Editar</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-rounded btn-block"><span class="fa fa-comments"></span> Chat</button>
                        </div>
                    </div>
                </div>
                <div class="panel-body list-group border-bottom">
                    <a href="#" class="list-group-item active"><span class="fa fa-user"></span> {{ $users->name }}</a>
                    <a href="#" class="list-group-item"><span class="fa fa-coffee"></span> {{ $users->direction }}</a>
                    <a href="#" class="list-group-item"><span class="fa fa-phone"></span> {{ $users->telephone }} </a>
                    <a href="#" class="list-group-item"><span class="fa fa-map-marker"></span> Managua Nicaragua</a>

                </div>
            </div>
        </div>

    </div>
@endsection