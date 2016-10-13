<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>后台管理系统</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="晚黎" name="iwanli" />
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
  <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->
  @yield('css')
  <!-- BEGIN THEME GLOBAL STYLES -->
  <link href="{{asset('admin/css/components-md.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('admin/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- END THEME GLOBAL STYLES -->
  <!-- BEGIN THEME LAYOUT STYLES -->
  <link href="{{asset('admin/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('admin/css/darkblue.min.css')}}" rel="stylesheet" type="text/css"/>
  <!-- END THEME LAYOUT STYLES -->
  <!-- <link rel="shortcut icon" href="favicon.ico" />  -->
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
  <div class="page-wrapper">
      <!-- BEGIN HEADER -->
      <div class="page-header navbar navbar-fixed-top">
          <!-- BEGIN HEADER INNER -->
          <div class="page-header-inner ">
              <!-- BEGIN LOGO -->
              <div class="page-logo">
                  <a href="index.html">
                      <img src="{{asset('admin/img/logo.png')}}" alt="logo" class="logo-default" /> </a>
                  <div class="menu-toggler sidebar-toggler">
                      <span></span>
                  </div>
              </div>
              <!-- END LOGO -->
              <!-- BEGIN RESPONSIVE MENU TOGGLER -->
              <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                  <span></span>
              </a>
              <!-- END RESPONSIVE MENU TOGGLER -->
              <!-- BEGIN TOP NAVIGATION MENU -->
              <div class="top-menu">
                  <ul class="nav navbar-nav pull-right">
                      <li class="dropdown dropdown-user">
                          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                              <span class="username username-hide-on-mobile"> Nick </span>
                              <i class="fa fa-angle-down"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-default">
                              <li>
                                  <a href="page_user_profile_1.html">
                                      <i class="icon-user"></i> My Profile </a>
                              </li>
                              <li>
                                  <a href="app_calendar.html">
                                      <i class="icon-calendar"></i> My Calendar </a>
                              </li>
                              <li>
                                  <a href="app_inbox.html">
                                      <i class="icon-envelope-open"></i> My Inbox
                                      <span class="badge badge-danger"> 3 </span>
                                  </a>
                              </li>
                              <li>
                                  <a href="app_todo.html">
                                      <i class="icon-rocket"></i> My Tasks
                                      <span class="badge badge-success"> 7 </span>
                                  </a>
                              </li>
                              <li class="divider"> </li>
                              <li>
                                  <a href="page_user_lock_1.html">
                                      <i class="icon-lock"></i> Lock Screen </a>
                              </li>
                              <li>
                                  <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      <i class="icon-key"></i> Logout </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </div>
              <!-- END TOP NAVIGATION MENU -->
          </div>
          <!-- END HEADER INNER -->
      </div>
      <!-- END HEADER -->
      <!-- BEGIN HEADER & CONTENT DIVIDER -->
      <div class="clearfix"> </div>
      <!-- END HEADER & CONTENT DIVIDER -->
      <!-- BEGIN CONTAINER -->
      <div class="page-container">
          @include('layouts.sidebar')
          <!-- BEGIN CONTENT -->
          <div class="page-content-wrapper">
              @yield('content')
          </div>
      </div>
      <!-- END CONTAINER -->
      <!-- BEGIN FOOTER -->
      <div class="page-footer">
          <div class="page-footer-inner"> 2016 &copy;
              <a target="_blank" href="http://iwanli.com">晚黎</a>
          </div>
          <div class="scroll-to-top">
              <i class="icon-arrow-up"></i>
          </div>
      </div>
      <!-- END FOOTER -->
  </div>
  <!--[if lt IE 9]>
  <script src="/vendors/respond.min.js"></script>
  <script src="/vendors/excanvas.min.js"></script>
  <script src="/vendors/ie8.fix.min.js"></script>
  <![endif]-->
  <!-- BEGIN CORE PLUGINS -->
  <script src="{{asset('vendors/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendors/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendors/jquery.blockui.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
  <!-- END CORE PLUGINS -->
  <!-- BEGIN THEME GLOBAL SCRIPTS -->
  @yield('js')
  <script src="{{asset('admin/js/app.min.js')}}" type="text/javascript"></script>
  <!-- END THEME GLOBAL SCRIPTS -->
  <!-- BEGIN THEME LAYOUT SCRIPTS -->
  <script src="{{asset('admin/js/layout.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/js/demo.min.js')}}" type="text/javascript"></script>
  <!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>
