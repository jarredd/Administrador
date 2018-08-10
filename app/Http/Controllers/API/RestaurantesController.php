<?php

namespace App\Http\Controllers\API;

use App\Restaurantes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantesController extends Controller
{
    public function restaurantes()
    {
        $rest = Restaurantes::select('id','pueblo_id','nombre','ruta_imagen')->get();

        return response()->json($rest);
    }

    public function restaurantesM()
    {
        $rest = Restaurantes::select('id','descripcion')->get();
        
        return response()->json($rest);
    }
}
