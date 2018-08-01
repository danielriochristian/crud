  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Daftar Mahasiswa</h3>
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
            </div>


          </div>
        </div>

        </section>
