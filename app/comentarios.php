<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentarios extends Model
{
    public function usuarios()
    {
        return $this->belongsTo('App\Usuarios');
    }
    public function publicacion()
    {
        return $this->belongsTo('App\Publicaciones');
    }
}
