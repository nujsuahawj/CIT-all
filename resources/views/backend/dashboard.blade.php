@extends('layouts.app.app')
@section('content')

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{__('lang.dashboard')}}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
            <li class="breadcrumb-item active">{{__('lang.dashboard')}}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      
      <div class="row">

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">{{__('lang.employee')}}</span>
              <span class="info-box-number">
                {{$all_emp_count}}
                <small>{{__('lang.peple')}}</small>
              </span>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-female"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">{{__('lang.woman')}}</span>
              <span class="info-box-number">{{$woman_emp_count}}<small> {{__('lang.peple')}}</small></span>
            </div>
          </div>
        </div>
      
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-shopping-cart"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">{{__('lang.products')}}</span>
              <span class="info-box-number">{{$product_count}}<small> {{__('lang.items')}}</small></span>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">{{__('lang.user')}}</span>
              <span class="info-box-number">{{$user_count}}<small> {{__('lang.user')}}</small></span>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">{{__('lang.neworder')}}</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                  <tr>
                    <th>{{__('lang.orderid')}}</th>
                    <th>{{__('lang.name')}}</th>
                    <th>{{__('lang.phone')}}</th>
                    <th>{{__('lang.total')}}</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>OR0001</td>
                    <td>ຈັນທະວິໄລ ບຸນທະລາ</td>
                    <td><span class="badge badge-success">02058189995</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">9,000,000</div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer clearfix">
              <!--<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">{{__('lang.viewall')}}</a>-->
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">{{__('lang.viewall')}}</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="info-box mb-3 bg-info">
            <span class="info-box-icon"><i class="fas fa-tag"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">{{__('lang.export_doc')}}</span>
              <span class="info-box-number">{{$ex_count}}</span>
            </div>
          </div>

          <div class="info-box mb-3 bg-success">
            <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">{{__('lang.import_doc')}}</span>
              <span class="info-box-number">{{$im_count}}</span>
            </div>
          </div>
          <div class="info-box mb-3 bg-warning">
            <span class="info-box-icon"><i class="far fa-comment"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">{{__('lang.local_doc')}}</span>
              <span class="info-box-number">{{$local_count}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection