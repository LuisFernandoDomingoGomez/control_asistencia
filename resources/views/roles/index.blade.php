@extends('layouts.app')

@section('template_title')
    Roles
@endsection

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">GESTLAB</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gestion</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    {{ __('Control de Roles') }}
                                </span>

                                <div class="float-right">
                                  @can('crear-rol')
                                    <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Crear Nuevo') }}
                                    </a>
                                  @endcan
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
                                            
                                            <th>Rol</th>

                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $role->name }}</td>

                                        <td>                                
                                            @can('editar-rol')
                                                <a class="btn btn-sm btn-success" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @endcan
                                            
                                            @can('borrar-rol')
                                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $roles->links() !!}
                </div>
            </div>
        </div>
    @endsection
</div>