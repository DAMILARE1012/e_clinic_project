<aside id="menubar" class="menubar light">
  <div class="app-user">
    <div class="media">
      <div class="media-body">
        <div class="foldable">
          <h5><a href="javascript:void(0)" class="username">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a></h5>
          <ul>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>{{ Auth::user()->role->name }}</small>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu animated flipInY">
                <li>
                  <a class="text-color" href="/index.html">
                    <span class="m-r-xs"><i class="fa fa-home"></i></span>
                    <span>Home</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="profile.html">
                    <span class="m-r-xs"><i class="fa fa-user"></i></span>
                    <span>Profile</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="settings.html">
                    <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                    <span>Settings</span>
                  </a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a class="text-color" href="logout.html">
                    <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                    <span>Home</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon fa fa-users zmdi-hc-lg"></i>
            <span class="menu-text">Manage Accounts</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="{{ route('admin.admins') }}"><span class="menu-text">Administrators</span></a></li>
            <li><a href="{{ route('admin.specialists') }}"><span class="menu-text">Specialists</span></a></li>
            <li><a href="{{ route('admin.users') }}"><span class="menu-text">Users</span></a></li>
          </ul>
        </li>

        <li class="menu-separator"><hr></li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon fa fa-cogs zmdi-hc-lg"></i>
            <span class="menu-text">Settings</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="#"><span class="menu-text">Site Settings</span></a></li>
          </ul>
        </li>

      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside>