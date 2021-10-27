 <?php
 include '../../action/koneksi.php';
 ?>
 
<?php
$id_anak   = $_POST['id_anak'];
$tanggal_pemeriksaan = date("Y-m-d");
$berat_badan  = $_POST['berat_badan'];
$tinggi_badan  = $_POST['tinggi_badan'];
$lingkar_kepala  = $_POST['lingkar_kepala'];


$value = (count($_POST['perilaku']) > 0) ? implode('-', $_POST['perilaku']) : ""; 


$s=mysql_query("INSERT INTO pemeriksaan(id_pemeriksaan, id_anak, tanggal_pemeriksaan, berat_badan, tinggi_badan, lingkar_kepala, perilaku) VALUES('', '$id_anak','$tanggal_pemeriksaan','$berat_badan','$tinggi_badan','$lingkar_kepala','$value')") or die(mysql_error());

{
 ?>

 <script>
  alert("Data user Berhasil Disimpan");
  window.location.href='../pemeriksaan_per_anak.php?id_anak=<?php echo $id_anak ?>';

 </script>
 <?php
}

 ?>

