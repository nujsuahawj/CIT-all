<div>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{route('home')}}">{{__('blog.home')}}</a>
                    <span class="breadcrumb-item active">{{__('blog.customer_dashboard')}}</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">

            <!-- Shop Sidebar Start-->
            <livewire:frontend.auth.customer-sidebar-component />
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="bg-light p-4 mb-30">
                    <div class="row">
                        <div class="col-md-4 bg-success text-light">
                            100
                        </div>
                        <div class="col-md-4 bg-warning text-light">
                            500
                        </div>
                        <div class="col-md-4 bg-info text-light">
                            200
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
</div>

