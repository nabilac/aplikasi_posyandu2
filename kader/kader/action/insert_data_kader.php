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

$s=mysql_query("INSERT INTO kader VALUES('', '$nama','$username','$password','$jenis_kelamin','$alamat','$no_telp')") or die(mysql_error());{
 ?>
 <script>
  alert("Data user Berhasil Disimpan");
  window.location.href='../data_kader.php';

 </script>
 <?php
}

 ?>
