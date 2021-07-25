@extends('layouts.app.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{__('lang.service')}}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">{{__('lang.home')}}</a></li>
            <li class="breadcrumb-item active">{{__('lang.service')}}</li>
          </ol>
        </div>
      </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">{{__('lang.edit')}}</h4>
            </div>

            <form method="POST" action="{{route('service.update', $service->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="image">{{__('lang.image')}}</label>
                        <img src="{{asset($service->image)}}" alt="" height="100">
                        <input type="file" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">
                        @if ($errors->has('image'))
                          <span class="invalid-feedback"> <strong>{{ $errors->first('image') }}</strong></span>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">{{__('lang.servicename')}} (Lao)</label>
                        <input type="text" class="form-control {{ $errors->has('name_la') ? ' is-invalid' : '' }}" name="name_la" value="{{$service->name_la}}" placeholder="{{__('lang.servicename')}}">
                        @if ($errors->has('name_la'))
                          <span class="invalid-feedback"> <strong>{{ $errors->first('name_la') }}</strong></span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">{{__('lang.servicename')}} (English)</label>
                        <input type="text" class="form-control {{ $errors->has('name_en') ? ' is-invalid' : '' }}" name="name_en" value="{{$service->name_en}}" placeholder="{{__('lang.servicename')}}">
                        @if ($errors->has('name_en'))
                          <span class="invalid-feedback"> <strong>{{ $errors->first('name_en') }}</strong></span>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="des_la">{{__('lang.des')}} (Lao)</label>
                        <textarea type="text" class="form-control summernote {{ $errors->has('des_la') ? ' is-invalid' : '' }}" name="des_la" placeholder="{{__('lang.des')}}"> {{$service->des_la}}</textarea>
                        @if ($errors->has('des_la'))
                          <span class="invalid-feedback"> <strong>{{ $errors->first('des_la') }}</strong></span>
                        @endif
                    </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="des_en">{{__('lang.des')}} (English)</label>
                        <textarea type="text" class="form-control summernote {{ $errors->has('des_en') ? ' is-invalid' : '' }}" name="des_en" placeholder="{{__('lang.des')}}"> {{$service->des_en}} </textarea>
                        @if ($errors->has('des_en'))
                          <span class="invalid-feedback"> <strong>{{ $errors->first('des_en') }}</strong></span>
                        @endif
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>{{__('lang.status')}}</label>
                        <select class="form-control" name="status">
                            <option value="1" {{$service->status == 1 ? 'selected' : ''}}>{{ __('blog.active') }}</option>
                            <option value="0" {{$service->status == 0 ? 'selected' : ''}}>{{ __('blog.inactive') }}</option>
                        </select>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{__('lang.save')}}</button>
                    <a class="btn btn-warning" href="{{route('service.index')}}" >{{__('lang.back')}}</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
