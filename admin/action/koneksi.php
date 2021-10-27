<?php 

	// $host = "localhost";
	// $uname = "root";
	// $pswd = "";
	// $nama_db = "posyandu_ta";
	$host = "sql6.freemysqlhosting.net";
	$uname = "sql6447093";
	$pswd = "X1hPDzHl6K";
	$nama_db = "sql6447093";

	$koneksi = mysql_connect($host,$uname,$pswd) or 
	die ("gagal terhubung ke server MYSQL");

	mysql_select_db($nama_db, $koneksi) or die("gagal memilih database!");
?>