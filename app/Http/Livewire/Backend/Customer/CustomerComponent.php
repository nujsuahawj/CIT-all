<?php

namespace App\Http\Livewire\Backend\Customer;

use Livewire\Component;

class CustomerComponent extends Component
{
    public function render()
    {
        return view('livewire.backend.customer.customer-component')->layout('layouts.backend.app');
    }
}
