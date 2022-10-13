@extends('layouts.app')

@section('template_title')
    {{ $studentSignature->name ?? 'Listado de Estudiantes por Asignatura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Listado de Estudiantes por Asignatura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('student_signatures.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Student Id:</strong>
                            {{ $studentSignature->student_id }}
                        </div>
                        <div class="form-group">
                            <strong>Signature Id:</strong>
                            {{ $studentSignature->signature_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
