<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$nama_ibu = $_POST['nama_ibu_kandung'];

$sql = "UPDATE identitas SET nama='$nama', alamat='$alamat', usia='$usia', agama='$agama', pekerjaan='$pekerjaan', nama_ibu_kandung='$nama_ibu' WHERE id='$id' ";
$query = mysql_query($sql);

header("location: home.php?pesan=update");
?>