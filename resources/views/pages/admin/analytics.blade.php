@extends('layouts.admin_master')

@section('content')
    
@endsection

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Sleek - Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">Sleek Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Dashboard</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse show"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="index.html">
                                <span class="nav-text">Ecommerce</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li  class="active" >
                              <a class="sidenav-item-link" href="analytics.html">
                                <span class="nav-text">Analytics</span>
                                
                                <span class="badge badge-success">new</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                

                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">UI Elements</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ui-elements"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                            aria-expanded="false" aria-controls="components">
                            <span class="nav-text">Components</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="components">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="alert.html">Alert</a>
                              </li>
                              
                              <li >
                                <a href="badge.html">Badge</a>
                              </li>
                              
                              <li >
                                <a href="breadcrumb.html">Breadcrumb</a>
                              </li>
                              
                              <li >
                                <a href="button-default.html">Button Default</a>
                              </li>
                              
                              <li >
                                <a href="button-dropdown.html">Button Dropdown</a>
                              </li>
                              
                              <li >
                                <a href="button-group.html">Button Group</a>
                              </li>
                              
                              <li >
                                <a href="button-social.html">Button Social</a>
                              </li>
                              
                              <li >
                                <a href="button-loading.html">Button Loading</a>
                              </li>
                              
                              <li >
                                <a href="card.html">Card</a>
                              </li>
                              
                              <li >
                                <a href="carousel.html">Carousel</a>
                              </li>
                              
                              <li >
                                <a href="collapse.html">Collapse</a>
                              </li>
                              
                              <li >
                                <a href="list-group.html">List Group</a>
                              </li>
                              
                              <li >
                                <a href="modal.html">Modal</a>
                              </li>
                              
                              <li >
                                <a href="pagination.html">Pagination</a>
                              </li>
                              
                              <li >
                                <a href="popover-tooltip.html">Popover & Tooltip</a>
                              </li>
                              
                              <li >
                                <a href="progress-bar.html">Progress Bar</a>
                              </li>
                              
                              <li >
                                <a href="spinner.html">Spinner</a>
                              </li>
                              
                              <li >
                                <a href="switcher.html">Switcher</a>
                              </li>
                              
                              <li >
                                <a href="table.html">Table</a>
                              </li>
                              
                              <li >
                                <a href="tab.html">Tab</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                            aria-expanded="false" aria-controls="icons">
                            <span class="nav-text">Icons</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="icons">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="material-icon.html">Material Icon</a>
                              </li>
                              
                              <li >
                                <a href="flag-icon.html">Flag Icon</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                            aria-expanded="false" aria-controls="forms">
                            <span class="nav-text">Forms</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="forms">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="basic-input.html">Basic Input</a>
                              </li>
                              
                              <li >
                                <a href="input-group.html">Input Group</a>
                              </li>
                              
                              <li >
                                <a href="checkbox-radio.html">Checkbox & Radio</a>
                              </li>
                              
                              <li >
                                <a href="form-validation.html">Form Validation</a>
                              </li>
                              
                              <li >
                                <a href="form-advance.html">Form Advance</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps"
                            aria-expanded="false" aria-controls="maps">
                            <span class="nav-text">Maps</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="maps">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="google-map.html">Google Map</a>
                              </li>
                              
                              <li >
                                <a href="vector-map.html">Vector Map</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#widgets"
                            aria-expanded="false" aria-controls="widgets">
                            <span class="nav-text">Widgets</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="widgets">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="general-widget.html">General Widget</a>
                              </li>
                              
                              <li >
                                <a href="chart-widget.html">Chart Widget</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                      </div>
                    </ul>
                  </li>
                

                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Charts</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="charts"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="chartjs.html">
                                <span class="nav-text">ChartJS</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                

                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Pages</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="pages"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="user-profile.html">
                                <span class="nav-text">User Profile</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                            aria-expanded="false" aria-controls="authentication">
                            <span class="nav-text">Authentication</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="authentication">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="sign-in.html">Sign In</a>
                              </li>
                              
                              <li >
                                <a href="sign-up.html">Sign Up</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                            aria-expanded="false" aria-controls="others">
                            <span class="nav-text">Others</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="others">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="invoice.html">invoice</a>
                              </li>
                              
                              <li >
                                <a href="error.html">Error</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                      </div>
                    </ul>
                  </li>
                

                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                      aria-expanded="false" aria-controls="documentation">
                      <i class="mdi mdi-book-open-page-variant"></i>
                      <span class="nav-text">Documentation</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="documentation"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li class="section-title">
                              Getting Started
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="introduction.html">
                                <span class="nav-text">Introduction</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="setup.html">
                                <span class="nav-text">Setup</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="customization.html">
                                <span class="nav-text">Customization</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li class="section-title">
                              Layouts
                            </li>
                          
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#headers"
                            aria-expanded="false" aria-controls="headers">
                            <span class="nav-text">Layout Headers</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="headers">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="header-fixed.html">Header Fixed</a>
                              </li>
                              
                              <li >
                                <a href="header-static.html">Header Static</a>
                              </li>
                              
                              <li >
                                <a href="header-light.html">Header Light</a>
                              </li>
                              
                              <li >
                                <a href="header-dark.html">Header Dark</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sidebar-navs"
                            aria-expanded="false" aria-controls="sidebar-navs">
                            <span class="nav-text">layout Sidebars</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="sidebar-navs">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="sidebar-open.html">Sidebar Open</a>
                              </li>
                              
                              <li >
                                <a href="sidebar-minimized.html">Sidebar Minimized</a>
                              </li>
                              
                              <li >
                                <a href="sidebar-offcanvas.html">Sidebar Offcanvas</a>
                              </li>
                              
                              <li >
                                <a href="sidebar-with-footer.html">Sidebar With Footer</a>
                              </li>
                              
                              <li >
                                <a href="sidebar-without-footer.html">Sidebar Without Footer</a>
                              </li>
                              
                              <li >
                                <a href="right-sidebar.html">Right Sidebar</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="rtl.html">
                                <span class="nav-text">RTL Direction</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                

                
              </ul>

            </div>

            <hr class="separator" />

            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                  Cpu Uses <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar active"
                    style="width: 40%;"
                    role="progressbar"
                  ></div>
                </div>
                <h6 class="text-uppercase">
                  Memory Uses <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar progress-bar-warning"
                    style="width: 65%;"
                    role="progressbar"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </aside>

      

      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- Github Link Button -->
                  <li class="github-link mr-3">
                    <a class="btn btn-outline-secondary btn-sm" href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
                      <span class="d-none d-md-inline-block mr-2">Source Code</span>
                      <i class="mdi mdi-github-circle"></i>
                    </a>

                  </li>
                  <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">Abdus Salam</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Abdus Salam <small class="pt-1">abdus@gmail.com</small>
                        </div>
                      </li>

                      <li>
                        <a href="profile.html">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <li>
                        <a href="email-inbox.html">
                          <i class="mdi mdi-email"></i> Message
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="signin.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>


        <div class="content-wrapper">
          <div class="content">			<div class="row">
				<div class="col-md-12">
					
                          <!-- User activity statistics -->
                          <div class="card card-default" id="user-activity">
                            <div class="row no-gutters">
                              <div class="col-xl-8">
                                <div class="border-right">
                                  <div class="card-header justify-content-between py-5">
                                    <h2>User Activity</h2>
                                    <div class="date-range-report ">
                                      <span></span>
                                    </div>
                                  </div>
                                  <ul class="nav nav-tabs nav-style-border justify-content-between justify-content-xl-start border-bottom" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active pb-md-0" data-toggle="tab" href="#user" role="tab" aria-controls="" aria-selected="true">
                                        <span class="type-name">User</span>
                                        <h4 class="d-inline-block mr-2 mb-3">5248</h4>
                                        <span class="text-success ">5%
                                          <i class="mdi mdi-arrow-up-bold"></i>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link pb-md-0" data-toggle="tab" href="#session" role="tab" aria-controls="" aria-selected="false">
                                        <span class="type-name">Sessions</span>
                                        <h4 class="d-inline-block mr-2 mb-3">638</h4>
                                        <span class="text-success ">20%
                                          <i class="mdi mdi-arrow-up-bold"></i>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link pb-md-0" data-toggle="tab" href="#bounce" role="tab" aria-controls="" aria-selected="false">
                                        <span class="type-name">Bounce Rate</span>
                                        <h4 class="d-inline-block mr-2 mb-3">36.9%</h4>
                                        <span class="text-danger ">7%
                                          <i class="mdi mdi-arrow-down-bold"></i>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link pb-md-0" data-toggle="tab" href="#session-duration" role="tab" aria-controls="" aria-selected="false">
                                        <span class="type-name">Session Duration</span>
                                        <h4 class="d-inline-block mr-2 mb-3">4m 49s</h4>
                                        <span class="text-success ">15%
                                          <i class="mdi mdi-arrow-up-bold"></i>
                                        </span>
                                      </a>
                                    </li>
                                  </ul>
                                  <div class="card-body">
                                    <div class="tab-content" id="myTabContent">
                                      <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="home-tab">
                                          <canvas id="activity" class="chartjs"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer d-flex flex-wrap bg-white border-top">
                                    <a href="#" class="text-uppercase py-3">Audience Overview</a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-4">
                                <div data-scroll-height="642">
                                  <div class="card-header pt-5 flex-column align-items-start">
                                    <h4 class="text-dark mb-4">Current Users</h4>
                                    <div class="mb-3">
                                      <p class="my-2">Ave Page views per minute</p>
                                      <h4>09</h4>
                                    </div>
                                  </div>
                                  <div class="border-bottom"></div>
                                  <div class="card-body">
                                    <canvas id="currentUser" class="chartjs"></canvas>
                                  </div>
                                  <div class="card-footer d-flex flex-wrap bg-white border-top">
                                    <a href="#" class="text-uppercase py-3">Audience Overview</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

				</div>
			</div>

			<div class="row">
				<div class="col-xl-6 col-12">
					                        
                          <!-- User Acquisition Statistics -->
                          <div class="card card-default" id="user-acquisition">
                            <div class="card-header justify-content-between pb-5">
                              <h2>User Acquisition</h2>
                            </div>

                            <ul class="nav nav-tabs nav-style-border justify-content-between justify-content-lg-start border-bottom" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#traffic-channel" role="tab" aria-controls="" aria-selected="true">Traffic Channel</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#source-medium" role="tab" aria-controls="" aria-selected="false">Source / Medium </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#referrals" role="tab" aria-controls="" aria-selected="false">Referrals</a>
                              </li>
                            </ul>
                            <div class="tab-content p-3 p-lg-5" id="myTabContent">
                              <div class="tab-pane fade show active pb-4" id="source-medium" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="mb-5" style=" height:32vh">
                                  <canvas id="acquisition" class="chartjs2"></canvas>
                                  <div id="acqLegend" class="customLegend mb-2"></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-footer d-flex flex-wrap bg-white">
                              <a href="#" class="text-uppercase py-3">Audience Overview</a>
                            </div>
                          </div>

				</div>
				<div class="col-xl-6 col-12">
					
                          <!-- World Chart -->

                          <div class="card card-default" id="analytics-country">
                            <div class="card-header justify-content-between">
                              <h2>Sessions by Country</h2>
                              <div class="date-range-report ">
                                <span></span>
                              </div>
                            </div>
                            <div class="card-body vector-map-world-2">
                              <div id="analytic-world" style="height: 100%; width: 100%;"></div>
                            </div>
                            <div class="border-top">
                              <div class="row no-gutters">
                                <div class="col-lg-6">
                                  <div class="world-data-chart border-bottom py-4">
                                    <canvas id="hbar1" class="chartjs"></canvas>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="world-data-chart py-4 ">
                                    <canvas id="hbar2" class="chartjs"></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-footer d-flex flex-wrap bg-white">
                              <a href="#" class="text-uppercase py-3">Audience Overview</a>
                            </div>
                          </div>

				</div>
			</div>

			<div class="row">
				<div class=" col-xl-4 ">
					               
                          <!-- Sessions By device Chart -->
                          <div class="card card-default" id="analytics-device" data-scroll-height="580">
                            <div class="card-header justify-content-between">
                              <h2>Sessions by Device</h2>
                            </div>
                            <div class="card-body">
                              <div class="pb-5">
                                <canvas id="deviceChart"></canvas>
                              </div>
                              <div class="row no-gutters justify-content-center">
                                <div class="col-4 col-lg-3">
                                  <div class="card card-icon-info text-center border-0">
                                    <i class="mdi mdi-desktop-mac"></i>
                                    <p class="pt-3 pb-1">Desktop</p>
                                    <h4 class="text-dark pb-1">60.0%</h4>
                                    <span class="text-danger">1.5% <i class="mdi mdi-arrow-down-bold"></i></span>
                                  </div>
                                </div>
                                <div class="col-4 col-lg-3">
                                  <div class="card card-icon-info text-center border-0">
                                    <i class="mdi mdi-tablet-ipad"></i>
                                    <p class="pt-3 pb-1">Tablet</p>
                                    <h4 class="text-dark pb-1">15.0%</h4>
                                    <span class="text-success">1.5% <i class="mdi mdi-arrow-up-bold"></i></span>
                                  </div>
                                </div>
                                <div class="col-4 col-lg-3">
                                  <div class="card card-icon-info text-center border-0">
                                    <i class="mdi mdi-cellphone-android fa-3x"></i>
                                    <p class="pt-3 pb-1">Mobile</p>
                                    <h4 class="text-dark pb-1">25.0%</h4>
                                    <span class="text-success">1.5% <i class="mdi mdi-arrow-up-bold"></i></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

				</div>
				<div class=" col-xl-4 ">
					
                          <!-- Page Views  -->
                          <div class="card card-default table-borderless" id="page-views" data-scroll-height="580">
                            <div class="card-header justify-content-between">
                              <h2>Page Views</h2>
                              <div class="date-range-report ">
                                <span></span>
                              </div>
                            </div>
                            <div class="card-body slim-scroll py-0">
                              <table class="table page-view-table ">
                                <thead>
                                  <tr>
                                    <th>Page</th>
                                    <th>Page Views</th>
                                    <th>Value</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-primary"><a class="link" href="analytics.html">/analytics.html</a></td>
                                    <td>521</td>
                                    <td>$0.00</td>
                                  </tr>
                                  <tr>
                                    <td class="text-primary"><a class="link" href="email-inbox.html">/email-inbox.html</a></td>
                                    <td>356</td>
                                    <td>$0.00</td>
                                  </tr>
                                  <tr>
                                    <td class="text-primary"><a class="link" href="email-compose.html">/email-compose.html</a></td>
                                    <td>254</td>
                                    <td>$0.00</td>
                                  </tr>
                                  <tr>
                                    <td class="text-primary"><a class="link" href="charts-chartjs.html">/charts-chartjs.html</a></td>
                                    <td>126</td>
                                    <td>$0.00</td>
                                  </tr>
                                  <tr>
                                    <td class="text-primary"><a class="link" href="profile.html">/profile.html</a></td>
                                    <td>50</td>
                                    <td>$0.00</td>
                                  </tr>
                                  <tr>
                                    <td class="text-primary"><a class="link" href="general-widgets.html">/general-widgets.html</a></td>
                                    <td>50</td>
                                    <td>$0.00</td>
                                  </tr>
                                  <tr>
                                    <td class="text-primary"><a class="link" href="card.html">/card.html</a></td>
                                    <td>590</td>
                                    <td>$0.00</td>
                                  </tr>
                                  <tr>
                                    <td class="text-primary"><a class="link" href="email-inbox.html">/email-inbox.html</a></td>
                                    <td>29</td>
                                    <td>$0.00</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="card-footer bg-white py-4">
                              <a href="#" class="text-uppercase">Audience Overview</a>
                            </div>
                          </div>

				</div>
				<div class=" col-xl-4 ">
					<!-- Notification Table -->
					<div class="card card-default" data-scroll-height="580">
						<div class="card-header justify-content-between">
							<h2>Latest Notifications</h2>
							<div>
								<button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
								<div class="dropdown show d-inline-block widget-dropdown">
									<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-notification">
										<li class="dropdown-item"><a href="#">Action</a></li>
										<li class="dropdown-item"><a href="#">Another action</a></li>
										<li class="dropdown-item"><a href="#">Something else here</a></li>
									</ul>
								</div>
							</div>

						</div>
						<div class="card-body slim-scroll py-4">
							<div class="media pb-4 align-items-center justify-content-between">
								<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
									<i class="mdi mdi-cart-outline font-size-20"></i>
								</div>
								<div class="media-body pr-3 ">
									<a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Order</a>
									<p >Selena has placed an new order</p>
								</div>
								<span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
							</div>

							<div class="media py-3 align-items-center justify-content-between">
								<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
									<i class="mdi mdi-email-outline font-size-20"></i>
								</div>
								<div class="media-body pr-3">
									<a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Enquiry</a>
									<p >Phileine has placed an new order</p>
								</div>
								<span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9 AM</span>
							</div>


							<div class="media py-3 align-items-center justify-content-between">
								<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
									<i class="mdi mdi-stack-exchange font-size-20"></i>
								</div>
								<div class="media-body pr-3">
									<a class="mt-0 mb-1 font-size-15 text-dark" href="#">Support Ticket</a>
									<p >Emma has placed an new order</p>
								</div>
								<span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
							</div>

							<div class="media py-3 align-items-center justify-content-between">
								<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
									<i class="mdi mdi-cart-outline font-size-20"></i>
								</div>
								<div class="media-body pr-3">
									<a class="mt-0 mb-1 font-size-15 text-dark" href="#">New order</a>
									<p >Ryan has placed an new order</p>
								</div>
								<span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
							</div>

							<div class="media py-3 align-items-center justify-content-between">
								<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
									<i class="mdi mdi-calendar-blank font-size-20"></i>
								</div>
								<div class="media-body pr-3">
									<a class="mt-0 mb-1 font-size-15 text-dark" href="">Comapny Meetup</a>
									<p >Phileine has placed an new order</p>
								</div>
								<span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
							</div>

							<div class="media py-3 align-items-center justify-content-between">
								<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
									<i class="mdi mdi-stack-exchange font-size-20"></i>
								</div>
								<div class="media-body pr-3">
									<a class="mt-0 mb-1 font-size-15 text-dark" href="#">Support Ticket</a>
									<p >Emma has placed an new order</p>
								</div>
								<span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
							</div>

							<div class="media py-3 align-items-center justify-content-between">
								<div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
									<i class="mdi mdi-email-outline font-size-20"></i>
								</div>
								<div class="media-body pr-3">
									<a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Enquiry</a>
									<p >Phileine has placed an new order</p>
								</div>
								<span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9 AM</span>
							</div>

						</div>
						<div class="mt-3"></div>
					</div>

				</div>
			</div>
</div>

          


        </div>

                  <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a
                >.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/toaster/toastr.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/charts/Chart.min.js"></script>
<script src="assets/plugins/ladda/spin.min.js"></script>
<script src="assets/plugins/ladda/ladda.min.js"></script>
<script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/js/sleek.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/date-range.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/custom.js"></script>




  </body>
</html>
