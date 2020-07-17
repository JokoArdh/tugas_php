<?php
session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from admin where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
if($cek){
	$_SESSION['username']=$username;
	echo "anda berhasil login. lanjut <a href='home.php'>home</a>";
}else{
	echo "gagal <a href='fom.php'>Ulang</a>";
}
?>