<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('/default/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('/default/assets/icon/icofont/css/icofont.css')}}">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/default/assets/pages/menu-search/css/component.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/default/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/default/assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('/default/assets/pages/chart/radial/css/radial.css')}}" type="text/css" media="all">
    
    <link rel="stylesheet" type="text/css" href="{{asset('/bower_components/jquery-bar-rating/css/fontawesome-stars.css')}}">
    <!-- Font awesome star css -->
    <!-- Font awesome star css -->
    <!-- star theme css -->
    <!-- themify-icons line icon -->
    <!-- ico font -->
    <!-- Menu-Search css -->
    <title>TAW-PROYECTO</title>
  </head>
  
    
    <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    
      <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                </li>
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
                        <!-- search -->
                        <!-- search end -->
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                            </div>
                            <ul class="pcoded-item pcoded-left-item">
                          
                              <div class="pcoded-navigatio-lavel" data-i18n="nav.category.ui-element">Funciones</div>
                            <ul class="pcoded-item pcoded-left-item">
                              <li class=" ">
                                    <a href="/Perfil">
                                    <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.animations.main">Perfil</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                               <li class=" ">
                                <a href="/Muro">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.tooltip-popover">Muro</span><span class="pcoded-badge label label-danger">{{App\Proyectos::all()->where('estado','En espera')->count()}}</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                              </li> 
                              <li class=" ">
                                <a href="/home">
                                    <span class="pcoded-micon"><i class="icofont icofont-brand-myspace "></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.tooltip-popover">Usuarios</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                              </li> 
                              
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-user"></i><b>BC</b></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Movimientos como</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        
                                        <li class=" ">
                                            <a href="/UsuarioEmpresa">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.tooltip-popover">Usuario Empresa</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="/UsuarioTrabajador">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.typography">Usuario Trabajador</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                            </ul>
                          
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                      @yield('content')
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>

<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('/bower_components/modernizr/js/modernizr.js')}}"></script>
    <!-- am chart -->
    <script src="{{asset('/default/assets/pages/widget/amchart/amcharts.min.js')}}"></script>
    <script src="{{asset('/default/assets/pages/widget/amchart/serial.min.js')}}"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{asset('/bower_components/chart.js/js/Chart.js')}}"></script>
    <!-- Todo js -->
    <script type="text/javascript" src="{{asset('/default/assets/pages/todo/todo.js')}} "></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{asset('/bower_components/i18next/js/i18next.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('/default/assets/pages/dashboard/custom-dashboard.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('/default/assets/js/SmoothScroll.js')}}"></script>
      <script type="text/javascript" src="{{asset('/default/assets/js/pcoded.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('/default/assets/js/demo-12.js')}}"></script>
      <script type="text/javascript" src="{{asset('/default/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('/default/assets/js/script.min.js')}}"></script>
  
    <script type="text/javascript" src="{{asset('/bower_components/jquery-bar-rating/js/jquery.barrating.js')}}"></script>
    <script type="text/javascript" src="{{asset('/default/assets/js/rating.js')}}"></script>

    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="assets/pages/advance-elements/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="../bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>
    <!-- Date-range picker js -->
    <script type="text/javascript" src="../bower_components/bootstrap-daterangepicker/js/daterangepicker.js"></script>
    <!-- Date-dropper js -->
    <script type="text/javascript" src="../bower_components/datedropper/js/datedropper.min.js"></script>
    <!-- data-table js -->
    <script src="{{asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- ck editor -->
    <script src="{{asset('/default/assets/pages/ckeditor/ckeditor.js')}}"></script>
    <!-- echart js -->
    <script src="{{asset('/default/assets/pages/chart/echarts/js/echarts-all.js')}}" type="text/javascript"></script>
    <!-- i18next.min.js -->
    <script src="{{asset('/default/assets/pages/user-profile.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
  <script>
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover({
        animation: true,
        delay: {
            show: 100,
            hide: 100
        }
    });
  
</html>