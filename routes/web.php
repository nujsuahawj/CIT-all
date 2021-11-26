<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LocalController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DepartController;
use App\Http\Controllers\Backend\ProvinceController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\VillageController;
use App\Http\Controllers\Backend\MarriesController;
use App\Http\Controllers\Backend\PositionController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\Account\SettingAccController;
//use App\Http\Controllers\Backend\Account\BranchController;
use App\Http\Controllers\Backend\Account\StatusAccController;
use App\Http\Controllers\Backend\Account\CurrencyController;
use App\Http\Controllers\Backend\Account\TransectionController;
use App\Http\Controllers\Backend\Doc\ImportDocumentController;
use App\Http\Controllers\Backend\Doc\ExportDocumentController;
use App\Http\Controllers\Backend\Doc\DocumentTypeController;
use App\Http\Controllers\Backend\Doc\StorageFileController;
use App\Http\Controllers\Backend\Doc\ExternalPartsController;
use App\Http\Controllers\Backend\Doc\LocalDocumentController;
use App\Http\Controllers\Backend\Payroll\SalaryController;
use App\Http\Controllers\Backend\Payroll\PayrollController;

use App\Http\Controllers\Backend\Ecommerce\ProductController;
use App\Http\Controllers\Backend\Ecommerce\CatalogController;
use App\Http\Controllers\Backend\Ecommerce\SlideController;
use App\Http\Controllers\Backend\Ecommerce\ServiceController;
//livewire
 use App\Http\livewire\Backend\Order\OrderComponent; 
//  by jack sainther 
 use App\Http\livewire\Backend\Customer\CustomerComponent; 
 use App\Http\livewire\Backend\Customer\CreateComponent; 
 use App\Http\livewire\Backend\Customer\EditComponent; 
 use App\Http\livewire\Backend\Customer\DetialComponent;
 
 
 
  //end
/*
Route::get('/', function () {
    return view('backend.login');
});*/

//App::setLocale($locale);
//Route::get('localization/{local}',[LocalController::class, 'index']);
Route::get('localization/{local}' , function($local){
    Session::put('local', $local);
    return back();
});

//Frontend Website
Route::get('/', App\Http\Livewire\Frontend\HomeComponent::class)->name('home');
Route::get('/shop', App\Http\Livewire\Frontend\ShopComponent::class)->name('shop');
Route::get('/shop/product_detail/{id}', App\Http\Livewire\Frontend\ProductDetailComponent::class)->name('product_detail');
Route::get('/services', App\Http\Livewire\Frontend\ServiceComponent::class)->name('services');
Route::get('/services/service_detail/{id}', App\Http\Livewire\Frontend\ServiceDetailComponent::class)->name('service_detail');
Route::get('/customers', App\Http\Livewire\Frontend\CustomersComponent::class)->name('customers');
Route::get('/frontend/solutions', App\Http\Livewire\Frontend\SolutionsComponent::class)->name('solutions');
Route::get('/frontend/solutions/solution_detail/{id}', App\Http\Livewire\Frontend\SolutionsDetailComponent::class)->name('solution_detail');
Route::get('/about', App\Http\Livewire\Frontend\AboutComponent::class)->name('about');
Route::get('/contact', App\Http\Livewire\Frontend\ContactComponent::class)->name('contact');
Route::get('/cart', App\Http\Livewire\Frontend\CartComponent::class)->name('cart');
Route::get('/checkout', App\Http\Livewire\Frontend\CheckoutComponent::class)->name('checkout');
Route::get('/wishlist', App\Http\Livewire\Frontend\WishlistComponent::class)->name('wishlist');
Route::get('/terms', App\Http\Livewire\Frontend\TermsComponent::class)->name('terms');
Route::get('/frontend/news', App\Http\Livewire\Frontend\NewsComponent::class)->name('news');
Route::get('/frontend/news/news_detail/{id}', App\Http\Livewire\Frontend\NewsDetailComponent::class)->name('news_detail');

