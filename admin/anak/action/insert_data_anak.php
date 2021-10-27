 <?php
 include '../../action/koneksi.php';
 ?>
 
<?php
$nama_anak   = $_POST['nama_anak'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$berat_badan_lahir = $_POST['berat_badan_lahir'];
$tinggi_badan_lahir = $_POST['tinggi_badan_lahir'];
$lingkar_kepala_lahir = $_POST['lingkar_kepala_lahir'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];

$s=mysql_query("INSERT INTO anak VALUES('', '$nama_anak', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir',
 '$berat_badan_lahir', '$tinggi_badan_lahir', '$lingkar_kepala_lahir', 
 '$nama_ayah', '$nama_ibu', '$alamat', '$nohp')") or die(mysql_error());{
 ?>
 <script>
  alert("Data Anak Berhasil Disimpan");
  window.location.href='../data_anak.php';

 </script>
 <?php
}

 ?>
