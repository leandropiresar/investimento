<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon.png" />
    <link rel="stylesheet" href="./assets/css/pace.css" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Modals</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="sidebar-dark sidebar-expand navbar-brand-dark header-light">
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
                    <h6 class="page-title-heading mr-0 mr-r-5">Modals</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Modals</li>
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
                    <!-- Large Modal -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Large Modal</h5>
                                <p>Following are Large Modals, you can even add custom colors to style them.</p><a href="#" data-toggle="modal" data-target=".bs-modal-lg" class="mr-3 btn btn-outline-default">Default</a>  <a href="#" data-toggle="modal" data-target=".bs-modal-lg-primary" class="mr-3 btn btn-outline-primary">Primary</a>
                                <!-- <img src="assets/demo/modal/modal-large.png" data-toggle="modal" data-target=".bs-modal-lg" class="modal-img" alt="" /> -->
                                <div class="modal fade bs-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h5 class="modal-title" id="myLargeModalLabel">Large Modal Heading</h5>
                                            </div>
                                            <div class="modal-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                            <div class="modal-footer"><a href="#" class="btn btn-info btn-rounded ripple text-left">Learn more</a> 
                                                <button type="button" class="btn btn-danger btn-rounded ripple text-left" data-dismiss="modal">Close this</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                                <div class="modal modal-primary fade bs-modal-lg-primary" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true" style="display: none">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header text-inverse">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h5 class="modal-title" id="myLargeModalLabel2">Large Modal Heading</h5>
                                            </div>
                                            <div class="modal-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                            <div class="modal-footer"><a href="#" class="btn btn-info btn-rounded ripple text-left">Learn more</a> 
                                                <button type="button" class="btn btn-danger btn-rounded ripple text-left" data-dismiss="modal">Close this</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Medium Modal -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Medium Modal</h5>
                                <p>You can do the same with medium sized Modals</p><a href="#" data-toggle="modal" data-target=".bs-modal-md" class="mr-3 btn btn-outline-danger">Danger</a>  <a href="#" data-toggle="modal" data-target=".bs-modal-md-info" class="mr-3 btn btn-outline-info">Info</a> 
                                <a href="#" data-toggle="modal" data-target=".bs-modal-md-pink" class="mr-3 btn btn-outline-pink">Pink</a>
                                    <div class="modal modal-danger fade bs-modal-md" tabindex="-1" role="dialog" aria-labelledby="myMediumModalLabel" aria-hidden="true" style="display: none">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header text-inverse">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title" id="myMediumModalLabel">Medium Modal Heading</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>First Sub Heading</h5>
                                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                                        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                    <hr />
                                                    <h5>Overflowing text to show scroll behavior</h5>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen book.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                                        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                </div>
                                                <div class="modal-footer"><a href="#" class="btn btn-info btn-rounded ripple text-left">Learn more</a> 
                                                    <button type="button" class="btn btn-danger btn-rounded ripple text-left" data-dismiss="modal">Close this</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <div class="modal modal-info fade bs-modal-md-info" tabindex="-1" role="dialog" aria-labelledby="myMediumModalLabel2" aria-hidden="true" style="display: none">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header text-inverse">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title" id="myMediumModalLabel2">Medium Modal Heading</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>First Sub Heading</h5>
                                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                                        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                    <hr />
                                                    <h5>Overflowing text to show scroll behavior</h5>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen book.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                                        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                </div>
                                                <div class="modal-footer"><a href="#" class="btn btn-info btn-rounded ripple text-left">Learn more</a> 
                                                    <button type="button" class="btn btn-danger btn-rounded ripple text-left" data-dismiss="modal">Close this</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <div class="modal modal-pink fade bs-modal-md-pink" tabindex="-1" role="dialog" aria-labelledby="myMediumModalLabel3" aria-hidden="true" style="display: none">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header text-inverse">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title" id="myMediumModalLabel3">Medium Modal Heading</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>First Sub Heading</h5>
                                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                                        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                    <hr />
                                                    <h5>Overflowing text to show scroll behavior</h5>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen book.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                                        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                </div>
                                                <div class="modal-footer"><a href="#" class="btn btn-info btn-rounded ripple text-left">Learn more</a> 
                                                    <button type="button" class="btn btn-danger btn-rounded ripple text-left" data-dismiss="modal">Close this</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Small Modal -->
                    <div class="col-md-6 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Small Modal</h5>
                                <p>Here are some examples with small modals</p><a href="#" data-toggle="modal" data-target=".bs-modal-sm" class="mr-3 btn btn-outline-default">Default</a>  <a href="#" data-toggle="modal" data-target=".bs-modal-sm-primary" class="mr-3 btn btn-outline-primary">Primary</a>
                                <div class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h5 class="modal-title" id="mySmallModalLabel">Small Modal Heading</h5>
                                            </div>
                                            <div class="modal-body">
                                                <p>...</p>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            <div class="modal modal-primary fade bs-modal-sm-primary" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel2" aria-hidden="true" style="display: none">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header text-inverse">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h5 class="modal-title" id="mySmallModalLabel2">Small Modal Heading</h5>
                                        </div>
                                        <div class="modal-body">
                                            <p>...</p>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <!-- Custom Modals -->
                <div class="col-md-6 widget-holder">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <h5 class="box-title">Custom Modals</h5>
                            <p>Some examples of Modals</p><a href="#" class="btn btn-primary ripple mr-3" data-toggle="modal" data-target="#signup-modal">Sign Up Modal</a>  <a href="#" class="btn btn-info ripple" data-toggle="modal" data-target="#login-modal">Log in Modal</a>
                            <!-- Signup Modal -->
                            <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <div class="modal-body">
                                            <div class="text-center my-3"><a href="#"><span><img src="assets/demo/logo-expand-dark.png" alt="" /></span></a>
                                            </div>
                                            <form />
                                                <div class="form-group">
                                                    <label for="username">Name</label>
                                                    <input class="form-control" type="text" id="username" required="" placeholder="John Doe" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="emailaddress">Email address</label>
                                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com" />
                                                </div>
                                                <div class="form-group mr-b-30">
                                                    <label for="password">Password</label>
                                                    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" />
                                                </div>
                                                <div class="form-group mr-b-30">
                                                    <div class="checkbox checkbox-primary">
                                                        <label for="checkbox11">
                                                            <input id="checkbox11" type="checkbox" /> <span class="label-text">I accept <a href="#">Terms and Conditions</a></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="text-center mr-b-30">
                                                    <button class="btn btn-rounded btn-success ripple" type="submit">Sign Up Free</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            <!-- Sign In Modal -->
                            <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <div class="modal-body">
                                            <div class="text-center my-3">
                                                <a href="./index.html" class="text-success">
                                                    <img src="assets/demo/logo-expand-dark.png" alt="" />
                                                </a>
                                            </div>
                                            <form />
                                                <div class="form-group mr-b-10">
                                                    <label for="emailaddress1">Email address</label>
                                                    <input class="form-control" type="email" id="emailaddress1" required="" placeholder="john@deo.com" />
                                                </div>
                                                <div class="form-group mr-b-10"><a href="page-recoverpw.html" class="text-muted pull-right"><small>Forgot your password?</small></a>
                                                    <label for="password1">Password</label>
                                                    <input class="form-control" type="password" required="" id="password1" placeholder="Enter your password" />
                                                </div>
                                                <div class="form-group mr-b-10">
                                                    <div class="checkbox checkbox-primary">
                                                        <label for="checkbox12">
                                                            <input id="checkbox12" type="checkbox" /> <span class="label-text">Remember me</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group text-center">
                                                    <button class="btn btn-rounded btn-primary ripple" type="submit">Sign In</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
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