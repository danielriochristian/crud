<!DOCTYPE html>
<html>
<head>
<title>Latihan </title>
</head>
<body>
<center>
 <h1>DATA KARYAWAN </h1>
 <h3>Edit Data</h3>
</center>
<?php foreach($tb_mahasiswa as $u){ ?>
<form action="<?php echo base_url(). 'Admin/update'; ?>" method="post">
 <table style="margin:20px auto;">
 <tr>
 <td>Nama</td>
 <td>
 <input type="hidden" name="npm" value="<?php echo $u->NPM ?>">
 <input type="text" name="nama" value="<?php echo $u->Nama ?>">
 </td>
 </tr>
 <tr>
 <td>Jurusan</td>
 <td><input type="text" name="jurusan" value="<?php echo $u->Jurusan ?>"></td>
 </tr>
 <tr>
 <tr>
 <td>Kelas</td>
 <td><input type="text" name="kelas" value="<?php echo $u->Kelas?>"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="Simpan"></td>
 </tr>
 </table>
</form>
<?php } ?>
</body>
</html>
