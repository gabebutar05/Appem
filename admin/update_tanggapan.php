<?php 

require '../koneksi.php';
$idt = $_POST['id_tanggapan'];
$idp = $_POST['id_pengaduan'];
$tgl = $_POST['tgl_tanggapan'];
$tang = $_POST['tanggapan'];
$id = $_POST['id_petugas'];

$sql = mysql_query("update tanggapan set tanggapan='$tang' where id_tanggapan='$idt'");
if ($sql) 
{
	?>
	<script type="text/javascript">
		alert("Data Berhasil Diupdate");
		window.location="admin.php?url=lihat_tanggapan";
	</script>
	<?php

}
?>	