@extends('layouts.app')

@section('template_title')
    Seccion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Seccion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('seccions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir') }}
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
                                        
										<th>Nombre Grado</th>
										<th>Grado</th>
										<th>Seccion</th>
										<th>Año Escolar</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($seccions as $seccion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $seccion->nombre_grado }}</td>
											<td>{{ $seccion->grado }}</td>
											<td>{{ $seccion->seccion }}</td>
											<td>   {{ $seccion->anioescolar->nombreanioescolar }}</td>

                                            <td>
                                                <form action="{{ route('seccions.destroy',$seccion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('seccions.show',$seccion->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('seccions.edit',$seccion->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $seccions->links() !!}
            </div>
        </div>
    </div>
@endsection
