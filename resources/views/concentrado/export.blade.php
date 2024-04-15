<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concentrado de Asistencias</title>
</head>
<body>
@foreach ($asistenciasAgrupadas as $agrupacion)
<table class="table table-striped table-hover">
    <thead class="thead">
        <tr>
            <th style="border: 1px solid black; background-color: #ccffff; text-align: center;" colspan="20">Concentrado de Asistencias</th>
        </tr>
        <tr>
        <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="9">Nombre: {{ $agrupacion['nombre'] }}</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="7">Departamento: {{ $agrupacion['departamento'] }}</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="4">Numero: {{ $agrupacion['numero'] }}</th>
        </tr>
        <tr>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="2">Tiempo Trabajo</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="2">Retardo</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="2">Salida Temprano</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="2">Tiempo Extra</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="4"></th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="3">Bono</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="3">Deduccion</th>

            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="2"></th>
        </tr>
        <tr>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Requerido</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Real</th>

            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">T</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Min</th>

            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">T</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Min</th>

            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Normal</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Especial</th>

            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Asistencias</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">V</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">F</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">P</th>

            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Nota</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Extra</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">?</th>
            
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Tarde</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Salida</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Otro</th>

            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Real</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Observacion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($agrupacion['asistencias'] as $asistencia)
            <tr>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->tiempo_requerido }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->tiempo_real }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->retardo }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->retardo_minutos }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->salida_temprano }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->salida_temprano_minutos }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->tiempo_extra_normal }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->tiempo_extra_especial }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->asistencias }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->v }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->f }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->p }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->bono_nota }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->bono_extra }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->bono }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->deduccion_tarde }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->deduccion_salida }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->deduccion_otro }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->real }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->observacion }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
@endforeach
</body>
</html>