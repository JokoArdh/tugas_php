<!DOCTYPE html>
<html>
<head>
	<title>Cetak</title>
</head>
<body>
	<center>
		<h3>DATA KLINIK</h3>
	</center>
	<?php 
	 include "koneksi.php";
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>USIA</th>
			<th>AGAMA</th>
			<th>PEKERJAAN</th>
			<th>NAMA IBU</th>
		</tr>
		<?php
		$no = 1;
		$sql = mysql_query("SELECT * FROM identitas");
		while($data = mysql_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['usia'] ?></td>
			<td><?php echo $data['agama']; ?></td>
			<td><?php echo $data['pekerjaan']; ?></td>
			<td><?php echo $data['nama_ibu_kandung']; ?></td>
		</tr>
	<?php } ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>