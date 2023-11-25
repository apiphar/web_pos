<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA BARANG</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Barang</a></li>
              <li class="breadcrumb-item active">Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="pages/save.php" method="post" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">nama_barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" placeholder="nama_barang">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">stock_barang</label>
                    <input type="text" name="stock_barang" class="form-control" id="exampleInputPassword1" placeholder="stock_barang">
                  </div>     
                  <div class="form-group">
                    <label for="exampleInputPassword1">satuan</label>
                    <input type="text" name="satuan" class="form-control" id="exampleInputPassword1" placeholder="satuan">
                  </div>   
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="?page=dashboard"><button class="btn btn-danger">Cancel</button></a>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
</section>