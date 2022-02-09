<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class IdiomaController extends Controller
{
    public function setIdioma($idioma){
        session(['idioma'=> $idioma]);
        return Redirect::back();
    }
}
