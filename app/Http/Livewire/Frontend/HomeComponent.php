<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Slide;
use App\Models\Service;
use App\Models\Customer;
use DB;
use Cart;

class HomeComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $sliders = Slide::orderBy('id','desc')->where('del',1)->get();
        $services = Service::where('status',1)->take(4)->get();
        $products = DB::connection('mysql2')->table('products')
                    ->select('id','name','image','price_online')
                    ->where('trash',0)->where('image', '<>', '')
                    ->inRandomOrder()->take(12)->get();
        $gov_customers = Customer::select('image')->orderBy('id','desc')->where('customer_type_id',1)->get();
        $original_customers = Customer::select('image')->orderBy('id','desc')->where('customer_type_id',2)->get();

        return view('livewire.frontend.home-component', compact('sliders','services','products','gov_customers','original_customers'))
        ->layout('layouts.frontend.base-frontend');
    }

    //Add to cart
    public function addtoCart($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message','ເພີ່ມເຂົ້າກະຕ່າສຳເລັດ!');
        return redirect()->route('cart');
    }
}
