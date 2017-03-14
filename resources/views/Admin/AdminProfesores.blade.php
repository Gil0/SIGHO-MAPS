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
    .logo{
        position: absolute;
        left: 0px;
        width: 5%;
        top: -5px;
    }
    .log{
        color: #fff;
        font-size: 20px;
        font-family: 'Anton', sans-serif;
        letter-spacing: 3px;
        text-align: center;
        top: 10px;
        left: 70px;
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
    	height: 50px;
        background: #263238;
    }
    .banner{
    	height: 130px;
    	background-image: url(/Imagenes/prof.jpg);
    	background-repeat: no-repeat;
        background-size: 100%;
    }
    .nav1{
        display: block;
        color: #fff;
        padding: 8px 16px;
        text-decoration: none;
    }
    .nav2{
        display: block;
        color: #fff;
        padding: 8px 16px;
        text-decoration: none;
        background-color: #546E7A;
    }
    .nav1:hover{
        background-color: #455A64;
        color: #fff;
    }
    .select{
        background-color: #455A64;
    }
    .navu{
    	padding-top: 12px;
    }
    .profesor{
    	color: #fff;
    	font-family: 'Anton', sans-serif;
    	letter-spacing: 2px;
    	font-size: 70px;
        padding-left: 12%;
    }
    .menuvertical{
        position: fixed;
        padding-top: 0px;
        background-color: #37474F;
        width: 250px;
        height: 100%;
    }
    .navvertical{
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 250px;
        font-style: none;
    }
    .subnav{
        list-style-type: none;
        margin: 0;
        padding: 0px 0px;
        font-style: none;
    }
    .menuvertical ul ul{
        display: none;
    }
    .menuvertical a span{
        margin-left: 10px;
    }
</style>
<div class="navv">
    <img class="logo" src="../Imagenes/Logo.png">
    <a href="{{ url('/Admin/Home') }}"><p class="log">SIGHO <span class="log1">&</span> MAPS</p></a>
</div>
<div class="banner col-md-12">
    <div class="container">
        <p class="profesor">Profesores</p>
    </div>
</div>
<div class="menuvertical">
    <ul class="navvertical">
        <li><a class="nav1"href="#">Inicio</a></li>
        <li class="select submenu"><a class="nav1"href="#">Profesores <span>+</span></a>
            <ul class="subnav">
                <li><a class="nav2" href="">Lista</a></li>
                <li><a class="nav2" href="">Comentarios</a></li>
            </ul>
        </li>
        <li><a class="nav1"href="#">Mapas</a></li>
    </ul>
</div>
<script>
$(".submenu").click(function(){
    $(this).children("ul").slideToggle();
})
</script>

@endsection