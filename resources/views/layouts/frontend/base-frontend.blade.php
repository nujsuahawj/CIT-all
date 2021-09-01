<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{__('lang.title')}}</title>

    <meta property="og:url"                content="{{ request()->fullUrl() }}" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="@yield('meta_title')" />
	<meta property="og:description"        content="@yield('meta_des')" />
	<meta property="og:image"              content="{{asset('')}}@yield('meta_img')" />

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/logo.png')}}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">

    @livewireStyles

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="{{route('about')}}">{{__('blog.about')}}</a>
                    <a class="text-body mr-3" href="{{route('contact')}}">{{__('blog.contact')}}</a>
                    <a class="text-body mr-3" href="{{route('terms')}}">{{__('blog.terms')}}</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">{{__('blog.my_account')}}</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><a href="" class="text-dark">{{__('blog.sign_in')}}</a></button>
                            <button class="dropdown-item" type="button"><a href="" class="text-dark">{{__('blog.sign_out')}}</a></button>
                            <button class="dropdown-item" type="button"><a href="{{route('cart')}}" class="text-dark">{{__('blog.cart')}}</a></button>
                            <button class="dropdown-item" type="button"><a href="{{route('checkout')}}" class="text-dark">{{__('blog.checkout')}}</a></button>
                        </div>
                    </div>
                    <!--
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">{{__('lang.currency')}}</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">{{__('blog.lak')}}</button>
                            <button class="dropdown-item" type="button">{{__('blog.thb')}}</button>
                            <button class="dropdown-item" type="button">{{__('blog.usd')}}</button>
                        </div>
                    </div>-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">{{__('blog.language')}}</button>
                        <div class="dropdown-menu dropdown-menu-right"> 
                            <button class="dropdown-item" type="button"><a href="{{url('localization/lo')}}" class="text-dark">{{__('blog.la')}}</a></button>
                            <button class="dropdown-item" type="button"><a href="{{url('localization/en')}}" class="text-dark">{{__('blog.en')}}</a></button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-8">
                <a href="/" class="text-decoration-none">
                    <img src="{{asset('images/logo.png')}}" height="60" alt="">
                    <strong><span class="text-dark px-2">{{__('lang.title')}}</span></strong> <br>
                </a>
                <!--
                <a href="/" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">CIT</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
                </a>-->
            </div>
            <!--
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="{{__('blog.search_for_products')}}">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>-->
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">{{__('blog.hotline')}}</p>
                <h4 class="m-0">{{$branchs->phone}}</h4>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <!--
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Shirts</a>
                        <a href="" class="nav-item nav-link">Jeans</a>
                        <a href="" class="nav-item nav-link">Swimwear</a>
                        <a href="" class="nav-item nav-link">Sleepwear</a>
                        <a href="" class="nav-item nav-link">Sportswear</a>
                        <a href="" class="nav-item nav-link">Jumpsuits</a>
                        <a href="" class="nav-item nav-link">Blazers</a>
                        <a href="" class="nav-item nav-link">Jackets</a>
                        <a href="" class="nav-item nav-link">Shoes</a>
                    </div>
                </nav>
            </div>-->
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="/" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">CIT</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">SOLE CO.,LTD</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/" class="nav-item nav-link"><i class="fas fa-home"></i> {{__('blog.home')}}</a>
                            <a href="{{route('shop')}}" class="nav-item nav-link">{{__('blog.shop')}}</a>
                            <a href="{{route('services')}}" class="nav-item nav-link">{{__('blog.service')}}</a>
                            <a href="{{route('solutions')}}" class="nav-item nav-link">{{__('blog.solutions')}}</a>
                            <a href="{{route('customers')}}" class="nav-item nav-link">{{__('blog.customers')}}</a>
                            <a href="{{route('news')}}" class="nav-item nav-link">{{__('blog.news')}}</a>
                            <a href="{{route('about')}}" class="nav-item nav-link">{{__('blog.about')}}</a>
                            <a href="{{route('contact')}}" class="nav-item nav-link">{{__('blog.contact')}}</a>
                            <!--
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            -->
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    {{ $slot }}


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">{{__('blog.contact')}}</h5>
                <p class="mb-4"></p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>
                    @if (Config::get('app.locale') == 'lo')
                        {{$branchs->address_la}}
                    @elseif(Config::get('app.locale') == 'en')
                        {{$branchs->address_en}}
                    @endif
                </p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>{{$branchs->email}}</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>{{$branchs->phone}}</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">{{__('blog.menu')}}</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>{{__('blog.home')}}</a>
                            <a class="text-secondary mb-2" href="{{route('shop')}}"><i class="fa fa-angle-right mr-2"></i>{{__('blog.shop')}}</a>
                            <a class="text-secondary mb-2" href="{{route('services')}}"><i class="fa fa-angle-right mr-2"></i>{{__('blog.service')}}</a>
                            <a class="text-secondary mb-2" href="{{route('solutions')}}"><i class="fa fa-angle-right mr-2"></i>{{__('blog.solutions')}}</a>
                            <a class="text-secondary mb-2" href="{{route('customers')}}"><i class="fa fa-angle-right mr-2"></i>{{__('blog.customers')}}</a>
                            <a class="text-secondary mb-2" href="{{route('news')}}"><i class="fa fa-angle-right mr-2"></i>{{__('blog.news')}}</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">{{__('blog.my_account')}}</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="{{route('cart')}}"><i class="fa fa-angle-right mr-2"></i>{{__('blog.cart')}}</a>
                            <a class="text-secondary mb-2" href="{{route('wishlist')}}"><i class="fa fa-angle-right mr-2"></i>{{__('blog.wishlist')}}</a>
                            <a class="text-secondary mb-2" href="{{route('checkout')}}"><i class="fa fa-angle-right mr-2"></i>{{__('blog.checkout')}}</a>
                            <a class="text-secondary mb-2" href="{{route('about')}}"><i class="fa fa-angle-right mr-2"></i>{{__('blog.about')}}</a>
                            <a class="text-secondary mb-2" href="{{route('terms')}}"><i class="fa fa-angle-right mr-2"></i>{{__('blog.terms')}}</a>
                            <a class="text-secondary" href="{{route('contact')}}"><i class="fa fa-angle-right mr-2"></i>{{__('blog.contact')}}</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">{{__('blog.download_app')}}</h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{$branchs->app_store}}" target="_blank"><img src="{{asset('images/appgle-app-store.png')}}" height="30" class="mb-1"></a> <br>
                                <a href="{{$branchs->play_store}}" target="_blank"><img src="{{asset('images/google-play-store.png')}}" height="30" class="mb-1"></a> <br>
                                <a href="{{$branchs->app_gallery}}" target="_blank"><img src="{{asset('images/huawei-app-gallery.png')}}" height="30"></a>
                            </div>
                        </div>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">{{__('blog.follow_us')}}</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="{{$branchs->whatapps}}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="{{$branchs->fanpage}}" target="_blank"><i class="fab fa-facebook-f" target="_blank"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="{{$branchs->youtube}}" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="https://citgroup.la">{{__('lang.title')}}</a>. {{__('lang.allrightreserved')}}
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="{{asset('frontend/img/payments.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('frontend/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('frontend/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <!-- Toastr -->
    <script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>

    @livewireScripts

    <script>
        window.livewire.on('alert', param => {
              toastr[param['type']](param['message'],param['type']);
        });
      
    </script>

</body>

</html>
