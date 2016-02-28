@extends('layouts.app')

@section('content')
    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Nuevo Alumno</h3></div>
            <div class="panel-body">
                {!! Form::open(array('url' => 'students')) !!}

                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre:') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('apellidos', 'Apellidos:') !!}
                    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('genero', 'Genero:') !!}
                    {!! Form::select('genero', array('Masculino' => 'Masculino', 'Femenino' => 'Femenino'),null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento:') !!}
                    {!! Form::date('fecha_nacimiento', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('numero_celular', 'Numero Celular:') !!}
                    {!! Form::text('numero_celular', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Dar de alta', ['class' => 'btn btn-primary pull-right']) !!}

                {!! Form::close() !!}
            </div>
        </div>


    </div>
@endsection