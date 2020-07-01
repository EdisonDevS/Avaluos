<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvaluoController extends Controller
{
    //
    public function showMisAvaluos()
    {
        return view('user.misAvaluos');
    }

    public function showCrearAvaluo()
    {
        return view('user.crearAvaluo');
    }

    public function showBorradores()
    {
        return view('user.borradores');
    }

    public function showPapelera()
    {
        return view('user.papelera');
    }
}
