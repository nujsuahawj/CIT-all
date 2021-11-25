<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class OrderComponent extends Component
{
    public function render()
    {
        return view('livewire.backend.order-component')->layout('livewire.backend.layouts.app');
    }
}
