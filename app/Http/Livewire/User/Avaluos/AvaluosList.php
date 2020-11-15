<?php

namespace App\Http\Livewire\User\Avaluos;

use Livewire\Component;

class AvaluosList extends Component
{

    public $misAvaluos;

    public function mount($misAvaluos)
    {
        $this->misAvaluos = $misAvaluos;
    }

    public function render()
    {
        return view('livewire.user.avaluos.avaluos-list');
    }
}
