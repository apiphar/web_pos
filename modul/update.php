<?php 
include '../config/connection.php';
$user_id = $_POST['userid'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
  
if ($koneksi -> connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi -> connect_error;
    exit();
  }

  if (!$koneksi -> query("UPDATE User set user_name='$username', name='$nama', email='$email ',no_telp='$no_telp' WHERE user_id='$user_id'")) {
    echo("Error description: " . $koneksi -> error);
  }

  header("location:../dashboard.php?page=user");

?>