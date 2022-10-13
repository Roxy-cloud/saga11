@extends('layouts.app')

@section('template_title')
    Año Escolar
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Año Escolar') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('anioescolars.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Año Escolar</th>
										<th>Inicio</th>
										<th>Fin</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($anioescolars as $anioescolar)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $anioescolar->nombreanioescolar }}</td>
											<td>{{ $anioescolar->fechainicio }}</td>
											<td>{{ $anioescolar->fechafin }}</td>
											

                                            <td>
                                                <form action="{{ route('anioescolars.destroy',$anioescolar->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('anioescolars.show',$anioescolar->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('anioescolars.edit',$anioescolar->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $anioescolars->links() !!}
            </div>
        </div>
    </div>
@endsection
