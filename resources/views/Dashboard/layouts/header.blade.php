<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page_name','Dashboard')</title>
    <!-- ================= Favicon ================== -->
{{--    <!-- Standard -->--}}
{{--    <link rel="shortc ut icon" href="http://placehold.it/64.png/000/fff">--}}
{{--    <!-- Retina iPad Touch Icon-->--}}
{{--    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">--}}
{{--    <!-- Retina iPhone Touch Icon-->--}}
{{--    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">--}}
{{--    <!-- Standard iPad Touch Icon-->--}}
{{--    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">--}}
{{--    <!-- Standard iPhone Touch Icon-->--}}
{{--    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">--}}
    <!-- Styles -->
    <link href="{{asset("Dash/css/lib/calendar2/pignose.calendar.min.css")}}" rel="stylesheet">
    <link href="{{asset("Dash/css/lib/chartist/chartist.min.css")}}" rel="stylesheet">
    <link href="{{asset("Dash/css/lib/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("Dash/css/lib/themify-icons.css")}}" rel="stylesheet">
    <link href="{{asset("Dash/css/lib/owl.carousel.min.css" )}}"rel="stylesheet" />
    <link href="{{asset("Dash/css/lib/owl.theme.default.min.css" )}}"rel="stylesheet" />
    <link href="{{asset("Dash/css/lib/weather-icons.css" )}}"rel="stylesheet" />
    <link href="{{asset("Dash/css/lib/menubar/sidebar.css")}}" rel="stylesheet">
    <link href="{{asset("Dash/css/lib/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("Dash/css/lib/helper.css")}}" rel="stylesheet">
    <link href="{{asset("Dash/css/style.css")}}" rel="stylesheet">
</head>

<body>

<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{route('dashboard')}}">
                        <!-- <img src="images/logo.png" alt="" /> --><span>Focus</span></a></div>
                <li class="label">Main</li>



                <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Insert <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{route('skile.create')}}">Sklies</a></li>
                        <li><a href="{{route('course.create')}}">Course</a></li>
                        <li><a href="{{route('experience.create')}}">Experiesn</a></li>
                        <li><a href="{{route('social.create')}}">Social</a></li>
                        <li><a href="{{route('project.create')}}">Project</a></li>

                    </ul>
                </li>



                <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{route('skile.index')}}">Sklies</a></li>
                        <li><a href="{{route('course.index')}}">Course</a></li>
                        <li><a href="{{route('experience.index')}}">Experiesn</a></li>
                        <li><a href="{{route('social.index')}}">Social</a></li>
                        <li><a href="{{route('project.index')}}">Project</a></li>
                        <li><a href="{{route('contact.index')}}">Contact</a></li>
                    </ul>
                </li>
                <li class="label">Profile</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i>Setting <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{route('profile.edit')}}">Setting</a></li>
{{--                        <li>--}}
{{--                            <form method="POST" action="{{ route('logout') }}">--}}
{{--                                @csrf--}}
{{--                            <a href="{{route('logout')}}" onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">Logout</a></form></li>--}}




                    </ul>
                </li>




                <li> <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</a></form>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->

<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <i class="ti-bell"></i>
                            <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">Recent Notifications</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">5 members joined today </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mariam</div>
                                                    <div class="notification-text">likes a photo of you</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Tasnim</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center">
                                            <a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <i class="ti-email"></i>
                            <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">2 New Messages</span>
                                    <a href="email.html">
                                        <i class="ti-pencil-alt pull-right"></i>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="images/avatar/1.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="images/avatar/2.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="images/avatar/2.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center">
                                            <a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                            <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">Upgrade Now</span>
                                    <p class="trial-day">30 Days Trail</p>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ti-email"></i>
                                                <span>Inbox</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-settings"></i>
                                                <span>Setting</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ti-lock"></i>
                                                <span>Lock Screen</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-power-off"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

