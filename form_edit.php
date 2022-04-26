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
	$sql = "SELECT * FROM tbl_101 where id_101 = $id";
	$hasil = mysqli_query($koneksi,$sql);
	while($row =mysqli_fetch_array($hasil)) {
	?>

	<h2>FORM INPUT DATA</h2>
	<form method="POST" action="update.php">
		<table border="0">
			<input type="hidden" name='id' value="<?php echo $row['id_101'] ?>">
			<tr>
				<td><label for="nama">nama</label></td>
				<td><input id="nama" name="nama" type="text" value="<?php echo $row['nama_101']?>"/></td>
			</tr>
			<tr>
				<td><label for="email">E-mail</label></td>
				<td><input id="email" name="email" type="text" value="<?php echo $row['email_101']?>"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="KIRIM"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
	
</body>
</html>