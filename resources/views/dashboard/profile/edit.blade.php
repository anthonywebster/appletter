
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

                <div class="panel-body">

                {!! Form::model($users, ['method' => 'PATCH', 'action' => ['ProfileController@update', $users->id], 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name',null, ['class' => 'form-control' ]) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('direction', 'Dirección:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('direction',null, ['class' => 'form-control' ]) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('telephone', 'Teléfono:',['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('telephone',null, ['class' => 'form-control' ]) !!}
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-info' ]) !!}
                    </div>
                </div>

                {!! Form::close() !!}

            </div>

            </div>
        </div>

    </div>
@endsection