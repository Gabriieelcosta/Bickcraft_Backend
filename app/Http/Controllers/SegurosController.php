<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegurosController extends Controller
{
    public function seguros()
    {
        return view("web.seguros");
    }
}
