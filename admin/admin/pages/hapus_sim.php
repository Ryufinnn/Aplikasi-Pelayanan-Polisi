<?php
include "koneksi.php";
$bk=$_GET['id'];
mysql_query("DELETE FROM tbl_sim WHERE id_sim='$bk'");
	echo "<script>alert('Data Sukses Terhapus');
					window.location='index.php?module=sim';
				</script>";

 ?>