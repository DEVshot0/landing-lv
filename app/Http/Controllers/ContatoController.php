<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'mensagem' => 'required|string',
        ]);

        Contato::create($request->only(['nome', 'telefone', 'email', 'mensagem']));

        return response()->json(['success' => true, 'message' => 'Mensagem enviada com sucesso!']);
    }
}
