<?php

namespace App\Exports;

use App\Models\Asistencia;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ConcentradoExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $nombres = Asistencia::distinct('nombre')->pluck('nombre');

        $asistenciasAgrupadas = [];

        foreach ($nombres as $nombre) {
            $asistencias = Asistencia::where('nombre', $nombre)->get();
            
            $departamento = $asistencias->first()->departamento;
            $numero = $asistencias->first()->numero;


            $asistenciasAgrupadas[] = [
                'nombre' => $nombre,
                'departamento' => $departamento,
                'numero' => $numero,
                'asistencias' => $asistencias,
            ];
        }


        return view('concentrado.export', [
            'asistenciasAgrupadas' => $asistenciasAgrupadas,
        ]);
    }
}
