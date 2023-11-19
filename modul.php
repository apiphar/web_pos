<?php

if(isset($_GET['page'])) $page =  $_GET['page'];
else $page = "home";
?>

<?php
if($page=="dashboard") include ("dashboard.php");

elseif($page=="user") 
	include ("modul/user.php");
elseif($page=="add") 
	include ("modul/add.php");
elseif($page=="grafik") 
	include ("modul/grafik.php");
elseif($page=="calon") 
	include ("modul/calon.php");
elseif($page=="calonproses") 
	include ("modul/calonproses.php");
elseif($page=="daftar") 
	include ("modul/daftar.php");
elseif($page=="daftarproses") 
	include ("modul/daftarproses.php");
elseif($page=="login") 
	include ("modul/login.php");
elseif($page=="loginproses") 
	include ("modul/loginproses.php");


?>
