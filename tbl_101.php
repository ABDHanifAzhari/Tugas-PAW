<!DOCTYPE html>
<html lang=eng>
<head>
	<meta charset="utf-8">
	<title>Data Diri</title>
</head>
<body>
	<table border="1" width="500px">
		<caption><h3>Data Diri</h3></caption>
		<tr>
			<td><b>Kode_alamat</b></td>
			<td><b>Alamat</b></td>
			<td><b>Pekerjaan</b></td>
			<td><b>Tambahan</b></td>
		</tr>
			<?php
			include "koneksi.php";
			$sql = "SELECT * from tbl_101";
			$hasil = mysqli_query($koneksi,$sql);
			while($row =mysqli_fetch_array($hasil))
			{
			?>
		<tr>
			<td><?=$row['kode_alamat'];?></td>
			<td><?=$row['alamat'];?></td>
			<td><?=$row['pekerjaan'];?></td>
			<td><a href="form_edit.php?id=<?=$row['kode_alamat']?>">Edit | <a href="delete.php?id=<?=$row['kode_alamat']?>"> Delete</td>
		<?php
		}
		?>
		</tr>
		<tr>
			<td colspan="4" align="center"><?php
				echo "<a href='form_input_data.php'>Tambah Data</a>";
			?></td>
		</tr>
	</table>
	
</body>
</html>
