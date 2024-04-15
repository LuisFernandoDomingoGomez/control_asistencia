<?php

namespace App\Exports;

use App\Models\Asistencia;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AsistenciaExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $asistencias = Asistencia::all();

        return view('asistencia.export', [
            'asistencias' => $asistencias,
        ]);
    }
}