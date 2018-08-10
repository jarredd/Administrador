<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pueblos;

class PueblosController extends Controller
{
    
    public function index()
    {
        $pueblos = Pueblos::all();
        return view('Pueblos.pueblos', compact('pueblos'));
    }

    
    
    
    public function store(Request $request)
    {
        $pueblos = (new Pueblos)->fill($request->all());

        $pueblos->ruta_imagen = $request->file('imagen')->store('public/pueblos');

        $pueblos->save();

        return back();
    }

    
    

    
    public function update(Request $request)
    {
         $pueblos = Pueblos::findOrFail($request->id);

        $pueblos->update($request->all());

        return redirect()->back();
    }

    
   public function destroy(Request $request)
    {
        $pueblos = Pueblos::findOrFail($request->id);
        $pueblos->delete();
        return redirect()->back();
    }
}
