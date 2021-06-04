<?php

namespace App\Http\Controllers;

use App\Models\vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['vehiculos']=Vehiculos::paginate(5);
        return view('vehiculos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('vehiculos.create');
    }
      
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $datosVehiculo=request()->all();
         $datosVehiculo=request()->except('_token');
         if($request->hasFile('foto')){
             $datosVehiculo['foto']=$request->file('foto')->store('uploads','public');
         }
         Vehiculos::insert($datosVehiculo);
       // return response()->json($datosVehiculo);
       return redirect('vehiculos')->with('Mensaje','Empleados agergado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vehiculos  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $imprimir = vehiculos::get();
         $pdf = PDF::loadView('vehiculos.imprimir',compact('imprimir'));

         return $pdf->stream();
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vehiculos  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo=Vehiculos::findOrFail($id);
        return view('vehiculos.edit',compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosVehiculo=request()->except('_token','_method');
        Vehiculos::where('id','=',$id)->update($datosVehiculo);
        // $vehiculo=Vehiculos::findOrFail($id);
        // return view('vehiculos.edit',compact('vehiculo'));
        return redirect('vehiculos')->with('Mensaje','Empleados acualizaado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $vehiculo=Vehiculos::findOrFail($id);
        if(Storage::delete('public/'.$vehiculo->foto)){
        Vehiculos::destroy($id);
        }
        return redirect('vehiculos');
    }
    
}



