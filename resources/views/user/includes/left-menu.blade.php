<aside id="menubar" class="menubar light">
  <div class="app-user">
    <div class="media">
      <div class="media-body">
        <div class="foldable">
          <h5><a href="javascript:void(0)" class="username">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a></h5>
          <ul>

          </ul>
        </div>
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">

        <li>
          <a href="{{ route('user.dashboard') }}">
            <i class="menu-icon fa fa-bars zmdi-hc-lg"></i>
            <span class="menu-text">Dashboard</span>
          </a>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon fa fa-users zmdi-hc-lg"></i>
            <span class="menu-text">Requests</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="{{ route('user.make.complaint') }}"><span class="menu-text">New Complaint </span></a></li>
            <li><a href="{{ route('user.complaints') }}"><span class="menu-text">Complaints </span></a></li>
          </ul>
        </li>

        <li class="menu-separator"><hr></li>
        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon fa fa-cogs zmdi-hc-lg"></i>
            <span class="menu-text">Profile</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="{{ route('user.edit.profile') }}"><span class="menu-text">My Profile</span></a></li>
            <li><a href="{{ route('user.medical.checks') }} "><span class="menu-text">Medical History </span></a></li>
            <hr>

            <li><a href="{{ route('change.password') }}"><span class="menu-text">Change Password</span></a></li>

          </ul>
        </li>

        <!-- <li>
          <a href="#">
            <i class="menu-icon fa fa-cogs zmdi-hc-lg"></i>
            <span class="menu-text">Account Setting</span>
          </a>
        </li> -->

      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside>
