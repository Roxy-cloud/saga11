@extends('layouts.app')

@section('template_title')
    {{ $crpcalif->name ?? 'Show Crpcalif' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Crpcalif</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('crpcalifs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Momento1:</strong>
                            {{ $crpcalif->momento1 }}
                        </div>
                        <div class="form-group">
                            <strong>Momento2:</strong>
                            {{ $crpcalif->momento2 }}
                        </div>
                        <div class="form-group">
                            <strong>Momento3:</strong>
                            {{ $crpcalif->momento3 }}
                        </div>
                        <div class="form-group">
                            <strong>Definitiva:</strong>
                            {{ $crpcalif->definitiva }}
                        </div>
                        <div class="form-group">
                            <strong>Student Id:</strong>
                            {{ $crpcalif->student_id }}
                        </div>
                        <div class="form-group">
                            <strong>Crp Id:</strong>
                            {{ $crpcalif->crp_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $crpcalif->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
