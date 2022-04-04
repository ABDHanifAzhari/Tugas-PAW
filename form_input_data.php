<!DOCTYPE html lang=eng>
<html lang=eng>
<head>
	<meta charset="utf-8">
	<title>Form Input Data</title>
</head>
<body>
	<h2>FORM INPUT DATA</h2>
	<form method="POST" action="action.php">
		<table border="0">
			<tr>
				<td><label for="kode">Kode Alamat</label></td>
				<td><input id="kode" name="kode" type="text"/></td>
			</tr>
			<tr>
				<td><label for="nama">Alamat</label></td>
				<td><input id="nama" name="nama" type="text"/></td>
			</tr>
			<tr>
				<td><label for="pekerjaan">Pekerjaan</label></td>
				<td><input id="pekerjaan" name="pekerjaan" type="text"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="KIRIM"></td>
			</tr>
		</table>
	</form>
</body>
</html>