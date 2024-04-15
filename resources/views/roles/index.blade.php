@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        @can('crear-rol')
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-primary" href="{{ route('roles.create') }}">Nuevo</a>
                        </div>
                        @endcan
                            <table class="table table-striped mt-2">
                                <thead>    
                                    <th>No.</th>                                                   
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </thead>  
                                <tbody>
                                @php $i = 1; @endphp
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $i++ }}</td>              
                                    <td>{{ $role->name }}</td>
                                    <td>                                
                                        @can('editar-rol')
                                            <a class="btn btn-success" href="{{ route('roles.edit',$role->id) }}">Editar</a>
                                        @endcan
                                        
                                        @can('borrar-rol')
                                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>               
                            </table>

                            <!-- Centramos la paginacion a la derecha -->
                            <div class="pagination justify-content-end">
                                {!! $roles->links() !!} 
                            </div>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
