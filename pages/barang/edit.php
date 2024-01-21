<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA BARANG</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Barang</a></li>
              <li class="breadcrumb-item active">Edit</li>
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
                <h3 class="card-title">Edit Barang</h3>
              </div>

                <?php
                    include 'config/connection.php';
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi,"select id_barang,nama_barang,satuan, is_active from tb_barang where id_barang='$id'");
                    while($d = mysqli_fetch_array($data)){
                    
                ?>

              <form action="pages/barang/update.php" method="post" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="hidden" name="idbarang" class="form-control" id="nama_barang" placeholder="Nama Barang" value="<?php echo $d['id_barang']; ?>">
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Nama Barang" value="<?php echo $d['nama_barang']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" name="satuan" class="form-control" id="satuan" placeholder="Satuan" value="<?php echo $d['satuan']; ?>">
                  </div>   
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="?page=dashboard"><button type="cancel" name="submitted" class="btn btn-danger" value="cancel">Cancel</button></a>
                              
                </div>
              </form>

                <?php
                    }
                ?>
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