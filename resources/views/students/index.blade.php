@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-8">Alumnos</div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-default btn-sm pull-right">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {!! link_to('students/create', 'Nuevo Alumno')  !!}
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nombre</td>
                                <td>Apellidos</td>
                                <td>Genero</td>
                                <td>Fecha de Nacimiento</td>
                                <td>Numero Celular</td>
                                <td>Status</td>
                                <td></td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $key => $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->nombre}}</td>
                                    <td>{{ $value->apellidos}}</td>
                                    <td>{{ $value->genero}}</td>
                                    <td>{{ $value->fecha_nacimiento}}</td>
                                    <td>{{ $value->numero_celular}}</td>
                                    <td>{{ $value->status}}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-block">Modificar</button>
                                    </td>

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