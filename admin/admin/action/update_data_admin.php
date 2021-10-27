<?php
include '../../action/koneksi.php';
$id_admin=$_POST['id_admin'];
$nama= $_POST['nama'];
$username= $_POST['username'];
$password= $_POST['password'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat  = $_POST['alamat'];
$no_telp  = $_POST['no_telp'];


$s=mysql_query("UPDATE  admin SET nama='$nama', username='$username', password='$password', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' where id_admin='$id_admin'") or die(mysql_error());{
 ?>
  <script type="text/javascript">
  alert("Data Berhasil Disimpan");
  window.location.href='../data_admin.php';
 </script>
 <?php
}


 ?>