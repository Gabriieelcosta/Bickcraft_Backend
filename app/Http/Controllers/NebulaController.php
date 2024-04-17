<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NebulaController extends Controller
{
    public function nebula()
    {
        return view("web.nebula");
    }
}
