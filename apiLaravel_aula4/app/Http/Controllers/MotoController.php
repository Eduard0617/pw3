<?php

namespace App\Http\Controllers;

use App\Models\Motos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;

class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrosMoto = Motos::All();
        
        $contador = $registrosMoto -> count();

        return('Motos Listadas: ' . $contador . $registrosMoto . Response() -> json([], Response::HTTP_NO_CONTENT));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registrosMoto = $request -> All();

        $validaDados = Validator::make($registrosMoto, [
            'modelo' => 'required',
            'marca' => 'required',
            'ano' => 'required'
        ]);

        if($validaDados -> fails()) {
            return 'Registros faltantes ' . Response() -> json([], Response::HTTP_NO_CONTENT);
        };

        $enviaDados = Motos::create($registrosMoto);

        if($enviaDados) {
            return 'Registros cadastrados ' . Response() -> json([], Response::HTTP_NO_CONTENT);
        } else {
            return 'Registros não cadastrados ' . Response() -> json([], Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(moto $moto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, moto $moto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(moto $moto)
    {
        //
    }
}
