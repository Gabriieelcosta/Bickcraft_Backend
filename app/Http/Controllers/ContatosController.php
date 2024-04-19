<?php

namespace App\Http\Controllers;

use App\Mail\ContatoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContatosController extends Controller
{
    public function contato()
    {
        return view('web.contato');
    }

    public function envio(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required'
        ]);

        // dd($request->all());
        Mail::to('gabriel.costa@teste.com.br')
            ->send(new ContatoMailable($request->all()));

        session()->flash('info', 'Mensagem enviada!');

        return redirect()->route('contato');
    }
}
