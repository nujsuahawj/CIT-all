
<div class="container-fluid">
  <div class="content-header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>customer transibtion</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">home</a></li>
          <li class="breadcrumb-item active">customer</li>
          </ol>
      </div>
    </div>
  </div>
  
  @if ($selectData == true)
  <!-- show all data -->
          <div class="row">

            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <button wire:click='showFrom' class="btn btn-primary">add</button>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr style="text-align: center">
                        <th>no</th>
                        <th>customer id</th>
                        <th>product id</th>
                        <th>del</th>
                        <th>satus</th>
                        <th>action</th>
                     </tr>
                    </thead>
                    <tbody>

                    <tr>
                      <td width=5% style="text-align: center">1</td>
                      <td>
                          <a href="#">a</a>
                      </td>
                      <td>camera</td>
                      <td>29</td>
                      <td style="text-align: center">
                       
                          <label class="text-success">active</label>
                       
                      </td>
                      <td>
                        <form action="#" method="POST">

                          <a href="" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                          <a href="" class="btn btn-default btn-sm"><i class="fas fa-eye"></i></a>
                          <button type="submit" class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></button>

                        </form>
                      </td>
                    </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
  @endif

  @if ($createData == true)
  <!-- form create by ajck -->
  <div class="content">
    <div class="col-lg-12">
      <div class="card card-default">
        <form action="" wire:submit.prevent='create' enctype="multipart/form-data"> 
          <div class="card-body">
                    
            <div class="row">
                      
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>customer id</label>
                      <select class="form-control select2" wire:model='customer_id' name="customer_id" style="width: 100%;">                     
                                
                        <option value="1">select data</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                                
                      </select>
                      <span class="text-danger"> @error('customer_id'){{$message}}  @enderror  </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>product id</label>
                      <select class="form-control select2" wire:model='product_id' name="product_id" style="width: 100%;">                     
                                
                        <option value="a">select data</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                      </select>
                      <span class="text-danger"> @error('product_id'){{$message}}  @enderror  </span>
                    </div>
                  </div>
                </div>

                        
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="note">note</label>
                        <input type="text" class="form-control" wire:model='note' name="note" placeholder="note">
                        <span class="text-danger"> @error('note'){{$message}}  @enderror  </span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="picture">picture</label>
                          <input type="file" class="form-control" wire:model='picture' name="picture" id="picture">
                          <span class="text-danger"> @error('picture'){{$message}}  @enderror  </span>
                        </div>
                    </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="start_date">start date</label>
                        <input type="date" class="form-control" wire:model='start_date' name="start_date" placeholder="start date">
                        <span class="text-danger"> @error('start_date'){{$message}}  @enderror  </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="end_date">end date</label>
                        <input type="date" class="form-control" wire:model='end_date' name="end_date" placeholder="end date">
                        <span class="text-danger"> @error('end_date'){{$message}}  @enderror  </span>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">save</button>
              <a class="btn btn-warning" href="{{route('admin.customer')}}" >backup</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endif

  @if ($updateData == true)
  <!-- form update by jack -->
  <div class="content">
    <div class="col-lg-12">
      <div class="card card-default">
        <form action="" enctype="multipart/form-data"> 
          <div class="card-body">
                    
            <div class="row">
                      
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>customer id</label>
                      <select class="form-control select2" name="customer_id" style="width: 100%;">                     
                                
                        <option value="1">select data</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                                
                      </select>
                      @error ('customer_id') <span style="color: red;">{{$message}}</span>@enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>product id</label>
                      <select class="form-control select2" name="product_id" style="width: 100%;">                     
                                
                        <option value="a">select data</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                      </select>
                      @error ('product_id') <span style="color: red;">{{$message}}</span>@enderror
                    </div>
                  </div>
                </div>

                        
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="note">note</label>
                        <input type="text" class="form-control" name="note" placeholder="note">
                          @error ('note') <span style="color: red;">{{$message}}</span>@enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="picture">picture</label>
                          <input type="file" class="form-control" name="picture" id="picture">
                          <!-- @error ('picture') <span style="color: red;">{{$message}}</span>@enderror -->
                        </div>
                    </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="start_date">start date</label>
                        <input type="date" class="form-control" name="start_date" placeholder="start date">
                        @error ('start_date') <span style="color: red;">{{$message}}</span>@enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="end_date">end date</label>
                        <input type="date" class="form-control" name="end_date" placeholder="end date">
                        @error ('end_date') <span style="color: red;">{{$message}}</span>@enderror
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                  <div class="form-group">
                      <label for="file">status</label>
                      <select name="status" class="form-control">
                        <option value="1" >active</option>
                        <option value="0" >inactive</option>
                      </select>
                  </div>
              </div>
            </div>
            <div class="card-footer">
              <button wire:click="store()" class="btn btn-primary">save</button>
              <a class="btn btn-warning" href="#" >backup</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endif

</div>
