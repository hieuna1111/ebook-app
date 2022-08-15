<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>
    @yield('title')
  </title>

  <meta name="description" content="Some description for the page"/>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="https://tixia.dexignzone.com/laravel/demo/images/favicon.png">

  <link href="https://tixia.dexignzone.com/laravel/demo/vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
        rel="stylesheet" type="text/css"/>
  <link
    href="https://tixia.dexignzone.com/laravel/demo/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"
    rel="stylesheet" type="text/css"/>
  <link href="https://tixia.dexignzone.com/laravel/demo/vendor/datatables/css/jquery.dataTables.min.css"
        rel="stylesheet" type="text/css"/>

  <link href="https://tixia.dexignzone.com/laravel/demo/css/style.css" rel="stylesheet" type="text/css"/>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css'
        type="text/css">

  {{--Note Editor--}}
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

  <link href="https://tixia.dexignzone.com/laravel/demo/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
  <link href="https://tixia.dexignzone.com/laravel/demo/vendor/chartist/css/chartist.min.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
  <div class="sk-three-bounce">
    <div class="sk-child sk-bounce1"></div>
    <div class="sk-child sk-bounce2"></div>
    <div class="sk-child sk-bounce3"></div>
  </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

  <!--**********************************
      Nav header start
  ***********************************-->
  <div class="nav-header">
    <a href="/admin/home" class="brand-logo">
      <svg class="logo-abbr" width="48" height="36" viewBox="0 0 48 36" fill="none"
           xmlns="http://www.w3.org/2000/svg">
        <img id="logo" src="/assets/images/website-logo-white.png" style="margin-left: -50px"/>
      </svg>
    </a>

    <div class="nav-control">
      <div class="hamburger">
        <span class="line"></span><span class="line"></span><span class="line"></span>
      </div>
    </div>
  </div>
  <!--**********************************
      Nav header end
  ***********************************-->

  <!--**********************************
      Header start
  ***********************************-->

  <!--**********************************
      Chat box End
  ***********************************-->

  <!--**********************************
      Header start
  ***********************************-->
  <div class="header">
    <div class="header-content">
      <nav class="navbar navbar-expand">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="header-left">
            <div class="dashboard_bar">
              Admin Dashboard
            </div>
          </div>

          <ul class="navbar-nav header-right">
            <li class="nav-item dropdown notification_dropdown">
              <div class="search_bar dropdown show">
                <div class="dropdown-menu p-0 m-0 show">
                  <form>
                    <input class="form-control" type="search" placeholder="Search Here"
                           aria-label="Search">
                  </form>
                </div>
                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                              d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z"
                                              fill="#A4A4A4"></path>
                                        </svg>
                                    </span>
              </div>
            </li>
            <li class="nav-item dropdown notification_dropdown">
              <a class="nav-link bell bell-link primary" href="#">
                <svg width="22" height="22" viewBox="0 0 23 22" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M20.4604 0.848846H3.31682C2.64742 0.849582 2.00565 1.11583 1.53231 1.58916C1.05897 2.0625 0.792727 2.70427 0.791992 3.37367V15.1562C0.792727 15.8256 1.05897 16.4674 1.53231 16.9407C2.00565 17.414 2.64742 17.6803 3.31682 17.681C3.53999 17.6812 3.75398 17.7699 3.91178 17.9277C4.06958 18.0855 4.15829 18.2995 4.15843 18.5226V20.3168C4.15843 20.6214 4.24112 20.9204 4.39768 21.1817C4.55423 21.4431 4.77879 21.6571 5.04741 21.8008C5.31602 21.9446 5.61861 22.0127 5.92292 21.998C6.22723 21.9833 6.52183 21.8863 6.77533 21.7173L12.6173 17.8224C12.7554 17.7299 12.9179 17.6807 13.0841 17.681H17.187C17.7383 17.68 18.2742 17.4993 18.7136 17.1664C19.1531 16.8334 19.472 16.3664 19.6222 15.8359L22.8965 4.05007C22.9998 3.67478 23.0152 3.28071 22.9413 2.89853C22.8674 2.51634 22.7064 2.15636 22.4707 1.8466C22.2349 1.53684 21.9309 1.28565 21.5822 1.1126C21.2336 0.93954 20.8497 0.849282 20.4604 0.848846ZM21.2732 3.60301L18.0005 15.3847C17.9499 15.5614 17.8432 15.7168 17.6964 15.8274C17.5496 15.938 17.3708 15.9979 17.187 15.9978H13.0841C12.5855 15.9972 12.098 16.1448 11.6836 16.4219L5.84165 20.3168V18.5226C5.84091 17.8532 5.57467 17.2115 5.10133 16.7381C4.62799 16.2648 3.98622 15.9985 3.31682 15.9978C3.09365 15.9977 2.87966 15.909 2.72186 15.7512C2.56406 15.5934 2.47534 15.3794 2.47521 15.1562V3.37367C2.47534 3.15051 2.56406 2.93652 2.72186 2.77871C2.87966 2.62091 3.09365 2.5322 3.31682 2.53206H20.4604C20.5905 2.53239 20.7187 2.56274 20.8352 2.62073C20.9516 2.67872 21.0531 2.7628 21.1318 2.86643C21.2104 2.97005 21.2641 3.09042 21.2886 3.21818C21.3132 3.34594 21.3079 3.47763 21.2732 3.60301Z"
                    fill="#000"></path>
                  <path
                    d="M5.84161 8.42333H10.0497C10.2729 8.42333 10.4869 8.33466 10.6448 8.17683C10.8026 8.019 10.8913 7.80493 10.8913 7.58172C10.8913 7.35851 10.8026 7.14445 10.6448 6.98661C10.4869 6.82878 10.2729 6.74011 10.0497 6.74011H5.84161C5.6184 6.74011 5.40433 6.82878 5.2465 6.98661C5.08867 7.14445 5 7.35851 5 7.58172C5 7.80493 5.08867 8.019 5.2465 8.17683C5.40433 8.33466 5.6184 8.42333 5.84161 8.42333Z"
                    fill="#000"></path>
                  <path
                    d="M13.4161 10.1066H5.84161C5.6184 10.1066 5.40433 10.1952 5.2465 10.3531C5.08867 10.5109 5 10.725 5 10.9482C5 11.1714 5.08867 11.3854 5.2465 11.5433C5.40433 11.7011 5.6184 11.7898 5.84161 11.7898H13.4161C13.6393 11.7898 13.8534 11.7011 14.0112 11.5433C14.169 11.3854 14.2577 11.1714 14.2577 10.9482C14.2577 10.725 14.169 10.5109 14.0112 10.3531C13.8534 10.1952 13.6393 10.1066 13.4161 10.1066Z"
                    fill="#000"></path>
                </svg>
                <div class="pulse-css"></div>
              </a>
            </li>
            <li class="nav-item dropdown notification_dropdown">
              <a class="nav-link primary" href="#" role="button" data-toggle="dropdown">
                <svg width="22" height="22" viewBox="0 0 26 26" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z"
                    fill="#000"></path>
                </svg>
                <div class="pulse-css"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3"
                     style="height:380px;">
                  <ul class="timeline">
                    <li>
                      <div class="timeline-panel">
                        <div class="media mr-2">
                          <img alt="image" width="50"
                               src="/assets/images/avatar/1.jpg">
                        </div>
                        <div class="media-body">
                          <h6 class="mb-1">Dr sultads Send you Photo</h6>
                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-panel">
                        <div class="media mr-2 media-info">
                          KG
                        </div>
                        <div class="media-body">
                          <h6 class="mb-1">Resport created successfully</h6>
                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-panel">
                        <div class="media mr-2 media-success">
                          <i class="fa fa-home"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="mb-1">Reminder : Treatment Time!</h6>
                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-panel">
                        <div class="media mr-2">
                          <img alt="image" width="50"
                               src="/assets/images/avatar/1.jpg">
                        </div>
                        <div class="media-body">
                          <h6 class="mb-1">Dr sultads Send you Photo</h6>
                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-panel">
                        <div class="media mr-2 media-danger">
                          KG
                        </div>
                        <div class="media-body">
                          <h6 class="mb-1">Resport created successfully</h6>
                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-panel">
                        <div class="media mr-2 media-primary">
                          <i class="fa fa-home"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="mb-1">Reminder : Treatment Time!</h6>
                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <a class="all-notification" href="#">See all notifications <i
                    class="ti-arrow-right"></i></a>
              </div>
            </li>
            <li class="nav-item dropdown header-profile">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                <img src="/assets/images/profile/pic1.jpg"
                     width="20" alt=""/>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="/assets/app-profile"
                   class="dropdown-item ai-icon">
                  <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                       width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                       stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  <span class="ml-2">Profile </span>
                </a>
                <a href="/assets/email-inbox"
                   class="dropdown-item ai-icon">
                  <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                       width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                       stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                      d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                    </path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                  </svg>
                  <span class="ml-2">Inbox </span>
                </a>
                <a href="/login"
                   class="dropdown-item ai-icon">
                  <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                       width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                       stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                  </svg>
                  <span class="ml-2">Logout </span>
                </a>
              </div>
            </li>
{{--            <li class="dropdown schedule-event-inner">--}}
{{--              <a href="javascript:void(0)" class="btn btn-rounded event-btn btn-outline-primary">--}}
{{--                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"--}}
{{--                     xmlns="http://www.w3.org/2000/svg" class="scale5 mr-0 mb-0 mr-sm-2 mb-sm-1">--}}
{{--                  <path--}}
{{--                    d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"--}}
{{--                    stroke="white" stroke-width="2" stroke-linecap="round"--}}
{{--                    stroke-linejoin="round"/>--}}
{{--                  <path d="M16 2V6" stroke="white" stroke-width="2" stroke-linecap="round"--}}
{{--                        stroke-linejoin="round"/>--}}
{{--                  <path d="M8 2V6" stroke="white" stroke-width="2" stroke-linecap="round"--}}
{{--                        stroke-linejoin="round"/>--}}
{{--                  <path d="M3 10H21" stroke="white" stroke-width="2" stroke-linecap="round"--}}
{{--                        stroke-linejoin="round"/>--}}
{{--                </svg>--}}
{{--                <span class="d-none d-xl-inline-block">Schedule</span> <span--}}
{{--                  class="d-none d-lg-inline-block">Event(5)</span>--}}
{{--                <i class="fa fa-caret-right scale3 ml-2 d-none d-sm-inline-block"></i>--}}
{{--              </a>--}}
{{--            </li>--}}
          </ul>
        </div>
      </nav>
    </div>
  </div>

  <!--**********************************
      Header end ti-comment-alt
  ***********************************-->

  <!--**********************************
      Sidebar start
  ***********************************-->
  <!--**********************************
      Sidebar start
***********************************-->

  <div class="deznav">
    <div class="deznav-scroll">
      <ul class="metismenu" id="menu">
{{--        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">--}}
{{--            <i class="flaticon-381-networking"></i>--}}
{{--            <span class="nav-text">Dashboard</span>--}}
{{--          </a>--}}
{{--          <ul aria-expanded="false">--}}
{{--            <li><a href="/assets/index">Dashboard</a></li>--}}
{{--            <li><a href="/assets/analytics">Analytics</a></li>--}}
{{--            <li><a href="/assets/events">Events</a></li>--}}
{{--            <li><a href="/assets/order-list">Order List</a></li>--}}
{{--            <li><a href="/assets/customer-list">Customer List</a></li>--}}
{{--            <li><a href="/assets/reviews">Reviews</a></li>--}}
{{--          </ul>--}}
{{--        </li>--}}
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="fa-solid fa-tv"></i>
            <span class="nav-text">Apps</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="/admin/revenue">Chart-Revenue</a></li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
              <ul aria-expanded="false">
                <li><a href="/admin/book/list">Books</a></li>
                <li><a href="/admin/book/create">Add a new book</a></li>
              </ul>
            </li>
          </ul>
        </li>
{{--        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">--}}
{{--            <i class="flaticon-381-controls-3"></i>--}}
{{--            <span class="nav-text">Charts</span>--}}
{{--          </a>--}}
{{--          <ul aria-expanded="false">--}}
{{--            <li><a href="/assets/chart-flot">Flot</a></li>--}}
{{--            <li><a href="/assets/chart-morris">Morris</a></li>--}}
{{--            <li><a href="/assets/chart-chartjs">Chartjs</a></li>--}}
{{--            <li><a href="/assets/chart-chartist">Chartist</a></li>--}}
{{--            <li><a href="/assets/chart-sparkline">Sparkline</a></li>--}}
{{--            <li><a href="/assets/chart-peity">Peity</a></li>--}}
{{--          </ul>--}}
{{--        </li>--}}
{{--        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">--}}
{{--            <i class="flaticon-381-internet"></i>--}}
{{--            <span class="nav-text">Bootstrap</span>--}}
{{--          </a>--}}
{{--          <ul aria-expanded="false">--}}
{{--            <li><a href="/assets/ui-accordion">Accordion</a></li>--}}
{{--            <li><a href="/assets/ui-alert">Alert</a></li>--}}
{{--            <li><a href="/assets/ui-badge">Badge</a></li>--}}
{{--            <li><a href="/assets/ui-button">Button</a></li>--}}
{{--            <li><a href="/assets/ui-modal">Modal</a></li>--}}
{{--            <li><a href="/assets/ui-button-group">Button Group</a>--}}
{{--            </li>--}}
{{--            <li><a href="/assets/ui-list-group">List Group</a></li>--}}
{{--            <li><a href="/assets/ui-media-object">Media Object</a>--}}
{{--            </li>--}}
{{--            <li><a href="/assets/ui-card">Cards</a></li>--}}
{{--            <li><a href="/assets/ui-carousel">Carousel</a></li>--}}
{{--            <li><a href="/assets/ui-dropdown">Dropdown</a></li>--}}
{{--            <li><a href="/assets/ui-popover">Popover</a></li>--}}
{{--            <li><a href="/assets/ui-progressbar">Progressbar</a></li>--}}
{{--            <li><a href="/assets/ui-tab">Tab</a></li>--}}
{{--            <li><a href="/assets/ui-typography">Typography</a></li>--}}
{{--            <li><a href="/assets/ui-pagination">Pagination</a></li>--}}
{{--            <li><a href="/assets/ui-grid">Grid</a></li>--}}

{{--          </ul>--}}
{{--        </li>--}}
{{--        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">--}}
{{--            <i class="flaticon-381-heart"></i>--}}
{{--            <span class="nav-text">Plugins</span>--}}
{{--          </a>--}}
{{--          <ul aria-expanded="false">--}}
{{--            <li><a href="/assets/uc-select2">Select 2</a></li>--}}
{{--            <li><a href="/assets/uc-nestable">Nestedable</a></li>--}}
{{--            <li><a href="/assets/uc-noui-slider">Noui Slider</a></li>--}}
{{--            <li><a href="/assets/uc-sweetalert">Sweet Alert</a></li>--}}
{{--            <li><a href="/assets/uc-toastr">Toastr</a></li>--}}
{{--            <li><a href="/assets/map-jqvmap">Jqv Map</a></li>--}}
{{--            <li><a href="/assets/uc-lightgallery">Light Gallery</a>--}}
{{--            </li>--}}
{{--          </ul>--}}
{{--        </li>--}}
{{--        <li><a href="/assets/widget-basic" class="ai-icon"--}}
{{--               aria-expanded="false">--}}
{{--            <i class="flaticon-381-settings-2"></i>--}}
{{--            <span class="nav-text">Widget</span>--}}
{{--          </a>--}}
{{--        </li>--}}
{{--        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">--}}
{{--            <i class="flaticon-381-notepad"></i>--}}
{{--            <span class="nav-text">Forms</span>--}}
{{--          </a>--}}
{{--          <ul aria-expanded="false">--}}
{{--            <li><a href="/assets/form-element">Form Elements</a></li>--}}
{{--            <li><a href="/assets/form-wizard">Wizard</a></li>--}}
{{--            <li><a--}}
{{--                href="/assets/form-editor-summernote">Summernote</a>--}}
{{--            </li>--}}
{{--            <li><a href="/assets/form-pickers">Pickers</a></li>--}}
{{--            <li><a href="/assets/form-validation-jquery">Jquery--}}
{{--                Validate</a></li>--}}
{{--          </ul>--}}
{{--        </li>--}}
{{--        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">--}}
{{--            <i class="flaticon-381-network"></i>--}}
{{--            <span class="nav-text">Table</span>--}}
{{--          </a>--}}
{{--          <ul aria-expanded="false">--}}
{{--            <li><a href="/assets/table-bootstrap-basic">Bootstrap</a>--}}
{{--            </li>--}}
{{--            <li><a href="/assets/table-datatable-basic">Datatable</a>--}}
{{--            </li>--}}
{{--          </ul>--}}
{{--        </li>--}}
{{--        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">--}}
{{--            <i class="flaticon-381-layer-1"></i>--}}
{{--            <span class="nav-text">Pages</span>--}}
{{--          </a>--}}
{{--          <ul aria-expanded="false">--}}
{{--            <li><a href="/assets/page-register">Register</a></li>--}}
{{--            <li><a href="/assets/page-login">Login</a></li>--}}
{{--            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>--}}
{{--              <ul aria-expanded="false">--}}
{{--                <li><a href="/assets/page-error-400">Error 400</a>--}}
{{--                </li>--}}
{{--                <li><a href="/assets/page-error-403">Error 403</a>--}}
{{--                </li>--}}
{{--                <li><a href="/assets/page-error-404">Error 404</a>--}}
{{--                </li>--}}
{{--                <li><a href="/assets/page-error-500">Error 500</a>--}}
{{--                </li>--}}
{{--                <li><a href="/assets/page-error-503">Error 503</a>--}}
{{--                </li>--}}
{{--              </ul>--}}
{{--            </li>--}}
{{--            <li><a href="/assets/page-lock-screen">Lock Screen</a>--}}
{{--            </li>--}}
{{--          </ul>--}}
{{--        </li>--}}
      </ul>
      <div class="copyright">
        <p> WeupBook© 2022 All Rights Reserved</p>
        <p class="op5">Made with <i class="fa fa-heart"></i> by me</p>
      </div>
    </div>
  </div>

  <!--**********************************
      Sidebar end
  ***********************************-->

  <!--**********************************
      EventList
  ***********************************-->

  <!--**********************************
      Sidebar end
  ***********************************-->


  <!--**********************************
      Content body start
  ***********************************-->
  <div class="content-body">
    @yield('content')
  </div>
  <!--**********************************
      Content body end
  ***********************************-->


  <!--**********************************
      Footer start
  ***********************************-->

  <div class="footer">
    <div class="copyright">
      <p>Copyright © Designed &amp; Developed by <a href="#"
                                                    target="_blank">WeupBook</a> 2022</p>
    </div>
  </div>
  <!--**********************************
      Footer end
  ***********************************-->

  <!--**********************************
     Support ticket button start
  ***********************************-->

  <!--**********************************
     Support ticket button end
  ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="/assets/vendor/global/global.min.js" type="text/javascript"></script>
<script src="/assets/vendor/bootstrap-datetimepicker/js/moment.js"
        type="text/javascript"></script>
<script
  src="/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"
  type="text/javascript"></script>
<script src="/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"
        type="text/javascript"></script>
<script src="/assets/vendor/datatables/js/jquery.dataTables.min.js"
        type="text/javascript"></script>
<script src="/assets/js/plugins-init/datatables.init.js"
        type="text/javascript"></script>
<script src="/assets/js/custom.min.js" type="text/javascript"></script>
<script src="/assets/js/deznav-init.js" type="text/javascript"></script>
<script src="/assets/js/demo.js" type="text/javascript"></script>
<script src="/assets/js/styleSwitcher.js" type="text/javascript"></script>

<script id="DZScript" src="https://dzassets.s3.amazonaws.com/w3-global.js?btn_dir=right"></script>


<!--		<script src="/assets/js/custom.min.js" type="text/javascript"></script>
        <script src="/assets/js/deznav-init.js" type="text/javascript"></script> -->
<!--
 -->
</body>
</html>
