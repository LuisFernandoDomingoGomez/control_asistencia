@extends('layouts.app')

@section('template_title')
    Asistencia
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Asistencias</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                        @can('crear-asistencia')
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-primary" href="{{ route('asistencias.import') }}">Nuevo</a>
                            </div>
                            <br>
                        @endcan

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    
                                    <th>Numero</th>
                                    <th>Nombre</th>
                                    <th>Departamento</th>
                                    <th>Tiempo Requerido</th>
                                    <th>Tiempo Real</th>
                                    <th>Retardo</th>
                                    <th>Retardo Minutos</th>
                                    <th>Salida Temprano</th>
                                    <th>Salida Temprano Minutos</th>
                                    <th>Tiempo Extra Normal</th>
                                    <th>Tiempo Extra Especial</th>
                                    <th>Asistencias</th>
                                    <th>V</th>
                                    <th>F</th>
                                    <th>P</th>
                                    <th>Nota</th>
                                    <th>Extra</th>
                                    <th>?</th>
                                    <th>Deduccion Tarde</th>
                                    <th>Deduccion Salida</th>
                                    <th>Deduccion Otro</th>
                                    <th>Real</th>
                                    <th>Observacion</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asistencias as $asistencia)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $asistencia->numero }}</td>
                                        <td>{{ $asistencia->nombre }}</td>
                                        <td>{{ $asistencia->departamento }}</td>
                                        <td>{{ $asistencia->tiempo_requerido }}</td>
                                        <td>{{ $asistencia->tiempo_real }}</td>
                                        <td>{{ $asistencia->retardo }}</td>
                                        <td>{{ $asistencia->retardo_minutos }}</td>
                                        <td>{{ $asistencia->salida_temprano }}</td>
                                        <td>{{ $asistencia->salida_temprano_minutos }}</td>
                                        <td>{{ $asistencia->tiempo_extra_normal }}</td>
                                        <td>{{ $asistencia->tiempo_extra_especial }}</td>
                                        <td>{{ $asistencia->asistencias }}</td>
                                        <td>{{ $asistencia->v }}</td>
                                        <td>{{ $asistencia->f }}</td>
                                        <td>{{ $asistencia->p }}</td>
                                        <td>{{ $asistencia->bono_nota }}</td>
                                        <td>{{ $asistencia->bono_extra }}</td>
                                        <td>{{ $asistencia->bono }}</td>
                                        <td>{{ $asistencia->deduccion_tarde }}</td>
                                        <td>{{ $asistencia->deduccion_salida }}</td>
                                        <td>{{ $asistencia->deduccion_otro }}</td>
                                        <td>{{ $asistencia->real }}</td>
                                        <td>{{ $asistencia->observacion }}</td>

                                        <td>
                                            <form action="{{ route('asistencias.destroy',$asistencia->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('asistencias.show',$asistencia->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success" href="{{ route('asistencias.edit',$asistencia->id) }}"><i class="fa fa-fw fa-edit"></i></a>
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

                        <div class="pagination justify-content-end">
                            {!! $asistencias->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection