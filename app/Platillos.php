<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platillos extends Model
{
    protected  $fillable =
        [
            'restaurante_id',
            'categoria',
            'nombre',
            'descripcion',
            'ruta_imagen',
            'ruta_video'

        ];

            public $timestamps = false;

    public function restaurantes()
    {
        return $this->belongsTo('App\Restaurantes', 'restaurante_id','id');
    }
}
