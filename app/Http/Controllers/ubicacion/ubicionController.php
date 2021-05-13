<?php

namespace App\Http\Controllers\ubicacion;

use App\Http\Controllers\Controller;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class ubicionController extends Controller
{
    public function index(){
        $ubicaciones = Ubicacion::simplePaginate(10);
        //dd($ubicaciones);
        return view('ubicaciones.ubicacion-index',compact('ubicaciones'));
    }
}
