<?php
include ("../conn.php");

session_start();

$username	 = $_POST['username'];
$password 	 = mysql_real_escape_string(htmlentities(md5($_POST['password'])));


//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);

if (empty($username) && empty($password)) {
	header('location:index.php?error1');
	break;
} else if (empty($username)) {
	header('location:index.php?error=2');
	break;
} else if (empty($password)) {
	header('location:index.php?error=3');
	break;
}

$q = mysqli_query($koneksi, "SELECT * FROM `login` where username='$username' and password='$password'");
$row = mysqli_fetch_array ($q);

if (mysqli_num_rows($q) == 1) {
	$_SESSION['username'] 	= $username;
	$_SESSION['password'] 	= $password;
	
	header('location:../index.php?menu=home');
} else {
	header('location:index.php?error=4');
}
?>