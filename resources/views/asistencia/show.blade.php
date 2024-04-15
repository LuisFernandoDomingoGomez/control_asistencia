@extends('layouts.app')

@section('template_title')
    {{ $asistencia->name ?? "{{ __('Show') Asistencia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="section-header">
                            <h4 class="page__heading">Detalles</h4>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-danger mr-2" href=""><i class="fas fa-file-pdf"></i> Exportar PDF</a>
                            <a class="btn btn-primary  mr-2" href="{{ route('asistencias.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $asistencia->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $asistencia->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $asistencia->departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempo Requerido:</strong>
                            {{ $asistencia->tiempo_requerido }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempo Real:</strong>
                            {{ $asistencia->tiempo_real }}
                        </div>
                        <div class="form-group">
                            <strong>Retardo:</strong>
                            {{ $asistencia->retardo }}
                        </div>
                        <div class="form-group">
                            <strong>Retardo Minutos:</strong>
                            {{ $asistencia->retardo_minutos }}
                        </div>
                        <div class="form-group">
                            <strong>Salida Temprano:</strong>
                            {{ $asistencia->salida_temprano }}
                        </div>
                        <div class="form-group">
                            <strong>Salida Temprano Minutos:</strong>
                            {{ $asistencia->salida_temprano_minutos }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempo Extra Normal:</strong>
                            {{ $asistencia->tiempo_extra_normal }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempo Extra Especial:</strong>
                            {{ $asistencia->tiempo_extra_especial }}
                        </div>
                        <div class="form-group">
                            <strong>Asistencias:</strong>
                            {{ $asistencia->asistencias }}
                        </div>
                        <div class="form-group">
                            <strong>V:</strong>
                            {{ $asistencia->v }}
                        </div>
                        <div class="form-group">
                            <strong>F:</strong>
                            {{ $asistencia->f }}
                        </div>
                        <div class="form-group">
                            <strong>P:</strong>
                            {{ $asistencia->p }}
                        </div>
                        <div class="form-group">
                            <strong>Bono Nota:</strong>
                            {{ $asistencia->bono_nota }}
                        </div>
                        <div class="form-group">
                            <strong>Bono Extra:</strong>
                            {{ $asistencia->bono_extra }}
                        </div>
                        <div class="form-group">
                            <strong>Bono:</strong>
                            {{ $asistencia->bono }}
                        </div>
                        <div class="form-group">
                            <strong>Deduccion Tarde:</strong>
                            {{ $asistencia->deduccion_tarde }}
                        </div>
                        <div class="form-group">
                            <strong>Deduccion Salida:</strong>
                            {{ $asistencia->deduccion_salida }}
                        </div>
                        <div class="form-group">
                            <strong>Deduccion Otro:</strong>
                            {{ $asistencia->deduccion_otro }}
                        </div>
                        <div class="form-group">
                            <strong>Real:</strong>
                            {{ $asistencia->real }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $asistencia->observacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
