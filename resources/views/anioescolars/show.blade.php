@extends('layouts.app')

@section('template_title')
    {{ $anioescolar->name ?? 'Mostrar Año Escolar' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Año Escolar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('anioescolars.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Año Escolar:</strong>
                            {{ $anioescolar->nombreanioescolar }}
                        </div>
                        <div class="form-group">
                            <strong>Inicio:</strong>
                            {{ $anioescolar->fechainicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fin:</strong>
                            {{ $anioescolar->fechafin }}
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
