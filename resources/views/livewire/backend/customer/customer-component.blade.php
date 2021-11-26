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
          <div class="row">

            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <a href="{{route('admin.createcustomer')}}" class="btn btn-primary btn-sm"><i class="fas fa-add"></i>add</a>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr style="text-align: center">
                        <th>no</th>
                        <th>customer id</th>
                        <th>product id</th>
                        <th>start date</th>
                        <th>end date</th>
                        <th>
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
                      <td>11/11/2021</td>
                      <td>20/5/2021</td>
                      <td style="text-align: center">
                       
                          <label class="text-success">active</label>
                        
                          <!-- <label class="text-danger">inactive</label> -->
                       
                      </td>
                      <td>
                        <form action="#" method="POST">
                          

                          <a href="{{route('admin.editcustomer')}}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                          <a href="{{route('admin.detailcustomer')}}" class="btn btn-default btn-sm"><i class="fas fa-eye"></i></a>
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ ຫຼື ບໍ?')"><i class="fas fa-trash"></i></button>

                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td width=5% style="text-align: center">2</td>
                      <td>
                          <a href="#">b</a>
                      </td>
                      <td>camera</td>
                      <td>11/11/2021</td>
                      <td>20/5/2021</td>
                      <td style="text-align: center">
                       
                          <label class="text-success">active</label>
                        
                          <!-- <label class="text-danger">inactive</label> -->
                       
                      </td>
                      <td>
                        <form action="#" method="POST">
                          

                          <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                          <a href="#" class="btn btn-default btn-sm"><i class="fas fa-eye"></i></a>
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ ຫຼື ບໍ?')"><i class="fas fa-trash"></i></button>

                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td width=5% style="text-align: center">3</td>
                      <td>
                          <a href="#">c</a>
                      </td>
                      <td>camera</td>
                      <td>11/11/2021</td>
                      <td>20/5/2021</td>
                      <td style="text-align: center">
                       
                          <!-- <label class="text-success">active</label> -->
                        
                          <label class="text-danger">inactive</label>
                       
                      </td>
                      <td>
                        <form action="#" method="POST">
                          

                          <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                          <a href="#" class="btn btn-default btn-sm"><i class="fas fa-eye"></i></a>
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ ຫຼື ບໍ?')"><i class="fas fa-trash"></i></button>

                        </form>
                      </td>
                    </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
</section>
