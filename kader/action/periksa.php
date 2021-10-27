<?php
session_start();
#**************** koneksi ke mysql *****************#
include "koneksi.php";
#***************** akhir koneksi ******************#
#jika ditekan tombol login
if(isset($_POST['login'])) { 
 $username = $_POST['username'];
 $password = $_POST['password'];

 // cek username yang diketik oleh user sama tidak dengan username yang ada didatabase
 $sql_admin= mysql_query("SELECT * FROM admin WHERE username='$username' 
 && password='$password'");
 $hak_akses_admin = mysql_fetch_array($sql_admin);

 $sql_kader= mysql_query("SELECT * FROM kader WHERE username='$username' 
 && password='$password'");
 $hak_akses_kader = mysql_fetch_array($sql_kader);

	if($hak_akses_admin['hak_akses'] == 1) {
		// login benar //
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = '1';
		?><script language="JavaScript">
		alert('Anda berhasil login');
		document.location='../admin/beranda/beranda.php'</script><?php
	} elseif($hak_akses_kader['hak_akses'] == 2) {
		// login benar //
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = '2';
		?><script language="JavaScript">
		alert('Anda berhasil login');
		document.location='../kader/beranda/beranda.php'</script><?php
	} else {
		// jika login salah //
		?><script language="JavaScript">
			alert('Username atau password Anda salah. Silahkan Login Kembali'); 
			document.location='index.php'</script><?php
	}
}
?> 