@extends('layouts.app')

@section('template_title')
    {{ $seccion->name ?? 'Mostrar Sección' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Sección</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('seccions.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Año o Grado:</strong>
                            {{ $seccion->nombre_grado }}
                        </div>
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $seccion->grado }}
                        </div>
                        <div class="form-group">
                            <strong>Seccion:</strong>
                            {{ $seccion->seccion }}
                        </div>
                        <div class="form-group">
                            <strong>Año Escolar:</strong>
                            {{ $seccion->anioescolar->nombreanioescolar }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
