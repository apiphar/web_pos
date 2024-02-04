<?php 
include '../../config/connection.php';
$id_barang = $_POST['id_barang'];
$jml_stock = $_POST['jml_stock'];
  
if ($koneksi -> connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi -> connect_error;
    exit();
  }

  if (!$koneksi -> query("INSERT INTO tb_stock_new (id_barang, jml_stock) VALUES('$id_barang', '$jml_stock')")) {
    echo("Error description: " . $koneksi -> error);
  }

  header("location:../../dashboard.php?page=stock");

?>