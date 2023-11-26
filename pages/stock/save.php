<?php 
include '../../config/connection.php';
$jml_stock = $_POST['jml_stock'];
$satuan = $_POST['satuan'];
  
if ($koneksi -> connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi -> connect_error;
    exit();
  }

  if (!$koneksi -> query("INSERT INTO tb_stock (jml_stock,satuan) VALUES('$jml_stock','$satuan')")) {
    echo("Error description: " . $koneksi -> error);
  }

  header("location:../../dashboard.php?page=stock");

?>