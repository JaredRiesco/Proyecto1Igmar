<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;

class usuarioss extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $nombres,string $apellidos, int $edad, string $sexo ){

        $newinfo = new Usuarios;

        $newinfo->nombres = $nombres;
        $newinfo->apellidos = $apellidos;
        $newinfo->edad = $edad;
        $newinfo->sexo = $sexo;


        $newinfo->save();
        return response()->json('Finalizado', 200);
    }
    public function show(usuarios $nombres, int $id=0)
    {
        $nombres = ($id==0)? Usuarios::all():Usuarios::find($id);
        return response()->json($nombres, 200);
    }
    public function delete(int $id)
    {
        Usuarios::destroy($id);
        return response()->json('delete',200);

    }
    public function updateNombre(int $id,string $nombres)
    {
        $update= Usuarios::find($id);
        $update->nombres=$nombres;
        $update->save();
        return response()->json(["Update Complete"=>Usuarios::find($update->id)],200);
    }
}