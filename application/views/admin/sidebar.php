  <!-- Sidebar -->
  <ul class="navbar-nav sidebar sidebar-white accordion" style="backgroud-color:white" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('Dashboard') ?>">
          <img src="<?= base_url('uploads/logo.png') ?>" class="logo" width="100px" alt="">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
          <a class="nav-link" href="<?= site_url('admin') ?>">
              <i class="fas fa-fw fa-tachometer-alt" style="color:#FF3600"></i>
              <span style="color:black">Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?= ($title === 'Halaman List Konsultasi Costumer') ? 'active' : '' ?>">
          <a class="nav-link" href="<?= site_url('admin/list_siswa') ?>">
              <i class="fas fa-solid fa-user-tie" style="color:#FF3600"></i>
              <span style="color:black">Siswa</span></a>
      </li>


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item <?= ($title === 'Halaman List Konsultasi Costumer') ? 'active' : '' ?>">
          <a class="nav-link" href="<?= site_url('admin/list_guru') ?>">
              <i class="fas fa-solid fa-user-tie" style="color:#FF3600"></i>
              <span style="color:black">Guru</span></a>
      </li>
      <li class="nav-item <?= ($title === 'Halaman List Konsultasi Costumer') ? 'active' : '' ?>">
          <a class="nav-link" href="<?= site_url('admin/list_kelas') ?>">
              <i class="fas fa-solid fa-user-tie" style="color:#FF3600"></i>
              <span style="color:black">Kelas</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?= site_url('admin/list_ruangan') ?>">
              <i class="fas fa-solid fa-link" style="color:#FF3600"></i>
              <span style="color:black">Ruangan</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?= site_url('admin/list_jadwal_pelajaran') ?>">
              <i class="fas fa-solid fa-link" style="color:#FF3600"></i>
              <span style="color:black">Jadwal Mata Pelajaran</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>



  </ul>
  <!-- End of Sidebar -->
  <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars " style="color:#FF3600"></i>
              </button>
              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

                  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                  <li class="nav-item dropdown no-arrow d-sm-none">
                      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-search fa-fw" style="color:#FF3600"></i>
                      </a>
                      <!-- Dropdown - Messages -->
                      <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                          <form class="form-inline mr-auto w-100 navbar-search">
                              <div class="input-group">
                                  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                  <div class="input-group-append">
                                      <button class="btn btn-primary" type="button">
                                          <i class="fas fa-search fa-sm" style="color:#FF3600"></i>
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </li>


                  <!-- Nav Item - Messages -->
                  <li class="nav-item dropdown no-arrow mx-1">
                      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-envelope fa-fw" style="color:#FF3600"></i>
                          <!-- Counter - Messages -->

                      </a>
                      <!-- Dropdown - Messages -->
                      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">

                  </li>

                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hallo, <?= $this->session->userdata('nama_admin'); ?></span><i class="fas fa-solid fa-caret-down"></i>
                      </a>
                      <!-- Dropdown - User Information -->
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                          <a class="dropdown-item" href="<?= site_url('admin/my_profile') ?>">
                              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400" style="color:#FF3600"></i>
                              Profile
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" style="color:#FF3600"></i>
                              Logout
                          </a>
                      </div>
                  </li>

              </ul>

          </nav>