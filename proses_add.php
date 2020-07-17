<?php
include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$nama_ibu = $_POST['nama_ibu_kandung'];

$sql = "INSERT INTO identitas(nama, alamat, usia, agama, pekerjaan, nama_ibu_kandung) VALUE('$nama', '$alamat', '$usia', '$agama', '$pekerjaan', '$nama_ibu')";
$query = mysql_query($sql);

header("location:home.php?pesan=input");
?>