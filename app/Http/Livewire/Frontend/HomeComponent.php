<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Slide;
use App\Models\Service;
use App\Models\Customer;
use DB;

class HomeComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $sliders = Slide::orderBy('id','desc')->where('del',1)->get();
        $services = Service::where('del',1)->take(4)->get();
        $products = DB::connection('mysql2')->table('products')
                    ->select('id','name','image','price_online')
                    ->orderBy('id','desc')
                    ->where('trash',0)->where('image', '<>', '')
                    ->paginate(12);
        $customers = Customer::select('image')->orderBy('id','desc')->get();

        return view('livewire.frontend.home-component', compact('sliders','services','products','customers'))
        ->layout('layouts.frontend.base-frontend');
    }
}
