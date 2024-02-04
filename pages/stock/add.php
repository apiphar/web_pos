<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA STOCK</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Stock</a></li>
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
                <h3 class="card-title">Add Stock</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="pages/stock/save.php" method="post" id="quickForm">
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleSelectBorder">Nama Barang</label>
                  <select class="custom-select form-control-border" name="id_barang" id="exampleSelectBorder">
                    <?php
                      include 'config/connection.php';
                      $no = 1;
                      $data = mysqli_query($koneksi,"select id_barang, nama_barang from tb_barang where is_active=1");
                      while($d = mysqli_fetch_array($data)){
                    ?>
                      <option value="<?=$d['id_barang']?>"><?=  $d['nama_barang']?></option> 
                    <?php
                      }
                    ?>                 
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Stock</label>
                    <input type="text" name="jml_stock" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Stock">
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