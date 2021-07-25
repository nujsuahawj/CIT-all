<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.about-component')
        ->layout('layouts.frontend.base-frontend');
    }
}
