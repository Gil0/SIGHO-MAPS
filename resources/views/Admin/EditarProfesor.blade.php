@extends('layouts.app')

@section('content')
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
    /*label*/
    .labelmenu{
      background-color: #263238;
    }
    /*----- Iconos -----*/
    .icondelete{
        color: #d9534f;
        border-color: #d43f3a;
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
<meta name="csrf_token" content="{{ csrf_token() }}" /> <!--Se necestia este metadato para poder hacer AJAX, se envia el csrf_token al server para validar que si existe la sesion -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
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
                                <li class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Profesores<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url ('/Admin/Profesores')}}">Lista</a></li>
                                        <li><a href="{{url ('/Admin/Comentarios')}}">Comentarios</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Materias</a></li>
                                <li><a href="{{url ('/Mapas')}}">Mapas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
              <div>
                <p class="profesor">Editar</p>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading labelmenu">Información Personal</div>
                  <div class="panel-body">
                    <form class="form-horizontal" action="/admin/profesor/{{$profesores->idProfesor}}/guardarCambios" method="POST">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nombreProfesor" name="nombreProfesor" value="{{$profesores->nombre}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Apellidos</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="apellidoProfesor" name="apellidoProfesor" value="{{$profesores->apellidos}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Cubiculo</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="cubiculoProfesor" name="cubiculoProfesor" value="{{$profesores->cubiculo}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Correo Electronico</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="emailProfesor" name="emailProfesor" value="{{$profesores->correoElectronico}}">
                        </div>
                      </div>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                          <button id="guardarCambios" type="submit" class="btn btn-primary form-control" >Guardar Cambios</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">Información Académica</div>
                  <div class="panel-heading">
                    <button class="btn btn-outline-success" style="width:100%;" data-toggle="modal" data-target="#nuevaInformacionAcademica">Nueva Informacion Academica</button>
                  </div>
                  <div class="panel-body">
                    <table class="table table-hover">
                      <thread>
                        <tr>
                          <th>#</th>
                          <th>Escuela</th>
                          <th>Estudios</th>
                          <th>Periodo</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thread>
                      <tbody>
                        @if($academica)
                        @foreach($academica as $academica)
                        <tr>
                          <th scope="row">{{$academica->idFormacionAcademica}}</th>
                          <th>{{$academica->escuela}}</th>
                          <th>{{$academica->estudios}}</th>
                          <th>{{$academica->periodo}}</th>
                          <th><i class="fa fa-trash fa-2x icondelete" id ="EliminarAca" aria-hidden="true" value="{{$academica->idProfesor}}"></i></th>
                        </tr>
                        @endforeach
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">Información Laboral</div>
                    <div class="panel-heading">
                      <button class="btn btn-outline-success" style="width:100%;" data-toggle="modal" data-target="#nuevaInformacionLaboral">Nueva Informacion Laboral</button>
                    </div> 
                    <div class="panel-body">
                      <table class="table table-striped">
                        <thread>
                          <tr>
                            <th>#</th>
                            <th>Lugar de Trabajo</th>
                            <th>Puesto</th>
                            <th>Periodo</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thread>
                        <tbody>
                          @if($laboral)
                          @foreach($laboral as $laboral)
                          <tr>
                            <th scope="row">{{$laboral->idInformacionLaboral}}</th>
                            <th>{{$laboral->lugar_trabajo}}</th>
                            <th>{{$laboral->puesto}}</th>
                            <th>{{$laboral->periodo}}</th>
                            <th><i class="fa fa-trash fa-2x icondelete" id="EliminarLab" aria-hidden="true" value="{{$laboral->idProfesor}}"></i></th>
                          </tr>
                          @endforeach
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="nuevaInformacionAcademica" tabindex="-1" role="dialog" aria-labelledby="Nueva Informacion Academica">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nueva Informacion Academica</h4>
                  </div>
                  <form action="/admin/profesor/infoAcademica/crear" method="POST">
                  {{ csrf_field() }} <!-- ESTE TOKEN ES IMPORTANTE PARA PODER ENVIAR DATOS AL SERVER... si no lo incluyes habra error ya que la informacion no es "confiable" -->
                    <div class="modal-body">
                        <input type="text" class="form-control" placeholder="Escuela" name="escuela" required><br>
                        <input type="text" class="form-control" placeholder="Estudios" name="estudios" required><br>
                        <input type="text" class="form-control" placeholder="Periodo" name="periodo" required><br>
                        <input type="hidden" value="{{$profesores->idProfesor}}" name="idProfesor">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="cancelar">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="crearInfoAcademica">Guardar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="modal fade" id="nuevaInformacionLaboral" tabindex="-1" role="dialog" aria-labelledby="Nueva Informacion Laboral">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Nueva Informacion Laboral</h4>
        </div>
        <form action="/admin/profesor/infoLaboral/crear" method="POST">
        {{!! csrf_field() !!}} <!-- ESTE TOKEN ES IMPORTANTE PARA PODER ENVIAR DATOS AL SERVER... si no lo incluyes habra error ya que la informacion no es "confiable" -->
          <div class="modal-body">
              <input type="text" class="form-control" placeholder="Lugar de trabajo" name="lugar_trabajo" required><br>
              <input type="text" class="form-control" placeholder="Puesto" name="puesto" required><br>
              <input type="text" class="form-control" placeholder="Periodo" name="periodo" required><br>
              <input type="hidden" value="{{$profesores->idProfesor}}" name="idProfesor">
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cancelar">Cerrar</button>
              <button type="submit" class="btn btn-primary" id="crearInfoLaboral">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>





<div class="modal fade" id="eliminarInfoAcademicaModal" tabindex="-1" role="dialog" aria-labelledby="Eliminar Informacion Academica">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
           <p class="lead" style="text-align:center;">¿Estas seguro de eliminar ésta información?</p>
      </div>
      <div class="modal-footer">
        <form method="POST" action="" id="eliminarInfoAcademica">
            {{ csrf_field() }}
            <input type="hidden" value="{{$profesores->idProfesor}}" name="idProfesor">
            <button type="submit" class="btn btn-danger" style="width:100%;">SI</button>
        </form>
        <button type="button" class="btn btn-default" style="width:100%;" data-dismiss="modal">NO</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="eliminarInfoLaboralModal" tabindex="-1" role="dialog" aria-labelledby="Eliminar Informacion Laboral">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
           <p class="lead" style="text-align:center;">¿Estas seguro de eliminar ésta información?</p>
      </div>
      <div class="modal-footer">
        <form method="POST" action="" id="eliminarInfoLaboral">
            {{ csrf_field() }}
            <input type="hidden" value="{{$profesores->idProfesor}}" name="idProfesor">
            <button type="submit" class="btn btn-danger" style="width:100%;">SI</button>
        </form>
        <button type="button" class="btn btn-default" style="width:100%;" data-dismiss="modal">NO</button>
      </div>
    </div>
  </div>
</div>


<script>
$(".submenu").click(function(){
    $(this).children("ul").slideToggle();
})
</script>

<script>
    $(document).ready(function(){

         $('i#EliminarAca').click(function(){
           $('#eliminarInfoAcademicaModal').modal('show');
           $('form#eliminarInfoAcademica').attr('action','/admin/profesor/academica/'+$(this).attr('value')+'/eliminar');
         });
         $('i#EliminarLab').click(function(){
           $('#eliminarInfoLaboralModal').modal('show');
           $('form#eliminarInfoLaboral').attr('action','/admin/profesor/laboral/'+$(this).attr('value')+'/eliminar');
         });
    });
</script>

@endsection

