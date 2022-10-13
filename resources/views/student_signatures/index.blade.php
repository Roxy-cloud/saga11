@extends('layouts.app')

@section('template_title')
    Calificar Asignatura
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Calificar Asignatura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('student_signatures.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Student Id</th>
										<th>Signature Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($studentSignatures as $studentSignature)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $studentSignature->student_id }}</td>
											<td>{{ $studentSignature->signature_id }}</td>

                                            <td>
                                                <form action="{{ route('student_signatures.destroy',$studentSignature->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('student_signatures.show',$studentSignature->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('student_signatures.edit',$studentSignature->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $studentSignatures->links() !!}
            </div>
        </div>
    </div>
@endsection
