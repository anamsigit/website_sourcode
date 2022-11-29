<?php

$server="localhost";
$username="ruangkelas";
$pw="123paswot";
$db="database_ruangkelas";
$connect=mysqli_connect($server,$username,$pw);

	if($connect) {
		mysqli_select_db($connect, $db) or die("Database tidak ditemukan");
		echo "<b> </b>";
	}else {
		echo "<b> Koneksi Gagal </b>";
	}

?>