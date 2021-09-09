<?php

namespace App\Http\Livewire\Frontend\Customer;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.customer.dashboard-component')
        ->layout('layouts.frontend.base-frontend');
    }
}
