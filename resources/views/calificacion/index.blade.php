@extends('layouts.app')

@section('template_title')
    Calificacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Calificación') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('calificacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Asignatura</th>
										<th>Estudiante</th>
                                        <th>Momento1</th>
										<th>Momento2</th>
										<th>Momento3</th>
										<th>Definitiva</th>
										
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($calificacions as $calificacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $calificacion->signature_id }}</td>
                                            <td>{{ $calificacion->student_id }}</td>
											<td>{{ $calificacion->momento1 }}</td>
											<td>{{ $calificacion->momento2 }}</td>
											<td>{{ $calificacion->momento3 }}</td>
											<td>{{ $calificacion->definitiva }}</td>
											
											

                                            <td>
                                                <form action="{{ route('calificacions.destroy',$calificacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('calificacions.show',$calificacion->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('calificacions.edit',$calificacion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $calificacions->links() !!}
            </div>
        </div>
    </div>
@endsection
