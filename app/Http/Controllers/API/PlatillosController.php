<?php

namespace App\Http\Controllers\API;

use App\Platillos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlatillosController extends Controller
{
    public function platillos()
    {
        $platillo = Platillos::select('id','nombre','ruta_imagen')->get();

        return response()->json($platillo);
    }

    public function descripcion()
    {
        $platillo = Platillos::select('id','nombre','descripcion')->get();

                return response()->json($platillo);

    }

    public function videos()
    {
        $platillo = Platillos::select('id','ruta_video')->get();

                return response()->json($platillo);

    }
}
