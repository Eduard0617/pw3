<?php

namespace App\Http\Controllers;

use App\Models\criptoMoedas;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class CriptoMoedasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regBook = Criptomoedas::All();
        $contador = $regBook -> count();

        return Response() -> json($regBook);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request -> all(), [
            'siglas' => 'required',
            'nome' => 'required',
            'valor' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Registro inválidos',
                'errors' => $validator -> errors()
            ], 400); //Retorna HTTP 400 )(bad request) se houver erro de validação
        }

        //Criando a criptomoeda no banco de dados
        $resgistros = criptomoedas::create($request -> all());

        if ($request) {
            return response() -> json([
                'success' => true,
                'message' => 'Criptomoeda cadastrada com sucesso!',
                'data' => $resgistros 
            ], 201);
        } else {
            return response() -> json([
                'success' => false,
                'message' => 'Erro ao cadastrar a criptomoeda',
            ], 500); //Retorna HTTP 500 (Internal Server Error) se o cadastro falhar
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(criptomoedas $criptomoedas)
    {
        $regBook = Criptomoedas::find($id);

        if($regBook) {
            return 'Criptomoedas não localizadas. ' . Response() -> json([], Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, criptomoedas $criptomoedas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(criptomoedas $criptomoedas)
    {
        //
    }
}
