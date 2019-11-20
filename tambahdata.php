<?php

include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];

$sql=mysqli_query($con,"insert into mahasiswa values('$nim','$nama')");

if(!$sql){
	echo "<script type='text/javascript'>alert('data gagal Disimpan!!!');history.back(1);</script>";
}else{
	echo "<script type='text/javascript'>alert('Data Berhasil Disimpan');window.location = 'mahasiswa.php';</script>";
}
?>