@extends('layouts.app')

@section('template_title')
    Crear Grupo de Interés
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Grupo de Creación, Recreación Y Producción</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('crps.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('crps.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
