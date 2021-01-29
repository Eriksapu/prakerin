<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('/assets/img/brand/logo.png')}}" class="navbar-brand-img" alt="...">
          <h5 class color>Project Erik</h5>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="provinsi">
                <span class="nav-link-text">➤ • ♛ Provinsi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('kota">
                <span class="nav-link-text">➤ • ♛ Kota</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('kecamatan">
                <span class="nav-link-text">➤ • ♛ Kecamatan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('desa">
                <span class="nav-link-text">➤ • ♛ Desa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('rw">
                <span class="nav-link-text">➤ • ♛ RW</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('kasus">
                <span class="nav-link-text">➤ • ♛ Kasus</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>