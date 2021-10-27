 <?php
 include '../../action/koneksi.php';
 ?>
 
<?php
$nama   = $_POST['nama_kader'];
$username   = $_POST['username'];
$password  = $_POST['password'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat  = $_POST['alamat'];
$no_telp  = $_POST['no_telp'];
$hak_akses  = "2";

$s=mysql_query("INSERT INTO kader VALUES('', '$nama','$username','$password','$jenis_kelamin','$alamat','$no_telp', '$hak_akses')") or die(mysql_error());{
 ?>
 <script>
  alert("Data Kader Berhasil Disimpan");
  window.location.href='../data_kader.php';

 </script>
 <?php
}

 ?>
