<!DOCTYPE html>
<html>
<head>
	<title>halaman login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<h2>Login</h2>
<?php
if(isset($_GET['pesan'])){
	$pesan=$_GET['pesan'];
	if($pesan == "logout"){
		echo "<font color='red' align='center'>Anda berhasil logout, silahkan anda login</font>";
	}
}
?>
<p>
<form action="login.php" method="post">
<div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="login">Login</button>
    <input type="checkbox"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</table>
</form>
</body>
</html>