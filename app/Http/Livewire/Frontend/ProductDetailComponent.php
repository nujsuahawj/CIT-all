<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use DB;

class ProductDetailComponent extends Component
{
    public $hiddenId;

    public function mount($id)
    {
        $product = DB::connection('mysql2')->table('products')->select('id')->where('id', $id)->first();
        $this->hiddenId = $product->id;
    }

    public function render()
    {
        $product = DB::connection('mysql2')->table('products')->select('id','image','name','price_online','des','long_des')->where('id', $this->hiddenId)->get();
        $products = DB::connection('mysql2')->table('products')
                    ->select('id','name','image','price_online')
                    ->where('trash',0)->where('image', '<>', '')
                    ->inRandomOrder()->take(12)->get();

        return view('livewire.frontend.product-detail-component', compact('product','products'))
        ->layout('layouts.frontend.base-frontend');
    }
}
