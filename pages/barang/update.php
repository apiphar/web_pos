<?php 
include '../../config/connection.php';
$id_barang = $_POST['idbarang'];
$nama_barang = $_POST['nama_barang'];
$satuan = $_POST['satuan'];
  
if ($koneksi -> connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi -> connect_error;
    exit();
  }

  if (!$koneksi -> query("UPDATE tb_barang set nama_barang='$nama_barang', satuan='$satuan' WHERE id_barang='$id_barang'")) {
    echo("Error description: " . $koneksi -> error);
  }

  header("location:../../dashboard.php?page=barang");

?>