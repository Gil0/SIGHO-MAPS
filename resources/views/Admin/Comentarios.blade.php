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
        position: fixed;
        padding-top: 0px;
        background-color: #37474F;
        width: 299px;
        height: 100%;
    }
    .navvertical{
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 299px;
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
    }
</style>
<div class="navv">
    <img class="logo" src="../Imagenes/Logo.png">
    <a href="{{ url('/') }}"><p class="log">SIGHO <span class="log1">&</span> MAPS</p></a>
</div>
<div class="col-md-12 contenprincipal">
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
        <div class="col-md-12 contenprincipal">
            <div class="banner">
                <div class="container">
                    <p class="profesor">Comentarios</p>
                </div>
            </div>
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
 <div><!--Este div se va a cambiar por otro.-->

    
    <div class="panel-body">
       <table class="table table-striped">
                        <thread>
                            <tr>
                                <th class="head">Id</th>
                                <th class="head">Comentario</th>
                                <th class="head">Calificacion</th>
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


            
        </div>
        
    </div>
    
</div>

<br/>
<br/>



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
                 url:'/Admin/Comentarios/'+$(this).attr("id")+'/cambiarStatus',
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

