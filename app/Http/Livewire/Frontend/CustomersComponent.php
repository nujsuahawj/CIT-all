<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Customer;
use App\Models\CustomerType;

class CustomersComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $customer_type = CustomerType::all();
        $customers = Customer::select('image')->orderBy('id','desc')->paginate(16);
        return view('livewire.frontend.customers-component', compact('customers','customer_type'))
        ->layout('layouts.frontend.base-frontend');
    }
}
