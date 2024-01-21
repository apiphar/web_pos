<?php 
ob_start();
include 'config/connection.php';
$user_id = $_GET['id'];

  
if ($koneksi -> connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi -> connect_error;
    exit();
  }

  if (!$koneksi -> query("UPADTE User set is_active = 0 WHERE user_id='$user_id'")) {
    echo("Error description: " . $koneksi -> error);
  }

  header("location:dashboard.php?page=user");

?>