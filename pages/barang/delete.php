<?php
ob_start();
include 'config/connection.php';
$id_barang = $_GET['id'];

  
if ($koneksi -> connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi -> connect_error;
    exit();
  }

  if (!$koneksi -> query("UPDATE tb_barang set is_active = 0 WHERE id_barang='$id_barang'")); {
    //echo("Error description: " . $koneksi -> error);
  }


  exit(header("location:dashboard.php?page=barang"));

?>