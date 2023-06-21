@extends('layouts.app')

@section('template_title')
    Editorial
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Editorial') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('editorials.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva') }}
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
										<th>Nit</th>
										<th>Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($editorials as $editorial)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $editorial->nombre }}</td>
											<td>{{ $editorial->nit }}</td>
											<td>{{ $editorial->direccion }}</td>

                                            <td>
                                                <form action="{{ route('editorials.destroy',$editorial->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('editorials.show',$editorial->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('editorials.edit',$editorial->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $editorials->links() !!}
            </div>
        </div>
    </div>
@endsection
