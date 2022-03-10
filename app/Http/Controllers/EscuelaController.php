<?php

namespace App\Http\Controllers;

use App\Models\Grupos;
use App\Models\Alumnos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EscuelaController extends Controller  {

    public function listado(){
        $datos = Alumnos::all();
        return view('lista_alumnos')
            ->with(['datos' => $datos]);
    }

    public function guardar_alumnos(Request $request) {
        //dd($request);
        $registro_Alumno = new Alumnos;
        $registro_Alumno->nombre = request('nombre');
        $registro_Alumno->fn = request('fn');
        $registro_Alumno->gen = request('gen');
        $registro_Alumno->matricula = request('matricula');
        $registro_Alumno->direccion = request('direccion');
        $registro_Alumno->email = request('email');
        $registro_Alumno->pass = request('pass');
        $registro_Alumno->id_grupo = request('id_grupo');
        //$registro_Alumno->foto = request('foto');
        if($request->hasFile('foto')){
            // $file = $request->foto;
            $path = $request->file('foto')->store('alumnos', 'public');
            $registro_Alumno->foto = $path;
        }
        $registro_Alumno->save();
        //return response()->json('Registro Guardado Correctamente');
        return redirect()->route('lista');
    }

    public function detalle($id){
        $alumno = Alumnos::findOrFail($id);
        return view ('detalles')->with(['alumno' => $alumno]);
    }
    public function editar(Alumnos $id){
        /// $alunmo = Alumnos::finf($id);
        $grupos = Grupos::all();

        return view("editar")
           ->with(['alumno' => $id])
           ->with(['grupos' => $grupos]);

    }

    public function salvar (Alumnos $id, Request $request){
        //dd($request);
        if ($request->file('foto1') != ''){
            $file = $request->file('foto1');
            $img = $file->getClientOriginalName();
            $name = $request->file('foto1')->getClientOriginalName();
            $ldate = date('Ymd_His_');
            $img2 = $ldate . $img;
            Storage::disk('local')->put($img2, File::get($file));
            //$file->move(public_path(). '/fotos', $img2);
        }
        else {
            $img2 = $request->foto2;
        }
        $con = Alumnos::find($id->id);
        $con->nombre = $request->nombre;
        $con->fn = $request->fn;
        $con->gen = $request->gen;
        $con->matricula = $request->matricula;
        $con->direccion = $request->direccion;
        $con->email = $request->email;
        $con->pass = $request->pass;
        $con->foto = $img2;
        $con->id_grupo = $request->id_grupo;
        $con->save();
        return redirect()->route("lista");
        //return redirect()->router("", ['id' -> $id->id]);

    }

    public function borrar(Alumnos $id){
        $id->delete();
        return redirect()->route('lista');
    }

    /* public function borrar($id) {
        Alumnos::destroy($id);
        return redirect()->route('lista');
    } */
}
