@extends('layouts.app')

@section('template_title')
    Asignatura
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asignatura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('signatures.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir Asignatura') }}
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
                                        
										<th>Nombre</th>
										<th>Abreviatura</th>
										<th>Año/Grado</th>
										<th>Docente</th>
                                        <th></th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($signatures as $signature)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $signature->nombre }}</td>
											<td>{{ $signature->abreviatura }}</td>
											<td>{{ $signature->seccion->nombre_grado }}</td>
											<td>{{ $signature->user->name }}</td>
                                     

                                            <td>
                                                <form action="{{ route('signatures.destroy',$signature->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('signatures.show',$signature->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('signatures.edit',$signature->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $signatures->links() !!}
            </div>
        </div>
    </div>
@endsection
