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
                        <textarea class="form-control @error('message') is-invalid @enderror" wire:model="message" cols="30" rows="11" placeholder="{{__('blog.message_detail')}}"></textarea>
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
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.102287526817!2d102.61618171480572!3d18.020455987702157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3124438e093493d9%3A0x6e2aded5d934706f!2z4Lqa4LuN4Lql4Lq04Lqq4Lqx4LqU4oCLIOC6iuC6teC7hOC6reC6l-C6tSDguojgurPguoHgurHgupTgupzgurngu4ngupTgur3guqc!5e0!3m2!1sth!2sla!4v1629959307588!5m2!1sth!2sla" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <h5 class="text-secondary text-uppercase mb-4">{{__('blog.about')}}</h5>
                    <p class="mb-4">ບໍລິສັດ ຊີໄອທີ ຈຳກັດຜູ້ດຽວ ດຳເນີນທຸລະກິດ ກ່ຽວກັບ ວຽກງານເຕັກໂນໂລຊີ ຂໍ້ມູນຂ່າວສານ (All IT Solutions)</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>ບ້ານຫ້ວຍຫົງ, ເມືອງຈັນທະບູລີ, ນະຄອນຫຼວງວຽງຈັນ</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@citgroup.la</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>(+856) 2058189996 - 2058189995</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</div>
