<!DOCTYPE html>
<html>
<head>
	<title>edit data</title>
</head>
<body>
<h2>Edit Data</h2>
<?php
include "koneksi.php";
$id = $_GET['id'];
$query=mysql_query("SELECT * FROM identitas WHERE id='$id'");
while($data=mysql_fetch_array($query)){
?>
<form action="proses_update.php" method="post">
	<table>
		<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="nama" value="<?php echo $data['nama']; ?>">
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
		</tr>
		<tr>
			<td>Umur</td>
			<td><input type="text" name="usia" value="<?php echo $data['usia']; ?>"></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>
				<?php $agama = $data['agama']; ?>
				<select name="agama">
					<option <?php echo ($agama == 'islam') ? "selected": "" ?>>islam
					</option>
					<option <?php echo ($agama == 'kristen') ? "selected": "" ?>>kristen</option>
					<option <?php echo ($agama == 'hindu') ? "selected": "" ?>>hindu
					</option>
					<option <?php echo ($agama == 'budha') ? "selected": "" ?>>budha
					</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>"></td>
		</tr>
		<tr>
			<td>Nama ibu</td>
			<td><input type="text" name="nama_ibu_kandung" value="<?php echo $data['nama_ibu_kandung']; ?>"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="update"></td>
		</tr>
	</table>
	<hr align="right">
	<p align="right"><a href="home.php">Back</a></p>
</form>
<?php } ?>
</body>
</html>