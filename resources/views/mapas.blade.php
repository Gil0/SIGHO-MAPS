@extends('layouts.app')

@section('content')
<meta name="csrf_token" content="{{ csrf_token() }}" /> <!--Se necestia este metadato para poder hacer AJAX, se envia el csrf_token al server para validar que si existe la sesion -->
 <link rel="stylesheet" href="{!!asset('css/bootstrap.min.css')!!}">
 <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<style>
    @import url('http://fonts.googleapis.com/css?family=Julius+Sans+One');
    @import url('https://fonts.googleapis.com/css?family=Anton');
    body{
        padding: 0;
        margin: 0;
    }
    .margen{
        padding: 0;
        margin: 0;
    }
    /*----- Nav Superior -----*/
    .navsup{
        height: 55px;
        background: #263238;
    }
    .imglogo{
        position: absolute;
        left: 0px;
        width: 5%;
        top: -3px;
    }
    .logo{
        color: #fff;
        font-size: 20px;
        font-family: 'Anton', sans-serif;
        letter-spacing: 3px;
        padding-top: 12px;
        padding-left: 70px;
    }
    .log{
        color: #06bb84;
        font-family: 'Anton', sans-serif;
        text-align: center;
    }
    /*----- Buscador -----*/
    .buscador{
        padding-top: 10px;
    }
    /*----- Banner -----*/
    .profesor{
        color: #06bb84;
        font-family: 'Anton', sans-serif;
        letter-spacing: 2px;
        font-size: 70px;
    }
    /*----- Mapas -----*/
    .map{
        width: 100%;
    }
    .edif{
        color: #263238;
        font-family: 'Anton', sans-serif;
        letter-spacing: 2px;
        font-size: 30px;
        text-align: center;
    }
    /*----- Menu -----*/
    @media (min-width: 768px) {
        .sidebar-nav .navbar .navbar-collapse {
            padding: 0;
            max-height: none;
        }
        .sidebar-nav .navbar ul {
            float: none;
        }
        .sidebar-nav .navbar ul:not {
            display: block;
        }
        .sidebar-nav .navbar li {
            float: none;
            display: block;
        }
        .sidebar-nav .navbar li a {
            padding-top: 12px;
            padding-bottom: 12px;
        }
    }
</style>
<div class="navsup">
    <img class="imglogo" src="../Imagenes/Logo.png">
    <a href="{{ url('/') }}"><p class="logo">SIGHO <span class="log">&</span> MAPS</p></a>
