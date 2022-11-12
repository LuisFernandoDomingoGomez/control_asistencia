@extends('layouts.app')

@section('template_title')
    {{ $blog->name ?? 'Show Blog' }}
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
                    <li class="breadcrumb-item active" aria-current="page">Detalles</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles de Reporte</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero de Expediente:</strong>
                            {{ $blog->number }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $blog->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $blog->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
