<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA USERNAME</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data User</li>
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
              <a href="?page=add">
                <button type="button" class="btn btn-primary">ADD NEW DATA</button>
              </a> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">                                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Handphone</th>
                    <th>Is Active</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                      include 'config/connection.php';
                      $no = 1;
                      $data = mysqli_query($koneksi,"select user_id, user_name, name, email, no_telp, is_active from user where is_active=1");
                      while($d = mysqli_fetch_array($data)){
                      ?>
                              
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $d['user_name']; ?></td>
                          <td><?php echo $d['name']; ?></td>
                          <td><?php echo $d['email']; ?></td>
                          <td><?php echo $d['no_telp']; ?></td>
                          <td><?php echo $d['is_active']; ?></td>
                          <td>                            
                            <a href="?page=edit&id=<?php echo $d['user_id']; ?>">EDIT</a>
                            <a href="?page=delete&id=<?php echo $d['user_id']; ?>">HAPUS</a>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Handphone</th>
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