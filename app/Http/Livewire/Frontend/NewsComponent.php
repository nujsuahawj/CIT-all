<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class NewsComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.news-component')
        ->layout('layouts.frontend.base-frontend');
    }
}
