@extends('layouts.app')

<!-- Main Content -->
@section('content')
<style>
    @import url('http://fonts.googleapis.com/css?family=Julius+Sans+One');
    @import url('https://fonts.googleapis.com/css?family=Anton');
    body{
        padding: 0;
        margin: 0;
        background: #282E34;
    }
    .inf{
        background: #21272c;
        color: #fff;
    }
    .btn1{
        background: #0b0d0f;
    }
    .btn1:hover{
        color: #fff;
    }
    .conten{
        padding-top: 80px;
    }
    .logo{
        position: absolute;
        left: 50px;
        width: 5%;
        top: 5px;
    }
    .log{
        color: #fff;
        font-size: 20px;
        font-family: 'Anton', sans-serif;
        letter-spacing: 3px;
        text-align: center;
    }
    .log1{
        color: #06bb84;
        font-family: 'Anton', sans-serif;
        text-align: center;
    }
    p{
        position: absolute;
        left: 130px;
        top: 20px;
    }
    .login{
        font-size: 20px;
    }
    .letter{
        font-family: 'Julius Sans One', sans-serif;
    }
</style>
<div class="container">
    <img class="logo" src="../../Imagenes/logo.png">
    <a href="{{ url('/') }}"><p class="log">SIGHO <span class="log1">&</span> MAPS</p></a>
</div>
<div class="container conten">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default inf">
                <div class="panel-heading login letter">Recuperar Contraseña</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label letter">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope letter"></i> Enviar Contraseña
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
