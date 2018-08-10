<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pueblos extends Model
{
    protected $fillable = ['nombre','descripcion'];

        public $timestamps = false;

    public function restaurantes()
    {
        return $this->hasOne('App\Restaurantes');
    }
}
