<div>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{route('home')}}">{{__('blog.home')}}</a>
                    <span class="breadcrumb-item active">{{__('blog.contact')}}</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">{{__('blog.contact')}}</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>

                    <div class="form-group">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name" placeholder="{{__('lang.name')}}">
                        @error('name') <span style="color: red" class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" wire:model="phone" placeholder="{{__('lang.phone')}}">
                        @error('phone') <span style="color: red" class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" wire:model="email" placeholder="{{__('lang.email')}}">
                        @error('email') <span style="color: red" class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" wire:model="subject" placeholder="{{__('lang.subject')}}">
                        @error('subject') <span style="color: red" class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control @error('message') is-invalid @enderror" wire:model="message" cols="30" rows="9" placeholder="{{__('blog.message_detail')}}"></textarea>
                        @error('message') <span style="color: red" class="error">{{ $message }}</span> @enderror
                    </div> 
                    <div>
                        <button class="btn btn-primary py-2 px-4" wire:click="sendMessage" id="sendMessageButton">{{__('blog.send_message')}}</button>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe style="width: 100%; height: 250px;"
                    src="{{$branchs->google_map}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <h5 class="text-secondary text-uppercase mb-4">{{__('blog.about')}}</h5>
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
            </div>
        </div>
    </div>
    <!-- Contact End -->
</div>
