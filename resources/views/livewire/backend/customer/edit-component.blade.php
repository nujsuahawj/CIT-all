<section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>customer</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">home</a></li>
                <li class="breadcrumb-item active">customer</li>
              </ol>
            </div>
          </div>
        </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="col-lg-12">
          <div class="card card-default">

            <div class="card-header">
              <h3 class="card-title"><h4 class="card-title">add news</h4></h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>

            
              <!-- <div class="card-body">
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fas fa-ban"> error</i></br>
                 
                </div>
              </div> -->
           
            
            
            <form method="POST" action="#" enctype="multipart/form-data">
               
                <div class="card-body">
                  
                  <div class="row">
                    
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>customer id</label>
                            <select class="form-control select2" name="pos_id" style="width: 100%;">                     
                              
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                              
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>product id</label>
                            <select class="form-control select2" name="dpart_id" style="width: 100%;">                     
                              
                                  <option value="a">a</option>
                                  <option value="b">b</option>
                                  <option value="c">c</option>
                              
                            </select>
                          </div>
                        </div>
                      </div>

                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="note">note</label>
                            <input type="text" class="form-control" name="note" placeholder="note">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="picture">picture</label>
                            <input type="file" class="form-control" name="picture" id="picture">
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
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="end_date">end date</label>
                                <input type="date" class="form-control" name="end_date" placeholder="start date">
                            </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="file">status</label>
                        <select name="status" class="form-control">
                            <option value="1">active</option>
                            <option value="0">inactive</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">save</button>
                    <a class="btn btn-warning" href="{{route('admin.customer')}}" >backup</a>
                </div>
            </form>
            
          </div>

      </div>
    </div>
  </section>