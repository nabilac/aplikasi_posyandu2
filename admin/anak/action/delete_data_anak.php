<?php
include '../../action/koneksi.php';
 ?>
<?php
$id_anak =$_GET['id_anak'];
$db=mysql_query("DELETE FROM anak WHERE id_anak='$id_anak'") or die(mysql_error());
{?>
<script type="text/javascript">
 alert("Anda Yakin ??");
 window.location.href="../data_anak.php";
</script>

<?php } ?>