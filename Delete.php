<?php
	include 'koneksi.php';
	$id=$_GET['id'];

	$sql = "DELETE from tbl_101 where kode_alamat=$id";
	$hasil = mysqli_query($koneksi,$sql);
	if(!$hasil){
		echo "Delete Gagal";
	} else {
		echo "Delete Berhasil<br>";
		echo "<a href='tbl_101.php'>Lihat Data</a>";
	}
?>