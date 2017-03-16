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
        <button class="btn btn-success" style="width:100%;" data-toggle="modal" data-target="#nuevaInformacionAcademica">Nueva Informacion Academica</button>
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
                                    <th></th><!--<th><i class="fa fa-pencil-square fa-2x" id="EditarAca" aria-hidden="true" value="{{$academica->idFormacionAcademica}}"></i></th>-->
                                    <th><i class="fa fa-trash fa-2x" id="EliminarAca" aria-hidden="true" value="{{$academica->idFormacionAcademica}}" data-toggle="modal" data-target="#eliminarAcademica"></i></th>
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
        <button class="btn btn-success" style="width:100%;" data-toggle="modal" data-target="#nuevaInformacionLaboral">Nueva Informacion Laboral</button>
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
                                   <th></th><!-- <th><i class="fa fa-pencil-square fa-2x" id="EditarLab" aria-hidden="true" value="{{$laboral->idInformacionLaboral}}"></i></th>-->
                                    <th><i class="fa fa-trash fa-2x" id="EliminarLab"  aria-hidden="true" value="{{$laboral->idInformacionLaboral}}"></i></th>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
      
        </div>
    </div>
</div>

@endsection
