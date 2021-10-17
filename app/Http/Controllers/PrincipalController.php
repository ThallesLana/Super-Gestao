<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    // action
    public function principal(){
        return view('site.principal');;
    }
}
