<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ProjectsComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.projects-component')
        ->layout('layouts.frontend.base-frontend');
    }
}
