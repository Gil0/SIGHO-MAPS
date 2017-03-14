@extends('layouts.app')

@section('content')
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<style>
    @import url('http://fonts.googleapis.com/css?family=Julius+Sans+One');
    @import url('https://fonts.googleapis.com/css?family=Anton');
    body{
        padding: 0;
        margin: 0;
    }
    .color{
        border-color: #06bb84;  
    }
    .parallax { 
        height: 220px;
        background-image: url(../Imagenes/bg.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
    }
    .logo{
        margin-left: 45%;
        width: 10%;
    }
    .nav1{
        color: #fff;
    }
    .select{
        background-color: #06bb84;
        border-radius: 3px;
    }
    .portada{
        color: #fff;
        font-size: 25px;
        font-family: 'Anton', sans-serif;
        letter-spacing: 3px;
        text-align: center;
    }
    .yi{
        color: #06bb84;
        font-family: 'Anton', sans-serif;
        text-align: center;
    }
    .letter{
    	font-family: 'Julius Sans One', sans-serif;
    }
</style>
<div class="parallax">
    <div class="container">
        <img class="logo" src="../Imagenes/Logo.png">
        <h1 class="portada">SIGHO <span class="yi">&</span> MAPS</h1>
    </div>
    <div class="container">
        <ul class="nav nav-pills letter">
          <li class="nav1"><a class="nav1"href="{{ url('User/Home') }}">Inicio</a></li>
          <li><a class="nav1"href="#">Horario</a></li>
          <li><a class="select nav1"href="{{ url('User/Profesores') }}">Profesores</a></li>
          <li><a class="nav1"href="#">Mapas</a></li>
        </ul>
    </div>
    <hr class="color"/>
</div>
<br/>
<br/>
<div class="container tabla">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Profesor</th>
				<th>Informacion</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<th>Carlos</th>
				<th><button type="button" class="btn btn-success">Ver más</button></th>
			</tr>
		</tbody>
	</table>
</div>
@endsection