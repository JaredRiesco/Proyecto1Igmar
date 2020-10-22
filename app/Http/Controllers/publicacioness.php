<?php

namespace App\Http\Controllers;

use App\Publicaciones;
use Illuminate\Http\Request;

class publicacioness extends Controller
{
    //
     /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $titulo,string $cuerpo, int $usuario_id)
    {

        $newObj = new Publicaciones;

        $newObj->titulo = $titulo;
        $newObj->cuerpo = $cuerpo;
        $newObj->usuario_id = $usuario_id;


        $newObj->save();
        return response()->json('Finalizado', 200);
    }
    public function show(publicaciones $titulo, int $id=0)
    {
        $titulo = ($id==0)? Publicaciones::all():Publicaciones::find($id);
        return response()->json($titulo, 200);
    }
    public function delete(int $id)
    {
        Publicaciones::destroy($id);
        return response()->json('delete',200);

    }
    public function updatePublicaciones(int $id,string $titulo, string $cuerpo)
    {
        $update= Publicaciones::find($id);
        $update->titulo=$titulo;
        $update->cuerpo=$cuerpo;
        $update->save();
        return response()->json(["Update Complete"=>Publicaciones::find($update->id)],200);
    }
    

}
