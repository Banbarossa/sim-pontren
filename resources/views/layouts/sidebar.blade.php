<aside class="sidebar-nav-wrapper shadow-lg">
  <div class="navbar-logo border-bottom">
  {{-- <div class="bg-warning"> --}}
      <a href="/">
        <span class="text-warning">




          <svg fill="#FFF7E9" width=30 height=30 role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>SlideShare</title><path d="M3.222.21C1.762.21 1.06 1.337 1.06 2.497v7.883c-.53-.502-1.096-.15-1.058.295.038.439.59 1.546 1.436 2.517.843.968 1.924 1.776 2.94 2.268a11.19 11.19 0 00-.491 3.598c.09 1.096.378 1.95.903 2.75.918 1.407 2.32 1.985 3.674 1.985 1.209 0 2.494-.563 2.698-2.373v-4.694c1.308.552 3.47.363 4.47-.39.19-.14.326-.207.416-.113.095.09.106.166-.113.439a5.6 5.6 0 01-3.103 1.965l.008 2.72a2.532 2.532 0 002.543 2.446c1.64.015 2.48-.556 3.148-1.164.632-.567 1.399-1.754 1.558-3.243a10.128 10.128 0 00-.454-3.926 10.358 10.358 0 002.948-2.268C23.213 12.5 24 11.185 24 10.675c0-.51-.556-.782-1.036-.302V2.497c0-.824-.48-2.29-2.135-2.29zm.423 1.35H20.41c.756 0 1.17.28 1.17 1.224v8.904a8.73 8.73 0 01-3.555 1.534c-1.606.352-2.94.087-3.666.148-.718.06-1.428.529-1.296 1.79-.491-.154-1.236-.683-1.682-1.117-.438-.428-.87-.711-1.534-.692-1.013.03-1.663.102-2.57.01a9.656 9.656 0 01-4.838-1.786V2.78c0-.87.378-1.22 1.206-1.22zm4.497 4.988a2.994 2.994 0 100 5.987 2.993 2.993 0 000-5.983zm7.71 0a2.994 2.994 0 100 5.987 2.993 2.993 0 000-5.983z"/></svg>
     
        </span>
        <div>
          <h4 class="text-white">Ponpes<span class="text-bold text-warning ">-KU</span></h4>
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

        <li class="nav-item nav-item-has-children {{ Request::is('surat/*') ? 'active':"" }}">
          <a
            href="#0"
            class="collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#ddmenu_2"
            aria-controls="ddmenu_2"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="icon">
              <svg
                width="22"
                height="22"
                viewBox="0 0 22 22"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z"
                />
              </svg>
            </span>
            <span class="text">Manajemen Surat</span>
          </a>
          <ul id="ddmenu_2" class="collapse dropdown-nav">
            <li>
              <a href="{{ route('suratmasuk.dayah') }}" class="text-primary"> Surat Masuk</a>
            </li>
            <li>
              <a href="{{ route('suratkeluar.dayah') }}" class="text-primary"> Surat Keluar </a>
            </li>
          </ul>
        </li>
        <li class="nav-item nav-item-has-children {{ Request::is('sarpras/*') ? 'active':"" }}">
          <a
            href="#0"
            class="collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#ddmenu_3"
            aria-controls="ddmenu_3"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="icon">
              <svg
                width="22"
                height="22"
                viewBox="0 0 22 22"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z"
                />
              </svg>
            </span>
            <span class="text">Sarpras</span>
          </a>
          <ul id="ddmenu_3" class="collapse dropdown-nav">
            <li>
              <a href="/sarpras/gedung" class="text-primary">Gedung</a>
            </li>
            <li>
              <a href="{{ route('suratkeluar.dayah') }}" class="text-primary"> Surat Keluar </a>
            </li>
          </ul>
        </li>
        <li class="nav-item {{ Request::is('rapat*') ? 'active' :"" }}">
          <a href="{{ route('rapat.master') }}">
            <span class="me-3"><i class="lni lni-consulting"></i></span>
            <span class="text">Manajemen Rapat</span>
          </a>
        </li>
        <li class="nav-item {{ Request::is('sdm*') ? 'active' :"" }}">
          <a href="/sdm">
            <span class="me-3"><i class="lni lni-consulting"></i></span>
            <span class="text">GTK / Kependidikan</span>
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