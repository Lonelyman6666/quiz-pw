<?php
include "koneksi.php";
$user = $_POST['username'];
$pass = $_POST['password'];

$sql = mysqli_query($con,"Select * from login where username='$user' and password='$pass'");
$result = mysqli_fetch_array($sql);

if(!$result){
	echo "<script type='text/javascript'>alert('Username atau Password Salah!!!');history.back(1);</script>";
}else{
	echo "<script type='text/javascript'>alert('Selamat Datang $user');window.location = 'mahasiswa.php';</script>";
}
?>