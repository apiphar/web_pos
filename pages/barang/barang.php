<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA BARANG</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">            
            <div class="card">
              <div class="card-header">                
              <a href="?page=add_barang">
                <button type="button" class="btn btn-primary">ADD NEW DATA</button>
              </a> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">                                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Is Active</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                      include 'config/connection.php';
                      $no = 1;
                      $data = mysqli_query($koneksi,"select id_barang, nama_barang, satuan, is_active from tb_barang where is_active=1");
                      while($d = mysqli_fetch_array($data)){
                      ?>
                              
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $d['nama_barang']; ?></td>
                          <td><?php echo $d['satuan']; ?></td>
                          <td><?php echo $d['is_active']; ?></td>
                          <td>
                            <a href="?page=edit_barang&id=<?php echo $d['id_barang']; ?>">EDIT</a>
                            <a href="?page=delete_barang&id=<?php echo $d['id_barang']; ?>">HAPUS</a>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Is Active</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>