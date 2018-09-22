<?php

session_start();
if(isset($_POST['submit'])){
	$nama=$_POST['nama'];
	$akses=$_POST['akses'];
	$iduser="";
	$_SESSION['nama']=$nama;
	$_SESSION['akses']=$akses;
	$_SESSION['iduser']=$iduser;
	print_r($_SESSION);
}
include 'form.html';
?>
<body>

<br>
<a href="http://localhost/hal2.php">hal 2 </a>
<br>
<a href="http://localhost/hal3.php">hal 3</a>