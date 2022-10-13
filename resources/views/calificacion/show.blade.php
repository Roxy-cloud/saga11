@extends('layouts.app')

@section('template_title')
    {{ $calificacion->name ?? 'Show Calificacion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Calificacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('calificacions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Momento1:</strong>
                            {{ $calificacion->momento1 }}
                        </div>
                        <div class="form-group">
                            <strong>Momento2:</strong>
                            {{ $calificacion->momento2 }}
                        </div>
                        <div class="form-group">
                            <strong>Momento3:</strong>
                            {{ $calificacion->momento3 }}
                        </div>
                        <div class="form-group">
                            <strong>Definitiva:</strong>
                            {{ $calificacion->definitiva }}
                        </div>
                        <div class="form-group">
                            <strong>Student Id:</strong>
                            {{ $calificacion->student_id }}
                        </div>
                        <div class="form-group">
                            <strong>Signature Id:</strong>
                            {{ $calificacion->signature_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
