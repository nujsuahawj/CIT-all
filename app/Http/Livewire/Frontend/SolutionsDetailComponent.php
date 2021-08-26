<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class SolutionsDetailComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.solutions-detail-component')
        ->layout('layouts.frontend.base-frontend');
    }
}
