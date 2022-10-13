@extends('layouts.app')

@section('template_title')
    {{ $crp->name ?? 'Listado de Grupos de Interés' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Listado de Grupos de Interés</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('crps.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre de Grupo:</strong>
                            {{ $crp->nombre_crp }}
                        </div>
                        <div class="form-group">
                            <strong>Docente:</strong>
                            {{ $crp->users_id }}
                        </div>
                        <div class="form-group">
                            <strong>Año Escolar:</strong>
                            {{ $crp->anioescolar_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
