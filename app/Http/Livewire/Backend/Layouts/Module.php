<?php

namespace App\Http\Livewire\Backend\Layouts;

use Livewire\Component;

class Module extends Component
{
    public function render()
    {
        return view('livewire.backend.layouts.module')->layouts('livewire.backend.layouts.app');
    }
}
