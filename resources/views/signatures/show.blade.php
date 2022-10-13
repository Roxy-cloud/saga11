@extends('layouts.app')

@section('template_title')
    {{ $signature->name ?? 'Listad de Asignaturas' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Listado de Asignaturas</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('signatures.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre de Asignatura:</strong>
                            {{ $signature->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Abreviatura:</strong>
                            {{ $signature->abreviatura }}
                        </div>
                        <div class="form-group">
                            <strong>Año/Grado:</strong>
                            {{ $signature->seccions->nombre_grado }}
                        </div>
                        <div class="form-group">
                            <strong>Docente:</strong>
                            {{ $signature->users->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
