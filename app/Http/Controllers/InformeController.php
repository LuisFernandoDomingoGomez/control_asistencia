<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Informe;

class InformeController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-reporte|crear-reporte|editar-reporte|borrar-reporte')->only('index');
         $this->middleware('permission:crear-reporte', ['only' => ['create','store']]);
         $this->middleware('permission:editar-reporte', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-reporte', ['only' => ['destroy']]);
    }

    public function index()
    {
        $informes = Informe::paginate(5);
        return view('informes.index',compact('informes'));
    }

    public function create()
    {
        return view('informes.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'archivo' => 'required|mimes:xlsx|max:10240', // Solo acepta archivos xlsx de hasta 2048 KB (10MB)
        ]);        

        $informe = new Informe();
        $informe->name = $request->input('name');

        $archivo = $request->file('archivo');
        $archivoNombre = $archivo->getClientOriginalName();
        $archivo->storeAs('archivos_reportes', $archivoNombre, 'public'); // Guardar en la carpeta "archivos_reportes" en el disco público

        // Guardar la archivo en la carpeta "archivos_reportes"
        $archivo->move(public_path('archivos_reportes'), $archivoNombre);
        $informe->archivo = 'archivos_reportes/' . $archivoNombre;

        $informe->save();
    
        return redirect()->route('informes.index')
            ->with('success', 'Informe creado con exito.');
    }

    public function edit(Informe $informe)
    {
        return view('informes.editar',compact('informe'));
    }

    public function update(Request $request, informe $informe)
    {
        $request->validate([
            'name' => 'required',
            'archivo' => 'required|mimes:xlsx|max:10240', // Solo acepta archivos xlsx de hasta 2048 KB (10MB)
        ]);

        $informe->update($request->all());

        $archivo = $request->file('archivo');
        $archivoNombre = $archivo->getClientOriginalName();
        $archivo->storeAs('archivos_reportes', $archivoNombre, 'public'); // Guardar en la carpeta "archivos_reportes" en el disco público

        // Guardar la archivo en la carpeta "archivos_reportes"
        $archivo->move(public_path('archivos_reportes'), $archivoNombre);
        $informe->archivo = 'archivos_reportes/' . $archivoNombre;

        $informe->save();

        return redirect()->route('informes.index')
            ->with('success', 'informe actualizado');
    }    

    public function destroy(Informe $informe)
    {
        $informe->delete();
    
        return redirect()->route('informes.index');
    }
}
