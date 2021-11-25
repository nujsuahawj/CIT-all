<?php

namespace App\Http\Livewire\Backend\Order;

use Livewire\Component;

class OrderComponent extends Component
{
    public function render()
    {
        return view('livewire.backend.order.order-component')->layout('layouts.backend.app');
    }
}
