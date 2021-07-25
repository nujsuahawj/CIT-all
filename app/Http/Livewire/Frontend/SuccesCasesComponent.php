<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class SuccesCasesComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.succes-cases-component')
        ->layout('layouts.frontend.base-frontend');
    }
}
