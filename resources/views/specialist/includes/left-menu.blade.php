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

        <li>
          <a href="{{ route('specialist.assigned.patients') }}">
            <i class="menu-icon fa fa-book zmdi-hc-lg"></i>
            <span class="menu-text">My Patients</span>
          </a>
        </li>

        <li>
          <a href="{{ route('specialist.appointments') }}">
            <i class="menu-icon fa fa-calendar zmdi-hc-lg"></i>
            <span class="menu-text">My Appointments</span>
          </a>
        </li>

        <li class="menu-separator"><hr></li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon fa fa-cogs zmdi-hc-lg"></i>
            <span class="menu-text">Profile</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="{{ route('specialist.edit.profileA') }}"><span class="menu-text">My Profile</span></a></li>
            
          </ul>
        </li>

      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside>