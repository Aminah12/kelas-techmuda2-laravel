    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Kilar University</div>
      </a>

      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="/kelas">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Kelas</span></a>
      </li>
      @if(auth()->user()->role == 'admin')
      <li class="nav-item">
        <a class="nav-link" href="/mahasiswa">
          <i class="fas fa-user-graduate"></i>
          <span>Mahasiswa</span></a>
      </li>
      @endif
      
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>