<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, nice admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template" />
    <meta name="description"
        content="Nice is powerful and clean admin dashboard template, inpired from Google's Material Design" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Nice Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets_backend/images/favicon.png') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets_backend/libs/apexcharts/dist/apexcharts.css') }}" />
    <link href="{{ asset('assets_backend/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('assets_backend/dist/css/style.min.css') }}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
                stroke="#233242" stroke-width="2"></path>
            <path
                d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
                stroke="#233242" stroke-width="2"></path>
            <path id="teabag" fill="#233242" fill-rule="evenodd" clip-rule="evenodd"
                d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z">
            </path>
            <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" stroke="#233242"></path>
            <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#233242"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ri-close-line fs-6 ri-menu-2-line"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="index.html" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="{{ asset('assets_backend/images/logo-icon.png') }}" alt="homepage"
                                    class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="{{ asset('assets_backend/images/logo-light-icon.png') }}" alt="homepage"
                                    class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{{ asset('assets_backend/images/logo-text.png') }}" alt="homepage"
                                    class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="{{ asset('assets_backend/images/logo-light-text.png') }}" class="light-logo"
                                    alt="homepage" />
                            </span>
                        </a>
                        <a class="sidebartoggler d-none d-md-block" href="javascript:void(0)"
                            data-sidebartype="mini-sidebar">
                            <i class="mdi mdi-toggle-switch mdi-toggle-switch-off fs-6"></i>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i data-feather="more-horizontal" class="feather-sm"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <!-- <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i data-feather="search" class="feather-sm me-1"></i>
                                    <div class="ms-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter" />
                                <a class="srh-btn">
                                    <i data-feather="x" class="feather-sm"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="mail"></i>
                            </a>
                            <div class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    dropdown-menu-animate-up
                  "
                                aria-labelledby="2">
                                <span class="with-arrow">
                                    <span class="bg-danger"></span>
                                </span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title text-white bg-danger">
                                            <h4 class="mb-0 m-t-5">5 New</h4>
                                            <span class="fw-light">Messages</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center message-body position-relative"
                                            style="height: 230px">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="{{ asset('assets_backend/images/users/1.jpg') }}"
                                                        alt="user" class="rounded-circle w-100" />
                                                    <span class="profile-status rounded-circle online"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5
                                                        class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              ">
                                                        Pavan kumar
                                                    </h5>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                              ">Just
                                                        see the my admin!</span>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:30
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="{{ asset('assets_backend/images/users/2.jpg') }}"
                                                        alt="user" class="rounded-circle w-100" />
                                                    <span class="profile-status rounded-circle busy"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5
                                                        class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              ">
                                                        Sonu Nigam
                                                    </h5>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                              ">I've
                                                        sung a song! See you at</span>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:10
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="{{ asset('assets_backend/images/users/3.jpg') }}"
                                                        alt="user" class="rounded-circle w-100" />
                                                    <span class="profile-status rounded-circle away"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5
                                                        class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              ">
                                                        Arijit Sinh
                                                    </h5>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                              ">I
                                                        am a singer!</span>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:08
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="{{ asset('assets_backend/images/users/4.jpg') }}"
                                                        alt="user" class="rounded-circle w-100" />
                                                    <span class="profile-status rounded-circle offline"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5
                                                        class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              ">
                                                        Pavan kumar
                                                    </h5>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                              ">Just
                                                        see the my admin!</span>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:02
                                                        AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link text-dark" href="javascript:void(0);">
                                            <b>See all e-Mails</b>
                                            <i data-feather="chevron-right" class="feather-sm"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown border-end">
                            <a class="
                    nav-link
                    dropdown-toggle
                    waves-effect waves-dark
                    position-relative
                  "
                                href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <span class="badge rounded-pill bg-info noti">3</span>
                            </a>
                            <div
                                class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    dropdown-menu-animate-up
                  ">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title bg-primary text-white">
                                            <h4 class="mb-0 m-t-5">4 New</h4>
                                            <span class="fw-light">Notifications</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications position-relative"
                                            style="height: 230px">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="btn btn-light-danger text-danger btn-circle">
                                                    <i data-feather="link" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5
                                                        class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              ">
                                                        Luanch Admin
                                                    </h5>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              ">Just
                                                        see the my new admin!</span>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:30
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span
                                                    class="
                              btn btn-light-success
                              text-success
                              btn-circle
                            ">
                                                    <i data-feather="calendar" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5
                                                        class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              ">
                                                        Event today
                                                    </h5>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              ">Just
                                                        a reminder that you have event</span>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:10
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span class="btn btn-light-info text-info btn-circle">
                                                    <i data-feather="settings" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5
                                                        class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              ">
                                                        Settings
                                                    </h5>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              ">You
                                                        can customize this</span>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:08
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                                                <span
                                                    class="
                              btn btn-light-primary
                              text-primary
                              btn-circle
                            ">
                                                    <i data-feather="users" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5
                                                        class="
                                message-title
                                mb-0
                                mt-1
                                fs-3
                                font-weight-medium
                              ">
                                                        Pavan kumar
                                                    </h5>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              ">Just
                                                        see the my admin!</span>
                                                    <span
                                                        class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:02
                                                        AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center mb-1 text-dark" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i data-feather="chevron-right" class="feather-sm"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="
                    nav-link
                    dropdown-toggle
                    waves-effect waves-dark
                    pro-pic
                  "
                                href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('assets_backend/images/users/2.jpg') }}" alt="user"
                                    class="rounded-circle" width="40" />
                                <span class="ms-1 font-weight-medium d-none d-sm-inline-block">Jonathan Doe
                                    <i data-feather="chevron-down" class="feather-sm"></i></span>
                            </a>
                            <div
                                class="
                    dropdown-menu dropdown-menu-end
                    user-dd
                    animated
                    flipInY
                  ">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div
                                    class="
                      d-flex
                      no-block
                      align-items-center
                      p-3
                      bg-primary
                      text-white
                      mb-2
                    ">
                                    <div class="">
                                        <img src="{{ asset('assets_backend/images/users/5.jpg') }}" alt="user"
                                            class="rounded-circle" width="60" />
                                    </div>
                                    <div class="ms-2">
                                        <h4 class="mb-0 text-white">Marken Doe</h4>
                                        <p class="mb-0">deo@gmail.com</p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="#"><i data-feather="user"
                                        class="feather-sm text-info me-1 ms-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="#"><i data-feather="credit-card"
                                        class="feather-sm text-info me-1 ms-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="#"><i data-feather="mail"
                                        class="feather-sm text-success me-1 ms-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="settings"
                                        class="feather-sm text-warning me-1 ms-1"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"
                                        class="feather-sm text-danger me-1 ms-1"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-2">
                                    <a href="#" class="btn d-block w-100 btn-primary rounded-pill">View
                                        Profile</a>
                                </div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Personal</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard </span>
                                <span class="badge rounded-pill bg-info ms-auto mr-3">3</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="index.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Classic </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Analytical </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Modern </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-tune"></i>
                                <span class="hide-menu">Sidebar Type </span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="sidebar-type-minisidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-view-quilt"></i>
                                        <span class="hide-menu"> Minisidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="sidebar-type-iconsidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-view-parallel"></i>
                                        <span class="hide-menu"> Icon Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="sidebar-type-overlaysidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-view-day"></i>
                                        <span class="hide-menu"> Overlay Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="sidebar-type-fullsidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-view-array"></i>
                                        <span class="hide-menu"> Full Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="sidebar-type-horizontalsidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-view-module"></i>
                                        <span class="hide-menu"> Horizontal Sidebar </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-crop-square"></i>
                                <span class="hide-menu">Page Layouts </span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="layout-inner-fixed-left-sidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-format-align-left"></i>
                                        <span class="hide-menu"> Inner Fixed Left Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="layout-inner-fixed-right-sidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-format-align-right"></i>
                                        <span class="hide-menu"> Inner Fixed Right Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="layout-inner-left-sidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-format-float-left"></i>
                                        <span class="hide-menu"> Inner Left Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="layout-inner-right-sidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-format-float-right"></i>
                                        <span class="hide-menu"> Inner Right Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="page-layout-fixed-header.html" class="sidebar-link">
                                        <i class="mdi mdi-view-quilt"></i>
                                        <span class="hide-menu"> Fixed Header </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="page-layout-fixed-sidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-view-parallel"></i>
                                        <span class="hide-menu"> Fixed Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="page-layout-fixed-header-sidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-view-column"></i>
                                        <span class="hide-menu">
                                            Fixed Header &amp; Sidebar
                                        </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="page-layout-boxed-layout.html" class="sidebar-link">
                                        <i class="mdi mdi-view-carousel"></i>
                                        <span class="hide-menu"> Box Layout </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Apps</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-chats.html"
                                aria-expanded="false"><i class="mdi mdi-comment-processing-outline"></i><span
                                    class="hide-menu">Chat Apps</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-todo.html"
                                aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span
                                    class="hide-menu">Todo</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-calendar.html"
                                aria-expanded="false"><i class="mdi mdi-calendar"></i><span
                                    class="hide-menu">Calendar</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-taskboard.html"
                                aria-expanded="false"><i class="mdi mdi-bulletin-board"></i><span
                                    class="hide-menu">Taskboard</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-contacts.html"
                                aria-expanded="false"><i class="mdi mdi-account-box"></i><span
                                    class="hide-menu">Contact</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-notes.html"
                                aria-expanded="false"><i class="mdi mdi-arrange-bring-forward"></i><span
                                    class="hide-menu">Notes</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-invoice.html"
                                aria-expanded="false"><i class="mdi mdi-book"></i><span
                                    class="hide-menu">Invoice</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-inbox"></i>
                                <span class="hide-menu">Inbox </span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="inbox-email.html" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Email </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="inbox-email-detail.html" class="sidebar-link">
                                        <i class="mdi mdi-email-alert"></i>
                                        <span class="hide-menu"> Email Detail </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="inbox-email-compose.html" class="sidebar-link">
                                        <i class="mdi mdi-email-secure"></i>
                                        <span class="hide-menu"> Email Compose </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-book-variant"></i>
                                <span class="hide-menu">Ticket </span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="ticket-list.html" class="sidebar-link">
                                        <i class="mdi mdi-book-multiple"></i>
                                        <span class="hide-menu"> Ticket List </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ticket-detail.html" class="sidebar-link">
                                        <i class="mdi mdi-book-plus"></i>
                                        <span class="hide-menu"> Ticket Detail </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">UI</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="far fa-list-alt"></i>
                                <span class="hide-menu">Ui Elements </span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="ui-accordian.html" class="sidebar-link"><i
                                            class="mdi mdi-box-shadow"></i><span class="hide-menu">
                                            Accordian</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-badge.html" class="sidebar-link"><i
                                            class="mdi mdi-application"></i><span class="hide-menu"> Badge</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-buttons.html" class="sidebar-link">
                                        <i class="mdi mdi-toggle-switch"></i>
                                        <span class="hide-menu"> Buttons</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-modals.html" class="sidebar-link">
                                        <i class="mdi mdi-tablet"></i>
                                        <span class="hide-menu"> Modals</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-tab.html" class="sidebar-link">
                                        <i class="mdi mdi-sort-variant"></i>
                                        <span class="hide-menu"> Tab</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-tooltip-popover.html" class="sidebar-link">
                                        <i class="mdi mdi-image-filter-vintage"></i>
                                        <span class="hide-menu"> Tooltip &amp; Popover</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-notification.html" class="sidebar-link">
                                        <i class="mdi mdi-message-bulleted"></i>
                                        <span class="hide-menu"> Notification</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-progressbar.html" class="sidebar-link">
                                        <i class="mdi mdi-poll"></i>
                                        <span class="hide-menu"> Progressbar</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-typography.html" class="sidebar-link">
                                        <i class="mdi mdi-format-line-spacing"></i>
                                        <span class="hide-menu"> Typography</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-bootstrap.html" class="sidebar-link">
                                        <i class="mdi mdi-bootstrap"></i>
                                        <span class="hide-menu"> Bootstrap Ui</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-breadcrumb.html" class="sidebar-link">
                                        <i class="mdi mdi-equal"></i>
                                        <span class="hide-menu"> Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-offcanvas.html" class="sidebar-link">
                                        <i class="mdi mdi-content-copy"></i>
                                        <span class="hide-menu"> Offcanvas</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-lists.html" class="sidebar-link">
                                        <i class="mdi mdi-file-video"></i>
                                        <span class="hide-menu"> Lists</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-grid.html" class="sidebar-link">
                                        <i class="mdi mdi-view-module"></i>
                                        <span class="hide-menu"> Grid</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-carousel.html" class="sidebar-link">
                                        <i class="mdi mdi-view-carousel"></i>
                                        <span class="hide-menu"> Carousel</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-scrollspy.html" class="sidebar-link">
                                        <i class="mdi mdi-crop-free"></i>
                                        <span class="hide-menu"> Scrollspy</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-spinner.html" class="sidebar-link">
                                        <i class="mdi mdi-application"></i>
                                        <span class="hide-menu"> Spinner</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-toasts.html" class="sidebar-link">
                                        <i class="mdi mdi-apple-safari"></i>
                                        <span class="hide-menu"> Toasts</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                                <span class="hide-menu">Cards</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="ui-cards.html" class="sidebar-link">
                                        <i class="mdi mdi-layers"></i>
                                        <span class="hide-menu"> Basic Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-card-customs.html" class="sidebar-link">
                                        <i class="mdi mdi-credit-card-scan"></i>
                                        <span class="hide-menu">Custom Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-card-weather.html" class="sidebar-link">
                                        <i class="mdi mdi-weather-fog"></i>
                                        <span class="hide-menu">Weather Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-card-draggable.html" class="sidebar-link">
                                        <i class="mdi mdi-bandcamp"></i>
                                        <span class="hide-menu">Draggable Cards</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-image-filter-tilt-shift"></i>
                                <span class="hide-menu">Components</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="component-sweetalert.html" class="sidebar-link">
                                        <i class="mdi mdi-layers"></i>
                                        <span class="hide-menu"> Sweet Alert</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-nestable.html" class="sidebar-link">
                                        <i class="mdi mdi-credit-card-scan"></i>
                                        <span class="hide-menu">Nestable</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-noui-slider.html" class="sidebar-link">
                                        <i class="mdi mdi-weather-fog"></i>
                                        <span class="hide-menu">Noui slider</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-rating.html" class="sidebar-link">
                                        <i class="mdi mdi-bandcamp"></i>
                                        <span class="hide-menu">Rating</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-toastr.html" class="sidebar-link">
                                        <i class="mdi mdi-poll"></i>
                                        <span class="hide-menu">Toastr</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-widgets"></i>
                                <span class="hide-menu">Widgets </span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="widgets-feeds.html" class="sidebar-link"><i
                                            class="mdi mdi-account-box"></i><span class="hide-menu"> Feed Widgets
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-apps.html" class="sidebar-link">
                                        <i class="mdi mdi-comment-processing-outline"></i>
                                        <span class="hide-menu"> Apps Widgets </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-data.html" class="sidebar-link">
                                        <i class="mdi mdi-calendar"></i>
                                        <span class="hide-menu"> Data Widgets </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-charts.html" class="sidebar-link">
                                        <i class="mdi mdi-bulletin-board"></i>
                                        <span class="hide-menu"> Charts Widgets</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Forms</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-collage"></i>
                                <span class="hide-menu">Form Elements</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-inputs.html" class="sidebar-link">
                                        <i class="mdi mdi-priority-low"></i>
                                        <span class="hide-menu"> Forms Input</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-input-groups.html" class="sidebar-link">
                                        <i class="mdi mdi-rounded-corner"></i>
                                        <span class="hide-menu"> Input Groups</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-input-grid.html" class="sidebar-link">
                                        <i class="mdi mdi-select-all"></i>
                                        <span class="hide-menu"> Input Grid</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-checkbox-radio.html" class="sidebar-link">
                                        <i class="mdi mdi-shape-plus"></i>
                                        <span class="hide-menu"> Checkboxes &amp; Radios</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-bootstrap-touchspin.html" class="sidebar-link">
                                        <i class="mdi mdi-switch"></i>
                                        <span class="hide-menu"> Bootstrap Touchspin</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-bootstrap-switch.html" class="sidebar-link">
                                        <i class="mdi mdi-toggle-switch-off"></i>
                                        <span class="hide-menu"> Bootstrap Switch</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-select2.html" class="sidebar-link">
                                        <i class="mdi mdi-relative-scale"></i>
                                        <span class="hide-menu"> Select2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-dual-listbox.html" class="sidebar-link">
                                        <i class="mdi mdi-tab-unselected"></i>
                                        <span class="hide-menu"> Dual Listbox</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Form Layouts</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-basic.html" class="sidebar-link">
                                        <i class="mdi mdi-vector-difference-ba"></i>
                                        <span class="hide-menu"> Basic Forms</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-horizontal.html" class="sidebar-link">
                                        <i class="mdi mdi-file-document-box"></i>
                                        <span class="hide-menu"> Form Horizontal</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-actions.html" class="sidebar-link">
                                        <i class="mdi mdi-code-greater-than"></i>
                                        <span class="hide-menu"> Form Actions</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-row-separator.html" class="sidebar-link">
                                        <i class="mdi mdi-code-equal"></i>
                                        <span class="hide-menu"> Row Separator</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-bordered.html" class="sidebar-link">
                                        <i class="mdi mdi-flip-to-front"></i>
                                        <span class="hide-menu"> Form Bordered</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-striped-row.html" class="sidebar-link">
                                        <i class="mdi mdi-content-duplicate"></i>
                                        <span class="hide-menu"> Striped Rows</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-detail.html" class="sidebar-link">
                                        <i class="mdi mdi-cards-outline"></i>
                                        <span class="hide-menu"> Form Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-code-equal"></i>
                                <span class="hide-menu">Form Addons</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-paginator.html" class="sidebar-link">
                                        <i class="mdi mdi-export"></i>
                                        <span class="hide-menu"> Paginator</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-img-cropper.html" class="sidebar-link">
                                        <i class="mdi mdi-crop"></i>
                                        <span class="hide-menu"> Image Cropper</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-dropzone.html" class="sidebar-link">
                                        <i class="mdi mdi-crosshairs-gps"></i>
                                        <span class="hide-menu"> Dropzone</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-mask.html" class="sidebar-link">
                                        <i class="mdi mdi-box-shadow"></i>
                                        <span class="hide-menu"> Form Mask</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-typeahead.html" class="sidebar-link">
                                        <i class="mdi mdi-cards-variant"></i>
                                        <span class="hide-menu"> Form Typehead</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-custom-switch.html" class="sidebar-link">
                                        <i class="mdi mdi-toggle-switch-off"></i>
                                        <span class="hide-menu"> Custom Switch</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-alert-box"></i>
                                <span class="hide-menu">Form Validation</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-bootstrap-validation.html" class="sidebar-link">
                                        <i class="mdi mdi-credit-card-scan"></i>
                                        <span class="hide-menu"> Bootstrap Validation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-custom-validation.html" class="sidebar-link">
                                        <i class="mdi mdi-credit-card-plus"></i>
                                        <span class="hide-menu"> Custom Validation</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-pencil-box-outline"></i>
                                <span class="hide-menu">Form Pickers</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-picker-colorpicker.html" class="sidebar-link">
                                        <i class="mdi mdi-calendar-plus"></i>
                                        <span class="hide-menu"> Form Colorpicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-datetimepicker.html" class="sidebar-link">
                                        <i class="mdi mdi-calendar-clock"></i>
                                        <span class="hide-menu"> Form Datetimepicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-bootstrap-rangepicker.html" class="sidebar-link">
                                        <i class="mdi mdi-calendar-range"></i>
                                        <span class="hide-menu"> Form Bootstrap Rangepicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-bootstrap-datepicker.html" class="sidebar-link">
                                        <i class="mdi mdi-calendar-check"></i>
                                        <span class="hide-menu"> Form Bootstrap Datepicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-material-datepicker.html" class="sidebar-link">
                                        <i class="mdi mdi-calendar-text"></i>
                                        <span class="hide-menu"> Form Material Datepicker</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-dns"></i>
                                <span class="hide-menu">Form Editor</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-editor-ckeditor.html" class="sidebar-link">
                                        <i class="mdi mdi-drawing"></i>
                                        <span class="hide-menu">Ck Editor</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-editor-quill.html" class="sidebar-link">
                                        <i class="mdi mdi-drupal"></i>
                                        <span class="hide-menu">Quill Editor</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-editor-summernote.html" class="sidebar-link">
                                        <i class="mdi mdi-brightness-6"></i>
                                        <span class="hide-menu">Summernote Editor</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-editor-tinymce.html" class="sidebar-link">
                                        <i class="mdi mdi-bowling"></i>
                                        <span class="hide-menu">Tinymce Edtor</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-wizard.html"
                                aria-expanded="false">
                                <i class="mdi mdi-cube-send"></i>
                                <span class="hide-menu">Form Wizard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-repeater.html"
                                aria-expanded="false">
                                <i class="mdi mdi-creation"></i>
                                <span class="hide-menu">Form Repeater</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Tables</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">Bootstrap Tables</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="table-basic.html" class="sidebar-link">
                                        <i class="mdi mdi-border-all"></i>
                                        <span class="hide-menu">Basic Table </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-dark-basic.html" class="sidebar-link">
                                        <i class="mdi mdi-arrange-bring-forward"></i>
                                        <span class="hide-menu">Dark Basic Table </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-sizing.html" class="sidebar-link">
                                        <i class="mdi mdi-border-outside"></i>
                                        <span class="hide-menu">Sizing Table </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-layout-coloured.html" class="sidebar-link">
                                        <i class="mdi mdi-border-bottom"></i>
                                        <span class="hide-menu">Coloured Table Layout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-border-inside"></i>
                                <span class="hide-menu">Datatables</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="table-datatable-basic.html" class="sidebar-link">
                                        <i class="mdi mdi-border-vertical"></i>
                                        <span class="hide-menu"> Basic Initialisation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-datatable-api.html" class="sidebar-link">
                                        <i class="mdi mdi-blur-linear"></i>
                                        <span class="hide-menu"> API</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-datatable-advanced.html" class="sidebar-link">
                                        <i class="mdi mdi-border-style"></i>
                                        <span class="hide-menu"> Advanced Initialisation</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html"
                                aria-expanded="false">
                                <i class="mdi mdi-border-top"></i>
                                <span class="hide-menu">Table Jsgrid</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-responsive.html"
                                aria-expanded="false">
                                <i class="mdi mdi-border-style"></i>
                                <span class="hide-menu">Table Responsive</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-footable.html"
                                aria-expanded="false">
                                <i class="mdi mdi-tab-unselected"></i>
                                <span class="hide-menu">Table Footable</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Charts</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-morris.html"
                                aria-expanded="false">
                                <i class="mdi mdi-image-filter-tilt-shift"></i>
                                <span class="hide-menu"> Morris Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-chart-js.html"
                                aria-expanded="false">
                                <i class="mdi mdi-svg"></i>
                                <span class="hide-menu">Chartjs</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-sparkline.html"
                                aria-expanded="false">
                                <i class="mdi mdi-chart-histogram"></i>
                                <span class="hide-menu">Sparkline Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-chartist.html"
                                aria-expanded="false">
                                <i class="mdi mdi-blur"></i>
                                <span class="hide-menu">Chartist Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="mdi mdi-blur-radial"></i><span
                                    class="hide-menu">Apex Charts</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="chart-apex-line.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-line"></i>
                                        <span class="hide-menu">Line Chart</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-area.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-areaspline"></i>
                                        <span class="hide-menu">Area Chart</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-bar.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-gantt"></i>
                                        <span class="hide-menu">Bar Chart</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-pie.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-pie"></i>
                                        <span class="hide-menu">Pie Chart</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-radial.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-arc"></i>
                                        <span class="hide-menu">Radial Chart</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-radar.html" class="sidebar-link"><i
                                            class="mdi mdi-hexagon-outline"></i>
                                        <span class="hide-menu">Radar Chart</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-chemical-weapon"></i>
                                <span class="hide-menu">C3 Charts</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="chart-c3-axis.html" class="sidebar-link">
                                        <i class="mdi mdi-arrange-bring-to-front"></i>
                                        <span class="hide-menu">Axis Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-c3-bar.html" class="sidebar-link">
                                        <i class="mdi mdi-arrange-send-to-back"></i>
                                        <span class="hide-menu">Bar Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-c3-data.html" class="sidebar-link">
                                        <i class="mdi mdi-backup-restore"></i>
                                        <span class="hide-menu">Data Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-c3-line.html" class="sidebar-link">
                                        <i class="mdi mdi-backburger"></i>
                                        <span class="hide-menu">Line Chart</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-chart-areaspline"></i>
                                <span class="hide-menu">Echarts</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="chart-echart-basic.html" class="sidebar-link">
                                        <i class="mdi mdi-chart-line"></i>
                                        <span class="hide-menu">Basic Charts</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-echart-bar.html" class="sidebar-link">
                                        <i class="mdi mdi-chart-scatterplot-hexbin"></i>
                                        <span class="hide-menu">Bar Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-echart-pie-doughnut.html" class="sidebar-link">
                                        <i class="mdi mdi-chart-pie"></i>
                                        <span class="hide-menu">Pie &amp; Doughnut Chart</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Sample Pages</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-cart-outline"></i>
                                <span class="hide-menu">Ecommerce Pages</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="eco-products.html" class="sidebar-link">
                                        <i class="mdi mdi-cards-variant"></i>
                                        <span class="hide-menu">Products</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-cart.html" class="sidebar-link">
                                        <i class="mdi mdi-cart"></i>
                                        <span class="hide-menu">Products Cart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-edit.html" class="sidebar-link">
                                        <i class="mdi mdi-cart-plus"></i>
                                        <span class="hide-menu">Products Edit</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-detail.html" class="sidebar-link">
                                        <i class="mdi mdi-camera-burst"></i>
                                        <span class="hide-menu">Product Details</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-orders.html" class="sidebar-link">
                                        <i class="mdi mdi-chart-pie"></i>
                                        <span class="hide-menu">Product Orders</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-checkout.html" class="sidebar-link">
                                        <i class="mdi mdi-clipboard-check"></i>
                                        <span class="hide-menu">Products Checkout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-file"></i>
                                <span class="hide-menu">Sample Pages </span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="starter-kit.html" class="sidebar-link">
                                        <i class="mdi mdi-crop-free"></i>
                                        <span class="hide-menu">Starter Kit</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-animation.html" class="sidebar-link">
                                        <i class="mdi mdi-debug-step-over"></i>
                                        <span class="hide-menu">Animation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-search-result.html" class="sidebar-link">
                                        <i class="mdi mdi-search-web"></i>
                                        <span class="hide-menu">Search Result</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-gallery.html" class="sidebar-link">
                                        <i class="mdi mdi-camera-iris"></i>
                                        <span class="hide-menu">Gallery</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-treeview.html" class="sidebar-link">
                                        <i class="mdi mdi-file-tree"></i>
                                        <span class="hide-menu">Treeview</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-block-ui.html" class="sidebar-link">
                                        <i class="mdi mdi-codepen"></i>
                                        <span class="hide-menu">Block UI</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-session-timeout.html" class="sidebar-link">
                                        <i class="mdi mdi-timer-off"></i>
                                        <span class="hide-menu">Session Timeout</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-session-idle-timeout.html" class="sidebar-link">
                                        <i class="mdi mdi-timer-sand-empty"></i>
                                        <span class="hide-menu">Session Idle Timeout</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-utility-classes.html" class="sidebar-link">
                                        <i class="mdi mdi-tune"></i>
                                        <span class="hide-menu">Helper Classes</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-maintenance.html" class="sidebar-link">
                                        <i class="mdi mdi-camera-iris"></i>
                                        <span class="hide-menu">Maintenance Page</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-account-circle"></i>
                                <span class="hide-menu">Authentication</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="authentication-login1.html" class="sidebar-link">
                                        <i class="mdi mdi-account-key"></i>
                                        <span class="hide-menu"> Login </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-login2.html" class="sidebar-link">
                                        <i class="mdi mdi-account-key"></i>
                                        <span class="hide-menu"> Login 2 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-login3.html" class="sidebar-link">
                                        <i class="mdi mdi-account-key"></i>
                                        <span class="hide-menu"> Login 3 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-register1.html" class="sidebar-link">
                                        <i class="mdi mdi-account-plus"></i>
                                        <span class="hide-menu"> Register</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-register2.html" class="sidebar-link">
                                        <i class="mdi mdi-account-plus"></i>
                                        <span class="hide-menu"> Register 2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-lockscreen.html" class="sidebar-link">
                                        <i class="mdi mdi-account-off"></i>
                                        <span class="hide-menu"> Lockscreen</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-recover-password.html" class="sidebar-link">
                                        <i class="mdi mdi-account-convert"></i>
                                        <span class="hide-menu"> Recover password</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-account-multiple"></i>
                                <span class="hide-menu">Users</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="ui-user-card.html" class="sidebar-link">
                                        <i class="mdi mdi-account-box"></i>
                                        <span class="hide-menu"> User Card </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-profile.html" class="sidebar-link">
                                        <i class="mdi mdi-account-network"></i>
                                        <span class="hide-menu"> User Profile</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-user-contacts.html" class="sidebar-link">
                                        <i class="mdi mdi-account-star-variant"></i>
                                        <span class="hide-menu"> User Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-ungroup"></i>
                                <span class="hide-menu">Invoice</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="pages-invoice.html" class="sidebar-link">
                                        <i class="mdi mdi-vector-triangle"></i>
                                        <span class="hide-menu"> Invoice Layout </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-invoice-list.html" class="sidebar-link">
                                        <i class="mdi mdi-vector-rectangle"></i>
                                        <span class="hide-menu"> Invoice List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-map"></i>
                                <span class="hide-menu">Maps</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="map-google.html" class="sidebar-link">
                                        <i class="mdi mdi-google-maps"></i>
                                        <span class="hide-menu"> Google Map </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="map-vector.html" class="sidebar-link">
                                        <i class="mdi mdi-map-marker-radius"></i>
                                        <span class="hide-menu"> Vector Map</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-face"></i>
                                <span class="hide-menu">Icons</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="icon-feather.html" class="sidebar-link">
                                        <i class="mdi mdi-feather"></i>
                                        <span class="hide-menu"> Feather Icons </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="icon-fontawesome.html" class="sidebar-link">
                                        <i class="mdi mdi-emoticon-cool"></i>
                                        <span class="hide-menu"> Fontawesome Icons</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="icon-bootstrap.html" class="sidebar-link">
                                        <i class="mdi mdi-emoticon"></i>
                                        <span class="hide-menu"> Bootstrap Icons </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="icon-remix.html" class="sidebar-link">
                                        <i class="mdi mdi-emoticon-cool"></i>
                                        <span class="hide-menu"> Remix Icons</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-apple-safari"></i>
                                <span class="hide-menu">Timeline</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="timeline-center.html" class="sidebar-link">
                                        <i class="mdi mdi-clock-fast"></i>
                                        <span class="hide-menu"> Center Timeline </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="timeline-horizontal.html" class="sidebar-link">
                                        <i class="mdi mdi-clock-end"></i>
                                        <span class="hide-menu"> Horizontal Timeline</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="timeline-left.html" class="sidebar-link">
                                        <i class="mdi mdi-clock-in"></i>
                                        <span class="hide-menu"> Left Timeline</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="timeline-right.html" class="sidebar-link">
                                        <i class="mdi mdi-clock-start"></i>
                                        <span class="hide-menu"> Right Timeline</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-email-open-outline"></i>
                                <span class="hide-menu">Email Template</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="email-templete-alert.html" class="sidebar-link">
                                        <i class="mdi mdi-message-alert"></i>
                                        <span class="hide-menu"> Alert </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="email-templete-basic.html" class="sidebar-link">
                                        <i class="mdi mdi-message-bulleted"></i>
                                        <span class="hide-menu"> Basic</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="email-templete-billing.html" class="sidebar-link">
                                        <i class="mdi mdi-message-draw"></i>
                                        <span class="hide-menu"> Billing</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="email-templete-password-reset.html" class="sidebar-link">
                                        <i class="mdi mdi-message-bulleted-off"></i>
                                        <span class="hide-menu"> Password-Reset</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-alert-box"></i>
                                <span class="hide-menu">Error Pages</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="error-400.html" class="sidebar-link">
                                        <i class="mdi mdi-alert-outline"></i>
                                        <span class="hide-menu"> Error 400 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="error-403.html" class="sidebar-link">
                                        <i class="mdi mdi-alert-outline"></i>
                                        <span class="hide-menu"> Error 403</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="error-404.html" class="sidebar-link">
                                        <i class="mdi mdi-alert-outline"></i>
                                        <span class="hide-menu"> Error 404</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="error-500.html" class="sidebar-link">
                                        <i class="mdi mdi-alert-outline"></i>
                                        <span class="hide-menu"> Error 500</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="error-503.html" class="sidebar-link">
                                        <i class="mdi mdi-alert-outline"></i>
                                        <span class="hide-menu"> Error 503</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-notification-clear-all"></i>
                                <span class="hide-menu">Multi level dd</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="mdi mdi-octagram"></i>
                                        <span class="hide-menu"> item 1.1</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="mdi mdi-octagram"></i>
                                        <span class="hide-menu"> item 1.2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false">
                                        <i class="mdi mdi-playlist-plus"></i>
                                        <span class="hide-menu">Menu 1.3</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="mdi mdi-octagram"></i>
                                                <span class="hide-menu"> item 1.3.1</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="mdi mdi-octagram"></i>
                                                <span class="hide-menu"> item 1.3.2</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="mdi mdi-octagram"></i>
                                                <span class="hide-menu"> item 1.3.3</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="mdi mdi-octagram"></i>
                                                <span class="hide-menu"> item 1.3.4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="mdi mdi-playlist-check"></i>
                                        <span class="hide-menu"> item 1.4</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Extra</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/nice-bootstrap/package/docs/documentation.html"
                                aria-expanded="false">
                                <i class="mdi mdi-content-paste"></i>
                                <span class="hide-menu">Documentation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="authentication-login1.html" aria-expanded="false">
                                <i class="mdi mdi-directions"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Dashboard
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <i class="ri-emotion-line fs-6 text-muted"></i>
                                            <p class="fs-4 mb-1">New Clients</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h1 class="fw-light text-end">23</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 75%; height: 6px" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <i class="ri-image-fill fs-6 text-muted"></i>
                                            <p class="fs-4 mb-1">New Projects</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h1 class="fw-light text-end">169</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: 60%; height: 6px" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <i class="ri-money-euro-circle-line fs-6 text-muted"></i>
                                            <p class="fs-4 mb-1">New Invoices</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h1 class="fw-light text-end">157</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar"
                                            style="width: 65%; height: 6px" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <i class="ri-bar-chart-fill fs-6 text-muted"></i>
                                            <p class="fs-4 mb-1">New Sales</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h1 class="fw-light text-end">236</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar"
                                            style="width: 70%; height: 6px" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Campaign</h4>
                                <div id="campaign" class="mt-2"></div>
                                <!-- row -->
                                <div class="row text-center text-lg-end mt-3">
                                    <!-- column -->
                                    <div class="col-4">
                                        <h4 class="mb-0 font-weight-medium">60%</h4>
                                        <span class="text-muted">Open</span>
                                    </div>
                                    <!-- column -->
                                    <div class="col-4">
                                        <h4 class="mb-0 font-weight-medium">26%</h4>
                                        <span class="text-muted">Click</span>
                                    </div>
                                    <!-- column -->
                                    <div class="col-4">
                                        <h4 class="mb-0 font-weight-medium">18%</h4>
                                        <span class="text-muted">Bounce</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Referral Earnings</h5>
                                <h3 class="fw-light">$769.08</h3>
                                <div class="mt-4 pt-1 text-center">
                                    <div id="referral-earnings"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-lg-2 order-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Sales Ratio</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dl mb-2">
                                            <select class="form-select">
                                                <option value="0" selected="">August 2021</option>
                                                <option value="1">May 2021</option>
                                                <option value="2">March 2021</option>
                                                <option value="3">June 2021</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center no-block">
                                    <div>
                                        <span class="text-muted">This Week</span>
                                        <h3 class="mb-0 text-info fw-light">
                                            $23.5K
                                            <span class="text-muted fs-2"><i
                                                    class="ri-arrow-up-line text-success"></i>18.6</span>
                                        </h3>
                                    </div>
                                    <div class="ms-4">
                                        <span class="text-muted">Last Week</span>
                                        <h3 class="mb-0 text-muted fw-light">
                                            $945
                                            <span class="text-muted fs-2"><i
                                                    class="ri-arrow-down-line text-danger"></i>46.3</span>
                                        </h3>
                                    </div>
                                </div>
                                <div id="sales-ratio" class="mt-5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 order-lg-3 order-md-2">
                        <div class="card">
                            <div class="card-body mb-0">
                                <h4 class="card-title">
                                    Thursday
                                    <span class="fs-3 fw-normal text-muted">12th April, 2021</span>
                                </h4>
                                <div class="d-flex align-items-center flex-row mt-4">
                                    <h1 class="fw-light">
                                        <i class="wi wi-day-sleet"></i>
                                        <span>35<sup>°</sup></span>
                                    </h1>
                                </div>
                            </div>
                            <div id="weather-report"></div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-0">Users</h4>
                                <h2 class="fw-light">
                                    35,658
                                    <span class="fs-4 text-success font-weight-medium">+23%</span>
                                </h2>
                                <div class="mt-4 pt-3">
                                    <div class="row text-center">
                                        <div class="col-6 border-end">
                                            <h4 class="mb-0">58%</h4>
                                            <span class="fs-3 text-muted">New Users</span>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="mb-0">42%</h4>
                                            <span class="fs-3 text-muted">Repeat Users</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="card-title mb-0">Latest Sales</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <select class="form-select">
                                            <option value="0" selected="">August 2021</option>
                                            <option value="1">May 2021</option>
                                            <option value="2">March 2021</option>
                                            <option value="3">June 2021</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body bg-light">
                                <div class="row align-items-center">
                                    <div class="col-xs-12 col-md-6">
                                        <h3 class="mb-0 fw-light">August 2021</h3>
                                        <span class="fs-3 text-muted">Sales Report</span>
                                    </div>
                                    <div
                                        class="
                        col-xs-12 col-md-6
                        align-self-center
                        display-6
                        text-info text-end
                      ">
                                        $3,690
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">NAME</th>
                                            <th class="border-top-0">STATUS</th>
                                            <th class="border-top-0">DATE</th>
                                            <th class="border-top-0">PRICE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="txt-oflo">Elite admin</td>
                                            <td>
                                                <span class="badge bg-success rounded-pill">SALE</span>
                                            </td>
                                            <td class="txt-oflo">April 18, 2017</td>
                                            <td><span class="font-weight-medium">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Real Homes WP Theme</td>
                                            <td>
                                                <span class="badge bg-info rounded-pill">EXTENDED</span>
                                            </td>
                                            <td class="txt-oflo">April 19, 2017</td>
                                            <td><span class="font-weight-medium">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Ample Admin</td>
                                            <td>
                                                <span class="badge bg-purple rounded-pill">Tax</span>
                                            </td>
                                            <td class="txt-oflo">April 19, 2017</td>
                                            <td><span class="font-weight-medium">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Medical Pro WP Theme</td>
                                            <td>
                                                <span class="badge bg-success rounded-pill">Sale</span>
                                            </td>
                                            <td class="txt-oflo">April 20, 2017</td>
                                            <td><span class="font-weight-medium">-$24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Hosting press html</td>
                                            <td>
                                                <span class="badge bg-success rounded-pill">SALE</span>
                                            </td>
                                            <td class="txt-oflo">April 21, 2017</td>
                                            <td><span class="font-weight-medium">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Digital Agency PSD</td>
                                            <td>
                                                <span class="badge bg-danger rounded-pill">Tax</span>
                                            </td>
                                            <td class="txt-oflo">April 23, 2017</td>
                                            <td><span class="font-weight-medium">-$14</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="card-title mb-0">Top Region Sales</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dl">
                                            <select class="form-select">
                                                <option value="0" selected="">August 2021</option>
                                                <option value="1">May 2021</option>
                                                <option value="2">March 2021</option>
                                                <option value="3">June 2021</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="visitfromworld" style="height: 365px"></div>
                                <!-- row -->
                                <div class="row mt-3 text-center text-lg-start">
                                    <!-- column -->
                                    <div class="col-xs-12 col-md-4">
                                        <div class="mb-2 mt-2">
                                            <span class="badge bg-success rounded-pill">+23%</span>
                                            <h5 class="fw-normal text-muted mt-2 mb-1">
                                                United States
                                            </h5>
                                            <span class="fs-6 font-weight-medium">3234
                                                <span class="fs-3 fw-normal text-muted">($3549.54)</span></span>
                                        </div>
                                    </div>
                                    <!-- column -->
                                    <div class="col-xs-12 col-md-4">
                                        <div class="mb-2 mt-2">
                                            <span class="badge bg-info rounded-pill">+0.5%</span>
                                            <h5 class="fw-normal text-muted mt-2 mb-1">Europe</h5>
                                            <span class="fs-6 font-weight-medium">2548
                                                <span class="fs-3 fw-normal text-muted">($3549.54)</span></span>
                                        </div>
                                    </div>
                                    <!-- column -->
                                    <div class="col-xs-12 col-md-4">
                                        <div class="mb-2 mt-2">
                                            <span class="badge bg-danger rounded-pill">-18%</span>
                                            <h5 class="fw-normal text-muted mt-2 mb-1">
                                                Australia
                                            </h5>
                                            <span class="fs-6 font-weight-medium">1476
                                                <span class="fs-3 fw-normal text-muted">($3549.54)</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Comments</h4>
                            </div>
                            <div class="comment-widgets scrollable mb-2 common-widget" style="height: 450px">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row p-3">
                                    <div class="p-2">
                                        <span><img src="{{ asset('assets_backend/images/users/1.jpg') }}"
                                                class="rounded-circle" alt="user" width="50" /></span>
                                    </div>
                                    <div class="comment-text w-100 p-3">
                                        <h5 class="text-nowrap font-weight-medium">
                                            James Anderson
                                        </h5>
                                        <p class="mb-1 fs-3 fw-normal text-muted">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            type setting industry.
                                        </p>
                                        <div class="comment-footer d-md-flex align-items-center mt-2">
                                            <span
                                                class="
                            badge
                            bg-light-info
                            text-info
                            font-weight-medium
                            py-1
                          ">Pending</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)" class="ps-3"><i
                                                        class="ri-edit-box-line fs-6"></i></a>
                                                <a href="javascript:void(0)" class="ps-3"><i
                                                        class="ri-check-line fs-6"></i></a>
                                                <a href="javascript:void(0)" class="ps-3"><i
                                                        class="ri-heart-line fs-6"></i></a>
                                            </span>
                                            <div class="ms-auto">
                                                <span class="text-muted fs-2">April 14, 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row active p-3">
                                    <div class="p-2">
                                        <span
                                            class="
                          round
                          text-white
                          d-inline-block
                          text-center
                          bg-info
                        "><img
                                                src="{{ asset('assets_backend/images/users/2.jpg') }}"
                                                class="rounded-circle" alt="user" width="50" /></span>
                                    </div>
                                    <div class="comment-text active w-100 p-3">
                                        <h5 class="text-nowrap font-weight-medium">
                                            Michael Jorden
                                        </h5>
                                        <p class="mb-1 fs-3 text-muted fw-normal">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            type setting industry.
                                        </p>
                                        <div class="comment-footer d-md-flex align-items-center mt-2">
                                            <span
                                                class="
                            badge
                            bg-light-success
                            text-success
                            font-weight-medium
                            py-1
                          ">Approved</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)" class="ps-3"><i
                                                        class="ri-edit-box-line fs-6"></i></a>
                                                <a href="javascript:void(0)" class="ps-3"><i
                                                        class="ri-check-line fs-6"></i></a>
                                                <a href="javascript:void(0)" class="ps-3"><i
                                                        class="ri-heart-line fs-6"></i></a>
                                            </span>
                                            <div class="ms-auto">
                                                <span class="text-muted fs-2">April 14, 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row p-3">
                                    <div class="p-2">
                                        <span
                                            class="
                          round
                          text-white
                          d-inline-block
                          text-center
                          bg-info
                        "><img
                                                src="{{ asset('assets_backend/images/users/3.jpg') }}"
                                                class="rounded-circle" alt="user" width="50" /></span>
                                    </div>
                                    <div class="comment-text w-100 p-3">
                                        <h5 class="text-nowrap font-weight-medium">
                                            Johnathan Doeting
                                        </h5>
                                        <p class="mb-1 fs-3 fw-normal text-muted">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            type setting industry.
                                        </p>
                                        <div class="comment-footer d-md-flex align-items-center mt-2">
                                            <span
                                                class="
                            badge
                            bg-light-danger
                            text-danger
                            font-weight-medium
                            py-1
                          ">Rejected</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)" class="ps-3"><i
                                                        class="ri-edit-box-line fs-6"></i></a>
                                                <a href="javascript:void(0)" class="ps-3"><i
                                                        class="ri-check-line fs-6"></i></a>
                                                <a href="javascript:void(0)" class="ps-3"><i
                                                        class="ri-heart-line fs-6"></i></a>
                                            </span>
                                            <div class="ms-auto">
                                                <span class="text-muted fs-2">April 14, 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row p-3">
                                    <div class="p-2">
                                        <span class=""><img
                                                src="{{ asset('assets_backend/images/users/4.jpg') }}"
                                                class="rounded-circle" alt="user" width="50" /></span>
                                    </div>
                                    <div class="comment-text w-100 p-3">
                                        <h5 class="text-nowrap font-weight-medium">
                                            James Anderson
                                        </h5>
                                        <p class="mb-1 fs-3 text-muted fw-normal">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            type setting industry.
                                        </p>
                                        <div class="comment-footer d-md-flex align-items-center mt-2">
                                            <span
                                                class="
                            badge
                            bg-light-info
                            text-info
                            font-weight-medium
                            py-1
                          ">Pending</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)" class="ps-3"><i
                                                        class="ri-edit-box-line fs-6"></i></a>
                                                <a href="javascript:void(0)" class="ps-3"><i
                                                        class="ri-check-line fs-6"></i></a>
                                                <a href="javascript:void(0)" class="ps-3"><i
                                                        class="ri-heart-line fs-6"></i></a>
                                            </span>
                                            <div class="ms-auto">
                                                <span class="text-muted fs-2">April 14, 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center p-b-15">
                                    <div>
                                        <h4 class="card-title mb-0">To Do List</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dl">
                                            <select class="form-select">
                                                <option value="0" selected="">August 2021</option>
                                                <option value="1">May 2021</option>
                                                <option value="2">March 2021</option>
                                                <option value="3">June 2021</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="to-do-widget mt-3 common-widget scrollable" style="height: 438px">
                                    <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                                        <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                            <div class="form-check form-check-inline w-100">
                                                <input type="checkbox"
                                                    class="form-check-input danger check-light-danger"
                                                    id="inputSchedule" name="inputCheckboxesSchedule" />
                                                <label for="inputSchedule" class="form-check-label">
                                                    <span>Schedule meeting with</span><span
                                                        class="badge bg-danger badge-pill ms-1">Today</span>
                                                </label>
                                            </div>
                                            <ul class="assignedto list-style-none m-0 ps-4 ms-1 mt-1">
                                                <li class="d-inline-block border-0 me-1">
                                                    <img src="{{ asset('assets_backend/images/users/1.jpg') }}"
                                                        alt="user" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-original-title="Steave" class="rounded-circle" />
                                                </li>
                                                <li class="d-inline-block border-0 me-1">
                                                    <img src="{{ asset('assets_backend/images/users/2.jpg') }}"
                                                        alt="user" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-original-title="Jessica" class="rounded-circle" />
                                                </li>
                                                <li class="d-inline-block border-0 me-1">
                                                    <img src="{{ asset('assets_backend/images/users/3.jpg') }}"
                                                        alt="user" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-original-title="Priyanka" class="rounded-circle" />
                                                </li>
                                                <li class="d-inline-block border-0 me-1">
                                                    <img src="{{ asset('assets_backend/images/users/4.jpg') }}"
                                                        alt="user" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-original-title="Selina" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                            <div class="form-check form-check-inline w-100">
                                                <input type="checkbox" id="inputCall"
                                                    class="form-check-input info check-light-info"
                                                    name="inputCheckboxesCall" />
                                                <label for="inputCall" class="form-check-label">
                                                    <span>Give Purchase report to</span>
                                                    <span class="badge bg-info badge-pill ms-1">Yesterday</span>
                                                </label>
                                            </div>
                                            <ul class="assignedto m-0 ps-4 ms-1 mt-1">
                                                <li class="d-inline-block border-0 me-1">
                                                    <img src="{{ asset('assets_backend/images/users/3.jpg') }}"
                                                        alt="user" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-original-title="Priyanka" class="rounded-circle" />
                                                </li>
                                                <li class="d-inline-block border-0 me-1">
                                                    <img src="{{ asset('assets_backend/images/users/4.jpg') }}"
                                                        alt="user" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-original-title="Selina" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                            <div class="form-check form-check-inline w-100">
                                                <input type="checkbox" id="inputBook"
                                                    class="form-check-input primary check-light-primary"
                                                    name="inputCheckboxesBook" />
                                                <label for="inputBook" class="form-check-label">
                                                    <span>Book flight for holiday</span><span
                                                        class="badge bg-primary badge-pill ms-1">1 week</span>
                                                </label>
                                            </div>
                                            <div class="fs-2 ps-3 d-inline-block ms-2">
                                                26 jun 2021
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                            <div class="form-check form-check-inline w-100">
                                                <input type="checkbox" id="inputForward"
                                                    class="form-check-input warning check-light-warning"
                                                    name="inputCheckboxesForward" />
                                                <label for="inputForward" class="form-check-label">
                                                    <span>Forward all tasks</span>
                                                    <span class="badge bg-warning badge-pill ms-1">2 weeks</span>
                                                </label>
                                            </div>
                                            <div class="fs-2 ps-3 d-inline-block ms-2">
                                                26 jun 2021
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                            <div class="form-check form-check-inline w-100">
                                                <input type="checkbox" id="inputRecieve"
                                                    class="form-check-input success check-light-success"
                                                    name="inputCheckboxesRecieve" />
                                                <label for="inputRecieve" class="form-check-label">
                                                    <span>Recieve shipment</span><span
                                                        class="badge bg-success badge-pill ms-1">2 weeks</span>
                                                </label>
                                            </div>
                                            <ul class="assignedto list-style-none m-0 ps-4 ms-1 mt-1">
                                                <li class="d-inline-block border-0 me-1">
                                                    <img src="{{ asset('assets_backend/images/users/1.jpg') }}"
                                                        alt="user" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-original-title="Steave" class="rounded-circle" />
                                                </li>
                                                <li class="d-inline-block border-0 me-1">
                                                    <img src="{{ asset('assets_backend/images/users/2.jpg') }}"
                                                        alt="user" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-original-title="Jessica" class="rounded-circle" />
                                                </li>
                                                <li class="d-inline-block border-0 me-1">
                                                    <img src="{{ asset('assets_backend/images/users/3.jpg') }}"
                                                        alt="user" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-original-title="Priyanka" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                            <div class="form-check form-check-inline w-100">
                                                <input type="checkbox"
                                                    class="form-check-input danger check-light-danger"
                                                    id="inputSchedule" name="inputCheckboxesSchedule" />
                                                <label for="inputSchedule" class="form-check-label">
                                                    <span>Schedule meeting with</span><span
                                                        class="badge bg-danger badge-pill ms-1">Today</span>
                                                </label>
                                            </div>
                                            <ul class="assignedto list-style-none m-0 ps-4 ms-1 mt-1">
                                                <li class="d-inline-block border-0 me-1">
                                                    <img src="{{ asset('assets_backend/images/users/1.jpg') }}"
                                                        alt="user" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-original-title="Steave" class="rounded-circle" />
                                                </li>
                                                <li class="d-inline-block border-0 me-1">
                                                    <img src="{{ asset('assets_backend/images/users/2.jpg') }}"
                                                        alt="user" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-original-title="Jessica" class="rounded-circle" />
                                                </li>
                                                <li class="d-inline-block border-0 me-1">
                                                    <img src="{{ asset('assets_backend/images/users/3.jpg') }}"
                                                        alt="user" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-original-title="Priyanka" class="rounded-circle" />
                                                </li>
                                                <li class="d-inline-block border-0 me-1">
                                                    <img src="{{ asset('assets_backend/images/users/4.jpg') }}"
                                                        alt="user" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-original-title="Selina" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Nice admin.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
        <a href="javascript:void(0)" class="service-panel-toggle"><i data-feather="settings"
                class="feather-sm fa fa-spin"></i></a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home"
                        role="tab" aria-controls="pills-home" aria-selected="true"><i
                            class="ri-tools-fill fs-6"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#chat"
                        role="tab" aria-controls="chat" aria-selected="false"><i
                            class="ri-message-3-line fs-6"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact"
                        role="tab" aria-controls="pills-contact" aria-selected="false"><i
                            class="ri-timer-line fs-6"></i></a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab">
                    <div class="p-3 border-bottom">
                        <!-- Sidebar -->
                        <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
                        <div class="form-check mt-3">
                            <input type="checkbox" name="theme-view" class="form-check-input" id="theme-view" />
                            <label class="form-check-label" for="theme-view">
                                <span>Dark Theme</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="sidebartoggler form-check-input" name="collapssidebar"
                                id="collapssidebar" />
                            <label class="form-check-label" for="collapssidebar">
                                <span>Collapse Sidebar</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="sidebar-position" class="form-check-input"
                                id="sidebar-position" />
                            <label class="form-check-label" for="sidebar-position">
                                <span>Fixed Sidebar</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="header-position" class="form-check-input"
                                id="header-position" />
                            <label class="form-check-label" for="header-position">
                                <span>Fixed Header</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="boxed-layout" class="form-check-input"
                                id="boxed-layout" />
                            <label class="form-check-label" for="boxed-layout">
                                <span>Boxed Layout</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="mailbox list-style-none mt-3">
                        <li>
                            <div class="message-center chat-scroll position-relative">
                                <a href="javascript:void(0)"
                                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                                    id="chat_user_1" data-user-id="1">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="{{ asset('assets_backend/images/users/1.jpg') }}" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle online"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                                        <span
                                            class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just
                                            see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                                    id="chat_user_2" data-user-id="2">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="{{ asset('assets_backend/images/users/2.jpg') }}" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle busy"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                                        <span
                                            class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I've
                                            sung a song! See you at</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                                    id="chat_user_3" data-user-id="3">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="{{ asset('assets_backend/images/users/3.jpg') }}" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle away"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                                        <span
                                            class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I
                                            am a singer!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                                    id="chat_user_4" data-user-id="4">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="{{ asset('assets_backend/images/users/4.jpg') }}" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                                        <span
                                            class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just
                                            see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                                    id="chat_user_5" data-user-id="5">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="{{ asset('assets_backend/images/users/5.jpg') }}" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                                        <span
                                            class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just
                                            see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                                    id="chat_user_6" data-user-id="6">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="{{ asset('assets_backend/images/users/6.jpg') }}" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                                        <span
                                            class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just
                                            see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                                    id="chat_user_7" data-user-id="7">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="{{ asset('assets_backend/images/users/7.jpg') }}" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                                        <span
                                            class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just
                                            see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                                    id="chat_user_8" data-user-id="8">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="{{ asset('assets_backend/images/users/8.jpg') }}" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                                        <span
                                            class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just
                                            see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel"
                    aria-labelledby="pills-contact-tab">
                    <h6 class="mt-3 mb-3">Activity Timeline</h6>
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left bg-light-success text-success">
                                <i data-feather="user" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Meeting today <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-light-info text-info">
                                <i data-feather="camera" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user"
                                    src="{{ asset('assets_backend/images/users/2.jpg') }}" />
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user"
                                    src="{{ asset('assets_backend/images/users/1.jpg') }}" />
                            </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-light-primary text-primary">
                                <i data-feather="user" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Meeting today <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-light-info text-info">
                                <i data-feather="send" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user"
                                    src="{{ asset('assets_backend/images/users/4.jpg') }}" />
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user"
                                    src="{{ asset('assets_backend/images/users/6.jpg') }}" />
                            </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets_backend/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets_backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- apps -->
    <script src="{{ asset('assets_backend/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('assets_backend/dist/js/app.init.js') }}"></script>
    <script src="{{ asset('assets_backend/dist/js/app-style-switcher.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets_backend/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets_backend/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets_backend/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets_backend/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets_backend/dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets_backend/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('assets_backend/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets_backend/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets_backend/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets_backend/dist/js/pages/dashboards/dashboard1.js') }}"></script>
</body>

</html>
