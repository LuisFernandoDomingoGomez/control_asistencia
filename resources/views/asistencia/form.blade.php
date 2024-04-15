<div class="box box-info p-4">
    <div class="box-body">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-4">
                    {{ Form::label('numero') }}
                    {{ Form::text('numero', $asistencia->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Número']) }}
                    {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    {{ Form::label('nombre') }}
                    {{ Form::text('nombre', $asistencia->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    {{ Form::label('departamento') }}
                    {{ Form::text('departamento', $asistencia->departamento, ['class' => 'form-control' . ($errors->has('departamento') ? ' is-invalid' : ''), 'placeholder' => 'Departamento']) }}
                    {!! $errors->first('departamento', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="mb-4">
                    {{ Form::label('tiempo_requerido') }}
                    {{ Form::text('tiempo_requerido', $asistencia->tiempo_requerido, ['class' => 'form-control' . ($errors->has('tiempo_requerido') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo Requerido']) }}
                    {!! $errors->first('tiempo_requerido', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-4">
                    {{ Form::label('tiempo_real') }}
                    {{ Form::text('tiempo_real', $asistencia->tiempo_real, ['class' => 'form-control' . ($errors->has('tiempo_real') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo Real']) }}
                    {!! $errors->first('tiempo_real', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-4">
                    {{ Form::label('retardo') }}
                    {{ Form::text('retardo', $asistencia->retardo, ['class' => 'form-control' . ($errors->has('retardo') ? ' is-invalid' : ''), 'placeholder' => 'Retardo']) }}
                    {!! $errors->first('retardo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-4">
                    {{ Form::label('retardo_minutos') }}
                    {{ Form::text('retardo_minutos', $asistencia->retardo_minutos, ['class' => 'form-control' . ($errors->has('retardo_minutos') ? ' is-invalid' : ''), 'placeholder' => 'Retardo Minutos']) }}
                    {!! $errors->first('retardo_minutos', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3">
                <div class="mb-4">
                    {{ Form::label('salida_temprano') }}
                    {{ Form::text('salida_temprano', $asistencia->salida_temprano, ['class' => 'form-control' . ($errors->has('salida_temprano') ? ' is-invalid' : ''), 'placeholder' => 'Salida Temprano']) }}
                    {!! $errors->first('salida_temprano', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-4">
                    {{ Form::label('salida_temprano_minutos') }}
                    {{ Form::text('salida_temprano_minutos', $asistencia->salida_temprano_minutos, ['class' => 'form-control' . ($errors->has('salida_temprano_minutos') ? ' is-invalid' : ''), 'placeholder' => 'Salida Temprano Minutos']) }}
                    {!! $errors->first('salida_temprano_minutos', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-4">
                    {{ Form::label('retardo_mayor') }}
                    {{ Form::text('tiempo_extra_normal', $asistencia->tiempo_extra_normal, ['class' => 'form-control' . ($errors->has('tiempo_extra_normal') ? ' is-invalid' : ''), 'placeholder' => 'Retardo Mayor']) }}
                    {!! $errors->first('tiempo_extra_normal', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-4">
                    {{ Form::label('retardo_menor') }}
                    {{ Form::text('tiempo_extra_especial', $asistencia->tiempo_extra_especial, ['class' => 'form-control' . ($errors->has('tiempo_extra_especial') ? ' is-invalid' : ''), 'placeholder' => 'Retardo Menor']) }}
                    {!! $errors->first('tiempo_extra_especial', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="mb-4">
                    {{ Form::label('bono_nota') }}
                    {{ Form::text('bono_nota', $asistencia->bono_nota, ['class' => 'form-control' . ($errors->has('bono_nota') ? ' is-invalid' : ''), 'placeholder' => 'Bono Nota']) }}
                    {!! $errors->first('bono_nota', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-4">
                    {{ Form::label('bono_extra') }}
                    {{ Form::text('bono_extra', $asistencia->bono_extra, ['class' => 'form-control' . ($errors->has('bono_extra') ? ' is-invalid' : ''), 'placeholder' => 'Bono Extra']) }}
                    {!! $errors->first('bono_extra', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-4">
                    {{ Form::label('Bono') }}
                    {{ Form::text('bono', $asistencia->bono, ['class' => 'form-control' . ($errors->has('bono') ? ' is-invalid' : ''), 'placeholder' => ' ?']) }}
                    {!! $errors->first('bono', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-4">
                    {{ Form::label('deduccion_tarde') }}
                    {{ Form::text('deduccion_tarde', $asistencia->deduccion_tarde, ['class' => 'form-control' . ($errors->has('deduccion_tarde') ? ' is-invalid' : ''), 'placeholder' => 'Deduccion Tarde']) }}
                    {!! $errors->first('deduccion_tarde', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-4">
                    {{ Form::label('deduccion_salida') }}
                    {{ Form::text('deduccion_salida', $asistencia->deduccion_salida, ['class' => 'form-control' . ($errors->has('deduccion_salida') ? ' is-invalid' : ''), 'placeholder' => 'Deduccion Salida']) }}
                    {!! $errors->first('deduccion_salida', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="mb-4">
                    {{ Form::label('deduccion_otro') }}
                    {{ Form::text('deduccion_otro', $asistencia->deduccion_otro, ['class' => 'form-control' . ($errors->has('deduccion_otro') ? ' is-invalid' : ''), 'placeholder' => 'Deduccion Otro']) }}
                    {!! $errors->first('deduccion_otro', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-4">
                    {{ Form::label('real') }}
                    {{ Form::text('real', $asistencia->real, ['class' => 'form-control' . ($errors->has('real') ? ' is-invalid' : ''), 'placeholder' => 'Real']) }}
                    {!! $errors->first('real', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-4">
                {{ Form::label('observacion') }}
                {{ Form::text('observacion', $asistencia->observacion, ['class' => 'form-control' . ($errors->has('observacion') ? ' is-invalid' : ''), 'placeholder' => 'Observacion']) }}
                {!! $errors->first('observacion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>