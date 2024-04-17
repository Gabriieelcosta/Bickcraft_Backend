<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermosController extends Controller
{
    public function termo()
    {
        return view("web.termos");
    }
}
