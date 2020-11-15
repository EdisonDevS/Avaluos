<?php

namespace App\Http\Livewire\User\Avaluos;

use App\Avaluo;
use Livewire\Component;

class CrearAvaluoButton extends Component
{
    public function render()
    {
        return view('livewire.user.avaluos.crear-avaluo-button');
    }

    public function crear()
    {
        $ultimoAvaluo = Avaluo::all();
        $ultimoAvaluo = $ultimoAvaluo->last();

        $nuevoAvaluo = Avaluo::create([
            'custom_id' => 'AVAL-'.($ultimoAvaluo->id + 1),
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('user.editar_avaluo',['id' => $nuevoAvaluo->id]);
    }
}
