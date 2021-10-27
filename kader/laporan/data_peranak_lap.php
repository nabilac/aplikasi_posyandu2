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
$syarat=$_POST['id_anak'];
$data	= "SELECT * FROM anak WHERE id_anak='$syarat'";
$hasil	= mysql_query($data);
$row	= mysql_fetch_array($hasil);
?>

<h4>DATA PER BALITA</h4><br>
<table >
    <tbody>
    <tr>
        <td>NIB </td><td>: <?php echo $row[id_anak];?></td>
    </tr>
    <tr>
        <td>Nama </td><td>: <?php echo $row[nama_anak];?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir </td><td>: <?php echo $row[tanggal_lahir];?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td><td>: <?php echo $row[jenis_kelamin];?></td>
    </tr>
    </tbody>
</table>


<table id="table-a">
        <thead>
        <tr><th width="60">Kode Timbang</th>
            <th width="50">Tanggal Timbang</th>
            <th width="100">Berat Badan</th>
            <th width="100">Tinggi Badan</th>
            <th width="100">Lingkar Kepala</th>
            <th width="100">Perilaku</th>
            
        </tr>
        </thead>
        <tbody>
       <?php 
$bulan=mysql_real_escape_string($_POST['bulan']);
$tahun=mysql_real_escape_string($_POST['tahun']);
//$nosppt=mysql_real_escape_string($_GET['nosppt']);
$sql = mysql_query("SELECT *
                             FROM pemeriksaan WHERE id_anak='$syarat'") or die (mysql_error());
//$sql=mysql_query("select * from penduduk order by nama desc");$no=0;
$tgl=date("d-m-Y");
while($datapost=mysql_fetch_array($sql)){$no++;
$idcek = strip_tags($datapost['id_pemeriksaan']);
$kategori = strip_tags($datapost['tanggal_pemeriksaan']);
$alamat = strip_tags($datapost['berat_badan']);
$reg= strip_tags($datapost['tinggi_badan']);
$lingkar_kepala= strip_tags($datapost['lingkar_kepala']);
$perilaku= strip_tags($datapost['perilaku']);


?>
        <tr>
            <td><?PHP echo $idcek;?></td>
            <td><?PHP echo $kategori;?></td>
            <td><?PHP echo $alamat;?></td>
            <td><?PHP echo $reg;?></td>
            <td><?PHP echo $lingkar_kepala;?></td>
            <td><?PHP echo $perilaku;?></td>
          
            
        </tr>
       <?PHP }?>
        </tbody>
        </table>
<br>		



