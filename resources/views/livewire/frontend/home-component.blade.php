<div>
    
    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                        @foreach ($sliders as $key => $item)
                        <div class="carousel-item position-relative {{$key == 0 ? 'active' : '' }}" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="{{asset($item->image)}}" style="object-fit:cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{__('blog.service')}}</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                                        @if (Config::get('app.locale')== 'lo')
                                            {{$item->name_la}}
                                        @elseif (Config::get('app.locale') == 'en')
                                            {{$item->name_en}}
                                        @endif
                                    </p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{route('services')}}">{{__('lang.detail')}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="{{asset('frontend/img/offer-1.jpg')}}" alt="">
                    <div class="offer-text">
                        <!--<h6 class="text-white text-uppercase">Save 20%</h6>-->
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="{{route('services')}}" class="btn btn-outline-light">{{__('lang.detail')}}</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="{{asset('frontend/img/offer-2.jpg')}}" alt="">
                    <div class="offer-text">
                        <!--<h6 class="text-white text-uppercase">Save 20%</h6>-->
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="{{route('services')}}" class="btn btn-outline-light">{{__('lang.detail')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Download App -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="font-weight-semi-bold m-0">{{__('blog.download_app')}}</h5> <br>

                <a href="{{$branchs->app_store}}" target="_blank"><img src="{{asset('images/appgle-app-store.png')}}" height="60"></a>
                <a href="{{$branchs->play_store}}" target="_blank"><img src="{{asset('images/google-play-store.png')}}" height="60"></a>
                <a href="{{$branchs->app_gallery}}" target="_blank"><img src="{{asset('images/huawei-app-gallery.png')}}" height="60"></a>
            </div>
        </div>
    </div>
    <!-- Featured End -->

    <!-- Service Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">{{__('blog.service')}}</span></h2>
        <div class="row px-xl-5">

            @foreach ($services as $item)
                <div class="col-md-3">
                    <div class="product-offer mb-30" style="height: 300px;">
                        <img class="img-fluid" src="{{asset($item->image)}}" alt="">
                        <div class="offer-text text-center">
                            <!--<h6 class="text-white text-uppercase">Save 20%</h6>-->
                            <h3 class="text-white mb-3">
                                @if (Config::get('app.locale') == 'lo')
                                    {{$item->name_la}}
                                @elseif (Config::get('app.locale') == 'en')
                                    {{$item->name_en}}
                                @endif
                            </h3>
                            <a href="{{route('service_detail', $item->id)}}" class="btn btn-outline-light">{{__('lang.detail')}}</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- Offer End -->

    <!-- Categories Start 
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('frontend/img/cat-1.jpg')}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('frontend/img/cat-2.jpg')}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('frontend/img/cat-3.jpg')}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('frontend/img/cat-4.jpg')}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>-->
    <!-- Categories End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">{{__('lang.product')}}</span></h2>
        <div class="row px-xl-5">

            @foreach ($products as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset($item->image)}}" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none" href="{{route('product_detail', $item->id)}}">{{$item->name}}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>
                                <!--
                                @if ($item->price_online == 0)
                                    {{__('blog.call')}}
                                @else
                                    {{number_format($item->price_online)}} {{__('lang.lak')}}
                                @endif-->
                            </h5>
                            <!--<h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>-->
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                        </div>
                    </div>
                </div>
            </div> 
            @endforeach

        </div>
    </div>
    <!-- Products End -->

    <!-- Customer -->
    <div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">{{__('blog.gov_customers')}}</span></h2>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">

                    @foreach ($gov_customers as $item)
                    <div class="bg-light p-4">
                        <img src="{{asset($item->image)}}" alt="">
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">{{__('blog.organization_customers')}}</span></h2>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">

                    @foreach ($original_customers as $item)
                    <div class="bg-light p-4">
                        <img src="{{asset($item->image)}}" alt="">
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Customer -->
</div>
