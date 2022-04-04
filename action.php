<?php
include "koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$pekerjaan = $_POST['pekerjaan'];

$sql = "INSERT into tbl_101 values ('$kode','$nama','$pekerjaan')";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "Penambahan Data Gagal";
} else {
	echo "Penambahan Data Berhasil <br>";
	echo "<a href='tbl_101.php'> Show Data</a>";
}
?>