<header id="topnav">
    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>


                <li class="dropdown notification-list">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>


                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center">
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="26">
                                <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                            </span>
                    <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">X</span> -->
                                <img src="assets/images/logo-sm.png" alt="" height="28">
                            </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

                <li class="dropdown d-none d-lg-block">
                    <h2 class="nav-link  waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        Admin
                    </h2>
                </li>


            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="#">
                            <i class="la la-dashboard"></i> Người chơi <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('tatcanguoichoi')}}">Tất cả</a>
                            </li>
                            <li>
                                <a href="{{route('capnhatnguoichoi')}}">Cập nhật</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">
                            <i class="la la-cube"></i> Lĩnh vực<div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('tatcalinhvuc')}}">Tất cả</a>
                            </li>
                            <li>
                                <a href="{{route('capnhatlinhvuc')}}">Cập nhật</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="la la-clone"></i> Câu hỏi <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('tatcacauhoi')}}">Tất cả</a>
                            </li>
                            <li>
                                <a href="{{route('capnhatcauhoi')}}">Cập nhật</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="la la-briefcase"></i> Credit <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('tatcacredit')}}">Tất cả</a>
                            </li>
                            <li>
                                <a href="{{route('capnhatcredit')}}">Cập nhật</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">
                            <i class="la la-diamond"></i>Lịch sử mua credit <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('tatcacredithistory')}}">Tất cả</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="la la-flask"></i> lượt chơi<div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('tatcaluotchoi')}}">Tất cả</a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="{{route('capnhatluotchoi')}}">Cập nhật</a>--}}
{{--                            </li>--}}
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="la la-file-text-o"></i>Chi tiết lượt chơi <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('tatcachitietluotchoi')}}">Tất cả</a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="{{route('capnhatchitietluotchoi')}}">Cập nhật</a>--}}
{{--                            </li>--}}
                        </ul>
                    </li>

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->
</header>
    <div class="wrapper">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Starter</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Starter</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


        </div> <!-- end container -->
    </div>