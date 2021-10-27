<?php

error_reporting(0);
?>
<style>
.header {border-bottom:solid 1px #666; height:85px; width:100%; margin:auto; margin-bottom:20px;}
.header img { overflow:hidden;width:50px!important;height:30px!important; float:left; margin-left:20px;margin-right:-30px; margin-top:10px;}
img.img2 {margin-left:650px; margin-top:-75px}
.header h3{font-family:Times, serif;font-size:30px; line-height:30px; text-align:center; margin-left:20px; margin-top:20px;  text-transform:uppercase}
.header p {text-align:center;  margin-left:-60px;padding:1px!important; }
.header span {padding-top:10px;}
.ttd2{
float:left;
margin-left:550px;
margin-top:-90px;
}
h4{
text-align:center;
}
#table-a
{ 
font-size: 12px;
width: 10%;
text-align: center;
border-collapse: collapse;
margin: 10px auto;
border:1px;

}
#table-a th
{ font-size: 12px;
font-weight: normal;
padding: 5px;
border:1px;

color: #000;
}
#table-a td,#table-a td 
{ padding: 8px;
border:1px;
font-size: 10px;
color: #000;
text-align:left;
}
#bod{
width:750px;

}
</style>
<?php 
$syarat=$_POST['tanggal_pemeriksaan'];
$data	= "SELECT * FROM pemeriksaan WHERE tanggal_pemeriksaan='$syarat'";
$hasil	= mysql_query($data);
$row	= mysql_fetch_array($hasil);
function format_indo($date)
      {
          $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

          $tahun = substr($date, 0, 4);               
          $bulan = substr($date, 5, 2);
          $tgl   = substr($date, 8, 2);
          $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
          return($result);
      }
?>

<h4>LAPORAN PER PERIODE<br> POSYANDU TULIP</h4><br>

Periode : <?php echo format_indo($row['tanggal_pemeriksaan']); ?>

<table id="table-a">
        <thead>
        <tr>
            
            <th width="170" >id anak</th>
            <th width="170" >nama anak</th>
            <th width="40">berat badan</th>
            <th width="100">tinggi badan</th>
            <th width="100">lingkar kepala</th>
            <th width="160">perilaku</th>
        </tr>
        </thead>
        <tbody>
       <?php 
$bulan=mysql_real_escape_string($_POST['bulan']);
$tahun=mysql_real_escape_string($_POST['tahun']);
//$nosppt=mysql_real_escape_string($_GET['nosppt']);

$sql = mysql_query("SELECT anak.nama_anak, pemeriksaan.id_anak,  pemeriksaan.berat_badan, pemeriksaan.tinggi_badan, pemeriksaan.lingkar_kepala, pemeriksaan.perilaku FROM anak INNER JOIN pemeriksaan WHERE anak.id_anak=pemeriksaan.id_anak and tanggal_pemeriksaan='$syarat'") or die (mysql_error());
//$sql=mysql_query("select * from penduduk order by nama desc");$no=0;
$tgl=date("d-m-Y");
while($datapost=mysql_fetch_array($sql)){
  

$tanggal= strip_tags($datapost['id_anak']);
$tanggal2= strip_tags($datapost['nama_anak']);
$nama = strip_tags($datapost['berat_badan']);
$alamat = strip_tags($datapost['tinggi_badan']);
$reg= strip_tags($datapost['lingkar_kepala']);
$umur = strip_tags($datapost['perilaku']);

?>
        <tr>
            
            <td><?PHP echo $tanggal;?></td>
            <td><?PHP echo $tanggal2;?></td>
            <td><?PHP echo $nama;?></td>
            <td><?PHP echo $alamat;?></td>
            <td><?PHP echo $reg;?></td>
            <td><?PHP echo $umur;?></td>
            
        </tr>
       <?PHP }?>
        </tbody>
        </table>
<br>		



