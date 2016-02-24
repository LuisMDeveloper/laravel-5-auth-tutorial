@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    @can('isRole', 'admin')
                    <br/>
                    <a href="">Administrar Usuarios</a>
                    <br/>
                    <a href="">Administrar Materias</a>
                    <br/>
                    <a href="">Administrar Maestros</a>
                    <br/>
                    <a href="">Administrar Alumnos</a>
                    @endcan

                    @can('isRole', 'student')
                    <br/>
                    <a href="">Dar de alta Materias</a>
                    <br/>
                    <a href="">Evaluar Maestros</a>
                    <br/>
                    <a href="">Revisar Calificaciones</a>
                    @endcan

                    @can('isRole', 'teacher')
                    <br/>
                    <a href="">Lista de Materias</a>
                    <br/>
                    <a href="">Listas de asistencias</a>
                    <br/>
                    <a href="">Grupos</a>
                    @endcan

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
