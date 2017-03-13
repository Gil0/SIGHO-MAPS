@extends('layouts.app')

@section('content')
<style>
    @import url('http://fonts.googleapis.com/css?family=Julius+Sans+One');
    @import url('https://fonts.googleapis.com/css?family=Anton');
    body{
        padding: 0;
        margin: 0;
        background: #282E34;
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
    hr{
        border-color: #06bb84;  
    }
    .navv{
    	height: 70px;
        background: url(/Imagenes/bg.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
    }
    .prof{
    	height: 200px;
    	background-image: url(/Imagenes/prof.jpg);
    	background-position: center;
    	background-repeat: no-repeat;
    	background-size: cover;
    	overflow: hidden;
    }
    .nav1{
        color: #fff;
    }
    .select{
        background-color: #06bb84;
        border-radius: 3px;
    }
    .navu{
    	padding-top: 12px;
    }
    .profesor{
    	color: #fff;
    	font-family: 'Anton', sans-serif;
    	letter-spacing: 2px;
    	padding-top: 30px;
    	font-size: 70px;
    }
</style>
<div class="navv">
	<div class="container">
	    <img class="logo" src="Imagenes/Logo.png">
	    <a href="{{ url('/') }}"><p class="log">SIGHO <span class="log1">&</span> MAPS</p></a>
	</div>
	<!--<div class="container">
        <ul class="nav nav-pills navu">
          <li><a class="nav1"href="{{ url('/homeu') }}">Inicio</a></li>
          <li><a class="nav1"href="#">Horario</a></li>
          <li class="select"><a class="nav1"href="#">Profesores</a></li>
          <li><a class="nav1"href="#">Mapas</a></li>
        </ul>
    </div>-->
</div>
<div class="prof">
	<div class="container">
		<h1 class="profesor">Profesores</h1>
	</div>
</div>
@endsection