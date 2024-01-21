<?php
ob_start();
if(isset($_GET['page'])) $page =  $_GET['page'];
else $page = "home";
?>

<?php
if($page=="dashboard") 
	include ("dashboard.php");

//user
elseif($page=="user") 
	include ("modul/user.php");
elseif($page=="add") 
	include ("modul/add.php");
elseif($page=="edit") 
	include ("modul/edit.php");
elseif($page=="delete") 
	include ("modul/delete.php");

//barang
elseif($page=="barang") 
	include ("pages/barang/barang.php");
elseif($page=="add_barang")
	include ("pages/barang/add.php");
elseif($page=="edit_barang")
	include ("pages/barang/edit.php");
elseif($page=="delete_barang")
	include ("pages/barang/delete.php");


//stock
elseif($page=="stock") 
	include ("pages/stock/stock.php");
elseif($page=="add_stock")
	include ("pages/stock/add.php");
elseif($page=="edit_stock") 
	include ("pages/stock/edit.php");
elseif($page=="delete_stock") 
	include ("pages/stock/delete.php");

?>
