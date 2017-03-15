@extends('layouts.app')

@section('content')
<meta name="csrf_token" content="{{ csrf_token() }}" /> <!--Se necestia este metadato para poder hacer AJAX, se envia el csrf_token al server para validar que si existe la sesion -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Información Personal
                    @foreach($profesores as $profesores)
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
                        @endforeach
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
                            @foreach($profesores as $profesores)
                                <tr>
                                    <th scope="row">{{$profesores->idFormacionAcademica}}</th>
                                    <th>{{$profesores->escuela}}</th>
                                    <th>{{$profesores->estudios}}</th>
                                    <th>{{$profesores->periodo}}</th>
                                    <th><i class="fa fa-pencil-square fa-2x" aria-hidden="true" value="{{$profesores->idProfesor}}"></i></th>
                                    <th><i class="fa fa-trash fa-2x" aria-hidden="true" value="{{$profesores->idProfesor}}"></i></th>
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
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Lugar de Trabajo</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombreProfesor" value="{{$profesores->nombre}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Puesto</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="apellidoProfesor" value="{{$profesores->apellidos}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Periodo</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="cubiculoProfesor" value="{{$profesores->cubiculo}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button id="guardarCambios" type="button" class="btn btn-primary form-control" >Guardar Cambios</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