</div>
<div>
    <div class="col-sm-12">
        <div>
            <div class="col-sm-3">
                <div class="sidebar-nav">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <span class="visible-xs navbar-brand">Menu</span>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="{{url ('/')}}">Inicio</a></li>
                                @if(!Auth::guest())
                                @if(Auth::user()->is_admin == True)
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Profesores<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url ('/Admin/Profesores')}}">Lista</a></li>
                                        <li><a href="{{url ('/Admin/Comentarios')}}">Comentarios</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Materias</a></li>
                                <li class="active"><a href="{{url ('/Mapas')}}">Mapas</a></li>
                                @else
                                <li><a href="#">Horarios</a></li>
                                <li><a href="{{url ('/User/Profesores')}}">Profesores</a></li>
                                <li class="active"><a href="{{url ('/Mapas')}}">Mapas</a></li>
                                @endif
                                @else
                                <li><a href="{{url ('/User/Profesores')}}">Profesores</a></li>
                                <li class="active"><a href="{{url ('/Mapas')}}">Mapas</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div>
                    <p class="profesor">Mapas</p>
                </div>
                <div class="col-sm-12">
                    <div>
                        <div class="col-sm-6">
                            <div>
                                <img class="map" src="../Imagenes/map1.jpg" data-toggle="modal">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div>
                                <p class="edif">CC01</p>
                            </div>
                            <div class="panel-heading">
                                <button class="btn btn-outline-success center-block" style="width:50%;" data-toggle="modal" data-target="#CC011">Sótano</button>
                            </div>
                            <div class="panel-heading">
                                <button class="btn btn-outline-success center-block" style="width:50%;" data-toggle="modal" data-target="#CC012">Planta baja</button>
                            </div>
                            <div class="panel-heading">
                                <button class="btn btn-outline-success center-block" style="width:50%;" data-toggle="modal" data-target="#CC013">Primer piso</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-6">
                            <div>
                                <img class="map" src="../Imagenes/map1.jpg" data-toggle="modal">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div>
                                <p class="edif">CC02</p>
                            </div>
                            <div class="panel-heading">
                                <button class="btn btn-outline-success center-block" style="width:50%;" data-toggle="modal" data-target="#CC021">Planta baja</button>
                            </div>
                            <div class="panel-heading">
                                <button class="btn btn-outline-success center-block" style="width:50%;" data-toggle="modal" data-target="#CC022">Primer piso</button>
                            </div>
                            <div class="panel-heading">
                                <button class="btn btn-outline-success center-block" style="width:50%;" data-toggle="modal" data-target="#CC023">Segundo piso</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-6">
                            <div>
                                <img class="map" src="../Imagenes/map1.jpg" data-toggle="modal">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div>
                                <p class="edif">CC03</p>
                            </div>
                            <div class="panel-heading">
                                <button class="btn btn-outline-success center-block" style="width:50%;" data-toggle="modal" data-target="#CC031">Planta baja</button>
                            </div>
                            <div class="panel-heading">
                                <button class="btn btn-outline-success center-block" style="width:50%;" data-toggle="modal" data-target="#CC032">Primer piso</button>
                            </div>
                            <div class="panel-heading">
                                <button class="btn btn-outline-success center-block" style="width:50%;" data-toggle="modal" data-target="#CC033">Segundo piso</button>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div>
                        <div class="col-sm-6">
                            <div>
                                <img class="map" src="../Imagenes/map1.jpg" data-toggle="modal">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div>
                                <p class="edif">CC04</p>
                            </div>
                            <div class="panel-heading">
                                <button class="btn btn-outline-success center-block" style="width:50%;" data-toggle="modal" data-target="#CC041">Planta baja</button>
                            </div>
                            <div class="panel-heading">
                                <button class="btn btn-outline-success center-block" style="width:50%;" data-toggle="modal" data-target="#CC042">Primer piso</button>
                            </div>
                            <div class="panel-heading">
                                <button class="btn btn-outline-success center-block" style="width:50%;" data-toggle="modal" data-target="#CC043">Segundo piso</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edificio CC01-->
<div class="modal fade" id="CC011" tabindex="-1" role="dialog" aria-labelledby="Nuevo Profesor">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sótano</h4>
            </div>
            <img src="../Imagenes/croquis.png">
        </div>
    </div>
</div>

<div class="modal fade" id="CC012" tabindex="-1" role="dialog" aria-labelledby="Nuevo Profesor">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Planta baja</h4>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="CC013" tabindex="-1" role="dialog" aria-labelledby="Nuevo Profesor">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Primer piso</h4>
            </div>
        </div>
    </div>
</div>

<!-- Edificio CC02-->
<div class="modal fade" id="CC021" tabindex="-1" role="dialog" aria-labelledby="Nuevo Profesor">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Planta baja</h4>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="CC022" tabindex="-1" role="dialog" aria-labelledby="Nuevo Profesor">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Primer piso</h4>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="CC023" tabindex="-1" role="dialog" aria-labelledby="Nuevo Profesor">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Segundo piso</h4>
            </div>
        </div>
    </div>
</div>

<!-- Edificio CC03-->
<div class="modal fade" id="CC031" tabindex="-1" role="dialog" aria-labelledby="Nuevo Profesor">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Planta baja</h4>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="CC032" tabindex="-1" role="dialog" aria-labelledby="Nuevo Profesor">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Primer piso</h4>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="CC033" tabindex="-1" role="dialog" aria-labelledby="Nuevo Profesor">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Segundo piso</h4>
            </div>
        </div>
    </div>
</div>

<!-- Edificio CC04-->
<div class="modal fade" id="CC041" tabindex="-1" role="dialog" aria-labelledby="Nuevo Profesor">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Planta baja</h4>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="CC042" tabindex="-1" role="dialog" aria-labelledby="Nuevo Profesor">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Primer piso</h4>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="CC043" tabindex="-1" role="dialog" aria-labelledby="Nuevo Profesor">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Segundo piso</h4>
            </div>
        </div>
    </div>
</div>