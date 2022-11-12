@extends('layouts.app')

@section('template_title')
    Blog
@endsection

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Consultoria</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Reporte</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Inicio</li>
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
                                    {{ __('Registros') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Crear Nuevo') }}
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

                                            <th>Numero de expediente</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>

                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                            
                                                <td>{{ $blog->number }}</td>                    
                                                <td>{{ $blog->name }}</td>
                                                <td>{{ $blog->description }}</td>

                                                <td>
                                                    <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('blogs.show',$blog->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('blogs.edit',$blog->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $blogs->links() !!}
                </div>
            </div>
        </div>
    @endsection
</div>