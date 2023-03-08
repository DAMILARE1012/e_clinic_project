<aside id="menubar" class="menubar light">
  <div class="app-user">
    <div class="media">
      <div class="media-body">
        <div class="foldable">
          <h5><a href="javascript:void(0)" class="username">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a></h5>
          
        </div>
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">

        <li>
          <a href="{{ route('reception.dashboard') }} ">
            <i class="fa fa-bars"></i>
            <span class="menu-text">Dashboard</span>
          </a>
        </li>
        
        <li>
          <a href="{{ route('reception.complaints') }}">
            <i class="zmdi zmdi-receipt zmdi-hc-lg"></i>
            <span class="menu-text">Requests</span>
          </a>
        </li>

        <li class="menu-separator"><hr></li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="fa fa-user"></i>
            <span class="menu-text">Profile</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="{{ route('reception.edit.profile') }}"><span class="menu-text">My Profile</span></a></li>
            <li><a href="{{ route('change.password') }}"><span class="menu-text">Change Password</span></a></li>
          </ul>
        </li>
        <li class="menu-separator"><hr></li>

      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside>