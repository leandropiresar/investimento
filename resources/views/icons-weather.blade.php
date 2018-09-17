<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon.png" />
    <link rel="stylesheet" href="./assets/css/pace.css" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather Icons Page</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/weather-icons-master/weather-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/weather-icons-master/weather-icons-wind.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="sidebar-dark sidebar-expand navbar-brand-dark header-light icons-page">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            <!-- Logo Area -->
            <div class="navbar-header">
                <a href="./index.html" class="navbar-brand">
                    <img class="logo-expand" alt="" src="./assets/img/logo-dark.png" />
                    <img class="logo-collapse" alt="" src="./assets/img/logo-collapse.png" />
                    <!-- <p>BonVue</p> -->
                </a>
            </div>
            <!-- /.navbar-header -->
            <!-- Left Menu & Sidebar Toggle -->
            <ul class="nav navbar-nav">
                <li class="sidebar-toggle dropdown"><a href="javascript:void(0)" class="ripple"><i class="feather feather-menu list-icon fs-20"></i></a>
                </li>
            </ul>
            <!-- /.navbar-left -->
            <!-- Search Form -->
            <form class="navbar-search d-none d-sm-block" role="search" /><i class="feather feather-search list-icon"></i> 
                <input type="search" class="search-query" placeholder="Search anything..." /> <a href="javascript:void(0);" class="remove-focus"><i class="feather feather-x"></i></a>
            </form>
            <!-- /.navbar-search -->
            <div class="spacer"></div>
            <!-- Right Menu -->
            <ul class="nav navbar-nav d-none d-lg-flex ml-2 ml-0-rtl">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="feather feather-bell list-icon"></i> <span class="button-pulse bg-danger"></span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card animated flipInY">
                        <div class="card">
                            <header class="card-header d-flex justify-content-between mb-0"><a href="javascript:void(0);"><i class="feather feather-bell color-primary" aria-hidden="true"></i></a>  <span class="heading-font-family flex-1 text-center fw-400">Notifications</span>  <a href="javascript:void(0);"><i class="feather feather-settings color-content"></i></a>
                            </header>
                            <ul class="card-body list-unstyled dropdown-list-group">
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="heading-font-family media-heading">Invitation accepted</span> <span class="media-content">Your have been Invited ...</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex thumb-xs user--online"><img src="./assets/demo/users/user3.jpg" class="rounded-circle" alt="" /> </span><span class="media-body"><span class="heading-font-family media-heading">Steve Smith</span> <span class="media-content">I slowly updated projects</span></span></a>
                                </li>
                                <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">event_available</i> </span><span class="media-body"><span class="-heading-font-family media-heading">To Do</span> <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span></span></a>
                                </li>
                            </ul>
                            <!-- /.dropdown-list-group -->
                            <footer class="card-footer text-center"><a href="javascript:void(0);" class="headings-font-family text-uppercase fs-13">See all activity</a>
                            </footer>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li><a href="javascript:void(0);" class="right-sidebar-toggle"><i class="feather feather-settings list-icon"></i></a>
                </li>
            </ul>
            <!-- /.navbar-right -->
            <!-- User Image with Dropdown -->
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle dropdown-toggle-user ripple" data-toggle="dropdown"><span class="avatar thumb-xs2"><img src="./assets/demo/users/user1.jpg" class="rounded-circle" alt="" /> <i class="feather feather-chevron-down list-icon"></i></span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card dropdown-card-profile animated flipInY">
                        <div class="card">
                            <header class="card-header d-flex mb-0"><a href="javascript:void(0);" class="col-md-4 text-center"><i class="feather feather-user-plus align-middle"></i> </a><a href="javascript:void(0);" class="col-md-4 text-center"><i class="feather feather-settings align-middle"></i> </a>
                                <a href="javascript:void(0);" class="col-md-4 text-center"><i class="feather feather-power align-middle"></i>
                                    </a>
                            </header>
                            <ul class="list-unstyled card-body">
                                <li><a href="#"><span><span class="align-middle">Manage Accounts</span></span></a>
                                </li>
                                <li><a href="#"><span><span class="align-middle">Change Password</span></span></a>
                                </li>
                                <li><a href="#"><span><span class="align-middle">Check Inbox</span></span></a>
                                </li>
                                <li><a href="#"><span><span class="align-middle">Sign Out</span></span></a>
                                </li>
                            </ul>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
    </div>
    <!-- /.dropdown-card-profile -->
    </li>
    <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-nav -->
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
            <!-- User Details -->
            <div class="side-user d-none">
                <div class="col-sm-12 text-center p-0 clearfix">
                    <div class="d-inline-block pos-relative mr-b-10">
                        <figure class="thumb-sm mr-b-0 user--online">
                            <img src="./assets/demo/users/user1.jpg" class="rounded-circle" alt="" />
                        </figure><a href="./page-profile.html" class="text-muted side-user-link"><i class="feather feather-settings list-icon"></i></a>
                    </div>
                    <!-- /.d-inline-block -->
                    <div class="lh-14 mr-t-5"><a href="./page-profile.html" class="hide-menu mt-3 mb-0 side-user-heading fw-500">Scott Adams</a>
                        <br /><small class="hide-menu">Developer</small>
                    </div>
                </div>
                <!-- /.col-sm-12 -->
            </div>
            <!-- /.side-user -->
            <!-- Call to Action -->
            <div class="side-content mr-t-30 mr-lr-15"><a class="btn btn-block btn-success ripple fw-600" href="#"><i class="fa fa-plus-square-o mr-1 mr-0-rtl ml-1-rtl"></i> New Project</a>
            </div>
            <!-- Sidebar Menu -->
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="current-page menu-item-has-children"><a href="./index.html"><i class="list-icon feather feather-command"></i> <span class="hide-menu">Dashboard</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="./index.html">Default</a>
                            </li>
                            <li><a href="../collapsed-light/index.html">Collapsed Light</a>
                            </li>
                            <li><a href="../dark/index.html">Dark</a>
                            </li>
                            <li><a href="../horizontal-nav-icons/index.html">Horizontal Nav</a>
                            </li>
                            <li><a href="../rtl/index.html">RTL Demo</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active"><a href="javascript:void(0);"><i class="list-icon feather feather-briefcase"></i> <span class="hide-menu">Apps <span class="badge bg-primary">6</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="./app-calender.html">Calender</a>
                            </li>
                            <li><a href="./app-chat.html">Chat</a>
                            </li>
                            <li><a href="./app-inbox.html">Inbox</a>
                            </li>
                            <li><a href="./app-contacts.html">Contacts</a>
                            </li>
                            <li><a href="./app-products.html">Products</a>
                            </li>
                            <li><a href="./app-blog.html">Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-user"></i> <span class="hide-menu">Profile Pages</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="./page-profile.html">Profile</a>
                            </li>
                            <li><a href="./page-login.html">Login Page</a>
                            </li>
                            <li><a href="./page-login2.html">Login Page 2</a>
                            </li>
                            <li><a href="./page-register.html">Sign Up</a>
                            </li>
                            <li><a href="./page-register2.html">Sign Up 2</a>
                            </li>
                            <li><a href="./page-register-3-step.html">3 Step Sign Up</a>
                            </li>
                            <li><a href="./page-forgot-pwd.html">Forgot Password</a>
                            </li>
                            <li><a href="./page-email-confirm.html">Confirm Email</a>
                            </li>
                            <li><a href="./page-lock-screen.html">Lock Screen</a>
                            </li>
                            <li><a href="./page-timeline.html">Timeline</a>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Error Pages</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="./page-error-403.html">Error 403</a>
                                    </li>
                                    <li><a href="./page-error-404.html">Error 404</a>
                                    </li>
                                    <li><a href="./page-error-500.html">Error 500</a>
                                    </li>
                                    <li><a href="./page-error-503.html">Error 503</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-folder"></i> <span class="hide-menu">Sample Pages</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="./page-blank.html">Blank Page</a>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Email Templates</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="./email-templates/basic.html">Basic</a>
                                    </li>
                                    <li><a href="./email-templates/billing.html">Billing</a>
                                    </li>
                                    <li><a href="./email-templates/friend-request.html">Friend Request</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);">Maps</a>
                                <ul class="list-unstyled sub-menu">
                                    <li><a href="./maps-google.html">Google Maps</a>
                                    </li>
                                    <li><a href="./maps-vector.html">Vector Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="./page-lightbox.html">Lightbox Popup</a>
                            </li>
                            <li><a href="./page-sitemap.html">Sitemap</a>
                            </li>
                            <li><a href="./page-search-results.html">Search Results</a>
                            </li>
                            <li><a href="./page-custom-scroll.html">Custom Scroll</a>
                            </li>
                            <li><a href="./page-utility-classes.html">Utility Classes</a>
                            </li>
                            <li><a href="./page-animations.html">Animations</a>
                            </li>
                            <li><a href="./page-faq.html">FAQ</a>
                            </li>
                            <li><a href="./page-pricing-table.html">Pricing</a>
                            </li>
                            <li><a href="./page-invoice.html">Invoice</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-feather"></i> <span class="hide-menu">UI Elements <span class="badge bg-info">7</span></span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="./ui-typography.html">Typography</a>
                            </li>
                            <li><a href="./ui-buttons.html">Buttons</a>
                            </li>
                            <li><a href="./ui-cards.html">Cards</a>
                            </li>
                            <li><a href="./ui-tabs.html">Tabs</a>
                            </li>
                            <li><a href="../default/ui-accordions.html">Accordions</a>
                            </li>
                            <li><a href="./ui-modals.html">Modals</a>
                            </li>
                            <li><a href="./ui-icon-boxes.html">Icon Boxes</a>
                            </li>
                            <li><a href="./ui-lists.html">Lists &amp; Media Object</a>
                            </li>
                            <li><a href="./ui-grid.html">Grid</a>
                            </li>
                            <li><a href="./ui-progress.html">Progress Bars</a>
                            </li>
                            <li><a href="./ui-notifications.html">Notifications &amp; Alerts</a>
                            </li>
                            <li><a href="./ui-pagination.html">Pagination</a>
                            </li>
                            <li><a href="./ui-media.html">Media</a>
                            </li>
                            <li><a href="./ui-carousel.html">Carousel</a>
                            </li>
                            <li><a href="./ui-bootstrap.html">Bootstrap Elements</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-layout"></i> <span class="hide-menu">Forms</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="./form-elements.html">Elements</a>
                            </li>
                            <li><a href="./form-material.html">Material Design</a>
                            </li>
                            <li><a href="../default/form-validation.html">Form Validation</a>
                            </li>
                            <li><a href="./form-dropzone.html">File Upload</a>
                            </li>
                            <li><a href="./form-pickers.html">Picker</a>
                            </li>
                            <li><a href="./form-select.html">Select and Multiselect</a>
                            </li>
                            <li><a href="./form-tags-categories.html">Tags and Categories</a>
                            </li>
                            <li><a href="./form-addons.html">Addons</a>
                            </li>
                            <li><a href="./form-editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-clipboard"></i> <span class="hide-menu">Tables</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="./tables-basic.html">Basic Tables</a>
                            </li>
                            <li><a href="./tables-data-table.html">Data Table</a>
                            </li>
                            <li><a href="./tables-bootstrap.html">Bootstrap Tables</a>
                            </li>
                            <li><a href="./tables-responsive.html">Responsive Tables</a>
                            </li>
                            <li><a href="./tables-editable.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-pie-chart"></i> <span class="hide-menu">Charts</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="./charts-flot.html">Flot Charts</a>
                            </li>
                            <li><a href="./charts-morris.html">Morris Charts</a>
                            </li>
                            <li><a href="./charts-js.html">Chart-js</a>
                            </li>
                            <li><a href="./charts-sparkline.html">Sparkline Charts</a>
                            </li>
                            <li><a href="./charts-knob.html">Knob Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-heart"></i> <span class="hide-menu">Icons</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="./icons-material-design.html">Material Design</a>
                            </li>
                            <li><a href="./icons-font-awesome.html">Font Awesome</a>
                            </li>
                            <li><a href="./icons-mono-social.html">Social Icons</a>
                            </li>
                            <li><a href="./icons-weather.html">Weather Icons</a>
                            </li>
                            <li><a href="./icons-linea.html">Linea Icons</a>
                            </li>
                            <li><a href="./icons-feather.html">Feather Icons</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>
        <!-- /.site-sidebar -->
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Weather Icons Page</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Weather Icons Page</li>
                    </ol>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <div class="row">
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <section>
                                    <h5 class="box-title mr-b-0">25 New 2.0 Icons!</h5>
                                    <p class="text-muted">Sample code: <code>&lt;i class="list-icon wi wi-vcard"&gt;&lt;/i&gt;</code>
                                    </p>
                                    <div class="row text-center">
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-cloudy-high"></i>
                                            <br /><small>day-cloudy-high</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-light-wind"></i>
                                            <br /><small>day-light-wind</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-sleet"></i>
                                            <br /><small>day-sleet</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-haze"></i>
                                            <br /><small>day-haze</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-cloudy-high"></i>
                                            <br /><small>night-cloud-high</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-partly-cloudy"></i>
                                            <br /><small>night-alt-partly-cloudy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sleet"></i>
                                            <br /><small>sleet</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moonrise"></i>
                                            <br /><small>moonrise</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moonset"></i>
                                            <br /><small>moonset</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-sleet"></i>
                                            <br /><small>night-sleet</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-sleet"></i>
                                            <br /><small>night-alt-sleet</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-raindrop"></i>
                                            <br /><small>raindrop</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-barometer"></i>
                                            <br /><small>barometer</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-humidity"></i>
                                            <br /><small>humidity</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-na"></i>
                                            <br /><small>na (no report)</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-flood"></i>
                                            <br /><small>flood</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sandstorm"></i>
                                            <br /><small>sandstorm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-tsunami"></i>
                                            <br /><small>tsunami</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-earthquake"></i>
                                            <br /><small>earthquake</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-fire"></i>
                                            <br /><small>fire</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-volcano"></i>
                                            <br /><small>volcano</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-train"></i>
                                            <br /><small>train</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-small-craft-advisory"></i>
                                            <br /><small>small-craft-advisory</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-gale-warning"></i>
                                            <br /><small>gale-warning</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-storm-warning"></i>
                                            <br /><small>storm-warning</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-hurricane-warning"></i>
                                            <br /><small>hurricane-warning</small>
                                        </div>
                                    </div>
                                </section>
                                <hr />
                                <section>
                                    <h5 class="box-title">Daytime</h5>
                                    <div class="row text-center">
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-sunny"></i>
                                            <br /><small>wi-day-sunny</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-cloudy"></i>
                                            <br /><small>wi-day-cloudy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-cloudy-gusts"></i>
                                            <br /><small>wi-day-cloudy-gusts</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-cloudy-windy"></i>
                                            <br /><small>wi-day-cloudy-windy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-fog"></i>
                                            <br /><small>wi-day-fog</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-hail"></i>
                                            <br /><small>wi-day-hail</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-haze"></i>
                                            <br /><small>wi-day-haze</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-lightning"></i>
                                            <br /><small>wi-day-lightning</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-rain"></i>
                                            <br /><small>wi-day-rain-mix</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-rain-wind"></i>
                                            <br /><small>wi-day-rain-wind</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-showers"></i>
                                            <br /><small>wi-day-showers</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-sleet"></i>
                                            <br /><small>wi-day-sleet</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-sleet-storm"></i>
                                            <br /><small>wi-day-sleet-storm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-snow"></i>
                                            <br /><small>wi-day-snow</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-snow-thunderstorm"></i>
                                            <br /><small>wi-day-snow-thunderstorm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-snow-wind"></i>
                                            <br /><small>wi-day-snow-wind</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-sprinkle"></i>
                                            <br /><small>wi-day-sprinkle</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-storm-showers"></i>
                                            <br /><small>wi-day-storm-showers</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-sunny-overcast"></i>
                                            <br /><small>wi-day-sunny-overcast</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-thunderstorm"></i>
                                            <br /><small>wi-day-thunderstorm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-windy"></i>
                                            <br /><small>wi-day-windy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-solar-eclipse"></i>
                                            <br /><small>wi-solar-eclipse</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-hot"></i>
                                            <br /><small>wi-hot</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-cloudy-high"></i>
                                            <br /><small>wi-day-cloudy-high</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-light-wind"></i>
                                            <br /><small>wi-day-light-wind</small>
                                        </div>
                                    </div>
                                </section>
                                <hr />
                                <section>
                                    <h5 class="box-title">Nighttime</h5>
                                    <div class="row text-center">
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-clear"></i>
                                            <br /><small>wi-night-clear</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-cloudy"></i>
                                            <br /><small>wi-night-alt-cloudy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-cloudy-gusts"></i>
                                            <br /><small>wi-night-alt-cloudy-gusts</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-cloudy-windy"></i>
                                            <br /><small>wi-night-alt-cloudy-windy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-hail"></i>
                                            <br /><small>wi-night-alt-hail</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-lightning"></i>
                                            <br /><small>wi-night-alt-lightning</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-rain"></i>
                                            <br /><small>wi-night-alt-rain</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-rain-mix"></i>
                                            <br /><small>wi-night-alt-rain-mix</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-rain-wind"></i>
                                            <br /><small>wi-night-alt-rain-wind</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-showers"></i>
                                            <br /><small>wi-night-alt-showers</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-sleet"></i>
                                            <br /><small>wi-night-alt-sleet</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-sleet-storm"></i>
                                            <br /><small>wi-night-alt-sleet-storm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-snow"></i>
                                            <br /><small>wi-night-alt-snow</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-snow-wind"></i>
                                            <br /><small>wi-night-alt-snow-wind</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-sprinkle"></i>
                                            <br /><small>wi-night-alt-sprinkle</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-storm-showers"></i>
                                            <br /><small>wi-night-alt-storm-showers</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-thunderstorm"></i>
                                            <br /><small>wi-night-alt-thunderstorm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-snow-thunderstorm"></i>
                                            <br /><small>wi-night-alt-snow-thunderstorm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-cloudy"></i>
                                            <br /><small>wi-night-cloudy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-cloudy-gusts"></i>
                                            <br /><small>wi-night-cloudy-gusts</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-cloudy-windy"></i>
                                            <br /><small>wi-night-cloudy-windy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-fog"></i>
                                            <br /><small>wi-night-fog</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-hail"></i>
                                            <br /><small>wi-night-hail</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-lightning"></i>
                                            <br /><small>wi-night-lightning</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-partly-cloudy"></i>
                                            <br /><small>wi-night-partly-cloudy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-rain"></i>
                                            <br /><small>wi-night-rain</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-rain-mix"></i>
                                            <br /><small>wi-night-rain-mix</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-rain-wind"></i>
                                            <br /><small>wi-night-rain-wind</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-showers"></i>
                                            <br /><small>wi-night-showers</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-sleet"></i>
                                            <br /><small>wi-night-sleet</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-sleet-storm"></i>
                                            <br /><small>wi-night-sleet-storm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-snow"></i>
                                            <br /><small>wi-night-snow</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-snow-thunderstorm"></i>
                                            <br /><small>wi-night-snow-thunderstorm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-snow-wind"></i>
                                            <br /><small>wi-night-snow-wind</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-sprinkle"></i>
                                            <br /><small>wi-night-sprinkle</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-storm-showers"></i>
                                            <br /><small>wi-night-storm-showers</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-thunderstorm"></i>
                                            <br /><small>wi-night-thunderstorm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-lunar-eclipse"></i>
                                            <br /><small>wi-lunar-eclipse</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-stars"></i>
                                            <br /><small>wi-stars</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-storm-showers"></i>
                                            <br /><small>wi-storm-showers</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-thunderstorm"></i>
                                            <br /><small>wi-thunderstorm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-cloudy-high"></i>
                                            <br /><small>wi-night-alt-cloudy-high</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-cloudy-high"></i>
                                            <br /><small>wi-night-cloudy-high</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-partly-cloudy"></i>
                                            <br /><small>wi-night-alt-partly-cloudy</small>
                                        </div>
                                    </div>
                                </section>
                                <hr />
                                <section>
                                    <h5 class="box-title">Neutral</h5>
                                    <div class="row text-center">
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloud"></i>
                                            <br /><small>wi-cloud</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloudy"></i>
                                            <br /><small>wi-cloudy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloudy-gusts"></i>
                                            <br /><small>wi-cloudy-gusts</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloudy-windy"></i>
                                            <br /><small>wi-cloudy-windy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-fog"></i>
                                            <br /><small>wi-fog</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-hail"></i>
                                            <br /><small>wi-hail</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-rain"></i>
                                            <br /><small>wi-rain</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-rain-mix"></i>
                                            <br /><small>wi-rain-mix</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-rain-wind"></i>
                                            <br /><small>wi-rain-wind</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-showers"></i>
                                            <br /><small>wi-showers</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sleet"></i>
                                            <br /><small>wi-sleet</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-snow"></i>
                                            <br /><small>wi-snow</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sprinkle"></i>
                                            <br /><small>wi-sprinkle</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-storm-showers"></i>
                                            <br /><small>wi-storm-showers</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-thunderstorm"></i>
                                            <br /><small>wi-thunderstorm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-snow-wind"></i>
                                            <br /><small>wi-snow-wind</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-snow"></i>
                                            <br /><small>wi-snow</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-smog"></i>
                                            <br /><small>wi-smog</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-smoke"></i>
                                            <br /><small>wi-smoke</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-lightning"></i>
                                            <br /><small>wi-lightning</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-raindrops"></i>
                                            <br /><small>wi-raindrops</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-raindrop"></i>
                                            <br /><small>wi-raindrop</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-dust"></i>
                                            <br /><small>wi-dust</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-snowflake-cold"></i>
                                            <br /><small>wi-snowflake-cold</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-windy"></i>
                                            <br /><small>wi-windy</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-strong-wind"></i>
                                            <br /><small>wi-strong-wind</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sandstorm"></i>
                                            <br /><small>wi-sandstorm</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-earthquake"></i>
                                            <br /><small>wi-earthquake</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-fire"></i>
                                            <br /><small>wi-fire</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-flood"></i>
                                            <br /><small>wi-flood</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-meteor"></i>
                                            <br /><small>wi-meteor</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-tsunami"></i>
                                            <br /><small>wi-tsunami</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-volcano"></i>
                                            <br /><small>wi-volcano</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-hurricane"></i>
                                            <br /><small>wi-hurricane</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-tornado"></i>
                                            <br /><small>wi-tornado</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-small-craft-advisory"></i>
                                            <br /><small>wi-small-craft-advisory</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-gale-warning"></i>
                                            <br /><small>wi-gale-warning</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-storm-warning"></i>
                                            <br /><small>wi-storm-warning</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-hurricane-warning"></i>
                                            <br /><small>wi-hurricane-warning</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind-direction"></i>
                                            <br /><small>wi-wind-direction</small>
                                        </div>
                                    </div>
                                </section>
                                <hr />
                                <section>
                                    <h5 class="box-title">Miscellaneous</h5>
                                    <div class="row text-center">
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-alien"></i>
                                            <br /><small>wi-alien</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-celsius"></i>
                                            <br /><small>wi-celsius</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-fahrenheit"></i>
                                            <br /><small>wi-fahrenheit</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-degrees"></i>
                                            <br /><small>wi-degrees</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-thermometer"></i>
                                            <br /><small>wi-thermometer</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-thermometer-exterior"></i>
                                            <br /><small>wi-thermometer-exterior</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-thermometer-internal"></i>
                                            <br /><small>wi-thermometer-internal</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloud-down"></i>
                                            <br /><small>wi-cloud-down</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloud-up"></i>
                                            <br /><small>wi-cloud-up</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloud-refresh"></i>
                                            <br /><small>wi-cloud-refresh</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-horizon"></i>
                                            <br /><small>wi-horizon</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-horizon-alt"></i>
                                            <br /><small>wi-horizon-alt</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sunrise"></i>
                                            <br /><small>wi-sunrise</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sunset"></i>
                                            <br /><small>wi-sunset</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moonrise"></i>
                                            <br /><small>wi-moonrise</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moonset"></i>
                                            <br /><small>wi-moonset</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-refresh"></i>
                                            <br /><small>wi-refresh</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-refresh-alt"></i>
                                            <br /><small>wi-refresh-alt</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-umbrella"></i>
                                            <br /><small>wi-umbrella</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-barometer"></i>
                                            <br /><small>wi-barometer</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-humidity"></i>
                                            <br /><small>wi-humidity</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-na"></i>
                                            <br /><small>wi-na</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-train"></i>
                                            <br /><small>wi-train</small>
                                        </div>
                                    </div>
                                </section>
                                <hr />
                                <section>
                                    <h5 class="box-title">Moon Phases</h5>
                                    <div class="row text-center">
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-new"></i>
                                            <br /><small>wi-moon-new</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-crescent-1"></i>
                                            <br /><small>wi-moon-waxing-crescent-1</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-crescent-2"></i>
                                            <br /><small>wi-moon-waxing-crescent-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-crescent-3"></i>
                                            <br /><small>wi-moon-waxing-crescent-3</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-crescent-4"></i>
                                            <br /><small>wi-moon-waxing-crescent-4</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-crescent-5"></i>
                                            <br /><small>wi-moon-waxing-crescent-5</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-crescent-6"></i>
                                            <br /><small>wi-moon-waxing-crescent-6</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-first-quarter"></i>
                                            <br /><small>wi-moon-first-quarter</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-gibbous-1"></i>
                                            <br /><small>wi-moon-waxing-gibbous-1</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-gibbous-2"></i>
                                            <br /><small>wi-moon-waxing-gibbous-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-gibbous-3"></i>
                                            <br /><small>wi-moon-waxing-gibbous-3</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-gibbous-4"></i>
                                            <br /><small>wi-moon-waxing-gibbous-4</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-gibbous-5"></i>
                                            <br /><small>wi-moon-waxing-gibbous-5</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-gibbous-6"></i>
                                            <br /><small>wi-moon-waxing-gibbous-6</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-full"></i>
                                            <br /><small>wi-moon-full</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-gibbous-1"></i>
                                            <br /><small>wi-moon-waning-gibbous-1</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-gibbous-2"></i>
                                            <br /><small>wi-moon-waning-gibbous-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-gibbous-3"></i>
                                            <br /><small>wi-moon-waning-gibbous-3</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-gibbous-4"></i>
                                            <br /><small>wi-moon-waning-gibbous-4</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-gibbous-5"></i>
                                            <br /><small>wi-moon-waning-gibbous-5</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-gibbous-6"></i>
                                            <br /><small>wi-moon-waning-gibbous-6</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-third-quarter"></i>
                                            <br /><small>wi-moon-third-quarter</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-crescent-1"></i>
                                            <br /><small>wi-moon-waning-crescent-1</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-crescent-2"></i>
                                            <br /><small>wi-moon-waning-crescent-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-crescent-3"></i>
                                            <br /><small>wi-moon-waning-crescent-3</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-crescent-4"></i>
                                            <br /><small>wi-moon-waning-crescent-4</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-crescent-5"></i>
                                            <br /><small>wi-moon-waning-crescent-5</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-crescent-6"></i>
                                            <br /><small>wi-moon-waning-crescent-6</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-new"></i>
                                            <br /><small>wi-moon-alt-new</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-first-quarter"></i>
                                            <br /><small>wi-moon-alt-first-quarter</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-crescent-1"></i>
                                            <br /><small>wi-moon-alt-waxing-crescent-1</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-crescent-2"></i>
                                            <br /><small>wi-moon-alt-waxing-crescent-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-crescent-3"></i>
                                            <br /><small>wi-moon-alt-waxing-crescent-3</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-crescent-4"></i>
                                            <br /><small>wi-moon-alt-waxing-crescent-4</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-crescent-5"></i>
                                            <br /><small>wi-moon-alt-waxing-crescent-5</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-crescent-6"></i>
                                            <br /><small>wi-moon-alt-waxing-crescent-6</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-gibbous-1"></i>
                                            <br /><small>wi-moon-alt-waxing-gibbous-1</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-gibbous-2"></i>
                                            <br /><small>wi-moon-alt-waxing-gibbous-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-gibbous-3"></i>
                                            <br /><small>wi-moon-alt-waxing-gibbous-3</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-gibbous-4"></i>
                                            <br /><small>wi-moon-alt-waxing-gibbous-4</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-gibbous-5"></i>
                                            <br /><small>wi-moon-alt-waxing-gibbous-5</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-gibbous-6"></i>
                                            <br /><small>wi-moon-alt-waxing-gibbous-6</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-full"></i>
                                            <br /><small>wi-moon-alt-full</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-gibbous-1"></i>
                                            <br /><small>wi-moon-alt-waning-gibbous-1</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-gibbous-2"></i>
                                            <br /><small>wi-moon-alt-waning-gibbous-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-gibbous-3"></i>
                                            <br /><small>wi-moon-alt-waning-gibbous-3</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-gibbous-4"></i>
                                            <br /><small>wi-moon-alt-waning-gibbous-4</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-gibbous-5"></i>
                                            <br /><small>wi-moon-alt-waning-gibbous-5</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-gibbous-6"></i>
                                            <br /><small>wi-moon-alt-waning-gibbous-6</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-third-quarter"></i>
                                            <br /><small>wi-moon-alt-third-quarter</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-crescent-1"></i>
                                            <br /><small>wi-moon-alt-waning-crescent-1</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-crescent-2"></i>
                                            <br /><small>wi-moon-alt-waning-crescent-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-crescent-3"></i>
                                            <br /><small>wi-moon-alt-waning-crescent-3</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-crescent-4"></i>
                                            <br /><small>wi-moon-alt-waning-crescent-4</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-crescent-5"></i>
                                            <br /><small>wi-moon-alt-waning-crescent-5</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-crescent-6"></i>
                                            <br /><small>wi-moon-alt-waning-crescent-6</small>
                                        </div>
                                    </div>
                                </section>
                                <hr />
                                <section>
                                    <h5 class="box-title">Time</h5>
                                    <div class="row text-center">
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-1"></i>
                                            <br /><small>wi-time-1</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-2"></i>
                                            <br /><small>wi-time-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-3"></i>
                                            <br /><small>wi-time-3</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-4"></i>
                                            <br /><small>wi-time-4</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-5"></i>
                                            <br /><small>wi-time-5</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-6"></i>
                                            <br /><small>wi-time-6</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-7"></i>
                                            <br /><small>wi-time-7</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-8"></i>
                                            <br /><small>wi-time-8</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-9"></i>
                                            <br /><small>wi-time-9</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-10"></i>
                                            <br /><small>wi-time-10</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-11"></i>
                                            <br /><small>wi-time-11</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-12"></i>
                                            <br /><small>wi-time-12</small>
                                        </div>
                                    </div>
                                </section>
                                <hr />
                                <section>
                                    <h5 class="box-title">Directional Arrows</h5>
                                    <div class="row text-center">
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-up"></i>
                                            <br /><small>wi-direction-up</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-up-right"></i>
                                            <br /><small>wi-direction-up-right</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-right"></i>
                                            <br /><small>wi-direction-right</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-down-right"></i>
                                            <br /><small>wi-direction-down-right</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-down"></i>
                                            <br /><small>wi-direction-down</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-down-left"></i>
                                            <br /><small>wi-direction-down-left</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-left"></i>
                                            <br /><small>wi-direction-left</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-up-left"></i>
                                            <br /><small>wi-direction-up-left</small>
                                        </div>
                                    </div>
                                </section>
                                <hr />
                                <section>
                                    <h5 class="box-title">Wind Degree Examples</h5>
                                    <div class="row text-center">
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-0-deg"></i>
                                            <br /><small>towards-0-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-23-deg"></i>
                                            <br /><small>towards-23-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-45-deg"></i>
                                            <br /><small>towards-45-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-68-deg"></i>
                                            <br /><small>towards-68-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-90-deg"></i>
                                            <br /><small>towards-90-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-113-deg"></i>
                                            <br /><small>towards-113-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-135-deg"></i>
                                            <br /><small>towards-135-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-158-deg"></i>
                                            <br /><small>towards-158-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-180-deg"></i>
                                            <br /><small>towards-180-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-203-deg"></i>
                                            <br /><small>towards-203-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-225-deg"></i>
                                            <br /><small>towards-225-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-248-deg"></i>
                                            <br /><small>towards-248-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-270-deg"></i>
                                            <br /><small>towards-270-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-293-deg"></i>
                                            <br /><small>towards-293-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-313-deg"></i>
                                            <br /><small>towards-313-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-336-deg"></i>
                                            <br /><small>towards-336-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-180-deg"></i>
                                            <br /><small>from-180-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-203-deg"></i>
                                            <br /><small>from-203-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-225-deg"></i>
                                            <br /><small>from-225-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-248-deg"></i>
                                            <br /><small>from-248-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-270-deg"></i>
                                            <br /><small>from-270-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-293-deg"></i>
                                            <br /><small>from-293-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-313-deg"></i>
                                            <br /><small>from-313-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-336-deg"></i>
                                            <br /><small>from-336-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-0-deg"></i>
                                            <br /><small>from-0-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-23-deg"></i>
                                            <br /><small>from-23-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-45-deg"></i>
                                            <br /><small>from-45-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-68-deg"></i>
                                            <br /><small>from-68-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-90-deg"></i>
                                            <br /><small>from-90-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-113-deg"></i>
                                            <br /><small>from-135-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-135-deg"></i>
                                            <br /><small>from-135-deg</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-158-deg"></i>
                                            <br /><small>from-158-deg</small>
                                        </div>
                                    </div>
                                </section>
                                <hr />
                                <section>
                                    <h5 class="box-title">Wind Cardinal Examples</h5>
                                    <div class="row text-center">
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-n"></i>
                                            <br /><small>wi-towards-n</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-nne"></i>
                                            <br /><small>wi-towards-nne</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-ne"></i>
                                            <br /><small>wi-towards-ne</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-ene"></i>
                                            <br /><small>wi-towards-ene</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-e"></i>
                                            <br /><small>wi-towards-e</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-ese"></i>
                                            <br /><small>wi-towards-ese</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-se"></i>
                                            <br /><small>wi-towards-se</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-sse"></i>
                                            <br /><small>wi-towards-sse</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-s"></i>
                                            <br /><small>wi-towards-s</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-ssw"></i>
                                            <br /><small>wi-towards-ssw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-sw"></i>
                                            <br /><small>wi-towards-sw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-wsw"></i>
                                            <br /><small>wi-towards-wsw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-w"></i>
                                            <br /><small>wi-towards-w</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-wnw"></i>
                                            <br /><small>wi-towards-wnw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-nw"></i>
                                            <br /><small>wi-towards-nw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-nnw"></i>
                                            <br /><small>wi-towards-nnw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-n"></i>
                                            <br /><small>wi-from-n</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-nne"></i>
                                            <br /><small>wi-from-nne</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-ne"></i>
                                            <br /><small>wi-from-ne</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-ene"></i>
                                            <br /><small>wi-from-ene</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-e"></i>
                                            <br /><small>wi-from-e</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-ese"></i>
                                            <br /><small>wi-from-ese</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-se"></i>
                                            <br /><small>wi-from-se</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-sse"></i>
                                            <br /><small>wi-from-sse</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-s"></i>
                                            <br /><small>wi-from-s</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-ssw"></i>
                                            <br /><small>wi-from-ssw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-sw"></i>
                                            <br /><small>wi-from-sw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-wsw"></i>
                                            <br /><small>wi-from-wsw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-w"></i>
                                            <br /><small>wi-from-w</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-wnw"></i>
                                            <br /><small>wi-from-wnw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-nw"></i>
                                            <br /><small>wi-from-nw</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-nnw"></i>
                                            <br /><small>wi-from-nnw</small>
                                        </div>
                                    </div>
                                </section>
                                <hr />
                                <section>
                                    <h5 class="box-title">Beaufort Wind Scale</h5>
                                    <div class="row text-center">
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-0"></i>
                                            <br /><small>wi-wind-beaufort-0</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-1"></i>
                                            <br /><small>wi-wind-beaufort-1</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-2"></i>
                                            <br /><small>wi-wind-beaufort-2</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-3"></i>
                                            <br /><small>wi-wind-beaufort-3</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-4"></i>
                                            <br /><small>wi-wind-beaufort-4</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-5"></i>
                                            <br /><small>wi-wind-beaufort-5</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-6"></i>
                                            <br /><small>wi-wind-beaufort-6</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-7"></i>
                                            <br /><small>wi-wind-beaufort-7</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-8"></i>
                                            <br /><small>wi-wind-beaufort-8</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-9"></i>
                                            <br /><small>wi-wind-beaufort-9</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-10"></i>
                                            <br /><small>wi-wind-beaufort-10</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-11"></i>
                                            <br /><small>wi-wind-beaufort-11</small>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-12"></i>
                                            <br /><small>wi-wind-beaufort-12</small>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </main>
        <!-- /.main-wrappper -->
        <!-- RIGHT SIDEBAR -->
        <aside class="right-sidebar scrollbar-enabled suppress-x">
            <div class="sidebar-chat" data-plugin="chat-sidebar">
                <div class="sidebar-chat-info">
                    <h6 class="fs-16">Chat List</h6>
                    <form class="mr-t-10" />
                        <div class="form-group">
                            <input type="search" class="form-control form-control-rounded fs-13 heading-font-family pd-r-30" placeholder="Search for friends ..." /> <i class="feather feather-search post-absolute pos-right vertical-center mr-3 text-muted"></i>
                        </div>
                    </form>
                </div>
                <div class="chat-list">
                    <div class="list-group row">
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Julein Renvoye">
                            <figure class="thumb-xs user--online mr-3 mr-0-rtl ml-3-rtl">
                                <img src="./assets/demo/users/user2.jpg" class="rounded-circle" alt="" />
                            </figure><span><span class="name">Gene Newman</span>  <span class="username">@gene_newman</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Eddie Lebanovkiy">
                            <figure class="thumb-xs user--online mr-3 mr-0-rtl ml-3-rtl">
                                <img src="./assets/demo/users/user3.jpg" class="rounded-circle" alt="" />
                            </figure><span><span class="name">Billy Black</span>  <span class="username">@billyblack</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Cameron Moll">
                            <figure class="thumb-xs user--online mr-3 mr-0-rtl ml-3-rtl">
                                <img src="./assets/demo/users/user5.jpg" class="rounded-circle" alt="" />
                            </figure><span><span class="name">Herbert Diaz</span>  <span class="username">@herbert</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Bill S Kenny">
                            <figure class="user--busy thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="./assets/demo/users/user4.jpg" class="rounded-circle" alt="" />
                            </figure><span><span class="name">Sylvia Harvey</span>  <span class="username">@sylvia</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Trent Walton">
                            <figure class="user--busy thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="./assets/demo/users/user6.jpg" class="rounded-circle" alt="" />
                            </figure><span><span class="name">Marsha Hoffman</span>  <span class="username">@m_hoffman</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Julien Renvoye">
                            <figure class="user--offline thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="./assets/demo/users/user7.jpg" class="rounded-circle" alt="" />
                            </figure><span><span class="name">Mason Grant</span>  <span class="username">@masongrant</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Eddie Lebaovskiy">
                            <figure class="user--offline thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="./assets/demo/users/user8.jpg" class="rounded-circle" alt="" />
                            </figure><span><span class="name">Shelly Sullivan</span>  <span class="username">@shelly</span></span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.chat-list -->
            </div>
            <!-- /.sidebar-chat -->
        </aside>
        <!-- CHAT PANEL -->
        <div class="chat-panel" hidden="">
            <div class="card">
                <div class="card-header d-flex justify-content-between"><a href="javascript:void(0);"><i class="feather feather-message-square text-success"></i></a>  <span class="user-name heading-font-family fw-400">John Doe</span> 
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="widget-chat-activity flex-1">
                        <div class="messages scrollbar-enabled suppress-x">
                            <div class="message media reply">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="./assets/demo/users/user3.jpg" class="rounded-circle" alt="" />
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Epic Cheeseburgers come in all kind of styles.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="./assets/demo/users/user1.jpg" class="rounded-circle" alt="" />
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Cheeseburgers make your knees weak.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media reply">
                                <figure class="thumb-xs2 user--offline">
                                    <a href="#">
                                        <img src="./assets/demo/users/user5.jpg" class="rounded-circle" alt="" />
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Cheeseburgers will never let you down.</p>
                                    <p>They'll also never run around or desert you.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="./assets/demo/users/user1.jpg" class="rounded-circle" alt="" />
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>A great cheeseburger is a gastronomical event.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media reply">
                                <figure class="thumb-xs2 user--busy">
                                    <a href="#">
                                        <img src="./assets/demo/users/user6.jpg" class="rounded-circle" alt="" />
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="./assets/demo/users/user1.jpg" class="rounded-circle" alt="" />
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>If you are a vegan, we are sorry for you loss.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                        </div>
                        <!-- /.messages -->
                    </div>
                    <!-- /.widget-chat-acitvity -->
                </div>
                <!-- /.card-body -->
                <form action="javascript:void(0)" class="card-footer" method="post" />
                    <div class="d-flex justify-content-end"><i class="feather feather-plus-circle list-icon my-1 mr-3"></i>
                        <textarea class="border-0 flex-1" rows="1" style="resize: none" placeholder="Type your message here"></textarea>
                        <button class="btn btn-sm btn-circle bg-transparent" type="submit"><i class="feather feather-arrow-right list-icon fs-26 text-success"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <footer class="footer"><span class="heading-font-family">Copyright @ 2017. All rights reserved WiseOwl Admin by Unifato</span>
    </footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
    <script src="./assets/js/theme.js"></script>
    <script src="./assets/js/custom.js"></script>
</body>

</html>