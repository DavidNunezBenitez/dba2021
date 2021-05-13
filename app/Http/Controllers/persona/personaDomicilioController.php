<?php

namespace App\Http\Controllers\persona;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShowUbicacionPost;
use App\Models\Persona;
use App\Models\PersonaDomicilio;
use App\Models\Ubicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personaDomicilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personaDom = PersonaDomicilio::simplePaginate(10);
        return view('persona-domicilio.pers-dom-index',compact('personaDom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona-domicilio.pers-dom-create',['personaDom'=> new PersonaDomicilio()]);
    }

    public function search(ShowUbicacionPost $request){
        $codigo = $request->search;
        $persona = DB::table('personas')->get();
        $ubicacion = Ubicacion::where('d_codigo','=',$codigo);
        if($ubicacion==null){
            return back()->withInput();
        }else{
            return view('persona-domicilio.buscar',['ubicacion'=>$ubicacion],['persona'=>$persona]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonaDomicilio  $personaDomicilio
     * @return \Illuminate\Http\Response
     */
    public function show(PersonaDomicilio $personaDomicilio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonaDomicilio  $personaDomicilio
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonaDomicilio $personaDomicilio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonaDomicilio  $personaDomicilio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonaDomicilio $personaDomicilio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonaDomicilio  $personaDomicilio
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonaDomicilio $personaDomicilio)
    {
        //
    }
}
