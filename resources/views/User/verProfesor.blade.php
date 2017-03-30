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
                                <li><a href="{{url ('/User/Profesores')}}">Profesores</a></li>    
                                <li><a href="#">Materias</a></li>
                                <li><a href="{{url ('/Mapas')}}">Mapas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
              <div>
                <p class="profesor">{{$profesores->nombre}} {{$profesores->apellidos}}</p>
              </div>
              
                <div class="panel panel-default">
                  <div class="panel-heading">Comentarios</div>
                    <div class="panel-body">
                      <table class="table table-striped">
                        <thread>
                          <tr>
                            <th>#</th>
                            <th>comentario</th>
                            <th>Calificacion</th>
                          </tr>
                        </thread>
                        <tbody>
                      
                        @foreach($comentarios as $comentario)
                        <tr>
                          <th scope="row">{{$comentario->idComentario}}</th>
                          <th>{{$comentario->comentario}}</th>
                          <th>{{$comentario->calificacion}}</th>
                    
                        </tr>
                        @endforeach
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

