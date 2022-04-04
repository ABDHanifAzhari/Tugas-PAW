<!DOCTYPE html lang=eng>
<html lang=eng>
<head>
	<meta charset="utf-8">
	<title>Form Input Data</title>
</head>
<body>
	<?php
	include 'koneksi.php';
	$id=$_GET['id'];
	$sql = "SELECT * FROM tbl_101 where kode_alamat = $id";
	$hasil = mysqli_query($koneksi,$sql);
	while($row =mysqli_fetch_array($hasil)) {
	?>

	<h2>FORM INPUT DATA</h2>
	<form method="POST" action="update.php">
		<table border="0">
			<input type="hidden" name='id' value="<?php echo $row['kode_alamat'] ?>">
			<tr>
				<td><label for="kode">Kode Alamat</label></td>
				<td><input id="kode" name="kode" type="text" value="<?php echo $row['kode_alamat']?>"/></td>
			</tr>
			<tr>
				<td><label for="nama">Alamat</label></td>
				<td><input id="nama" name="nama" type="text" value="<?php echo $row['alamat']?>"/></td>
			</tr>
			<tr>
				<td><label for="pekerjaan">Pekerjaan</label></td>
				<td><input id="pekerjaan" name="pekerjaan" type="text" value="<?php echo $row['pekerjaan']?>"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="KIRIM"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
	
</body>
</html>