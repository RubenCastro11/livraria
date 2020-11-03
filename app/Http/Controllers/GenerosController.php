<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
    //
    public function index(){
        //$generos = Genero::all()->sortbydesc('idl');
        $generos= Genero::paginate(4);
        return view('generos.index',[
            'generos'=>$generos
        ]);
    }
    public function show(Request $request){
        $idggenero = $request->idg;
        //$genero=Genero::findOrFail($idggenero);
        //$genero=Genero::find($idggenero);
        $genero=Genero::where('idg',$idggenero)->first();
        return view('generos.show',[
            'genero'=>$genero
        ]);
    }

}
