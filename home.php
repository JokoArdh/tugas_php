<?php
session_start();
if(isset($_SESSION['username'])){
	include "koneksi.php";
	$query=mysql_query("SELECT * FROM identitas");
	$jumlah=mysql_num_rows($query);
	echo "Selamat datang: ".$_SESSION['username'];
	echo "<br><br>";
	echo "jumlah data :".$jumlah;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
	<link rel="stylesheet" type="text/css" href="css/utama.css">
</head>
<body>
<p>
	<a href="tambah.php">Add data</a> // <a href="cetak.php" target="_blank">Cetak</a>
</p>
<!--notifikation-->
<?php
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "<font color='blue'>Data berhasil ditambahkan</font>";
		}else if($pesan == "hapus"){
			echo "<font color='red'>Data di hapus</font>";
		}else if($pesan == "update"){
			echo "<font color='green'>data telah diupdate</font>";
		}
	}
?>
<table border="1" class="table1">
	<tr>
		<th>Nomor</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Umur</th>
		<th>Agama</th>
		<th>Pekerjaan</th>
		<th>Nama Ibu</th>
		<th>Opsi</th>
	</tr>
<?php
$no=0;
while($row=mysql_fetch_array($query)){
?>
<tr>
	<td><?php echo $no=$no+1; ?></td>
	<td><?php echo $row['nama']; ?></td>
	<td><?php echo $row['alamat']; ?></td>
	<td><?php echo $row['usia']; ?></td>
	<td><?php echo $row['agama']; ?></td>
	<td><?php echo $row['pekerjaan']; ?></td>
	<td><?php echo $row['nama_ibu_kandung']; ?></td>
	<td>
		<a href='delete.php?id=<?php echo $row['id']; ?>'>Delete</a> ||
		<a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a> ||
	</td>
</tr>
<?php
}
?>
</table><br>
<a href="logout.php">Logout</a>
<?php
}else{
	echo "anda tidak boloh akses halaman ini. silahkan login dulu <a href='fom.php'>Login dulu</a>";
}
?>
</body>
</html>
