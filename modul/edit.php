<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA USER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data User</a></li>
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
                <h3 class="card-title">Edit User</h3>
              </div>

                <?php
                    include 'config/connection.php';
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi,"select user_id, user_name, name, email, no_telp, is_active from user where user_id='$id'");
                    while($d = mysqli_fetch_array($data)){
                    
                ?>

              <form action="modul/save.php" method="post" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="hidden" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username" value="<?php echo $d['user_id']; ?>">
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username" value="<?php echo $d['user_name']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Nama" value="<?php echo $d['name']; ?>">
                  </div>     
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email" value="<?php echo $d['email']; ?>">
                  </div>   
                  <div class="form-group">
                    <label for="exampleInputPassword1">No HP</label>
                    <input type="text" name="no_telp" class="form-control" id="exampleInputPassword1" placeholder="No HP" value="<?php echo $d['no_telp']; ?>">
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