<?php 
include '../config/connection.php';
$nama_barang = $_POST['nama_barang'];
$stock_barang = $_POST['stock_barang'];
$satuan = $_POST['satuan'];
  
if ($koneksi -> connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi -> connect_error;
    exit();
  }

  if (!$koneksi -> query("INSERT INTO tb_barang (nama_barang,stock_barang,satuan,is_active) VALUES('$nama_barang','$stocke_barang','$satuan',1)")) {
    echo("Error description: " . $koneksi -> error);
  }

  header("location:../dashboard.php?page=tb_barang");

?>