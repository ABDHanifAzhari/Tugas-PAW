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
			<td><b>nama</b></td>
			<td><b>email</b></td>
			<td><b>tambahan</b></td>
		</tr>
			<?php
			include "koneksi.php";
			$sql = "SELECT * from tbl_101";
			$hasil = mysqli_query($koneksi,$sql);
			while($row =mysqli_fetch_array($hasil))
			{
			?>
		<tr>
			<td><?=$row['nama_101'];?></td>
			<td><?=$row['email_101'];?></td>
			<td><a href="form_edit.php?id=<?=$row['id_101']?>">Edit | <a href="delete.php?id=<?=$row['id_101']?>"> Delete</td>
		<?php
		}
		?>
		</tr>
		<tr>
			<td colspan="4" align="center"><?php
				echo "<a href='form_inpu.php'>Tambah Data</a>";
			?></td>
		</tr>
	</table>
	
</body>
</html>
