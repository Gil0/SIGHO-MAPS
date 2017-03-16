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
        width: 100%;
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
    }
    .menuvertical{
        padding-top: 0px;
        background-color: #37474F;
        height: 100%;
        width: 100%;
    }
    .navvertical{
        list-style-type: none;
        margin: 0;
        padding: 0;
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
    .contenprincipal{
        margin: 0;
        padding: 0;
    }
    .buscador{
        padding-top: 10px;
        padding-left: 10px;
    }
    .contene{
        width: 100%;
        padding: 0;
        margin: 0;
    }
</style>
<div>
<div class="container contene">
    <div class="navv">
        <img class="logo" src="../Imagenes/Logo.png">
        <a href="{{ url('/') }}"><p class="log">SIGHO <span class="log1">&</span> MAPS</p></a>
    </div>
</div>
<div class="container col-md-12 contenprincipal">
    <div class="col-md-3 contenprincipal">
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
    </div>
    <div class="col-md-9 contenprincipal">
        <div class="banner contene">
            <p class="profesor">Profesores</p>
        </div>
        <div class="col-md-8 contenprincipal buscador">
            <div class="container">
                <div class="col-md-8 contenprincipal buscador">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Buscar</button>
                        </span>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div><!--Este div se va a cambiar por otro.-->
            <div class="panel-heading">
                <button class="btn btn-success" style="width:100%;" data-toggle="modal" data-target="#nuevoProfesor">Nuevo Profesor</button>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thread>
                        <tr>
                            <th>#</th>
                            <th>nombre</th>
                            <th>apellidos</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thread>
                    <tbody>
                        @foreach($profesores as $profesores)
                        <tr>
                            <th scope="row">{{$profesores->idProfesor}}</th>
                            <th>{{$profesores->nombre}}</th>
                            <th>{{$profesores->apellidos}}</th>
                            <th><i class="fa fa-plus-circle fa-2x" aria-hidden="true" value="{{$profesores->idProfesor}}"></i></th>
                            <th><i class="fa fa-pencil-square fa-2x" aria-hidden="true" value="{{$profesores->idProfesor}}"></i></th>
                            <th><i class="fa fa-trash fa-2x" aria-hidden="true" value="{{$profesores->idProfesor}}"></i></th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
<!-- modal Nuevo Profesor-->
<div class="modal fade" id="nuevoProfesor" tabindex="-1" role="dialog" aria-labelledby="Nuevo Profesor">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Profesor</h4>
      </div>
      <form action="/admin/profesor/crear" method="POST">
      {{ csrf_field() }} <!-- ESTE TOKEN ES IMPORTANTE PARA PODER ENVIAR DATOS AL SERVER... si no lo incluyes habra error ya que la informacion no es "confiable" -->
        <div class="modal-body">
            <input type="text" class="form-control" placeholder="Nombre" name="nombre" required><br>
            <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" required><br>
            <input type="text" class="form-control" placeholder="Cubiculo" name="cubiculo" required><br>
            <input type="email" class="form-control" placeholder="Correo Electronico" name="email" required><br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" id="cancelar">Cerrar</button>
            <button type="submit" class="btn btn-primary" id="crearProfesor">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- modal informacion Profesor-->
<div class="modal fade" id="verProfesor" tabindex="-1" role="dialog" aria-labelledby="Ver Profesor">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" id="informacionProfesor"> 
         <div class="modal-header" id="informacionProfesor"> 
         
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" style="width:100%;" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- modal seguridad eliminar evento-->
<div class="modal fade" id="eliminarProfesor" tabindex="-1" role="dialog" aria-labelledby="Eliminar Profesor">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
           <p class="lead" style="text-align:center;">¿Estas seguro de eliminar éste Profesor?</p>
      </div>
      <div class="modal-footer">
        <form method="POST" action="" id="eliminarProfesor">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger" style="width:100%;">SI</button>
        </form>
        <button type="button" class="btn btn-default" style="width:100%;" data-dismiss="modal">NO</button>
      </div>
    </div>
  </div>
</div>
            
        </div>
        
    </div>
    
</div>

<br/>
<br/>

<script>
$(".submenu").click(function(){
    $(this).children("ul").slideToggle();
})
</script>

<script>
    $(document).ready(function(){

        $('i.fa-plus-circle').click(function(){
           $('#verProfesor').modal('show'); 

            $.ajax({
                url : '/admin/profesor/'+$(this).attr('value')+'/getInformacion',
                type : 'GET',
                dataType : 'json',
                beforeSend: function (xhr) {                                      //Antes de enviar la peticion AJAX se incluye el csrf_token para validar la sesion.
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {
                          return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                     }
               },
                success:function(response){
                    $('div#informacionProfesor').html(
                        '<div class="col-sm-12">'+
                            '<div class="row">'+
                                '<div class="col-sm-12">'+
                                    '<p class="lead">Nombre: '+response.nombre+'</p>'+
                                '</div>'+'<br/>'+'<br/>'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-sm-12">'+
                                    '<p class="lead">Apellidos: '+response.apellidos+'</p>'+
                                '</div>'+'<br/>'+'<br/>'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-sm-12">'+
                                    '<p class="lead">Email: '+response.correoElectronico+'</p>'+
                                '</div>'+'<br/>'+'<br/>'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-sm-12">'+
                                    '<p class="lead">Cubiculo: '+response.cubiculo+'</p>'+
                                '</div>'+'<br/>'+'<br/>'+
                            '</div>'+
                        '</div>'
                    );
                }
            });
        });

        $('i.fa-pencil-square').click(function(){

           window.location.href = '/Admin/profesor/'+$(this).attr('value')+'/editar';

        });

         $('i.fa-trash').click(function(){
           $('#eliminarProfesor').modal('show');
           $('form#eliminarProfesor').attr('action','/admin/profesores/'+$(this).attr('value')+'/eliminar');
         });


    });

</script>

@endsection