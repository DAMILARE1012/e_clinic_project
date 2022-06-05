<!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('home') }}">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                    height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name">VIMONET Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">

                <li class="has-sub active">
                    <a class="sidenav-item-link" href="{{ route('home') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Home</span> <b class="caret"></b>
                    </a>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('about') }}">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">About</span> <b class="caret"></b>
                    </a>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('veterinarian') }}">
                        <i class="mdi mdi-chart-pie"></i>
                        <span class="nav-text">Veterinarian</span> <b class="caret"></b>
                    </a>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('services') }}">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Services</span> <b class="caret"></b>
                    </a>

                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('gallery') }}">
                        <i class="mdi mdi-book-open-page-variant"></i>
                        <span class="nav-text">Gallery</span> <b class="caret"></b>
                    </a>
                </li>
            </ul>

        </div>

        <hr class="separator" />
    </div>
</aside>
