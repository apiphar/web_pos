<?php
ob_start();
if(isset($_GET['page'])) $page =  $_GET['page'];
else $page = "home";
?>

<?php
if($page=="dashboard") 
	include ("dashboard.php");
elseif($page=="user") 
	include ("modul/user.php");
elseif($page=="add") 
	include ("modul/add.php");
elseif($page=="edit") 
	include ("modul/edit.php");
	elseif($page=="delete") 
	include ("modul/delete.php");
elseif($page=="barang") 
	include ("pages/barang/barang.php");


?>
