<?php 

require '../koneksi.php';
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$tel = $_POST['telp'];
$ni = $_POST['nik'];

$sql = mysql_query("update masyarakat set nama='$nama',username='$user',password='$pass,'telp='$tel' where nik='$ni'");
if ($sql) 
{
	?>
	<script type="text/javascript">
		alert("Data Berhasil Diupdate!");
		window.location="admin.php?url=lihat_masyarakat";
	</script>
	<?php

}
?>	