<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AsistenciaImport;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Validator;

class AsistenciaController extends Controller
{
    public function index()
    {
        $asistencias = Asistencia::paginate();

        return view('asistencia.index', compact('asistencias'))
            ->with('i', (request()->input('page', 1) - 1) * $asistencias->perPage());
    }

    public function importForm()
{
    return view('asistencia.import');
}

public function import(Request $request)
{
    $request->validate([
        'archivo' => 'required|mimes:xlsx,xls|max:2048',
    ]);

    $file = $request->file('archivo');
    $spreadsheet = IOFactory::load($file);
    $sheet = $spreadsheet->getActiveSheet();

    // Iterar desde la fila 5 hasta la última fila
    foreach ($sheet->getRowIterator(5) as $row) {
        $rowData = [];
        foreach ($row->getCellIterator() as $cell) {
            $rowData[] = $cell->getValue();
        }
    
        if (empty(array_filter($rowData))) {
            continue;
        }
    
        // Obtener los datos de las celdas A5 a W5
        $data = array_slice($rowData, 0, 23);

        if (count($data) >= 23) {
            $numero = $data[0];
            $nombre = $data[1];
            $departamento = $data[2];
            $tiempo_requerido = $data[3];
            $tiempo_real = $data[4];
            $retardo = $data[5];
            $retardo_minutos = $data[6];
            $salida_temprano = $data[7];
            $salida_temprano_minutos = $data[8];
            $tiempo_extra_normal = $data[9];
            $tiempo_extra_especial = $data[10];
            $asistencias = $data[11];
            $v = $data[12];
            $f = $data[13];
            $p = $data[14];
            $bono_nota = $data[15];
            $bono_extra = $data[16];
            $bono = $data[17];
            $deduccion_tarde = $data[18];
            $deduccion_salida = $data[19];
            $deduccion_otro = $data[20];
            $real = $data[21];
            $observacion = $data[22];

            // Insertar los datos en la base de datos
            Asistencia::create([
                'numero' => $numero,
                'nombre' => $nombre,
                'departamento' => $departamento,
                'tiempo_requerido' => $tiempo_requerido,
                'tiempo_real' => $tiempo_real,
                'retardo' => $retardo,
                'retardo_minutos' => $retardo_minutos,
                'salida_temprano' => $salida_temprano,
                'salida_temprano_minutos' => $salida_temprano_minutos,
                'tiempo_extra_normal' => $tiempo_extra_normal,
                'tiempo_extra_especial' => $tiempo_extra_especial,
                'asistencias' => $asistencias,
                'v' => $v,
                'f' => $f,
                'p' => $p,
                'bono_nota' => $bono_nota,
                'bono_extra' => $bono_extra,
                'bono' => $bono,
                'deduccion_tarde' => $deduccion_tarde,
                'deduccion_salida' => $deduccion_salida,
                'deduccion_otro' => $deduccion_otro,
                'real' => $real,
                'observacion' => $observacion,
            ]);
        }

    }

    return redirect()->route('asistencias.index')->with('success', 'Datos de asistencias importados correctamente.');
}


    public function create()
    {
        $asistencia = new Asistencia();
        return view('asistencia.create', compact('asistencia'));
    }

    public function store(Request $request)
    {
        request()->validate(Asistencia::$rules);

        $asistencia = Asistencia::create($request->all());

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia created successfully.');
    }

    public function show($id)
    {
        $asistencia = Asistencia::find($id);

        return view('asistencia.show', compact('asistencia'));
    }

    public function edit($id)
    {
        $asistencia = Asistencia::find($id);

        return view('asistencia.edit', compact('asistencia'));
    }

    public function update(Request $request, Asistencia $asistencia)
    {
        request()->validate(Asistencia::$rules);

        $asistencia->update($request->all());

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia updated successfully');
    }

    public function destroy($id)
    {
        $asistencia = Asistencia::find($id)->delete();

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia deleted successfully');
    }
}