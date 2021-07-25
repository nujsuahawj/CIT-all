<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ProjectsDetailComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.projects-detail-component')
        ->layout('layouts.frontend.base-frontend');
    }
}
