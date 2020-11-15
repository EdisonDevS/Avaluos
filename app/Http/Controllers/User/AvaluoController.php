<?php

namespace App\Http\Controllers\User;

use App\Avaluo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvaluoController extends Controller
{
    //
    public function showMisAvaluos()
    {
        $misAvaluos = auth()->user()->avaluos;

        return view('user.misAvaluos', compact('misAvaluos'));
    }

    public function showEditarAvaluo(Request $request)
    {
        $avaluo = Avaluo::find($request->id);
        return view('user.avaluo.editarAvaluo', compact('avaluo'));
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
