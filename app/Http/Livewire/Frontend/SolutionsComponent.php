<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class SolutionsComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.solutions-component')
        ->layout('layouts.frontend.base-frontend');
    }
}
