<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrçamentosController extends Controller
{
    public function orçamento()
    {
        return view("web.orcamento");
    }
}
