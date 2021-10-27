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
$dari='2014-05-02';
                     $sampai='2017-10-05';

$data   = "SELECT * FROM anak WHERE (tanggal_lahir BETWEEN '$dari' AND '$sampai')";
$hasil  = mysql_query($data);
$row    = mysql_fetch_array($hasil);
?>
<h4>DATA ANAK<br> POSYANDU TULIP</h4><br>



<table id="table-a">
        <thead>
        <tr><th width="20">No</th>
            <th width="170" >Nama</th>
            <th width="35">Tanggal Lahir</th>
            <th width="40">Jenis Kelamin</th>
            <th width="100">Nama Ibu</th>
            <th width="100">Nama Ayah</th>
            <th width="160">Alamat</th>
            <th width="40" >No. Telephone</th>
        </tr>
        </thead>
        <tbody>
       <?php 
$bulan=mysql_real_escape_string($_POST['bulan']);
$tahun=mysql_real_escape_string($_POST['tahun']);
//$nosppt=mysql_real_escape_string($_GET['nosppt']);
$dari='2014-05-02';
                     $sampai='2017-10-05';
$sql = mysql_query("SELECT id_anak, nama_anak, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir, jenis_kelamin, nama_ibu, nama_ayah, alamat, nohp FROM anak WHERE (tanggal_lahir BETWEEN '$dari' AND '$sampai')") or die (mysql_error());
//$sql=mysql_query("select * from penduduk order by nama desc");$no=0;
$tgl=date("d-m-Y");
while($datapost=mysql_fetch_array($sql)){
$no++;
$id_anak = strip_tags($datapost['id_anak']);
$nama_anak= strip_tags($datapost['nama_anak']);
$tanggal_lahir = strip_tags($datapost['tanggal_lahir']);
$jenis_kelamin = strip_tags($datapost['jenis_kelamin']);
$nama_ibu = strip_tags($datapost['nama_ibu']);
$nama_ayah= strip_tags($datapost['nama_ayah']);
$alamat = strip_tags($datapost['alamat']);
$nohp = strip_tags($datapost['nohp']);

?>
        <tr>
            <td><?PHP echo $id_anak;?></td>
            <td><?PHP echo $nama_anak;?></td>
            <td><?PHP echo $tanggal_lahir;?></td>
            <td><?PHP echo $jenis_kelamin;?></td>
            <td><?PHP echo $nama_ibu?></td>
            <td><?PHP echo $nama_ayah;?></td>
            <td><?PHP echo $alamat;?></td>
            <td><?PHP echo $nohp;?></td>
            
        </tr>
       <?PHP }?>
        </tbody>
        </table>
<br>		



