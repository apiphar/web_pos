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
              <form action="pages/barang/save.php" method="post" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" name="Nama Barang" class="form-control" id="exampleInputEmail1" placeholder="Nama Barang">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stok Barang</label>
                    <input type="text" name="Stok Barang" class="form-control" id="exampleInputPassword1" placeholder="Stok Barang">
                  </div>     
                  <div class="form-group">
                    <label for="exampleInputPassword1">Satuan</label>
                    <input type="text" name="Satuan" class="form-control" id="exampleInputPassword1" placeholder="Satuan">
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