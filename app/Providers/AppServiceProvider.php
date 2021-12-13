<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use View;
use App\Models\Branch;
use App\Models\CustomerTransition;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $branchs = Branch::where('id',1)->first();
        $customer_transition =CustomerTransition::orderBy('id', 'DESC')->get();
        $notif = 0;
        $no = 0;
        View::share(compact('branchs', 'customer_transition','notif','no'));

    }
}
