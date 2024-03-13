<?php

namespace App\Imports;

use App\Models\Asistencia;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AsistenciaImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        if (!empty($row)) {
            return new Asistencia([
                'numero' => $row['numero'] ?? null,
                'nombre' => $row['nombre'] ?? null,
                'departamento' => $row['departamento'] ?? null,
                'tiempo_requerido' => $row['tiempo_requerido'] ?? null,
                'tiempo_real' => $row['tiempo_real'] ?? null,
                'retardo' => $row['retardo'] ?? null,
                'retardo_minutos' => $row['retardo_minutos'] ?? null,
                'salida_temprano' => $row['salida_temprano'] ?? null,
                'salida_temprano_minutos' => $row['salida_temprano_minutos'] ?? null,
                'tiempo_extra_normal' => $row['tiempo_extra_normal'] ?? null,
                'tiempo_extra_especial' => $row['tiempo_extra_especial'] ?? null,
                'asistencias' => $row['asistencias'] ?? null,
                'v' => $row['v'] ?? null,
                'f' => $row['f'] ?? null,
                'p' => $row['p'] ?? null,
                'bono_nota' => $row['bono_nota'] ?? null,
                'bono_extra' => $row['bono_extra'] ?? null,
                'bono' => $row['bono'] ?? null,
                'deduccion_tarde' => $row['deduccion_tarde'] ?? null,
                'deduccion_salida' => $row['deduccion_salida'] ?? null,
                'deduccion_otro' => $row['deduccion_otro'] ?? null,
                'real' => $row['real'] ?? null,
                'observacion' => $row['observacion'] ?? null,
            ]);
        }

        return null;
    }
}
