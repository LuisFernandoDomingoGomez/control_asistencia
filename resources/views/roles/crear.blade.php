@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h5 class="page__heading">Crear Rol</h5>
        </div>
        <div class="section-body">
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
                                <button type="button" id="checkAllBtn" class="btn btn-success">Marcar Todo</button>
                                <br/><br/>
                                <div class="permissions-container">
                                    @foreach($permission as $value)
                                        <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                        {{ $value->name }}</label>
                                    @endforeach
                                    <style>
                                        .permissions-container {
                                            display: flex;
                                            flex-wrap: wrap;
                                        }
                                        .permissions-container label {
                                            width: 50%;
                                            box-sizing: border-box;
                                        }
                                    </style>
                                    <script>
                                        document.getElementById('checkAllBtn').addEventListener('click', function() {
                                            var checkboxes = document.querySelectorAll('.permissions-container input[type="checkbox"]');
                                            checkboxes.forEach(function(checkbox) {
                                                checkbox.checked = true;
                                            });
                                        });
                                    </script>
                                </div>
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
    </section>
@endsection
