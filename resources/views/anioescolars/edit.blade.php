@extends('layouts.app')

@section('template_title')
    Actualizar Año Escolar
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Año Escolar</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('anioescolars.update', $anioescolar->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('anioescolars.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
