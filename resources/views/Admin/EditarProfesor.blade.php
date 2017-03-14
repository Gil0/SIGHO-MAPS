@extends('layouts.app')

@section('content')
<meta name="csrf_token" content="{{ csrf_token() }}" /> <!--Se necestia este metadato para poder hacer AJAX, se envia el csrf_token al server para validar que si existe la sesion -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$profesores->nombre}}
                </div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombreProfesor" value="{{$profesores->nombre}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Apellidos</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="apellidoProfesor" value="{{$profesores->apellidos}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cubiculo</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="cubiculoProfesor" value="{{$profesores->cubiculo}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Correo Electronico</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="emailProfesor" value="{{$profesores->correoElectronico}}">
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
