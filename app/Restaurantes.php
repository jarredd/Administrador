<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurantes extends Model
{

    protected $fillable =[
        'pueblo_id',
        'nombre',
        'descripcion',
        'ruta_imagen',
        'latitud',
        'longitud'
    ];

        public $timestamps = false;
    public function pueblos()
    {
        return $this->belongsTo('App\Pueblos','pueblo_id','id');
    }

    public function platillos()
    {
        return $this->hasOne('App\Platillos');
    }
}
