<div>
<!-- <div class="container-fluid"> -->
  
      <div class="content-header">
        <div class="container-fluid"> 
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>{{__('lang.customer')}}</h1>
              
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">{{__('lang.home')}}</a></li>
                <li class="breadcrumb-item active">{{__('lang.customer')}}</li>
                </ol>
            </div>
          </div>
        </div>
      </div>
      
      @if ($selectData == true)
      <!-- show all data -->
        <div>
            <div class="conten">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <button wire:click='showFrom' class="btn btn-primary">{{__('lang.add')}}</button>
                      </div>
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr style="text-align: center">
                              <th>{{__('lang.no')}}</th>
                              <th>{{__('lang.customername')}}</th>
                              <th>{{__('lang.productname')}}</th>
                              <th>{{__('lang.wait')}}</th>
                              <th>{{__('lang.status')}}</th>
                              <th>{{__('lang.action')}}</th>
                          </tr>
                          </thead>
                          <tbody>
                          @php
                            $stt = 1; 
                          @endphp

                          @forelse($customer_transition as $ct)
                          <tr>
                            <td width=5% style="text-align: center">{{$stt++}}</td>
                            <td style="text-align: center">{{$ct->customer_id}}</td>
                            <td style="text-align: center">{{$ct->product_id}}</td>
                              @php
                                $d1= time();
                                $d2= strtotime($ct->end_date);
                                $wai= $d2 - $d1;
                                $nas = floor($wai/86400);
                              @endphp
                            <td style="text-align: center">
                            @if ($nas >= 1)
                             {{$nas}} {{__('lang.days')}}
                            @else
                            {{__('lang.close_contract')}}
                            @endif
                              
                            </td>
                            <td style="text-align: center">
                            @if($ct->status == 1)
                                <label class="text-success">{{__('lang.active')}}</label>
                              @else
                                <label class="text-danger">{{__('lang.inactive')}}</label>
                              @endif
                            </td>
                            <td style="text-align: center">

                                <button wire:click='edit({{$ct->id}})' class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></button>
                                <button wire:click='show({{$ct->id}})'  class="btn btn-default btn-sm"><i class="fas fa-eye"></i></button>
                                <button onclick="confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ ຫຼື ບໍ?') || event.stopImmediatePropagation()" wire:click='delete({{$ct->id}})'  class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></button>

                            </td>
                          </tr>
                          @empty
                          <h1>Record not found</h1>
                          @endforelse
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      @endif

      @if ($createData == true)
      <!-- form create by ajck -->
      <div>
        <div class="content">
          <div class="container-fluid">
            <div class="col-lg-12">
              <div class="card card-default">
                <div class="card-header">
                        <h3 class="card-title"><h4 class="card-title">{{__('lang.add')}}</h4></h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                </div>
                <form action="" wire:submit.prevent='create' enctype="multipart/form-data"> 
                  <div class="card-body">
                            
                    <div class="row">
                              
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group" wire:ignore>
                              <label>{{__('lang.customername')}}</label>
                              <select class="form-control" wire:model='customer_id' id="customer" style="width: 100%;">
                              <option value="">{{__('lang.select_customer')}}</option>                     
                              @forelse($customers as $cid)        
                              <option value="{{$cid->name}}">{{$cid->name}}</option>
                                @empty
                              <h1>Record not found</h1>
                              @endforelse
                              </select>
                              <span class="text-danger"> @error('customer_id'){{$message}}  @enderror  </span>
                            </div>
                          </div>
                          
                            <div class="col-md-6">
                              <div class="form-group" wire:ignore>
                                <label>{{__('lang.productname')}}</label>
                                <select class="form-control select2" wire:model='product_id' id="product"  style="width: 100%;">  
                                <option value="">{{__('lang.select_product')}}</option>                   
                                @forelse($products as $cid)        
                                <option value="{{$cid->name}}">{{$cid->name}}</option>
                                  @empty
                                <h1>Record not found</h1>
                                @endforelse
                                </select>
                                <span class="text-danger"> @error('product_id'){{$message}}  @enderror  </span>
                              </div>
                            </div>
                            
                        </div>

                                
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="note">{{__('lang.note')}}</label>
                                <input type="text" class="form-control" wire:model='note'  placeholder="{{__('lang.note')}}">
                                <span class="text-danger"> @error('note'){{$message}}  @enderror  </span>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="picture">{{__('lang.picture')}}</label>
                                  <input type="file" class="form-control" wire:model='picture'  >
                                  <span class="text-danger"> @error('picture'){{$message}}  @enderror  </span>
                                </div>
                            </div>
                        </div>

                      </div>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="start_date">{{__('lang.start_date')}}</label>
                                <input type="date" class="form-control" wire:model='start_date'  placeholder="start date">
                                <span class="text-danger"> @error('start_date'){{$message}}  @enderror  </span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="end_date">{{__('lang.end_date')}}</label>
                                <input type="date" class="form-control" wire:model='end_date'  placeholder="end date">
                                <span class="text-danger"> @error('end_date'){{$message}}  @enderror  </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">{{__('lang.save')}}</button>
                      <button wire:click='back()' class="btn btn-warning"  >{{__('lang.back')}}</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        $(document).ready(function() {
        $('#customer').select2();
        $('#customer').on('change', function(e) {
          var data = $('#customer').select2("val");
          @this.set('customer_id',data);
        });

        $('#product').select2();
        $('#product').on('change', function(e) {
          var data = $('#product').select2("val");
          @this.set('product_id',data);
        });
      });
      </script>
      @endif

      @if ($updateData == true)
      <!-- form update by jack -->
      <div>
        <div class="content">
          <div class="container-fluid">
            <div class="col-lg-12">
              <div class="card card-default">
                <div class="card-header">
                        <h3 class="card-title"><h4 class="card-title">{{__('lang.add')}}</h4></h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                </div>
                <form action="" wire:submit.prevent='update({{$ids}})' enctype="multipart/form-data"> 
                  <div class="card-body">
                            
                    <div class="row">
                              
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group" wire:ignore>
                              <label>{{__('lang.customername')}}</label>
                              <select class="form-control select2" wire:model="ed_customer_id" id="customer" style="width: 100%;">                     
                                @forelse($customers as $cid)        
                                <option value="{{$cid->name}}">{{$cid->name}}</option>
                                  @empty
                                <h1>Record not found</h1>
                                @endforelse
                              </select>
                              @error ('ed_customer_id') <span style="color: red;">{{$message}}</span>@enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group" wire:ignore>
                              <label>{{__('lang.productname')}}</label>
                              <select class="form-control select2" wire:model="ed_product_id" id="product" style="width: 100%;">                     
                              @forelse($products as $cid)        
                                <option value="{{$cid->name}}">{{$cid->name}}</option>
                                  @empty
                                <h1>Record not found</h1>
                                @endforelse
                              </select>
                              @error ('ed_product_id') <span style="color: red;">{{$message}}</span>@enderror
                            </div>
                          </div>
                        </div>

                                
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="note">{{__('lang.note')}}</label>
                                <input type="text" class="form-control" wire:model="ed_note" name="ed_note" placeholder="note">
                                  @error ('ed_note') <span style="color: red;">{{$message}}</span>@enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="picture">{{__('lang.picture')}}</label>
                                    <input type="file" class="form-control" wire:model="ed_picture" name="ed_picture" id="ed_picture">
                                    <span class="text-danger"> @error('ed_picture'){{$message}}  @enderror  </span>
                                </div>
                            </div>
                        </div>

                      </div>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="start_date">{{__('lang.start_date')}}</label>
                                <input type="date" class="form-control" wire:model="ed_start_date" name="ed_start_date" placeholder="start date">
                                @error ('ed_start_date') <span style="color: red;">{{$message}}</span>@enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="end_date">{{__('lang.end_date')}}</label>
                                <input type="date" class="form-control" wire:model="ed_end_date" name="ed_end_date" placeholder="end date">
                                @error ('ed_end_date') <span style="color: red;">{{$message}}</span>@enderror
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="file">{{__('lang.status')}}</label>
                              <select wire:model="ed_status" name="ed_status" class="form-control">
                                <option value="1" >{{__('lang.active')}}</option>
                                <option value="0" >{{__('lang.inactive')}}</option>
                              </select>
                              @error ('ed_status') <span style="color: red;">{{$message}}</span>@enderror
                          </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">{{__('lang.save')}}</button>
                      <button wire:click='back()' class="btn btn-warning"  >{{__('lang.back')}}</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        $(document).ready(function() {
        $('#customer').select2();
        $('#customer').on('change', function(e) {
          var data = $('#customer').select2("val");
          @this.set('ed_customer_id',data);
        });

        $('#product').select2();
        $('#product').on('change', function(e) {
          var data = $('#product').select2("val");
          @this.set('ed_product_id',data);
        });
      });
      </script>
      @endif

      @if ($showData == true)
      <!-- show detias -->
        <div>
          <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4">
                  <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                          <h3 class="profile-username text-center">{{__('lang.picture_contract')}} </h3>
                          @if (!empty($vpicture))
                                    <a href="{{url('pictures/ct/'.$vpicture)}}" target="_blank" class="btn btn-primary"><b>{{__('lang.viewfile')}}</b></a>
                                @else
                                    No featured file available!
                                @endif
                          
                        </div>
                        <!-- /.card-body -->
                  </div>
                </div>
                <div class="col-md-8">
                      <!-- About Me Box -->
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">{{__('lang.des')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-user"></i> {{__('lang.customername')}}</strong>
                           
                            <p class="text-muted" wire:model="vcustomer_id">
                              {{$vcustomer_id}}
                            </p>
                            
                            <hr>

                          <strong><i class="fab fa-product-hunt"></i> {{__('lang.productname')}}</strong>
                          <p class="text-muted">
                              {{$vproduct_id}}
                          </p>
          
                          <hr>
          
                          <strong><i class="fas fa-clock mr-1"></i>{{__('lang.start_date')}} {{__('lang.tojack')}} {{__('lang.end_date')}}</strong>
                          <p wire:model="vstart_date" class="text-muted"> {{date('d/m/Y',strtotime($vstart_date))}} - {{date('d/m/Y',strtotime($vend_date))}} </p>
                            
                          <hr>
          
                          <strong><i class="far fa-file-alt mr-1"></i>{{__('lang.note')}}</strong>
                          <p wire:model="note" class="text-muted">{{$vnote}}</p>

                          <hr>
                          <a href="{{route('admin.customer')}}" class="btn btn-warning"><b>{{__('lang.back')}}</b></a>

                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                </div>
              </div>
            </div>
          </div>
        </div>
      @endif
<!-- </div> -->
        
</div>