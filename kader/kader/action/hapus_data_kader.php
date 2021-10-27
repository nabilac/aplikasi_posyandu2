<?php
include '../../action/koneksi.php';
 ?>
<?php
$id_kader =$_GET['id_kader'];
$db=mysql_query("DELETE FROM kader WHERE id_kader='$id_kader'") or die(mysql_error());
{?>
<script type="text/javascript">
 alert("Anda Yakin ??");
 window.location.href="../data_kader.php";
</script>

<?php } ?>