<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #C24C65;">

  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light" style="color: #610014;">PERPUSKU</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/whatsapp.jpg" class="img-circle elevation-2" alt="User Image" style="width: 40px; height: 40px;">
      </div>
      <div class="info">
        <a style="color: #610014;" href="#" class="d-block">
          <?php
          echo $_SESSION['username'];
          ?>
        </a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search" style="background-color: #610014;">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" style="background-color: #610014;">
        <div class="input-group-append" style="background-color: #610014;">
          <button class="btn btn-sidebar" style="background-color: #610014;">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="#" class="nav-link" style="color: #610014;">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item ">
          <a href="#" class="nav-link" style="color: #610014;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Buku
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="input_buku.php" class="nav-link" style="color: #610014;">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="data_buku.php" class="nav-link" style="color: #610014;">
                <i class="far fa-circle nav-icon"></i>
                <p>Lihat</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item ">
          <a href="#" class="nav-link" style="color: #610014;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Peminjaman
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="input_peminjaman.php" class="nav-link" style="color: #610014;">
                <i class="far fa-circle nav-icon"></i>
                <p>Pinjam Buku</p>
              </a>
            </li>
            <!-- <li class="nav-item">
                <a href="input_kembali.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kembalikan Buku</p>
                </a>
              </li> -->
            <li class="nav-item">
              <a href="data_pinjam.php" class="nav-link" style="color: #610014;">
                <i class="far fa-circle nav-icon"></i>
                <p>Lihat Pinjam</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item ">
          <a href="#" class="nav-link" style="color: #610014;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Customer
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="input_customer.php" class="nav-link" style="color: #610014;">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="data_customer.php" class="nav-link" style="color: #610014;">
                <i class="far fa-circle nav-icon"></i>
                <p>Lihat</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item ">
          <a href="#" class="nav-link" style="color: #610014;">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Admin
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="input_admin.php" class="nav-link" style="color: #610014;">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="data_admin.php" class="nav-link" style="color: #610014;">
                <i class="far fa-circle nav-icon"></i>
                <p>Lihat</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>