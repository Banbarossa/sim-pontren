<aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
      <a href="/">
        <span>
          <?xml version="1.0" encoding="utf-8"?>
          <!-- Generator: Adobe Illustrator 22.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
              <svg fill="#000000" width="52" height="52" version="1.1" id="lni_lni-library" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
              <g>
                <path d="M58.1,9.2H35.3c-1.3,0-2.4,0.5-3.3,1.2c-0.9-0.8-2-1.2-3.3-1.2H5.9c-2.5,0-4.6,2.1-4.6,4.6v33.8c0,2.5,2.1,4.6,4.6,4.6
                  h24.4v0.9c0,1,0.8,1.8,1.8,1.8s1.8-0.8,1.8-1.8v-0.9h24.4c2.5,0,4.6-2.1,4.6-4.6V13.8C62.8,11.2,60.7,9.2,58.1,9.2z M5.9,48.7
                  c-0.6,0-1.1-0.5-1.1-1.1V13.8c0-0.6,0.5-1.1,1.1-1.1h22.9c0.8,0,1.5,0.7,1.5,1.5v0v34.5H5.9z M59.3,47.6c0,0.6-0.5,1.1-1.1,1.1
                  H33.8V14.2c0-0.8,0.7-1.5,1.5-1.5h22.8c0.6,0,1.1,0.5,1.1,1.1V47.6z"/>
                <path d="M13.6,22.8h7.7c1,0,1.8-0.8,1.8-1.8s-0.8-1.8-1.8-1.8h-7.7c-1,0-1.8,0.8-1.8,1.8S12.7,22.8,13.6,22.8z"/>
                <path d="M42.4,22.8h7.7c1,0,1.8-0.8,1.8-1.8s-0.8-1.8-1.8-1.8h-7.7c-1,0-1.8,0.8-1.8,1.8S41.4,22.8,42.4,22.8z"/>
                <path d="M50.2,27.8h-7.7c-1,0-1.8,0.8-1.8,1.8s0.8,1.8,1.8,1.8h7.7c1,0,1.8-0.8,1.8-1.8S51.2,27.8,50.2,27.8z"/>
                <path d="M21.5,27.8h-7.7c-1,0-1.8,0.8-1.8,1.8s0.8,1.8,1.8,1.8h7.7c1,0,1.8-0.8,1.8-1.8S22.4,27.8,21.5,27.8z"/>
                <path d="M21.5,37h-7.7c-1,0-1.8,0.8-1.8,1.8s0.8,1.8,1.8,1.8h7.7c1,0,1.8-0.8,1.8-1.8S22.4,37,21.5,37z"/>
                <path d="M50.2,37h-7.7c-1,0-1.8,0.8-1.8,1.8s0.8,1.8,1.8,1.8h7.7c1,0,1.8-0.8,1.8-1.8S51.2,37,50.2,37z"/>
              </g>
              </svg>
     
        </span>
        <div>
          <h4 class="text-bold">Ponpes<span class="text-bold text-primary">-KU</span></h4>
        </div>
      </a>
      <div class="divider"><span><hr></span></div>
    </div>
    <nav class="sidebar-nav">
      <ul>
        <li class="nav-item">
          <a href="/">
            <span class="me-3">
              <i class="lni lni-home"></i>              
            </span>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item {{ Request::is('/') ? 'active':"" }}">
          <a href="{{ route('surat_keluar') }}">
            <span class="me-3"><i class="lni lni-files"></i></span>
            <span class="text">Surat Keluar</span>
          </a>
        </li>
        <li class="nav-item {{ Request::is('rapat*') ? 'active' :"" }}">
          <a href="{{ route('rapat.master') }}">
            <span class="me-3"><i class="lni lni-consulting"></i></span>
            <span class="text">Manajemen Rapat</span>
          </a>
        </li>
      

        @can('isAdmin')
        <hr>
        <li class="nav-item">
              <a href="/admin" class="">
                <span class="icon">
                  <?xml version="1.0" encoding="utf-8"?>
                  <!-- Generator: Adobe Illustrator 22.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                  <svg fill="#000000" width="22" height="22" version="1.1" id="lni_lni-user" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                  <g>
                    <path d="M32,36.4c8.2,0,14.9-6.7,14.9-14.9S40.2,6.5,32,6.5s-14.9,6.7-14.9,14.9S23.8,36.4,32,36.4z M32,10
                      c6.3,0,11.4,5.1,11.4,11.4c0,6.3-5.1,11.4-11.4,11.4c-6.3,0-11.4-5.1-11.4-11.4C20.6,15.2,25.7,10,32,10z"/>
                    <path d="M62.1,54.4c-8.3-7.1-19-11-30.1-11s-21.8,3.9-30.1,11C1.1,55,1,56.1,1.7,56.9c0.6,0.7,1.7,0.8,2.5,0.2
                      c7.7-6.5,17.6-10.1,27.9-10.1s20.2,3.6,27.9,10.1c0.3,0.3,0.7,0.4,1.1,0.4c0.5,0,1-0.2,1.3-0.6C63,56.1,62.9,55,62.1,54.4z"/>
                  </g>
                  </svg>
                  
                </span>
                <span>User</span>
              </a>
            </li>
            <hr>
        @endcan
      </ul>
    </nav>

    <div class="promo-box">
      <h3 class="text-primary">Banbarossa.Tech</h3>
      <div class="d-flex justify-content-evenly">
          <h2><a href="https://www.facebook.com/banbarossa.banbarossa" target="_blank"><i class="lni lni-facebook-oval"></i></a></h2>
          <h2><a href="https://www.instagram.com/banbarossa/" target="_blank"><i class="lni lni-instagram-original"></i></a></h2>
      </div>
    </div>
</aside>
  <div class="overlay"></div>