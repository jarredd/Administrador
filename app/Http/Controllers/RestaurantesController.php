<?php

namespace App\Http\Controllers;

use App\Pueblos;
use App\Restaurantes;
use Illuminate\Http\Request;

class RestaurantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurantes = Pueblos::join('restaurantes','pueblos.id', '=', 'restaurantes.pueblo_id','')
        ->select('restaurantes.id','restaurantes.nombre','restaurantes.descripcion','pueblos.nombre as pueblo')->get();

        //dd($restaurantes);
        return view('Restaurantes.restaurantes', compact('restaurantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rest = (new Restaurantes)->fill($request->all());
        $rest->ruta_imagen = $request->file('imgRes')->store('public/restaurantes');
        $rest->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $pueblos = Pueblos::all();

        return response()->json($pueblos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $restaurantes = Restaurantes::findOrFail($request->id);

        $restaurantes->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         $restaurantes = Restaurantes::findOrFail($request->id);
        $restaurantes->delete();
        return redirect()->back();
    }
}
