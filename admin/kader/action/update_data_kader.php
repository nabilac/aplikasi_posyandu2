<?php
include '../../action/koneksi.php';
$id_kader=$_POST['id_kader'];
$nama_kader= $_POST['nama_kader'];
$username= $_POST['username'];
$password= $_POST['password'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat  = $_POST['alamat'];
$no_telp  = $_POST['no_telp'];


$s=mysql_query("UPDATE  kader SET nama_kader='$nama_kader', username='$username', password='$password', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' where id_kader='$id_kader'") or die(mysql_error());{
 ?>
  <script type="text/javascript">
  alert("Data Berhasil Disimpan");
  window.location.href='../data_kader.php';
 </script>
 <?php
}


 ?>