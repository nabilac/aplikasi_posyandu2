 <?php
 include '../../action/koneksi.php';
 ?>
 
<?php
$nama   = $_POST['nama'];
$username   = $_POST['username'];
$password  = $_POST['password'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat  = $_POST['alamat'];
$no_telp  = $_POST['no_telp'];
$hak_akses  = "1";

$s=mysql_query("INSERT INTO admin VALUES('', '$nama','$username','$password','$jenis_kelamin','$alamat','$no_telp', '$hak_akses')") or die(mysql_error());{
 ?>
 <script>
  alert("Data Admin Berhasil Disimpan");
  window.location.href='../data_admin.php';

 </script>
 <?php
}

 ?>
