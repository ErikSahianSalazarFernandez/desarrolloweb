<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\Grupos;
use Illuminate\Http\Request;

class Datos extends Controller
{
    public function consulta01(){
        $grupos = Grupos::all();
        return view('consulta01')
        ->with(['grupos' => $grupos]);
    }

    public function datos1(Request $request){
        $id_grupo = $request->get('id_grupo');

        $alumnos = Alumnos::where('id_grupo',$id_grupo)->get();
        return view('datos/dato')
        ->with(['alumnos' => $alumnos]);
    }

    public function consulta2(){
        $grupos = Grupos::all();
        return view('consulta02')
        ->with(['grupos' => $grupos]);
    }

    public function datos2a(Request $request){
        $id_grupo = $request->get('id_grupo');

        $alumnos = Alumnos::where('id_grupo',$id_grupo)->get();

        return view('datos/dato02a')
        ->with(['alumnos' => $alumnos]);
    }

    public function datos2b(Request $request){
        $id = $request->get('id');
        $alumno = Alumnos::find($id);

        return view('datos/dato02b')
        ->with(['alumno' => $alumno]);
    }

    public function datos2c(Request $request){
        return view('datos/dato02c');
    }

    public function consulta2r(Request $request){
        dd($request->all());
    }
}
