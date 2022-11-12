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
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                      
                      @if ($errors->any())                                                
                          <div class="alert alert-dark alert-dismissible fade show" role="alert">
                          <strong>¡Revise los campos!</strong>                        
                              @foreach ($errors->all() as $error)                                    
                                  <span class="badge badge-danger">{{ $error }}</span>
                              @endforeach                        
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                      @endif


                      {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                      <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <label for="">Nombre del Rol:</label>                                    
                                  {!! Form::text('name', null, array('class' => 'form-control')) !!}
                              </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <label for="">Permisos para este Rol:</label>
                                  <br/>
                                  @foreach($permission as $value)
                                      <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                      {{ $value->name }}</label>
                                  <br/>
                                  @endforeach
                              </div>
                          </div>        
                      </div>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                      {!! Form::close() !!}
                      </div>
                  </div>
              </div>
          </div>
      </div>
    @endsection
</div>