<?php 
include '../config/connection.php';
$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
  
if ($koneksi -> connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi -> connect_error;
    exit();
  }

  if (!$koneksi -> query("INSERT INTO user (user_name,name,email,no_telp,is_active) VALUES('$username','$nama','$email','$no_telp',1)")) {
    echo("Error description: " . $koneksi -> error);
  }

  header("location:../dashboard.php?page=user");

?>