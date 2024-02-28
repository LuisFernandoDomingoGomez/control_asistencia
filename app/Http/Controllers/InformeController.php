<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Informe;

class InformeController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-informe|crear-informe|editar-informe|borrar-informe')->only('index');
         $this->middleware('permission:crear-informe', ['only' => ['create','store']]);
         $this->middleware('permission:editar-informe', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-informe', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
         //Con paginación
         $informes = Informe::paginate(5);
         return view('informes.index',compact('informes'));
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $informes->links() !!}    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('informes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'archivo' => 'required',
        ]);
    
        Informe::create($request->all());
    
        return redirect()->route('informes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Informe $informe)
    {
        return view('informes.editar',compact('informe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informe $informe)
    {
        request()->validate([
            'name' => 'required',
            'archivo' => 'required',
        ]);
    
        $informe->update($request->all());
    
        return redirect()->route('informes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informe $informe)
    {
        $informe->delete();
    
        return redirect()->route('informes.index');
    }
}
