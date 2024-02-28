@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Informes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        @can('crear-informe')
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-primary" href="{{ route('informes.create') }}">Nuevo</a>
                        </div>
                        <br>
                        @endcan
                        <table class="table table-striped table-hover">
                            <thead class="thead">                                
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Archivo</th>                             
                                    <th>Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($informes as $informe)
                            <tr>
                                <td style="display: none;">{{ $informe->id }}</td>                                
                                <td>{{ $informe->name }}</td>
                                <td>{{ $informe->archivo }}</td>
                                <td>
                                    <form action="{{ route('informes.destroy',$informe->id) }}" method="POST">                                        
                                        @can('editar-informe')
                                        <a class="btn btn-info" href="{{ route('informes.edit',$informe->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-informe')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $informes->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
