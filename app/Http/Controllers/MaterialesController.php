<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use PDF;


class MaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiales=Material::all();
        return view('materiales.index',compact('materiales'));
    }

    public function crearPdf() // metodo para crear el pdf
    {
        $materiales=Material::all();
        $pdf = PDF::loadView('materiales.pdf',['materiales'=>$materiales]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materiales.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|string',
            'cantidad'=>'required|integer|numeric',
            'precio'=>'required|numeric'
        ]);
        
        $materiales= new Material();
        $materiales->nombre=$request->nombre;
        $materiales->cantidad=$request->cantidad;
        $materiales->precio=$request->precio;
        $materiales->save();
        return redirect()->route('materiales.index')->with('success','¡Registro Agregado Correctamente!');
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
    public function edit($id)
    {
        $materiales=Material::find($id);
        return view('materiales.editar',compact('materiales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=>'required|string',
            'cantidad'=>'required|integer|numeric',
            'precio'=>'required|numeric'
        ]);
       
        $materiales=Material::find($id);
        $materiales->nombre=$request->nombre;
        $materiales->cantidad=$request->cantidad;
        $materiales->precio=$request->precio;
        
        $materiales->update();
        return redirect()->route('materiales.index')->with('success','¡Registro Actualizado Correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materiales=Material::find($id);
        $materiales->delete();
        return redirect()->route('materiales.index')->with('danger','¡Registro Eliminado Correctamente!');
    }
}
