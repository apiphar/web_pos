<?php 
include '../../config/connection.php';
$id_barang = $_POST['id_barang'];
  
if ($koneksi -> connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi -> connect_error;
    exit();
  }

  if (!$koneksi -> query("INSERT INTO tb_stock_new (nama_barang,jml_stock) VALUES('$nama_barang','$jml_stock')")) {
    echo("Error description: " . $koneksi -> error);
  }

  header("location:../../dashboard.php?page=stock");

?>