<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class CustomerComponent extends Component
{
    public function render()
    {
        return view('livewire.backend.customer-component')->layout('livewire.backend.layouts.app');
    }
}
