<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="gambar/Doctor Logo Design.jpeg" alt="KLINIKKESEHATAN Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Klinik Kesehatan</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="gambar/WhatsApp Image 2023-12-14 at 20.12.54_a24ab23b.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Tiara Y,F</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="home" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
             Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <li class="nav-item">
            <a href="Dokter" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Dokter
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/Dokter/create" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Form Dokter
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/Pasien/create" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Form Pasien
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/Jadwal praktek/create" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Form rekam
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/Obat/create" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Form Obat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/Diagnosa/create" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Form Diagnosa
              </p>
            </a>
          </li>
          <li class="nav-item">
          <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-link btn btn-warning">Logout</button>
        </form>
      </li>  
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->