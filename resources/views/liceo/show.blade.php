@extends('layouts.app')

@section('template_title')
    {{ $liceo->name ?? 'Show Liceo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('liceos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigoplantel:</strong>
                            {{ $liceo->codigoplantel }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $liceo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $liceo->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $liceo->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $liceo->municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Distritofederal:</strong>
                            {{ $liceo->distritofederal }}
                        </div>
                        <div class="form-group">
                            <strong>Zonaeducativa:</strong>
                            {{ $liceo->zonaeducativa }}
                        </div>
                        <div class="form-group">
                            <strong>Director:</strong>
                            {{ $liceo->director }}
                        </div>
                        <div class="form-group">
                            <strong>Ceduladirector:</strong>
                            {{ $liceo->ceduladirector }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
