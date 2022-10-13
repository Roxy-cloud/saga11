@extends('layouts.app')

@section('template_title')
    {{ $student->name ?? 'Lista de Estudiantes' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Lista de Estudiantes</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('students.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cédula:</strong>
                            {{ $student->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $student->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $student->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar de Nacimiento:</strong>
                            {{ $student->lugarnac }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $student->estadonac }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Nacimiento:</strong>
                            {{ $student->fechanac }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $student->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Año/Grado:</strong>
                            {{ $student->seccion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Grupo de Interés:</strong>
                            {{ $student->crp_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
