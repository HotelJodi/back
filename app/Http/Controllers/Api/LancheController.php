<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lanche;

class LancheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return Lanche::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                       //Validação dos dados pra saber se esta tudo de acordo com o que se espera deles
            
                    //salvando dados no banco de dados
                    $dadosLanche = new Lanche;
            
                    $dadosLanche->name = $request->name;
                    $dadosLanche->description = $request->description;
                    $dadosLanche->type = json_encode((array) $request->type);
                    // $dadosLanche->type = $request->type;
                    $dadosLanche->promotion = $request->promotion;
                    $dadosLanche->discount = $request->discount;
                    $dadosLanche->save();
                  
                    //Backlog -- rotorno de resposta para o usuário
                    return response()->json([
                        'mensagem' => 'dados salvos com sucesso!',
                        'dados' => $dadosLanche,
                    ], 201); //cria o status 201
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
