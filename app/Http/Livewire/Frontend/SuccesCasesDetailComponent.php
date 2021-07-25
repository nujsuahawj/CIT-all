<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class SuccesCasesDetailComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.succes-cases-detail-component')
        ->layout('layouts.frontend.base-frontend');
    }
}
