<?php
include '../../action/koneksi.php';
 ?>
<?php
$id_admin =$_GET['id_admin'];
$db=mysql_query("DELETE FROM admin WHERE id_admin='$id_admin'") or die(mysql_error());
{?>
<script type="text/javascript">
 alert("Anda Yakin ??");
 window.location.href="../data_admin.php";
</script>

<?php } ?>