<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Recuperar datos desde la bd
        //pagine(5) ver registros de 5 en 5

        $datos['rols']=Rol::paginate(5);

        return view('Rol.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Obtencion y almacenamiento de informacion

        //$datosRol=request()->all();

        $datosRol=request()->except('_token');
        Rol::insert($datosRol);
        //return response()->json($datosRol);
        return redirect('Rol')->with('Mensaje','Rol agregado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Rol=Rol::findOrFail($id);
        return view('Rol.edit', compact('Rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosRol=request()->except(['_token','_method']);
        Rol::where('id','=',$id)->update($datosRol);

        //$Rol=Rol::findOrFail($id);
        //return view('Rol.edit', compact('Rol'));
        return redirect('Rol')->with('Mensaje','Rol modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Rol::destroy($id);
       // return redirect('Rol');
       return redirect('Rol')->with('Mensaje','Rol eliminado con éxito');
    }
}
