<?php
include "koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$pekerjaan = $_POST['pekerjaan'];

$sql = "UPDATE tbl_101 set alamat='$nama', pekerjaan='$pekerjaan' where kode_alamat=$kode";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "Update Data Gagal";
} else {
	echo "Update Data Berhasil <br>";
	echo "<a href='tbl_101.php'> Show Data</a>";
}
?>