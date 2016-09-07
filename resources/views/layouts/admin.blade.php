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
  <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->
  <!-- BEGIN THEME GLOBAL STYLES -->
  <link href="../assets/global/css/components-md.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
  <!-- END THEME GLOBAL STYLES -->
  <!-- BEGIN THEME LAYOUT STYLES -->
  <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css"/>
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
                      <img src="../assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                  <div class="menu-toggler sidebar-toggler">
                      <span></span>
                  </div>
              </div>
              <!-- END LOGO -->
              <!-- BEGIN HEADER SEARCH BOX -->
              <form class="search-form " action="page_general_search_2.html" method="GET">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search..." name="query">
                      <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                              <i class="fa fa-search"></i>
                          </a>
                      </span>
                  </div>
              </form>
              <!-- END HEADER SEARCH BOX -->
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
                              <img alt="" class="img-circle" src="../assets/layouts/layout/img/avatar3_small.jpg" />
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
                                  <a href="page_user_login_1.html">
                                      <i class="icon-key"></i> Log Out </a>
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
          <!-- BEGIN SIDEBAR -->
          <div class="page-sidebar-wrapper">
              <div class="page-sidebar navbar-collapse collapse">
                  <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                      <li class="sidebar-toggler-wrapper hide">
                          <div class="sidebar-toggler">
                              <span></span>
                          </div>
                      </li>
                      <li class="sidebar-search-wrapper"> </li>
                      <li class="nav-item start ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-home"></i>
                              <span class="title">Dashboard</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item start ">
                                  <a href="index.html" class="nav-link ">
                                      <i class="icon-bar-chart"></i>
                                      <span class="title">Dashboard 1</span>
                                  </a>
                              </li>
                              <li class="nav-item start ">
                                  <a href="dashboard_2.html" class="nav-link ">
                                      <i class="icon-bulb"></i>
                                      <span class="title">Dashboard 2</span>
                                      <span class="badge badge-success">1</span>
                                  </a>
                              </li>
                              <li class="nav-item start ">
                                  <a href="dashboard_3.html" class="nav-link ">
                                      <i class="icon-graph"></i>
                                      <span class="title">Dashboard 3</span>
                                      <span class="badge badge-danger">5</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="heading">
                          <h3 class="uppercase">Features</h3>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-diamond"></i>
                              <span class="title">UI Features</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="ui_colors.html" class="nav-link ">
                                      <span class="title">Color Library</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_general.html" class="nav-link ">
                                      <span class="title">General Components</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_buttons.html" class="nav-link ">
                                      <span class="title">Buttons</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_buttons_spinner.html" class="nav-link ">
                                      <span class="title">Spinner Buttons</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_confirmations.html" class="nav-link ">
                                      <span class="title">Popover Confirmations</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_sweetalert.html" class="nav-link ">
                                      <span class="title">Bootstrap Sweet Alerts</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_icons.html" class="nav-link ">
                                      <span class="title">Font Icons</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_socicons.html" class="nav-link ">
                                      <span class="title">Social Icons</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_typography.html" class="nav-link ">
                                      <span class="title">Typography</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_tabs_accordions_navs.html" class="nav-link ">
                                      <span class="title">Tabs, Accordions & Navs</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_timeline.html" class="nav-link ">
                                      <span class="title">Timeline 1</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_timeline_2.html" class="nav-link ">
                                      <span class="title">Timeline 2</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_timeline_horizontal.html" class="nav-link ">
                                      <span class="title">Horizontal Timeline</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_tree.html" class="nav-link ">
                                      <span class="title">Tree View</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="javascript:;" class="nav-link nav-toggle">
                                      <span class="title">Page Progress Bar</span>
                                      <span class="arrow"></span>
                                  </a>
                                  <ul class="sub-menu">
                                      <li class="nav-item ">
                                          <a href="ui_page_progress_style_1.html" class="nav-link "> Flash </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="ui_page_progress_style_2.html" class="nav-link "> Big Counter </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_blockui.html" class="nav-link ">
                                      <span class="title">Block UI</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_bootstrap_growl.html" class="nav-link ">
                                      <span class="title">Bootstrap Growl Notifications</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_notific8.html" class="nav-link ">
                                      <span class="title">Notific8 Notifications</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_toastr.html" class="nav-link ">
                                      <span class="title">Toastr Notifications</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_bootbox.html" class="nav-link ">
                                      <span class="title">Bootbox Dialogs</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_alerts_api.html" class="nav-link ">
                                      <span class="title">Metronic Alerts API</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_session_timeout.html" class="nav-link ">
                                      <span class="title">Session Timeout</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_idle_timeout.html" class="nav-link ">
                                      <span class="title">User Idle Timeout</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_modals.html" class="nav-link ">
                                      <span class="title">Modals</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_extended_modals.html" class="nav-link ">
                                      <span class="title">Extended Modals</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_tiles.html" class="nav-link ">
                                      <span class="title">Tiles</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_datepaginator.html" class="nav-link ">
                                      <span class="title">Date Paginator</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ui_nestable.html" class="nav-link ">
                                      <span class="title">Nestable List</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-puzzle"></i>
                              <span class="title">Components</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="components_date_time_pickers.html" class="nav-link ">
                                      <span class="title">Date & Time Pickers</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_color_pickers.html" class="nav-link ">
                                      <span class="title">Color Pickers</span>
                                      <span class="badge badge-danger">2</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_select2.html" class="nav-link ">
                                      <span class="title">Select2 Dropdowns</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_bootstrap_multiselect_dropdown.html" class="nav-link ">
                                      <span class="title">Bootstrap Multiselect Dropdowns</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_bootstrap_select.html" class="nav-link ">
                                      <span class="title">Bootstrap Select</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_multi_select.html" class="nav-link ">
                                      <span class="title">Bootstrap Multiple Select</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_bootstrap_select_splitter.html" class="nav-link ">
                                      <span class="title">Select Splitter</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_clipboard.html" class="nav-link ">
                                      <span class="title">Clipboard</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_typeahead.html" class="nav-link ">
                                      <span class="title">Typeahead Autocomplete</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_bootstrap_tagsinput.html" class="nav-link ">
                                      <span class="title">Bootstrap Tagsinput</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_bootstrap_switch.html" class="nav-link ">
                                      <span class="title">Bootstrap Switch</span>
                                      <span class="badge badge-success">6</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_bootstrap_maxlength.html" class="nav-link ">
                                      <span class="title">Bootstrap Maxlength</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_bootstrap_fileinput.html" class="nav-link ">
                                      <span class="title">Bootstrap File Input</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_bootstrap_touchspin.html" class="nav-link ">
                                      <span class="title">Bootstrap Touchspin</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_form_tools.html" class="nav-link ">
                                      <span class="title">Form Widgets & Tools</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_context_menu.html" class="nav-link ">
                                      <span class="title">Context Menu</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_editors.html" class="nav-link ">
                                      <span class="title">Markdown & WYSIWYG Editors</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_code_editors.html" class="nav-link ">
                                      <span class="title">Code Editors</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_ion_sliders.html" class="nav-link ">
                                      <span class="title">Ion Range Sliders</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_noui_sliders.html" class="nav-link ">
                                      <span class="title">NoUI Range Sliders</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="components_knob_dials.html" class="nav-link ">
                                      <span class="title">Knob Circle Dials</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-settings"></i>
                              <span class="title">Form Stuff</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="form_controls.html" class="nav-link ">
                                      <span class="title">Bootstrap Form
                                          <br>Controls</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="form_controls_md.html" class="nav-link ">
                                      <span class="title">Material Design
                                          <br>Form Controls</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="form_validation.html" class="nav-link ">
                                      <span class="title">Form Validation</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="form_validation_states_md.html" class="nav-link ">
                                      <span class="title">Material Design
                                          <br>Form Validation States</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="form_validation_md.html" class="nav-link ">
                                      <span class="title">Material Design
                                          <br>Form Validation</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="form_layouts.html" class="nav-link ">
                                      <span class="title">Form Layouts</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="form_repeater.html" class="nav-link ">
                                      <span class="title">Form Repeater</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="form_input_mask.html" class="nav-link ">
                                      <span class="title">Form Input Mask</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="form_editable.html" class="nav-link ">
                                      <span class="title">Form X-editable</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="form_wizard.html" class="nav-link ">
                                      <span class="title">Form Wizard</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="form_icheck.html" class="nav-link ">
                                      <span class="title">iCheck Controls</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="form_image_crop.html" class="nav-link ">
                                      <span class="title">Image Cropping</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="form_fileupload.html" class="nav-link ">
                                      <span class="title">Multiple File Upload</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="form_dropzone.html" class="nav-link ">
                                      <span class="title">Dropzone File Upload</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-bulb"></i>
                              <span class="title">Elements</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="elements_steps.html" class="nav-link ">
                                      <span class="title">Steps</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="elements_lists.html" class="nav-link ">
                                      <span class="title">Lists</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="elements_ribbons.html" class="nav-link ">
                                      <span class="title">Ribbons</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="elements_overlay.html" class="nav-link ">
                                      <span class="title">Overlays</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="elements_cards.html" class="nav-link ">
                                      <span class="title">User Cards</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-briefcase"></i>
                              <span class="title">Tables</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="table_static_basic.html" class="nav-link ">
                                      <span class="title">Basic Tables</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="table_static_responsive.html" class="nav-link ">
                                      <span class="title">Responsive Tables</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="table_bootstrap.html" class="nav-link ">
                                      <span class="title">Bootstrap Tables</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="javascript:;" class="nav-link nav-toggle">
                                      <span class="title">Datatables</span>
                                      <span class="arrow"></span>
                                  </a>
                                  <ul class="sub-menu">
                                      <li class="nav-item ">
                                          <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="table_datatables_colreorder.html" class="nav-link "> Colreorder Extension </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="table_datatables_rowreorder.html" class="nav-link "> Rowreorder Extension </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="table_datatables_fixedheader.html" class="nav-link "> FixedHeader Extension </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="table_datatables_responsive.html" class="nav-link "> Responsive Extension </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="?p=" class="nav-link nav-toggle">
                              <i class="icon-wallet"></i>
                              <span class="title">Portlets</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="portlet_boxed.html" class="nav-link ">
                                      <span class="title">Boxed Portlets</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="portlet_light.html" class="nav-link ">
                                      <span class="title">Light Portlets</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="portlet_solid.html" class="nav-link ">
                                      <span class="title">Solid Portlets</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="portlet_ajax.html" class="nav-link ">
                                      <span class="title">Ajax Portlets</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="portlet_draggable.html" class="nav-link ">
                                      <span class="title">Draggable Portlets</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-bar-chart"></i>
                              <span class="title">Charts</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="charts_amcharts.html" class="nav-link ">
                                      <span class="title">amChart</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="charts_flotcharts.html" class="nav-link ">
                                      <span class="title">Flot Charts</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="charts_flowchart.html" class="nav-link ">
                                      <span class="title">Flow Charts</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="charts_google.html" class="nav-link ">
                                      <span class="title">Google Charts</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="charts_echarts.html" class="nav-link ">
                                      <span class="title">eCharts</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="charts_morris.html" class="nav-link ">
                                      <span class="title">Morris Charts</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="javascript:;" class="nav-link nav-toggle">
                                      <span class="title">HighCharts</span>
                                      <span class="arrow"></span>
                                  </a>
                                  <ul class="sub-menu">
                                      <li class="nav-item ">
                                          <a href="charts_highcharts.html" class="nav-link "> HighCharts </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="charts_highstock.html" class="nav-link "> HighStock </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="charts_highmaps.html" class="nav-link "> HighMaps </a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-pointer"></i>
                              <span class="title">Maps</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="maps_google.html" class="nav-link ">
                                      <span class="title">Google Maps</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="maps_vector.html" class="nav-link ">
                                      <span class="title">Vector Maps</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="heading">
                          <h3 class="uppercase">Layouts</h3>
                      </li>
                      <li class="nav-item  active open">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-layers"></i>
                              <span class="title">Page Layouts</span>
                              <span class="selected"></span>
                              <span class="arrow open"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="layout_blank_page.html" class="nav-link ">
                                      <span class="title">Blank Page</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_ajax_page.html" class="nav-link ">
                                      <span class="title">Ajax Content Layout</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_offcanvas_mobile_menu.html" class="nav-link ">
                                      <span class="title">Off-canvas Mobile Menu</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_classic_page_head.html" class="nav-link ">
                                      <span class="title">Classic Page Head</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_light_page_head.html" class="nav-link ">
                                      <span class="title">Light Page Head</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_content_grey.html" class="nav-link ">
                                      <span class="title">Grey Bg Content</span>
                                  </a>
                              </li>
                              <li class="nav-item  active open">
                                  <a href="layout_search_on_header_1.html" class="nav-link ">
                                      <span class="title">Search Box On Header 1</span>
                                      <span class="selected"></span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_search_on_header_2.html" class="nav-link ">
                                      <span class="title">Search Box On Header 2</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_language_bar.html" class="nav-link ">
                                      <span class="title">Header Language Bar</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_footer_fixed.html" class="nav-link ">
                                      <span class="title">Fixed Footer</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_boxed_page.html" class="nav-link ">
                                      <span class="title">Boxed Page</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-feed"></i>
                              <span class="title">Sidebar Layouts</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="layout_sidebar_menu_light.html" class="nav-link ">
                                      <span class="title">Light Sidebar Menu</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_sidebar_menu_hover.html" class="nav-link ">
                                      <span class="title">Hover Sidebar Menu</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_sidebar_search_1.html" class="nav-link ">
                                      <span class="title">Sidebar Search Option 1</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_sidebar_search_2.html" class="nav-link ">
                                      <span class="title">Sidebar Search Option 2</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_toggler_on_sidebar.html" class="nav-link ">
                                      <span class="title">Sidebar Toggler On Sidebar</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_sidebar_reversed.html" class="nav-link ">
                                      <span class="title">Reversed Sidebar Page</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_sidebar_fixed.html" class="nav-link ">
                                      <span class="title">Fixed Sidebar Layout</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_sidebar_closed.html" class="nav-link ">
                                      <span class="title">Closed Sidebar Layout</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-paper-plane"></i>
                              <span class="title">Horizontal Menu</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="layout_mega_menu_light.html" class="nav-link ">
                                      <span class="title">Light Mega Menu</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_mega_menu_dark.html" class="nav-link ">
                                      <span class="title">Dark Mega Menu</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_full_width.html" class="nav-link ">
                                      <span class="title">Full Width Layout</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class=" icon-wrench"></i>
                              <span class="title">Custom Layouts</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="layout_disabled_menu.html" class="nav-link ">
                                      <span class="title">Disabled Menu Links</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_full_height_portlet.html" class="nav-link ">
                                      <span class="title">Full Height Portlet</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="layout_full_height_content.html" class="nav-link ">
                                      <span class="title">Full Height Content</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="heading">
                          <h3 class="uppercase">Pages</h3>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-basket"></i>
                              <span class="title">eCommerce</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="ecommerce_index.html" class="nav-link ">
                                      <i class="icon-home"></i>
                                      <span class="title">Dashboard</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ecommerce_orders.html" class="nav-link ">
                                      <i class="icon-basket"></i>
                                      <span class="title">Orders</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ecommerce_orders_view.html" class="nav-link ">
                                      <i class="icon-tag"></i>
                                      <span class="title">Order View</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ecommerce_products.html" class="nav-link ">
                                      <i class="icon-graph"></i>
                                      <span class="title">Products</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="ecommerce_products_edit.html" class="nav-link ">
                                      <i class="icon-graph"></i>
                                      <span class="title">Product Edit</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-docs"></i>
                              <span class="title">Apps</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="app_todo.html" class="nav-link ">
                                      <i class="icon-clock"></i>
                                      <span class="title">Todo 1</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="app_todo_2.html" class="nav-link ">
                                      <i class="icon-check"></i>
                                      <span class="title">Todo 2</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="app_inbox.html" class="nav-link ">
                                      <i class="icon-envelope"></i>
                                      <span class="title">Inbox</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="app_calendar.html" class="nav-link ">
                                      <i class="icon-calendar"></i>
                                      <span class="title">Calendar</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="app_ticket.html" class="nav-link ">
                                      <i class="icon-notebook"></i>
                                      <span class="title">Support</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-user"></i>
                              <span class="title">User</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="page_user_profile_1.html" class="nav-link ">
                                      <i class="icon-user"></i>
                                      <span class="title">Profile 1</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_user_profile_1_account.html" class="nav-link ">
                                      <i class="icon-user-female"></i>
                                      <span class="title">Profile 1 Account</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_user_profile_1_help.html" class="nav-link ">
                                      <i class="icon-user-following"></i>
                                      <span class="title">Profile 1 Help</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_user_profile_2.html" class="nav-link ">
                                      <i class="icon-users"></i>
                                      <span class="title">Profile 2</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="javascript:;" class="nav-link nav-toggle">
                                      <i class="icon-notebook"></i>
                                      <span class="title">Login</span>
                                      <span class="arrow"></span>
                                  </a>
                                  <ul class="sub-menu">
                                      <li class="nav-item ">
                                          <a href="page_user_login_1.html" class="nav-link " target="_blank"> Login Page 1 </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="page_user_login_2.html" class="nav-link " target="_blank"> Login Page 2 </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="page_user_login_3.html" class="nav-link " target="_blank"> Login Page 3 </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="page_user_login_4.html" class="nav-link " target="_blank"> Login Page 4 </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="page_user_login_5.html" class="nav-link " target="_blank"> Login Page 5 </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="page_user_login_6.html" class="nav-link " target="_blank"> Login Page 6 </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_user_lock_1.html" class="nav-link " target="_blank">
                                      <i class="icon-lock"></i>
                                      <span class="title">Lock Screen 1</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_user_lock_2.html" class="nav-link " target="_blank">
                                      <i class="icon-lock-open"></i>
                                      <span class="title">Lock Screen 2</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-social-dribbble"></i>
                              <span class="title">General</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="page_general_about.html" class="nav-link ">
                                      <i class="icon-info"></i>
                                      <span class="title">About</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_general_contact.html" class="nav-link ">
                                      <i class="icon-call-end"></i>
                                      <span class="title">Contact</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="javascript:;" class="nav-link nav-toggle">
                                      <i class="icon-notebook"></i>
                                      <span class="title">Portfolio</span>
                                      <span class="arrow"></span>
                                  </a>
                                  <ul class="sub-menu">
                                      <li class="nav-item ">
                                          <a href="page_general_portfolio_1.html" class="nav-link "> Portfolio 1 </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="page_general_portfolio_2.html" class="nav-link "> Portfolio 2 </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="page_general_portfolio_3.html" class="nav-link "> Portfolio 3 </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="page_general_portfolio_4.html" class="nav-link "> Portfolio 4 </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item  ">
                                  <a href="javascript:;" class="nav-link nav-toggle">
                                      <i class="icon-magnifier"></i>
                                      <span class="title">Search</span>
                                      <span class="arrow"></span>
                                  </a>
                                  <ul class="sub-menu">
                                      <li class="nav-item ">
                                          <a href="page_general_search.html" class="nav-link "> Search 1 </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="page_general_search_2.html" class="nav-link "> Search 2 </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="page_general_search_3.html" class="nav-link "> Search 3 </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="page_general_search_4.html" class="nav-link "> Search 4 </a>
                                      </li>
                                      <li class="nav-item ">
                                          <a href="page_general_search_5.html" class="nav-link "> Search 5 </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_general_pricing.html" class="nav-link ">
                                      <i class="icon-tag"></i>
                                      <span class="title">Pricing</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_general_faq.html" class="nav-link ">
                                      <i class="icon-wrench"></i>
                                      <span class="title">FAQ</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_general_blog.html" class="nav-link ">
                                      <i class="icon-pencil"></i>
                                      <span class="title">Blog</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_general_blog_post.html" class="nav-link ">
                                      <i class="icon-note"></i>
                                      <span class="title">Blog Post</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_general_invoice.html" class="nav-link ">
                                      <i class="icon-envelope"></i>
                                      <span class="title">Invoice</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_general_invoice_2.html" class="nav-link ">
                                      <i class="icon-envelope"></i>
                                      <span class="title">Invoice 2</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item  ">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-settings"></i>
                              <span class="title">System</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item  ">
                                  <a href="page_cookie_consent_1.html" class="nav-link ">
                                      <span class="title">Cookie Consent 1</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_cookie_consent_2.html" class="nav-link ">
                                      <span class="title">Cookie Consent 2</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_system_coming_soon.html" class="nav-link " target="_blank">
                                      <span class="title">Coming Soon</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_system_404_1.html" class="nav-link ">
                                      <span class="title">404 Page 1</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_system_404_2.html" class="nav-link " target="_blank">
                                      <span class="title">404 Page 2</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_system_404_3.html" class="nav-link " target="_blank">
                                      <span class="title">404 Page 3</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_system_500_1.html" class="nav-link ">
                                      <span class="title">500 Page 1</span>
                                  </a>
                              </li>
                              <li class="nav-item  ">
                                  <a href="page_system_500_2.html" class="nav-link " target="_blank">
                                      <span class="title">500 Page 2</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item">
                          <a href="javascript:;" class="nav-link nav-toggle">
                              <i class="icon-folder"></i>
                              <span class="title">Multi Level Menu</span>
                              <span class="arrow "></span>
                          </a>
                          <ul class="sub-menu">
                              <li class="nav-item">
                                  <a href="javascript:;" class="nav-link nav-toggle">
                                      <i class="icon-settings"></i> Item 1
                                      <span class="arrow"></span>
                                  </a>
                                  <ul class="sub-menu">
                                      <li class="nav-item">
                                          <a href="javascript:;" target="_blank" class="nav-link">
                                              <i class="icon-user"></i> Arrow Toggle
                                              <span class="arrow nav-toggle"></span>
                                          </a>
                                          <ul class="sub-menu">
                                              <li class="nav-item">
                                                  <a href="#" class="nav-link">
                                                      <i class="icon-power"></i> Sample Link 1</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="#" class="nav-link">
                                                      <i class="icon-paper-plane"></i> Sample Link 1</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="#" class="nav-link">
                                                      <i class="icon-star"></i> Sample Link 1</a>
                                              </li>
                                          </ul>
                                      </li>
                                      <li class="nav-item">
                                          <a href="#" class="nav-link">
                                              <i class="icon-camera"></i> Sample Link 1</a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="#" class="nav-link">
                                              <i class="icon-link"></i> Sample Link 2</a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="#" class="nav-link">
                                              <i class="icon-pointer"></i> Sample Link 3</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item">
                                  <a href="javascript:;" target="_blank" class="nav-link">
                                      <i class="icon-globe"></i> Arrow Toggle
                                      <span class="arrow nav-toggle"></span>
                                  </a>
                                  <ul class="sub-menu">
                                      <li class="nav-item">
                                          <a href="#" class="nav-link">
                                              <i class="icon-tag"></i> Sample Link 1</a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="#" class="nav-link">
                                              <i class="icon-pencil"></i> Sample Link 1</a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="#" class="nav-link">
                                              <i class="icon-graph"></i> Sample Link 1</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item">
                                  <a href="#" class="nav-link">
                                      <i class="icon-bar-chart"></i> Item 3 </a>
                              </li>
                          </ul>
                      </li>
                  </ul>
                  <!-- END SIDEBAR MENU -->
                  <!-- END SIDEBAR MENU -->
              </div>
              <!-- END SIDEBAR -->
          </div>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="page-content-wrapper">
              <!-- BEGIN CONTENT BODY -->
              <div class="page-content">
                  <!-- BEGIN PAGE HEADER-->
                  <!-- BEGIN PAGE BAR -->
                  <div class="page-bar">
                      <ul class="page-breadcrumb">
                          <li>
                              <a href="index.html">Home</a>
                              <i class="fa fa-circle"></i>
                          </li>
                          <li>
                              <span>Page Layouts</span>
                          </li>
                      </ul>
                  </div>
                  <!-- END PAGE BAR -->
                  <!-- BEGIN PAGE TITLE-->
                  <h1 class="page-title"> Search Box On Header 1
                      <small>search box on header</small>
                  </h1>
                  <!-- END PAGE TITLE-->
                  <!-- END PAGE HEADER-->
                  <div class="note note-info">
                      <p> Collapsed quick search bar in the header. </p>
                  </div>
              </div>
              <!-- END CONTENT BODY -->
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
  <script src="../assets/global/plugins/respond.min.js"></script>
  <script src="../assets/global/plugins/excanvas.min.js"></script> 
  <script src="../assets/global/plugins/ie8.fix.min.js"></script> 
  <![endif]-->
  <!-- BEGIN CORE PLUGINS -->
  <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
  <!-- END CORE PLUGINS -->
  <!-- BEGIN THEME GLOBAL SCRIPTS -->
  <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
  <!-- END THEME GLOBAL SCRIPTS -->
  <!-- BEGIN THEME LAYOUT SCRIPTS -->
  <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
  <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
  <!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>