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
                                <li><a href="#">Horario</a></li>
                                <li class="active"><a href="{{url ('/User/Profesores')}}">Profesores</a></li>
                                <li><a href="{{url ('/Mapas')}}">Mapas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div>
                    <p class="profesor">Profesores</p>
                </div>
                <div>
                    <div class="col-sm-8 buscador">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Buscar</button>
                            </span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="panelesp">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thread>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Ver mas</th>
                                    <th>Escribir comentario</th>
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
                                    <th>
                                        <div class="panel-heading">
                                            <button class="btn btn-success" style="width:100%;" data-toggle="modal" data-target="#nuevoComentario" value="{{$profesores->idProfesor}}">Agregar Comentario</button>
                                        </div>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="nuevoComentario" tabindex="-1" role="dialog" aria-labelledby="Nuevo comentario">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Comentario</h4>
      </div>
      <form action="/user/comentario/crear" method="POST">
      {{ csrf_field() }} <!-- ESTE TOKEN ES IMPORTANTE PARA PODER ENVIAR DATOS AL SERVER... si no lo incluyes habra error ya que la informacion no es "confiable" -->
        <div class="modal-body">
            <input type="text" class="form-control" placeholder="comentario" name="comentario" required><br>
            <input type="number" class="form-control" placeholder="calificacion" name="calificacion" required><br>
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
<div class="modal fade" id="verEvento" tabindex="-1" role="dialog" aria-labelledby="Ver Profesor">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" id="informacionProfesor">
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" style="width:100%;" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
       
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
                    $('div#informacionEvento').html(
                        '<div class="col-sm-12">'+
                            '<div class="row">'+
                                '<div class="col-sm-8 col-sm-offset-2">'+
                                    '<h2 style="text-align:center;">'+response.nombre+'</h2>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-sm-12">'+
                                    '<p class="lead">'+response.descripcion+'</p>'+
                                '</div>'+
                            '</div>'+
                        '</div>'
                    );
                }
            });
        });

        $('i.fa-pencil-square').click(function(){
           window.location.href = '/admin/profesores/'+$(this).attr('value')+'/editar';
        });

         $('i.fa-trash').click(function(){
           $('#eliminarProfesor').modal('show');
           $('form#eliminarProfesor').attr('action','/admin/profesores/'+$(this).attr('value')+'/eliminar');
         });


    });

</script>
@endsection