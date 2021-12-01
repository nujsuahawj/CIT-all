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
                              <!-- <th>image</th> -->
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
                            <!-- <td> -->
                              <!-- @if (!empty($ct->picture)) -->
                                    <!-- <img width="100px" src="{{ url('pictures/ct/'. $ct->picture) }}" /> -->
                                <!-- @else
                                    No featured image available!
                                @endif -->
                            <!-- </td> -->
                            <td width=5% style="text-align: center">{{$stt++}}</td>
                            <td style="text-align: center">{{$ct->customer_id}}</td>
                            <td style="text-align: center">{{$ct->product_id}}</td>
                              @php
                                $d1= time();
                                $d2= strtotime("2021-12-05");
                                $wai= $d2 - $d1;
                                $nas = floor($wai/(60*60*24));
                              @endphp
                            <td style="text-align: center">
                              {{$nas}} {{__('lang.days')}}
                            </td>
                            <td style="text-align: center">
                            @if($ct->status == 1)
                                <label class="text-success">active</label>
                              @else
                                <label class="text-danger">inactive</label>
                              @endif
                            </td>
                            <td style="text-align: center">

                                <button wire:click='edit({{$ct->id}})' class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></button>
                                <button wire:click='show({{$ct->id}})'  class="btn btn-default btn-sm"><i class="fas fa-eye"></i></button>
                                <button wire:click='delete({{$ct->id}})' onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ ຫຼື ບໍ?')"  class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></button>

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
                            <div class="form-group">
                              <label>{{__('lang.customername')}}</label>
                              <select class="form-control select2" wire:model='customer_id' id="customer_id" style="width: 100%;">
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
                              <div class="form-group">
                                <label>{{__('lang.productname')}}</label>
                                <select class="form-control select2" wire:model='product_id' id="product_id"  style="width: 100%;">  
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
                    $('.select2').select2()
                    $("input[data-bootstrap-switch]").each(function(){
                      $(this).bootstrapSwitch('state', $(this).prop('checked'));
                    })
                    $('.select2bs4').select2({
                      theme: 'bootstrap4'
                    })
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
                            <div class="form-group">
                              <label>{{__('lang.customername')}}</label>
                              <select class="form-control select2" wire:model="ed_customer_id" id="ed_customer_id" style="width: 100%;">                     
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
                            <div class="form-group">
                              <label>{{__('lang.productname')}}</label>
                              <select class="form-control select2" wire:model="ed_product_id" id="ed_product_id" style="width: 100%;">                     
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
                    $('.select2').select2()
                    $("input[data-bootstrap-switch]").each(function(){
                      $(this).bootstrapSwitch('state', $(this).prop('checked'));
                    })
                    $('.select2bs4').select2({
                      theme: 'bootstrap4'
                    })
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
                          <h3 class="profile-username text-center">{{__('lang.picture')}} </h3>
                          @if (!empty($vct->picture))
                                    <img wire:model="vpicture" src="{{ url('pictures/ct/'. $vct->picture) }}" alt="" width="100%" height="500" style="text-align: center;"/>
                                @else
                                    No featured image available!
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
                            <strong><i class="fas fa-location-arrow mr-1"></i> {{__('lang.customername')}}</strong>
                           
                            <p class="text-muted" wire:model="vcustomer_id">
                              Mr jack
                            </p>
                            
                            <hr>

                          <strong><i class="fas fa-location-arrow mr-1"></i> {{__('lang.productname')}}</strong>
                          <p wire:model="vproduct_id" class="text-muted">
                            camera
                          </p>
          
                          <hr>
          
                          <strong><i class="fas fa-clock mr-1"></i>{{__('lang.start_date')}} {{__('lang.tojack')}} {{__('lang.end_date')}}</strong>
                          <p wire:model="vstart_date" class="text-muted"> 11/11/2021 - 11/11/2022 </p>
          
                          <hr>
          
                          <strong><i class="far fa-file-alt mr-1"></i>{{__('lang.note')}}</strong>
                          <p wire:model="note" class="text-muted">good verry</p>

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