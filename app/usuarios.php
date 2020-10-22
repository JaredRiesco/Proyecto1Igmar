<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    public function publicaciones()
    {
        return $this->hasMany('App\Publicaciones');
    }
    public function comentarios()
    {
        return $this->hasMany('App\Comentarios');
    }
}
