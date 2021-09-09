<div>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{route('home')}}">{{__('blog.home')}}</a>
                    <span class="breadcrumb-item active">{{__('blog.sign_in')}}</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">{{__('blog.sign_in')}}</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-4 mb-5">
            </div>
            <div class="col-lg-4 mb-5">
                <div class="contact-form bg-light p-30">
                    <div class="form-group text-center">
                        <label>{{__('blog.input_user_name_for_sign_in')}}</label>
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
                        <input type="password" wire:model="password" wire:keydown.enter="signIn" class="form-control @error('password') is-invalid @enderror" placeholder="{{__('lang.password')}}">
                        @error('password') <span style="color: red" class="error">{{ $message }}</span> @enderror
                    </div> 
                    <div>
                        @if (session()->has('message'))
                            <div class="alert alert-warning">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary py-2 px-4" wire:click="signIn">{{__('blog.sign_in')}}</button>
                        <button class="btn btn-primary py-2 px-4"><a href="{{route('customer_register')}}" class="text-dark">{{__('blog.register')}}</a></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
            </div>
        </div>
    </div>
    <!-- Contact End -->
</div>
