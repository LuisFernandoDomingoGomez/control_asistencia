<table class="table table-striped table-hover">
    <thead class="thead">
    <tr>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;"></th>
            
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="3"></th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="2">Tiempo Trabajo</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="2">Retardo</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="2">Salida Temprano</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="2">Tiempo Extra</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="4"></th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="3">Bono</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="3">Deduccion</th>

            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;" colspan="3"></th>
        </tr>
        <tr>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">No</th>
            
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Numero</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Nombre</th>
            <th style="border: 1px solid black; background-color: #99ccff; text-align: center;">Departamento</th>
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
        @php
            $i = 1;
        @endphp
        @foreach ($asistencias as $asistencia)
            <tr>
                <td style="border: 1px solid black; text-align: center;">{{ ++$i }}</td>
                
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->numero }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->nombre }}</td>
                <td style="border: 1px solid black; text-align: center;">{{ $asistencia->departamento }}</td>
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