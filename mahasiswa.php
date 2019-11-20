<a href="tambah.php"><button>Tambah</button></a>
<table border="1">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
	</tr>
	<?php
	include "koneksi.php";
	$sql=mysqli_query($con,"select * from mahasiswa");
	while($row=mysqli_fetch_array($sql)){
	?>
	<tr>
		<td><?php echo $row['nim'];?></td>
		<td><?php echo $row['nama'];?></td>
	</tr>
	<?php
	}
	?>
</table>
		