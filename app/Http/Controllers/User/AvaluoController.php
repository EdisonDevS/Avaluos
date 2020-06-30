<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvaluoController extends Controller
{
    //
    public function misAvaluos(Request $request) {
        return view('user.misAvaluos');
    }
}
