<?php
include "koneksi.php";
$id=$_GET['id'];
$query=mysql_query("DELETE FROM identitas WHERE id='$id'");
header("location:home.php?pesan=hapus");
?>