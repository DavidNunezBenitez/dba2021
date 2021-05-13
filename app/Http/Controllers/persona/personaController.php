<?php

namespace App\Http\Controllers\persona;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePersonaPost;
use App\Models\Persona;
use Illuminate\Http\Request;

class personaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = Persona::simplePaginate(10);
        return view('personas.personas-index',compact('persona'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.personas-create',['persona'=> new Persona()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonaPost $request)
    {
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellidoP;
        $persona->apellido_materno = $request->apellidoM;
        $persona->sexo = $request->sexo;
        $persona->fecha_nacimiento = $request->date;
        $persona->save();
        return back()->with('status','Persona agregada con exito !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //$persona = Persona::findOrFail(Persona $persona);
        return view('personas.personas-show',compact('persona'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        return view('personas.personas-edit',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePersonaPost $request, $id)    
    {
        $persona = Persona::findOrFail($id);
        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellidoP;
        $persona->apellido_materno = $request->apellidoM;
        $persona->sexo = $request->sexo;
        $persona->fecha_nacimiento = $request->date;
        $persona->save();
        return back()->with('status','Persona actualizada con exito !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return back()->with('status','Persona borrada con exito !!!');
    }
}
