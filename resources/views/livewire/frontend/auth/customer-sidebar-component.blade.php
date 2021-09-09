<div class="col-lg-3 col-md-4">
    <div class="bg-light p-4 mb-30">
        <a href="{{route('customer.dashboard')}}" class="form-control text-dark"><i class="fas fa-layer-group"></i> {{__('blog.customer_dashboard')}}</a>
        <a href="" class="form-control text-dark"><i class="fa fa-folder-open"></i> {{__('blog.history')}}</a>
        <a href="{{route('customer.profile', auth()->user()->id)}}" class="form-control text-dark"><i class="fa fa-id-badge"></i> {{__('blog.profile')}}</a>
        <a href="{{route('customer_sign_out')}}" class="form-control text-dark"><i class="fa fa-unlock"></i> {{__('blog.sign_out')}}</a>                
    </div>
</div>
