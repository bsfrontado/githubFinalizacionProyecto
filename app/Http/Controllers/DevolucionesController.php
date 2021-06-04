<?php

namespace App\Http\Controllers;

use App\Models\devoluciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
class DevolucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['devoluciones']=Devoluciones::paginate(5);
        return view('devoluciones.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('devoluciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosDevolucion=request()->except('_token');
        // if($request->hasFile('foto')){
        //     $datosVehiculo['foto']=$request->file('foto')->store('uploads','public');
        // }
        Devoluciones::insert($datosDevolucion);
      // return response()->json($datosVehiculo);
      return redirect('devoluciones')->with('Mensaje','Empleados agergado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function show(devoluciones $devoluciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $devolucion=Devoluciones::findOrFail($id);
        return view('devoluciones.edit',compact('devolucion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosDevolucion=request()->except('_token','_method');
        Devoluciones::where('id','=',$id)->update($datosDevolucion);
        // $vehiculo=Vehiculos::findOrFail($id);
        // return view('vehiculos.edit',compact('vehiculo'));
        return redirect('devoluciones')->with('Mensaje','Empleados acualizaado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $devoluciones=Devoluciones::findOrFail($id);
        // if(Storage::delete('public/'.$vehiculo->foto)){
        
        // }
        Devoluciones::destroy($id);
        return redirect('devoluciones');
    }
}
