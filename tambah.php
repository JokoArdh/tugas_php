<!DOCTYPE html>
<html>
<head>
	<title>Tambah data</title>
</head>
<body>
	<h2>FORM TAMBAH DATA</h2>
	<hr width="200px" align="left">
	<a href="home.php">back</a>
	<hr width="200px" align="left">
		<form action="proses_add.php" method="post">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" placeholder="enter nama.." required="required"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>
						<textarea name="alamat" cols="50" rows="5" required="required"></textarea>
					</td>
				</tr>
				<tr>
					<td>Usia</td>
					<td><input type="text" name="usia" placeholder="enter usia.." required="required"></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>
						<select name="agama">
							<option>---</option>
							<option>islam</option>
							<option>kristen</option>
							<option>hindu</option>
							<option>budha</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td><input type="text" name="pekerjaan" placeholder="enter pekerjaan.." required="required"></td>
				</tr>
				<tr>
					<td>Nama Ibu</td>
					<td><input type="text" name="nama_ibu_kandung" placeholder="enter nama ibu.." required="required"></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="add" value="Add Data">
					</td>
			</table>
		</form>
</body>
</html>