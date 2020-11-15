<?php

namespace App\Http\Livewire\User\Avaluos;

use Livewire\Component;

class AvaluosListItem extends Component
{

    public $avaluo;

    public function mount($avaluo)
    {
        $this->avaluo = $avaluo;
    }

    public function render()
    {
        return view('livewire.user.avaluos.avaluos-list-item');
    }
}
