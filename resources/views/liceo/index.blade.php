@extends('layouts.app')

@section('template_title')
    Liceo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Liceo') }}
                            </span>

                             <div class="float-right">
                             @if ($i>=1)
                             <a href="{{ route('liceos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear') }}
                                </a>
                            @endif
                                

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
                                     
                                        
										<th>Código de Plantel</th>
										<th>Nombre</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Municipio</th>
										<th>Distrito Federal</th>
										<th>Zona Educativa</th>
										<th>Director</th>
										<th>Cedula del Director</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($liceos as $liceo)
                                        <tr>
                                          
                                            
											<td>{{ $liceo->codigoplantel }}</td>
											<td>{{ $liceo->nombre }}</td>
											<td>{{ $liceo->direccion }}</td>
											<td>{{ $liceo->telefono }}</td>
											<td>{{ $liceo->municipio }}</td>
											<td>{{ $liceo->distritofederal }}</td>
											<td>{{ $liceo->zonaeducativa }}</td>
											<td>{{ $liceo->director }}</td>
											<td>{{ $liceo->ceduladirector }}</td>

                                            <td>
                                                <form action="{{ route('liceos.destroy',$liceo->id) }}" method="POST">
                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('liceos.edit',$liceo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $liceos->links() !!}
            </div>
        </div>
    </div>
@endsection
