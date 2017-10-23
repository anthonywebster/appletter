<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="generator" content="Bootply"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
</head>
<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h1 class="text-center">Notita.org</h1>
            </div>
            <div class="modal-body">
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>

                @endif

                <form class="form col-md-12 center-block" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="form-control input-lg" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control input-lg" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block">Entrar</button>
                        <a href="{{url('/auth/facebook')}}" class="btn btn-primary btn-lg btn-block">Login with
                            Facebook</a>
                        <span class="pull-right"><a href="{{url('/register')}}">Registro</a></span><span><a href="#">Necesitas ayuda?</a></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-md-12">
                    <a href="/">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>