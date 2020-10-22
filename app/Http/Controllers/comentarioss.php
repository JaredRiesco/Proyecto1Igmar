<?php

namespace App\Http\Controllers;

use App\Comentarios;
use Illuminate\Http\Request;

class comentarioss extends Controller
{
    //
     /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $titulo,string $cuerpo, int $publicacion_id)
    {

        $newObj = new Comentarios;

        $newObj->titulo = $titulo;
        $newObj->cuerpo = $cuerpo;
        $newObj->publicacion_id = $publicacion_id;


        $newObj->save();
        return response()->json('Finalizado', 200);
    }
    public function show(Comentarios $titulo, int $id=0)
    {
        $titulo = ($id==0)? Comentarios::all():Comentarios::find($id);
        return response()->json($titulo, 200);
    }
    public function delete(int $id)
    {
        Comentarios::destroy($id);
        return response()->json('delete',200);

    }
    public function updateComentarios(int $id,string $titulo, string $cuerpo)
    {
        $update= Comentarios::find($id);
        $update->titulo=$titulo;
        $update->cuerpo=$cuerpo;
        $update->save();
        return response()->json(["Update Complete"=>Comentarios::find($update->id)],200);
    }
    

}
