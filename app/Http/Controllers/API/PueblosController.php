<?php

namespace App\Http\Controllers\API;

use App\Pueblos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PueblosController extends Controller
{
    public function imagenes()
    {
        $pueblos =Pueblos::select('nombre','ruta_imagen','id')->get();

        return response()->json($pueblos);
    }

    public function pueblos()
    {
        $pueblos = Pueblos::select('id','nombre','descripcion')->get();

        return response()->json($pueblos);
    }
}
