<!DOCTYPE html>
<html>
<head>
	<title>Latihan </title>
</head>
<body>
	<center>
		<h1>DATA KARYAWAN </h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'Admin/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NPM</td>
				<td><input type="text" name="npm"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>
