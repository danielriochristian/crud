<!DOCTYPE html>
<html>
<head>
	<title>Latihan </title>
</head>
<body>
	<center><h1>DATA KARYAWAN </h1></center>
	<center><?php echo anchor('Admin/tambah','Tambah Data'); /* anchor = hyperlink CI */ ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>NPM</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Kelas</th>
			<th>Action</th>
		</tr>
		<?php
		$no = 1;
		foreach($tb_mahasiswa as $u){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->NPM ?></td>
			<td><?php echo $u->Nama ?></td>
			<td><?php echo $u->Jurusan ?></td>
			<td><?php echo $u->Kelas ?></td>
			<td>
			        <?php echo anchor('Admin/edit/'.$u->NPM,'edit'); ?>
                	<?php echo anchor('Admin/hapus/'.$u->NPM,'hapus'); ?>
                	</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
