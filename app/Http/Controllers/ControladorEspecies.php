<?php

namespace ZooVirtual\Http\Controllers;

use Illuminate\Http\Request;

use ZooVirtual\Coleccion;
use ZooVirtual\Color;
use ZooVirtual\Especie;
use ZooVirtual\Http\Requests;

class ControladorEspecies extends Controller
{
    //
    public function index(){
        $especies = Especie::all();
    	return view('base.tabla')->with('especies', $especies);
    }

    public function create()
    {
        $colores = Color::all();
        $colecciones = Coleccion::all();
        $nombre_comun = "";

        return view('especies.formulario')->with('colecciones', $colecciones)
            ->with('colores', $colores)
            ->with('nombre_comun', $nombre_comun);
    }

    public function store(Request $request)
    {
        $especie = new Especie;
        $especie->create($request->all());
        return "Especie guardada";
    }

    public function edit($id)
    {
        $especie = Especie::find($id);

        $colores = Color::all();
        $colecciones = Coleccion::all();

        $nombre_comun = "cunaguaro";

        return view('especies.formulario')->with('colecciones', $colecciones)
            ->with('colores', $colores)
            ->with('nombre_comun', $nombre_comun);
            //->with('especie', $especie);
    }

}
