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
                    <div class="contact-form bg-light p-30">
                        <div class="form-group text-center">
                            <label>{{__('lang.edit')}}</label>
                        </div>
                        <div>
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" wire:model="name" wire:keydown.enter="register" class="form-control @error('name') is-invalid @enderror" placeholder="{{__('lang.name')}}">
                            @error('name') <span style="color: red" class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"> 020</i></span>
                            </div>
                            <input type="text" wire:model="phone" wire:keydown.enter="register" class="form-control @error('phone') is-invalid @enderror" placeholder="{{__('lang.phone')}}">
                        </div>
                        <div>
                            @error('phone') <span style="color: red" class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" wire:model="email" wire:keydown.enter="register" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('lang.email')}}">
                            @error('email') <span style="color: red" class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" wire:model="password" wire:keydown.enter="register" class="form-control @error('password') is-invalid @enderror" placeholder="{{__('lang.password')}}">
                            @error('password') <span style="color: red" class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group"> 
                            <input type="password" wire:model="confirmpassword" wire:keydown.enter="register" class="form-control @error('confirmpassword') is-invalid @enderror" placeholder="{{__('lang.confirmpassword')}}">
                            @error('confirmpassword') <span style="color: red" class="error">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="text-center">
                            <button class="btn btn-primary py-2 px-4" wire:click="updateProfile">{{__('lang.save')}}</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
</div>