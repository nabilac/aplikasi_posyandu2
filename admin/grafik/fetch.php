<?php

$connect = new PDO("mysql:host=localhost;dbname=posyandu_ta", "root", "");

if(isset($_POST["tanggal_pemeriksaan"]))
{
 $query = "
 SELECT * FROM pemeriksaan 
 WHERE tanggal_pemeriksaan = '".$_POST["tanggal_pemeriksaan"]."' 
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'id_anak'   => $row["id_anak"],
   'berat_badan'  => floatval($row["berat_badan"])
  );
 }
 echo json_encode($output);
}

?>