<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use Illuminate\Http\Request;

class OrçamentosController extends Controller
{
    public function orçamento()
    {
        
        return view("web.orcamento");
    }

    public function salvarDados(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'sobrenome' => 'required',
            'cpf' => 'required',
            'email' => 'required|email',
            'cep' => 'required',
            'numero' => 'required',
            'logradouro' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
        ]);

        Orcamento::create($request->all());

        session()->flash('info', 'Entraremos em contato em breve!');
            
        return redirect()->route('orcamento');
    }
}
