@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Usuarios</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">                           
                        <div class="d-flex justify-content-end">
                          <a class="btn btn-primary" href="{{ route('usuarios.create') }}">Nuevo</a>
                        </div>
                            <table class="table table-striped mt-2">
                              <thead>                                     
                                  <th>No.</th>
                                  <th>Nombre</th>
                                  <th>Correo</th>
                                  <th>Rol</th>
                                  <th>Acciones</th>                                                                   
                              </thead>
                              <tbody>
                                @php $i = 1; @endphp
                                @foreach ($usuarios as $usuario)
                                  <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>
                                      @if(!empty($usuario->getRoleNames()))
                                        @foreach($usuario->getRoleNames() as $rolNombre)                                       
                                          <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                                        @endforeach
                                      @endif
                                    </td>

                                    <td>                                  
                                      <a class="btn btn-success" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>
                                      {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $usuarios->links() !!}
                          </div>     
                            
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection