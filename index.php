<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Database Klinik</title>
	<style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
</head>
<body>
	<center><h1>Database Klinik</h1></center>
	<h3>Tabel Users</h3>
	<table border="1">
		<thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama Lengkap</th>
		</tr>
		</thead>
		<?php 
			include"koneksi.php";
			$sql = 'SELECT * FROM users';
			$query = mysqli_query($koneksi, $sql);
			while ($row = mysqli_fetch_array($query)) 
			{
				?>
			<tbody>
			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['username'] ?></td>
				<td><?php echo $row['password'] ?></td>
				<td><?php echo $row['nama_lengkap'] ?></td>
			</tr>
			</tbody>
			<?php
			}
		?>
	</table>
	<h3>Tabel Dokter</h3>
	<table border="1">
		<thead>
		<tr>
			<th>ID Dokter</th>
			<th>Nama Dokter</th>
		</tr>
		</thead>
		<?php 
			include"koneksi.php";
			$sql = 'SELECT * FROM dokter';
			$query = mysqli_query($koneksi, $sql);
			while ($row = mysqli_fetch_array($query)) 
			{
				?>
			<tbody>
			<tr>
				<td><?php echo $row['id_dokter'] ?></td>
				<td><?php echo $row['nama_dokter'] ?></td>
			</tr>
			</tbody>
			<?php
			}
		?>
	</table>
	<h3>Tabel Pasien</h3>
	<table border="1">
		<thead>
		<tr>
			<th>ID Pasien</th>
			<th>Nama Pasien</th>
			<th>Jenis Kelamin</th>
			<th>Umur</th>
		</tr>
		</thead>
		<?php 
			include"koneksi.php";
			$sql = 'SELECT * FROM pasien';
			$query = mysqli_query($koneksi, $sql);
			while ($row = mysqli_fetch_array($query)) 
			{
				?>
			<tbody>
			<tr>
				<td><?php echo $row['id_pasien'] ?></td>
				<td><?php echo $row['nama_pasien'] ?></td>
				<td><?php echo $row['jenis_kelamin'] ?></td>
				<td><?php echo $row['umur'] ?></td>
			</tr>
			</tbody>
			<?php
			}
		?>
	</table>
	<h3>Tabel Berobat</h3>
	<table border="1">
		<thead>
		<tr>
			<th>ID Berobat</th>
			<th>ID Pasien</th>
			<th>ID Dokter</th>
			<th>Tanggal Berobat</th>
			<th>Keluhan Pasien</th>
			<th>Hasil Diagnosa</th>
			<th>Penatalaksanaan</th>
		</tr>
		</thead>
		<?php 
			include"koneksi.php";
			$sql = 'SELECT * FROM berobat';
			$query = mysqli_query($koneksi, $sql);
			while ($row = mysqli_fetch_array($query)) 
			{
				?>
			<tbody>
			<tr>
				<td><?php echo $row['id_berobat'] ?></td>
				<td><?php echo $row['id_pasien'] ?></td>
				<td><?php echo $row['id_dokter'] ?></td>
				<td><?php echo $row['tgl_berobat'] ?></td>
				<td><?php echo $row['keluhan_pasien'] ?></td>
				<td><?php echo $row['hasil_diagnosa'] ?></td>
				<td><?php echo $row['penatalaksanaan'] ?></td>
			</tr>
			</tbody>
			<?php
			}
		?>
	</table>
	<h3>Tabel Obat</h3>
	<table border="1">
		<thead>
		<tr>
			<th>ID Obat</th>
			<th>Nama Obat</th>
		</tr>
		</thead>
		<?php 
			include"koneksi.php";
			$sql = 'SELECT * FROM obat';
			$query = mysqli_query($koneksi, $sql);
			while ($row = mysqli_fetch_array($query)) 
			{
				?>
			<tbody>
			<tr>
				<td><?php echo $row['id_obat'] ?></td>
				<td><?php echo $row['nama_obat'] ?></td>
			</tr>
			</tbody>
			<?php
			}
		?>
	</table>
	<h3>Tabel Resep Obat</h3>
	<table border="1">
		<thead>
		<tr>
			<th>ID Resep Obat</th>
			<th>ID Berobat</th>
			<th>ID Obat</th>
		</tr>
		</thead>
		<?php 
			include"koneksi.php";
			$sql = 'SELECT * FROM resep_obat';
			$query = mysqli_query($koneksi, $sql);
			while ($row = mysqli_fetch_array($query)) 
			{
				?>
			<tbody>
			<tr>
				<td><?php echo $row['id_resep'] ?></td>
				<td><?php echo $row['id_berobat'] ?></td>
				<td><?php echo $row['id_obat'] ?></td>
			</tr>
			</tbody>
			<?php
			}
		?>
	</table>
</body>
</html>
