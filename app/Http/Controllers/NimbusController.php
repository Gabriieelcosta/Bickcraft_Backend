<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NimbusController extends Controller
{
    public function nimbus()
    {
        return view("web.nimbus");
    }
}