//Customers CustomerLoginComponent
Route::get('/customers/sign_in', App\Http\Livewire\Frontend\Auth\CustomerLoginComponent::class)->name('customer_sign_in');
Route::get('/customers/register', App\Http\Livewire\Frontend\Auth\CustomerRegisterComponent::class)->name('customer_register');

Route::resource('/loginadmincit', LoginController::class);

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['middleware'=>'adminLogin'],function()
{
    //Customer
    Route::get('/customers/dashboard', App\Http\Livewire\Frontend\Customer\DashboardComponent::class)->name('customer.dashboard');
    Route::get('/customers/profile/{id}', App\Http\Livewire\Frontend\Auth\CustomerProfileComponent::class)->name('customer.profile');
    Route::get('/customers/sign_out', [App\Http\Livewire\Frontend\Auth\CustomerLoginComponent::class,'signOut'])->name('customer_sign_out');

    //Backend
    Route::get('/module', [App\Http\Controllers\Backend\ModuleController::class,'index'])->name('module.index');
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/depart', DepartController::class);
    Route::resource('/province', ProvinceController::class);
    Route::resource('/district', DistrictController::class);
    Route::resource('/village', VillageController::class);
    Route::resource('/marries', MarriesController::class);
    Route::resource('/position', PositionController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/role', RoleController::class);
    Route::resource('/branch', App\Http\Controllers\Backend\BranchController::class);

    Route::resource('/transection',TransectionController::class);
    Route::PATCH('/approved/{id}',[TransectionController::class,'approved'])->name('transection.approved');
    Route::PATCH('/rejected/{id}',[TransectionController::class,'rejected'])->name('transection.rejected');
    //Route::resource('/branch',BranchController::class);
    Route::resource('/statusacc',StatusAccController::class);
    Route::resource('/currency',CurrencyController::class);
    Route::resource('/settingacc',SettingAccController::class);

    Route::resource('/import_doc',ImportDocumentController::class);
    Route::get('/import_doc/download/{id}', [ImportDocumentController::class,'download'])->name('download_import');
    Route::resource('/export_doc',ExportDocumentController::class);
    Route::get('/export_doc/download/{id}', [ExportDocumentController::class,'download'])->name('download_export');
    Route::resource('/local_doc',LocalDocumentController::class);
    Route::get('/local_doc/download/{id}', [LocalDocumentController::class,'download'])->name('download_local');
    Route::resource('/doc_type',DocumentTypeController::class);
    Route::resource('/storage_file',StorageFileController::class);
    Route::resource('/external_parts',ExternalPartsController::class);

    Route::resource('/employee', EmployeeController::class);
    Route::resource('/salary',SalaryController::class);
    Route::resource('/payroll',PayrollController::class);
    Route::PATCH('/aceptedpayroll/{id}',[PayrollController::class,'aceptedpayroll'])->name('payroll.aceptedpayroll');
    Route::DELETE('/deletepayroll/{id}',[PayrollController::class,'deletepayroll'])->name('payroll.deletepayroll');

    Route::resource('/news', App\Http\Controllers\Backend\Ecommerce\NewsController::class);
    Route::resource('/page', App\Http\Controllers\Backend\Ecommerce\PageController::class);
    Route::resource('/product',ProductController::class);
    Route::resource('/catalog',CatalogController::class);
    Route::resource('/slide',SlideController::class);
    Route::resource('/service',ServiceController::class);
    Route::resource('/customer_logo', App\Http\Controllers\Backend\Ecommerce\CustomerController::class);
    Route::resource('/solutions', App\Http\Controllers\Backend\Ecommerce\SolutionController::class);
    Route::resource('/solution_type', App\Http\Controllers\Backend\Ecommerce\SolutionTypeController::class);
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    // livewire
     Route::get('/orders', OrderComponent::class)->name('admin.order');
    //  by jack sainther
     Route::get('/admincustomer', CustomerComponent::class)->name('admin.customer');
     Route::get('/admincustomer/create', CreateComponent::class)->name('admin.createcustomer');
     Route::get('/admincustomer/edit', EditComponent::class)->name('admin.editcustomer');
     Route::get('/admincustomer/detail', DetialComponent::class)->name('admin.detailcustomer');
});



