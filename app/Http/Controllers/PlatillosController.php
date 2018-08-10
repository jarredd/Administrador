<?php

namespace App\Http\Controllers;

use App\Restaurantes;
use App\Platillos;
use Illuminate\Http\Request;


class PlatillosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platillos = Platillos::all();
        return view('Platillos.platillos',compact('platillos'));
    }

 
    public function store(Request $request)
    {

       $platillo = (new Platillos)->fill($request->all());
       $platillo->ruta_imagen = $request->file('img')->store('public/platillos/imagenes');
       $platillo->ruta_video = $request->file('video')->store('pueblic/platillos/video');
       $platillo->save();

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
        $restaurantes = Restaurantes::all();
        return response()->json($restaurantes);
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
         $platillos = Platillos::findOrFail($request->id);

        $platillos->update($request->all());

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
         $platillo = Restaurantes::findOrFail($request->id);
        $platillo->delete();
        return redirect()->back();
    }
}
