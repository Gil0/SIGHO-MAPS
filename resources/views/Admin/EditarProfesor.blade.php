@extends('layouts.app')

@section('content')
<meta name="csrf_token" content="{{ csrf_token() }}" /> <!--Se necestia este metadato para poder hacer AJAX, se envia el csrf_token al server para validar que si existe la sesion -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Información Personal
                       </div>
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
                <div class="panel-heading">
                   Información Académica
                  
                </div>
                <div class="panel-heading">
        <button class="btn btn-success" style="width:100%;" data-toggle="modal" data-target="#nuevoAcademica">Nueva Informacion Academica</button>
    </div>
        
    <div class="panel-body">
        <table class="table table-striped">
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
                         @foreach($academica as $academica)
                                <tr>
                                    <th scope="row">{{$academica->idFormacionAcademica}}</th>
                                    <th>{{$academica->escuela}}</th>
                                    <th>{{$academica->estudios}}</th>
                                    <th>{{$academica->periodo}}</th>
                                    <th><i class="fa fa-pencil-square fa-2x" aria-hidden="true" value="{{$academica->idFormacionAcademica}}"></i></th>
                                    <th><i class="fa fa-trash fa-2x" aria-hidden="true" value="{{$academica->idFormacionAcademica}}"></i></th>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
          <div class="panel panel-default">
                <div class="panel-heading">
                   Información Laboral
                </div>
                
                <div class="panel-heading">
        <button class="btn btn-success" style="width:100%;" data-toggle="modal" data-target="#nuevoLaboral">Nueva Informacion Laboral</button>
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
                        @foreach($laboral as $laboral)
                                <tr>
                                    <th scope="row">{{$laboral->idInformacionLaboral}}</th>
                                    <th>{{$laboral->lugar_trabajo}}</th>
                                    <th>{{$laboral->puesto}}</th>
                                    <th>{{$laboral->periodo}}</th>
                                    <th><i class="fa fa-pencil-square fa-2x" aria-hidden="true" value="{{$laboral->idInformacionLaboral}}"></i></th>
                                    <th><i class="fa fa-trash fa-2x" aria-hidden="true" value="{{$laboral->idInformacionLaboral}}"></i></th>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
      
        </div>
    </div>
</div>
<div class="modal fade" id="nuevoAcademica" tabindex="-1" role="dialog" aria-labelledby="Nueva Informacion Academica">
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


<div class="modal fade" id="nuevoLaboral" tabindex="-1" role="dialog" aria-labelledby="Nueva Informacion Laboral">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Informacion Laboral</h4>
      </div>
      <form action="/admin/profesor/infoLaboral/crear" method="POST">
      {{ csrf_field() }} <!-- ESTE TOKEN ES IMPORTANTE PARA PODER ENVIAR DATOS AL SERVER... si no lo incluyes habra error ya que la informacion no es "confiable" -->
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


<div class="modal fade" id="eliminarAcademica" tabindex="-1" role="dialog" aria-labelledby="Eliminar Informacion Academica">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
           <p class="lead" style="text-align:center;">¿Estas seguro de eliminar ésta información?</p>
      </div>
      <div class="modal-footer">
        <form method="POST" action="" id="eliminarInfoAcademica">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger" style="width:100%;">SI</button>
        </form>
        <button type="button" class="btn btn-default" style="width:100%;" data-dismiss="modal">NO</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="eliminarLaboral" tabindex="-1" role="dialog" aria-labelledby="Eliminar Informacion Laboral">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
           <p class="lead" style="text-align:center;">¿Estas seguro de eliminar ésta información?</p>
      </div>
      <div class="modal-footer">
        <form method="POST" action="" id="eliminarInfoLaboral">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger" style="width:100%;">SI</button>
        </form>
        <button type="button" class="btn btn-default" style="width:100%;" data-dismiss="modal">NO</button>
      </div>
    </div>
  </div>
</div>

@endsection
