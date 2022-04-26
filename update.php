<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];

$sql = "UPDATE tbl_101 set nama_101='$nama', email_101='$email' where id_101='$id'";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "Update Data Gagal";
} else {
	echo "Update Data Berhasil <br>";
	echo "<a href='tbl_101.php'> Show Data</a>";
}
?>