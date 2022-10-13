@extends('layouts.app')

@section('template_title')
    Crpcalif
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Crpcalif') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('crpcalifs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Momento1</th>
										<th>Momento2</th>
										<th>Momento3</th>
										<th>Definitiva</th>
										<th>Student Id</th>
										<th>Crp Id</th>
										<th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($crpcalifs as $crpcalif)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $crpcalif->momento1 }}</td>
											<td>{{ $crpcalif->momento2 }}</td>
											<td>{{ $crpcalif->momento3 }}</td>
											<td>{{ $crpcalif->definitiva }}</td>
											<td>{{ $crpcalif->student_id }}</td>
											<td>{{ $crpcalif->crp_id }}</td>
											<td>{{ $crpcalif->user_id }}</td>

                                            <td>
                                                <form action="{{ route('crpcalifs.destroy',$crpcalif->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('crpcalifs.show',$crpcalif->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('crpcalifs.edit',$crpcalif->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $crpcalifs->links() !!}
            </div>
        </div>
    </div>
@endsection
