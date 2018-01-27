<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Apiruh | Employee Profile</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="../../vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet"/>
    <link href="../../vendors/themify-icons/css/themify-icons.css" rel="stylesheet"/>
    <link href="../../vendors/animate.css/animate.min.css" rel="stylesheet"/>
    <link href="../../vendors/toastr/toastr.min.css" rel="stylesheet"/>
    <!-- PLUGINS STYLES-->
    <!-- THEME STYLES-->
    <link href="assets/css/main.css" rel="stylesheet"/>
    <!-- PAGE LEVEL STYLES-->
    <link href="./assets/css/pages/profile.css" rel="stylesheet"/>
  </head>
  <body class="fixed-navbar sidebar-mini">
    <div class="page-wrapper">
      <!-- START HEADER-->
      <header class="header clf">
        <div class="page-brand"><a class="link" href="index.html"><span class="brand">Admin<span class="brand-tip">Ca</span></span><span class="brand-mini">AC</span></a></div>
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav pull-left navbar-toolbar">
          <li><a class="nav-link sidebar-toggler js-sidebar-toggler"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a></li>
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav pull-right navbar-toolbar">
          <li class="timeout-toggler"><a class="nav-link" data-toggle="modal" data-target="#session-dialog"><i class="fa fa-android timeout-toggler-icon rel"><span class="notify-signal"></span></i></a></li>
          <li class="dropdown dropdown-inbox"><a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="envelope-badge">9</span></a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
              <li class="dropdown-menu-header">
                <div><span><strong>9 New</strong> Messages</span><a class="pull-right" href="mailbox.html">view all</a></div>
              </li>
              <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                <div><a class="list-group-item">
                    <div class="media">
                      <div class="media-img"><img class="img-circle" src="./assets/img/users/u1.jpg"/>
                      </div>
                      <div class="media-body">
                        <div class="font-strong">Jeanne Gonzalez</div>
                        <div class="font-13">Your proposal interested me.</div><small class="text-muted">Just now</small>
                      </div>
                    </div></a><a class="list-group-item">
                    <div class="media">
                      <div class="media-img"><img class="img-circle" src="./assets/img/users/u2.jpg"/>
                      </div>
                      <div class="media-body">
                        <div class="font-strong">Becky Brooks</div>
                        <div class="font-13">Lorem Ipsum is simply.</div><small class="text-muted">18 mins</small>
                      </div>
                    </div></a><a class="list-group-item">
                    <div class="media">
                      <div class="media-img"><img class="img-circle" src="./assets/img/users/u3.jpg"/>
                      </div>
                      <div class="media-body">
                        <div class="font-strong">Frank Cruz</div>
                        <div class="font-13">Lorem Ipsum is simply.</div><small class="text-muted">18 mins</small>
                      </div>
                    </div></a><a class="list-group-item">
                    <div class="media">
                      <div class="media-img"><img class="img-circle" src="./assets/img/users/u4.jpg"/>
                      </div>
                      <div class="media-body">
                        <div class="font-strong">Rose Pearson</div>
                        <div class="font-13">Lorem Ipsum is simply.</div><small class="text-muted">3 hrs</small>
                      </div>
                    </div></a></div>
              </li>
            </ul>
          </li>
          <li class="dropdown dropdown-notification"><a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell rel"><span class="notify-signal"></span></i></a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
              <li class="dropdown-menu-header">
                <div><span><strong>5 New</strong> Notifications</span><a class="pull-right" href="javascript:;">view all</a></div>
              </li>
              <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                <div><a class="list-group-item">
                    <div class="media">
                      <div class="media-img"><span class="badge badge-success badge-circle-big"><i class="fa fa-check"></i></span></div>
                      <div class="media-body">
                        <div class="font-13">4 task compiled</div><small class="text-muted">22 mins</small>
                      </div>
                    </div></a><a class="list-group-item">
                    <div class="media">
                      <div class="media-img"><span class="badge badge-default badge-circle-big"><i class="fa fa-shopping-basket"></i></span></div>
                      <div class="media-body">
                        <div class="font-13">You have 12 new orders</div><small class="text-muted">40 mins</small>
                      </div>
                    </div></a><a class="list-group-item">
                    <div class="media">
                      <div class="media-img"><span class="badge badge-danger badge-circle-big"><i class="fa fa-bolt"></i></span></div>
                      <div class="media-body">
                        <div class="font-13">Server #7 rebooted</div><small class="text-muted">2 hrs</small>
                      </div>
                    </div></a><a class="list-group-item">
                    <div class="media">
                      <div class="media-img"><span class="badge badge-success badge-circle-big"><i class="fa fa-user"></i></span></div>
                      <div class="media-body">
                        <div class="font-13">New user registered</div><small class="text-muted">2 hrs</small>
                      </div>
                    </div></a></div>
              </li>
            </ul>
          </li>
          <li class="dropdown dropdown-user"><a class="nav-link dropdown-toggle link" data-toggle="dropdown"><span>Super User</span><img src="http://demo.neontheme.com/assets/images/thumb-1@2x.png"></a>
            <ul class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="profile.html"><i class="ti-user"></i>Profile</a><a class="dropdown-item" href="profile.html"><i class="ti-settings"></i>Settings</a><a class="dropdown-item" href="javascript:;"><i class="ti-support"></i>Support</a>
              <li class="dropdown-divider"></li><a class="dropdown-item" href="login.html"><i class="ti-power-off"></i>Logout</a>
            </ul>
          </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
      </header>
      <!-- END HEADER-->
      <!-- START SIDEBAR-->
      <nav class="page-sidebar" id="sidebar">
        <div id="sidebar-collapse">
          <ul class="side-menu metismenu">
                  <li><a href="href=&quot;javascript:;&quot;"><i class="sidebar-item-icon fa fa-th-large"></i><span class="nav-label">Dashboards</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                      <li><a href="index.html">Dashboard v1</a>
                      </li>
                      <li><a href="dashboard_2.html">Dashboard v2</a>
                      </li>
                      <li><a href="dashboard_3.html">Dashboard v3</a>
                      </li>
                      <li><a href="dashboard_4.html">Dashboard v4</a>
                      </li>
                      <li><a href="dashboard_5.html">Dashboard v5</a>
                      </li>
                    </ul>
                  </li>
                  <li class="heading">FEATURES</li>
                  <li><a href="href=&quot;javascript:;&quot;"><i class="sidebar-item-icon fa fa-bookmark"></i><span class="nav-label">Basic UI</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                      <li><a href="colors.html">Colors</a>
                      </li>
                      <li><a href="typography.html">Typography</a>
                      </li>
                      <li><a href="panels.html">Panels</a>
                      </li>
                      <li><a href="buttons.html">Buttons</a>
                      </li>
                      <li><a href="tabs.html">Tabs</a>
                      </li>
                      <li><a href="alerts_tooltips.html">Alerts &amp; Tooltips</a>
                      </li>
                      <li><a href="badges_progress.html">Badges &amp; Progress</a>
                      </li>
                      <li><a href="lists.html">List</a>
                      </li>
                      <li><a href="cards.html">Card</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="href=&quot;javascript:;&quot;"><i class="sidebar-item-icon fa fa-cubes"></i><span class="nav-label">Components</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                      <li><a href="toastr.html">Toastr Notifications</a>
                      </li>
                      <li><a href="sweetalert.html">Sweet Alert</a>
                      </li>
                      <li><a href="alertify.html">Alertify</a>
                      </li>
                      <li><a href="bootbox.html">Bootbox Dialogs</a>
                      </li>
                      <li><a href="idle_timer.html">Idle timer</a>
                      </li>
                      <li><a href="session_timeout.html">Session Timeout</a>
                      </li>
                      <li><a href="code_editor.html">Code Editor</a>
                      </li>
                      <li><a href="tree_view.html">Tree View</a>
                      </li>
                      <li><a href="nestable.html">Nestable List</a>
                      </li>
                      <li><a href="clipboard.html">Clipboard</a>
                      </li>
                      <li><a href="masonry.html">Masonry</a>
                      </li>
                      <li><a href="pdf_viewer.html">PDF viewer</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="href=&quot;javascript:;&quot;"><i class="sidebar-item-icon fa fa-edit"></i><span class="nav-label">Forms</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                      <li><a href="form_basic.html">Basic Forms</a>
                      </li>
                      <li><a href="form_advanced.html">Advanced Plugins</a>
                      </li>
                      <li><a href="form_masks.html">Form input masks</a>
                      </li>
                      <li><a href="form_validation.html">Form Validation</a>
                      </li>
                      <li><a href="text_editors.html">Text Editors</a>
                      </li>
                      <li><a href="form_dropzone.html">Dropzone File Upload</a>
                      </li>
                      <li><a href="image_cropping.html">Image Cropping</a>
                      </li>
                      <li><a href="autocomplete.html">Autocomplete</a>
                      </li>
                      <li><a href="form_wizard.html">Form Wizard</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="href=&quot;javascript:;&quot;"><i class="sidebar-item-icon fa fa-table"></i><span class="nav-label">Tables</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                      <li><a href="table_basic.html">Basic Tables</a>
                      </li>
                      <li><a href="table_bootstrap.html">Bootstrap Tables</a>
                      </li>
                      <li><a href="datatables.html">Datatables</a>
                      </li>
                      <li><a href="footable.html">Foo Tables</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="href=&quot;javascript:;&quot;"><i class="sidebar-item-icon fa fa-bar-chart"></i><span class="nav-label">Charts</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                      <li><a href="charts_flot.html">Flot Charts</a>
                      </li>
                      <li><a href="charts_morris.html">Morris Charts</a>
                      </li>
                      <li><a href="chartjs.html">Chart.js</a>
                      </li>
                      <li><a href="c3.html">C3 Charts</a>
                      </li>
                      <li><a href="charts_peity.html">Peity Charts</a>
                      </li>
                      <li><a href="charts_sparkline.html">Sparkline Charts</a>
                      </li>
                      <li><a href="charts_rickshaw.html">Rickshaw Charts</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="widgets.html"><i class="sidebar-item-icon fa fa-puzzle-piece"></i><span class="nav-label">Widgets</span></a></li>
                  <li><a href="href=&quot;javascript:;&quot;"><i class="sidebar-item-icon fa fa-map"></i><span class="nav-label">Maps</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                      <li><a href="maps_google.html">Google maps</a>
                      </li>
                      <li><a href="datamaps.html">Datamaps</a>
                      </li>
                      <li><a href="maps_vector.html">Vector maps</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="icons.html"><i class="sidebar-item-icon fa fa-smile-o"></i><span class="nav-label">Icons</span></a></li>
                  <li class="heading">PAGES</li>
                  <li><a href="href=&quot;javascript:;&quot;"><i class="sidebar-item-icon fa fa-envelope"></i><span class="nav-label">Mailbox</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                      <li><a href="mailbox.html">Inbox</a>
                      </li>
                      <li><a href="mail_view.html">Mail view</a>
                      </li>
                      <li><a href="mail_compose.html">Compose mail</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="href=&quot;javascript:;&quot;"><i class="sidebar-item-icon fa fa-pencil"></i><span class="nav-label">Blog</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                      <li><a href="blog_list.html">List</a>
                      </li>
                      <li><a href="article.html">Article</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="href=&quot;javascript:;&quot;"><i class="sidebar-item-icon fa fa-shopping-cart"></i><span class="nav-label">E-Commerce</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                      <li><a href="ecommerce_products_board.html">Products board</a>
                      </li>
                      <li><a href="ecommerce_products_list.html">Products list</a>
                      </li>
                      <li><a href="ecommerce_product_edit.html">Product edit</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="calendar.html"><i class="sidebar-item-icon fa fa-calendar"></i><span class="nav-label">Calendar</span></a></li>
                  <li class="active"><a href="href=&quot;javascript:;&quot;"><i class="sidebar-item-icon fa fa-file-text"></i><span class="nav-label">Pages</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse in">
                      <li><a href="invoice.html">Invoice</a>
                      </li>
                      <li><a href="timeline.html">Timeline</a>
                      </li>
                      <li><a href="timeline_horizontal.html">Horizontal timeline</a>
                      </li>
                      <li><a href="faq.html">FAQ</a>
                      </li>
                      <li><a href="search.html">Search</a>
                      </li>
                      <li><a class="active" href="profile.html">Profile</a>
                      </li>
                      <li><a href="login.html">Login</a>
                      </li>
                      <li><a href="login_dark.html">Login dark</a>
                      </li>
                      <li><a href="register.html">Register</a>
                      </li>
                      <li><a href="register_dark.html">Register dark</a>
                      </li>
                      <li><a href="lockscreen.html">Lockscreen</a>
                      </li>
                      <li><a href="forgot_password.html">Forgot password</a>
                      </li>
                      <li><a href="error_404.html">404 error</a>
                      </li>
                      <li><a href="error_500.html">500 error</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="href=&quot;javascript:;&quot;"><i class="sidebar-item-icon fa fa-sitemap"></i><span class="nav-label">Menu Levels</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                      <li><a href="javascript:;">Level 2</a>
                      </li>
                      <li><a href="href=&quot;javascript:;&quot;"><span class="nav-label">Level 2</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-3-level collapse">
                          <li><a href="javascript:;">Level 3</a></li>
                          <li><a href="javascript:;">Level 3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
          </ul>
          <div class="sidebar-footer"><a href="javascript:;"><i class="fa fa-bullhorn"></i></a><a href="calendar.html"><i class="fa fa-calendar"></i></a><a href="javascript:;"><i class="fa fa-commenting"></i></a><a href="login.html"><i class="fa fa-power-off"></i></a></div>
        </div>
      </nav>
      <!-- END SIDEBAR-->
      <div class="wrapper content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
          <h1 class="page-title">Profile</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </div>
        <div class="page-content fade-in-up">
          <div class="row">
            <div class="col-lg-3 col-md-4">
              <div class="ibox">
                <div class="ibox-body text-center">
                  <div class="m-t-20"><img class="img-circle" src="./assets/img/users/u3.jpg"/>
                  </div>
                  <h5 class="font-strong m-b-10 m-t-10">Frank Cruz</h5>
                  <div class="m-b-20 text-muted">Web Developer</div>
                  <div class="profile-social m-b-20"><a href="javascript:;"><i class="fa fa-twitter"></i></a><a href="javascript:;"><i class="fa fa-facebook"></i></a><a href="javascript:;"><i class="fa fa-pinterest"></i></a><a href="javascript:;"><i class="fa fa-dribbble"></i></a></div>
                  <div>
                    <button class="btn btn-info btn-rounded m-b-5"><i class="fa fa-plus"></i> Follow</button>
                    <button class="btn btn-default btn-rounded m-b-5">Message</button>
                  </div>
                </div>
              </div>
              <div class="ibox">
                <div class="ibox-body">
                  <div class="row text-center m-b-20">
                    <div class="col-4">
                      <div class="font-24 profile-stat-count">140</div>
                      <div class="text-muted">Followers</div>
                    </div>
                    <div class="col-4">
                      <div class="font-24 profile-stat-count">$780</div>
                      <div class="text-muted">Sales</div>
                    </div>
                    <div class="col-4">
                      <div class="font-24 profile-stat-count">15</div>
                      <div class="text-muted">Projects</div>
                    </div>
                  </div>
                  <p class="text-center">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been</p>
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-8">
              <div class="ibox">
                <div class="ibox-body">
                  <ul class="nav nav-tabs tabs-line">
                    <li class="nav-item"><a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-bar-chart"></i> Overview</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-settings"></i> Settings</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab-3" data-toggle="tab"><i class="ti-announcement"></i> Feeds</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-1">
                      <h5 class="text-info m-b-20 m-t-20"><i class="fa fa-line-chart"></i> Month Statistics</h5>
                      <div class="m-b-20">
                        <canvas id="line_chart" style="height:260px;"></canvas>
                      </div>
                      <div class="row">
                        <div class="col-md-6" style="border-right: 1px solid #eee;">
                          <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-bar-chart"></i> Month Statistics</h5>
                          <div class="h2 m-0">$12,400<sup>.60</sup></div>
                          <div><small>Month income</small></div>
                          <div class="m-t-20 m-b-20">
                            <div class="h4 m-0">120</div>
                            <div class="d-flex justify-content-between"><small>Month income</small><span class="text-success font-12"><i class="fa fa-level-up"></i> +24%</span></div>
                            <div class="progress m-t-5">
                              <div class="progress-bar progress-bar-success" role="progressbar" style="width:50%; height:5px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="m-b-20">
                            <div class="h4 m-0">86</div>
                            <div class="d-flex justify-content-between"><small>Month income</small><span class="text-warning font-12"><i class="fa fa-level-down"></i> -12%</span></div>
                            <div class="progress m-t-5">
                              <div class="progress-bar progress-bar-warning" role="progressbar" style="width:50%; height:5px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <ul class="list-group list-group-full list-group-divider">
                            <li class="list-group-item">Projects <span class="pull-right text-warning">15</span></li>
                            <li class="list-group-item">Tasks <span class="pull-right text-warning">148</span></li>
                            <li class="list-group-item">Articles <span class="pull-right text-warning">72</span></li>
                            <li class="list-group-item">Friends <span class="pull-right text-warning">44</span></li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-user-plus"></i> Latest Followers</h5>
                          <ul class="media-list media-list-divider m-0">
                            <li class="media"><a class="media-img" href="javascript:;"><img class="img-circle" src="./assets/img/users/u1.jpg" width="40px"/></a>
                              <div class="media-body">
                                <div class="media-heading">Jeanne Gonzalez <small class="float-right text-muted">12:05</small></div>
                                <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                              </div>
                            </li>
                            <li class="media"><a class="media-img" href="javascript:;"><img class="img-circle" src="./assets/img/users/u2.jpg" width="40px"/></a>
                              <div class="media-body">
                                <div class="media-heading">Becky Brooks <small class="float-right text-muted">1 hrs ago</small></div>
                                <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                              </div>
                            </li>
                            <li class="media"><a class="media-img" href="javascript:;"><img class="img-circle" src="./assets/img/users/u3.jpg" width="40px"/></a>
                              <div class="media-body">
                                <div class="media-heading">Frank Cruz <small class="float-right text-muted">3 hrs ago</small></div>
                                <div class="font-13">Lorem Ipsum is simply dummy.</div>
                              </div>
                            </li>
                            <li class="media"><a class="media-img" href="javascript:;"><img class="img-circle" src="./assets/img/users/u6.jpg" width="40px"/></a>
                              <div class="media-body">
                                <div class="media-heading">Connor Perez <small class="float-right text-muted">Today</small></div>
                                <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                              </div>
                            </li>
                            <li class="media"><a class="media-img" href="javascript:;"><img class="img-circle" src="./assets/img/users/u5.jpg" width="40px"/></a>
                              <div class="media-body">
                                <div class="media-heading">Bob Gonzalez <small class="float-right text-muted">Today</small></div>
                                <div class="font-13">Lorem Ipsum is simply dummy.</div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <h4 class="text-info m-b-20 m-t-20"><i class="fa fa-shopping-basket"></i> Latest Orders</h4>
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th width="91px">Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>11</td>
                            <td>@Jack</td>
                            <td>$564.00</td>
                            <td><span class="badge badge-success">Shipped</span></td>
                            <td>10/07/2017</td>
                          </tr>
                          <tr>
                            <td>12</td>
                            <td>@Amalia</td>
                            <td>$220.60</td>
                            <td><span class="badge badge-success">Shipped</span></td>
                            <td>10/07/2017</td>
                          </tr>
                          <tr>
                            <td>13</td>
                            <td>@Emma</td>
                            <td>$760.00</td>
                            <td><span class="badge badge-default">Pending</span></td>
                            <td>10/07/2017</td>
                          </tr>
                          <tr>
                            <td>14</td>
                            <td>@James</td>
                            <td>$87.60</td>
                            <td><span class="badge badge-warning">Expired</span></td>
                            <td>10/07/2017</td>
                          </tr>
                          <tr>
                            <td>15</td>
                            <td>@Ava</td>
                            <td>$430.50</td>
                            <td><span class="badge badge-default">Pending</span></td>
                            <td>10/07/2017</td>
                          </tr>
                          <tr>
                            <td>16</td>
                            <td>@Noah</td>
                            <td>$64.00</td>
                            <td><span class="badge badge-success">Shipped</span></td>
                            <td>10/07/2017</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="tab-2">
                      <form action="javascript:void(0)">
                        <div class="row">
                          <div class="col-sm-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" placeholder="First Name">
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" placeholder="First Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" type="text" placeholder="Email address">
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input class="form-control" type="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label class="ui-checkbox">
                            <input type="checkbox"><span class="input-span"></span>Remamber me
                          </label>
                        </div>
                        <div class="form-group">
                          <button class="btn btn-default" type="button">Submit</button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="tab-3">
                      <h5 class="text-info m-b-20 m-t-20"><i class="fa fa-bullhorn"></i> Latest Feeds</h5>
                      <ul class="media-list media-list-divider m-0">
                        <li class="media">
                          <div class="media-img"><i class="ti-user font-18 text-muted"></i></div>
                          <div class="media-body">
                            <div class="media-heading">New customer <small class="float-right text-muted">12:05</small></div>
                            <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-img"><i class="ti-info-alt font-18 text-muted"></i></div>
                          <div class="media-body">
                            <div class="media-heading text-warning">Server Warning <small class="float-right text-muted">12:05</small></div>
                            <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-img"><i class="ti-announcement font-18 text-muted"></i></div>
                          <div class="media-body">
                            <div class="media-heading">7 new feedback <small class="float-right text-muted">Today</small></div>
                            <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-img"><i class="ti-check font-18 text-muted"></i></div>
                          <div class="media-body">
                            <div class="media-heading text-success">Issue fixed <small class="float-right text-muted">12:05</small></div>
                            <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-img"><i class="ti-shopping-cart font-18 text-muted"></i></div>
                          <div class="media-body">
                            <div class="media-heading">7 New orders <small class="float-right text-muted">12:05</small></div>
                            <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-img"><i class="ti-reload font-18 text-muted"></i></div>
                          <div class="media-body">
                            <div class="media-heading text-danger">Server warning <small class="float-right text-muted">12:05</small></div>
                            <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END PAGE CONTENT-->
        <footer class="page-footer">
          <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
          <div class="pull-right"><a class="link-blue" href="javascript:;"><i class="fa fa-shopping-cart m-r-5"></i>Buy now</a></div>2017 © <b>Adminca</b> - Save your time, choose the best
        </footer>
      </div>
    </div>
    <!-- START SEARCH PANEL-->
    <form class="search-top-bar" action="search.html">
      <input class="search-input" type="text" placeholder="Search...">
      <button class="reset input-search-icon"><i class="fa fa-search"></i></button>
      <button class="reset input-search-close" type="button"><i class="ti-close"></i></button>
    </form>
    <!-- END SEARCH PANEL-->
    <!-- BEGIN THEME CONFIG PANEL-->
    <div class="theme-config">
      <div class="theme-config-toggle"><i class="ti-settings theme-config-show"></i><i class="ti-close theme-config-close"></i></div>
      <div class="theme-config-box">
        <div class="text-center font-18 m-b-20">SETTINGS</div>
        <div class="font-strong">LAYOUT OPTIONS</div>
        <div class="check-list m-b-20 m-t-10">
          <label class="ui-checkbox ui-checkbox-gray">
            <input id="_fixedNavbar" type="checkbox" checked><span class="input-span"></span>Fixed navbar
          </label>
          <label class="ui-checkbox ui-checkbox-gray">
            <input id="_fixedlayout" type="checkbox"><span class="input-span"></span>Fixed layout
          </label>
          <label class="ui-checkbox ui-checkbox-gray">
            <input class="js-sidebar-toggler" type="checkbox"><span class="input-span"></span>Collapse sidebar
          </label>
          <label class="ui-checkbox ui-checkbox-gray">
            <input id="_drawerSidebar" type="checkbox"><span class="input-span"></span>Drawer sidebar
          </label>
        </div>
        <div class="font-strong">LAYOUT STYLE</div>
        <div class="m-t-10">
          <label class="ui-radio ui-radio-gray m-r-10">
            <input type="radio" name="layout-style" value="" checked=""><span class="input-span"></span>Fluid
          </label>
          <label class="ui-radio ui-radio-gray">
            <input type="radio" name="layout-style" value="1"><span class="input-span"></span>Boxed
          </label>
        </div>
        <div class="m-t-20 m-b-10 font-strong">SIDEBAR STYLE</div>
        <div>
          <div class="color-skin-box" data-toggle="tooltip" data-original-title="Default">
            <label>
              <input type="radio" name="setting-theme" value="default" checked=""><span class="color-check-icon"><i class="fa fa-check"></i></span>
              <div class="color bg-ebony"></div>
            </label>
          </div>
          <div class="color-skin-box" data-toggle="tooltip" data-original-title="Light">
            <label>
              <input type="radio" name="setting-theme" value="light-sidebar"><span class="color-check-icon"><i class="fa fa-check"></i></span>
              <div class="color bg-silver"></div>
            </label>
          </div>
        </div>
        <div class="m-t-10 m-b-10 font-strong">THEME COLORS</div>
        <div>
          <div class="color-skin-box" data-toggle="tooltip" data-original-title="Dark-blue">
            <label>
              <input type="radio" name="setting-theme" value="dark-blue"><span class="color-check-icon"><i class="fa fa-check"></i></span>
              <div class="color bg-ebony"></div>
              <div class="color-small bg-ebony-700"></div>
            </label>
          </div>
          <div class="color-skin-box" data-toggle="tooltip" data-original-title="Green">
            <label>
              <input type="radio" name="setting-theme" value="green"><span class="color-check-icon"><i class="fa fa-check"></i></span>
              <div class="color bg-green"></div>
              <div class="color-small bg-silver"></div>
            </label>
          </div>
          <div class="color-skin-box" data-toggle="tooltip" data-original-title="Blue">
            <label>
              <input type="radio" name="setting-theme" value="blue"><span class="color-check-icon"><i class="fa fa-check"></i></span>
              <div class="color bg-blue"></div>
              <div class="color-small bg-silver"></div>
            </label>
          </div>
          <div class="color-skin-box" data-toggle="tooltip" data-original-title="Purple">
            <label>
              <input type="radio" name="setting-theme" value="purple"><span class="color-check-icon"><i class="fa fa-check"></i></span>
              <div class="color bg-purple"></div>
              <div class="color-small bg-silver"></div>
            </label>
          </div>
          <div class="color-skin-box" data-toggle="tooltip" data-original-title="Light">
            <label>
              <input type="radio" name="setting-theme" value="light"><span class="color-check-icon"><i class="fa fa-check"></i></span>
              <div class="color bg-silver"></div>
              <div class="color-small bg-silver-700"></div>
            </label>
          </div>
        </div>
      </div>
    </div>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
      <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- Session-timeout modal-->
    <div class="modal fade" id="session-dialog">
      <div class="modal-dialog" style="width:400px;" role="document">
        <div class="modal-content">
          <div class="modal-header bg-silver-100">
            <h4 class="modal-title">AUTOLOGOUT</h4>
            <button class="close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="text-center m-b-20"><i class="ti-lock" style="font-size:90px"></i></div>
            <p class="text-center m-b-20">You are about to be signed out due to inactivity.</p>
            <div id="timeout-reset-box" style="display:none;">
              <div class="form-group"><button class="btn btn-danger btn-block" id='timeout-reset'>Deactivate</button></div>
            </div>
            <div id="timeout-activate-box">
              <div class="form-group">
                <label>Minutes</label>
                <input class="form-control" type="text" placeholder="Minutes" id="timeout-count">
              </div>
              <div class="form-group"><button class="btn btn-success btn-block" id='timeout-activate'>Activate</button></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Session-timeout modal-->
    <!-- CORE PLUGINS-->
    <script src="../../vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="../../vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="../../vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../../vendors/jquery-idletimer/dist/idle-timer.min.js" type="text/javascript"></script>
    <script src="../../vendors/toastr/toastr.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="../../vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="../../vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
      $(function(){
      
          $('.ease-pie').easyPieChart({
              size: 100,
              trackColor: '#f2f2f2',
              scaleColor: false,
              lineWidth: 10,
              lineCap: 'square'
          });
      
      
          var lineData = {
              labels: ["W1", "W2", "W3", "W4", "W5", "W6", "W7"],
              datasets: [
                  {
                      label: "Data 1",
                      borderColor: 'rgba(24,197,169,0.7)',
                      pointBackgroundColor: 'rgba(24,197,169,1)',
                      pointBorderColor: "#fff",
                      data: [28, 48, 40, 19, 86, 27, 90],
                      borderWidth: 4,
                      pointBorderWidth: 2,
                      fill: false,
                  },{
                      label: "Data 2",
                      borderColor: 'rgba(213,217,219, 1)',
                      pointBorderColor: "#fff",
                      data: [65, 59, 80, 81, 56, 55, 40],
                      borderWidth: 4,
                      pointBorderWidth: 2,
                      fill: false,
                  }
              ]
          };
          var lineOptions = {
              responsive: true,
              maintainAspectRatio: false,
              legend: {
                  display: false
              }
          };
      
          var ctx2 = document.getElementById("line_chart").getContext("2d");
          new Chart(ctx2, {type: 'line', data: lineData, options:lineOptions}); 
      });
    </script>
  </body>
</html>