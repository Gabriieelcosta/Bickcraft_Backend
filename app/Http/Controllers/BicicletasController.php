<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BicicletasController extends Controller
{
    public function produto()
    {
        return view("web.bicicletas");
    }
}
