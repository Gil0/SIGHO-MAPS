@extends('layouts.app')

@section('content')
<meta name="csrf_token" content="{{ csrf_token() }}" /> <!--Se necestia este metadato para poder hacer AJAX, se envia el csrf_token al server para validar que si existe la sesion -->
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
    /*----- Panel -----*/
    .panelesp{
        top: 20px;
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
        <div class="">
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
                                <li class="active"><a href="{{url ('/Profesores')}}">Profesores</a></li>
                                <li><a href="{{url ('/Mapas')}}">Mapas</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div>
                    <p class="profesor">Profesores</p>
                </div>
                           
            <!--Informacion Profesor-->
            <div class="panel panel-info">
                <div class="panel-heading">Informacion Personal</div>                        
                    @if(!empty($profesor))                                                                          
                        <div class="panel-body">
                            <form class="form-horizontal" action="" method="POST">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nombre</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nombreProfesor" name="nombreProfesor" value="{{$profesor->nombre}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Apellidos</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="apellidosProfesor" name="apellidosProfesor" value="{{$profesor->apellidos}}" readonly>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Cubiculo</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="cubiculoProfesor" name="cubiculoProfesor" value="{{$profesor->cubiculo}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Correo Electronico</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="correoProfesor" name="correoProfesor" value="{{$profesor->correoElectronico}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Calificacion</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Calificacion" name="Calificacion" value="{{$profesor->calificacion}}" readonly>
                                    </div>
                                </div>
                            </form>                                                                                                                                                                 
                        </div>                            
                    @endif    
            </div>
            <!--Informacion Formacion Academica-->
            <div class="panel panel-info">
                <div class="panel-heading">Informacion Academica</div>                        
                    @if(!empty($formacion_academica))
                    <div class="panel-body">   
                    <table class="table table-hover">
                            <thread>
                                <tr>                                    
                                    <th>Escuela</th>
                                    <th>Estudios</th>
                                    <th>Periodo</th>                                    
                                </tr>
                            </thread>                     
                        @foreach($formacion_academica as $formacion_academica)                                                                            
                        <tbody>
                            <tr>
                                <th>{{$formacion_academica->escuela}}</th>
                                <th>{{$formacion_academica->estudios}}</th>
                                <th>{{$formacion_academica->periodo}}</th>
                            </tr>
                        </tbody>                                                                                                                                                                                
                        @endforeach
                    </table>   
                    </div>                                            
                    @endif    
                                               
            </div>
            <!--Informacion Informacion Laboral-->
            <div class="panel panel-info">
                <div class="panel-heading">Informacion Laboral</div>
                    @if(!empty($informacion_laboral))
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thread>
                                <tr>                                    
                                    <th>Lugar de Trabajo</th>
                                    <th>Puesto</th>
                                    <th>Periodo</th>                                    
                                </tr>
                            </thread>
                        @foreach($informacion_laboral as $informacion_laboral)
                        <tbody>
                            <tr>
                                <th>{{$informacion_laboral->lugar_trabajo}}</th>
                                <th>{{$informacion_laboral->puesto}}</th>
                                <th>{{$informacion_laboral->periodo}}</th>
                            </tr>
                        </tbody>                                              
                        @endforeach
                        </table>
                        </div>
                    @endif         
            </div>
            
            </div>
        </div>
    </div>
</div>

@endsection 

