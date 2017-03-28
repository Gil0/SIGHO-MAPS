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
                <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Profesores<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="{{url ('/Admin/Profesores')}}">Lista</a></li>
                  <li class="active"><a href={{url ('/Admin/Comentarios')}}>Comentarios</a></li>
                </ul>
                </li>
                <li><a href="#">Materias</a></li>
                <li><a href="#">Mapas</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div>
          <p class="profesor">Comentarios</p>
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

            <div class="panel-body">
       <table class="table table-striped">
                        <thread>
                            <tr>
                                <th class="head">Id</th>
                                <th class="head">Comentario</th>
                                <th class="head">Calificacion</th>
                                <th class="head"></th>
                                
                                <th class="head text-center">Status</th>
                            </tr>
                        </thread>
                        <tbody>
                            @foreach($comentarios as $comentarios)
                                <tr class="rowsTabla">
                                    <th scope="row">{{$comentarios->idComentario}}</th>
                                    <th>{{$comentarios->comentario}}</th>
                                     <th>{{$comentarios->calificacion}}</th>
                                    <th class="text-center">
                                        <!-- Single button -->
                                        <div class="btn-group">
                                        <button type="button" class="btn statusBtn" style="width:200%;" id="{{$comentarios->idComentario}}" value="{{$comentarios->status}}">
                                           <i class="fa fa-bullseye" aria-hidden="true"></i>
                                        </button>
                                        </div>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

<!-- modal Nuevo Profesor-->
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

      $('.rowsTabla > th > div > button').each(function(){
             if($(this).attr('value') == 0){
                 $(this).addClass("btn-danger");
             }
             else{
                 $(this).addClass("btn-success");
             }
         });

         $('.rowsTabla > th > div > button').click(function(){
             //alert($(this).attr('id'));
             if($(this).attr('value') == 0)
             {
                 $(this).removeClass('btn-danger');
                 $(this).addClass('btn-success');
                 $(this).attr('value',1);
             }
             else{
                 $(this).removeClass('btn-success');
                 $(this).addClass('btn-danger');
                 $(this).attr('value',0);
             }
             $.ajax({
                 url:'Admin/Comentarios/'+$(this).attr('idComentario')+'/cambiarStatus',
                 type:'POST',
                 dataType:'json',
                 data:{
                     'status': $(this).attr('value')
                 },beforeSend: function (xhr) {                                      //Antes de enviar la peticion AJAX se incluye el csrf_token para validar la sesion.
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                 success:function(response){
                     //alert(response);
                 }
             });
         });


    });
  
</script>

@endsection

