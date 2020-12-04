<?php  
    $conn = mysqli_connect("172.16.1.6", "poslapas", "poslapas.1@#", "wp_thewhitelyst");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas 7</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php $mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa"); ?>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($mahasiswa as $row){ ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>">update</a>
				<a href="hapus.php?id=<?= $row["id"]; ?>">delete</a>
			</td>
			<td><img src="<?= $row["gambar"]; ?>" alt="" width="50"></td>
			<td><?= $row["nrp"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["email"]; ?></td>
			<td><?= $row["jurusan"]; ?></td>
		</tr>
		<?php $i++ ?>
		<?php } ?>
	</table>
</body>
</html>