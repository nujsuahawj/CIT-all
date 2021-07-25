<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Service;

class ServiceComponent extends Component
{
    public function render()
    {
        $services = Service::where('del',1)->take(4)->get();
        return view('livewire.frontend.service-component', compact('services'))
        ->layout('layouts.frontend.base-frontend');
    }
}
