<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU</li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Dashboard</span>
          </span>
        </a>
        <li>
          <?php echo anchor('Admin/tambah','Tambah Data'); ?>
        </li>
        <li>
          <?php echo anchor('Admin/tambah','Tambah Data'); ?>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Delete</span>
            </span>
          </a>
  </section>
  <!-- /.sidebar -->
</aside>
