

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-gradient nav-icon alt-font">
        <style>a.nav-link.link.scroll:hover {cursor: pointer;}
            a.btn.btn-medium.btn-rounded.btn-transparent-white.btn-hvr-white.ml-3:hover {cursor: pointer;}
        </style>
        <div class="container">
            <a class="logo link scroll" onclick="window.location = '{{route('homepage')}}';" title="Logo">
                <!--Logo Default-->
                <!--  <img alt="logo" class="logo-dark default" src="agency/img/logo-white.png"> -->
                <h3 style="color: #fff">Logo</h3>
            </a>


            <div class="collapse navbar-collapse" id="agency">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link link scroll active"  onclick="window.location = '{{route('homepage')}}';">Home</a>
                    <a class="nav-link link scroll" onclick="window.location = '{{route('feature')}}';" >Features </a>
                    <a class="nav-link link scroll" onclick="window.location = '{{route('pricing')}}';" >Pricing</a>
                    @if(Auth::check())
                        <a class="nav-link link scroll" onclick="window.location = '{{route('user.dashboard')}}';">Dashboard</a>
                        <a class="nav-link link scroll" onclick="window.location = '{{route('logout')}}';">Logout</a>
                    @else
                        <a class="nav-link link scroll" onclick="window.location = '{{route('login')}}';">Login</a>
                    @endif
                    <span class="menu-line"><i aria-hidden="true" class="fa fa-angle-down"></i></span>
                </div>
                <a class="btn btn-medium btn-rounded btn-transparent-white btn-hvr-white ml-3"
                   onclick="window.location = '#';">Free Trial
                    <div class="btn-hvr-setting">
                        <ul class="btn-hvr-setting-inner">
                            <li class="btn-hvr-effect"></li>
                            <li class="btn-hvr-effect"></li>
                            <li class="btn-hvr-effect"></li>
                            <li class="btn-hvr-effect"></li>
                        </ul>
                    </div>
                </a>
            </div>
            <!--Menu Button-->
            <button class="fullnav-toggler link" id="full-menu-1" type="button">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

            <!--Slider Social-->
            <div class="slider-social">
                <ul class="list-unstyled">
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                                aria-hidden="true" class="fab fa-facebook-f"></i></a></li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                                aria-hidden="true" class="fab fa-instagram"></i></a></li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                                aria-hidden="true" class="fab fa-twitter"></i></a></li>
                </ul>
            </div>

        </div>
    </nav>

    <!--Full menu-->
    <div class="nav-holder main style-2 alt-font">

        <!--Menu Button-->
        <button class="fullnav-close link" type="button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>

        <div class="container">
            <div class="shape-left">
                <nav class="navbar full-menu-navigation left">
                    <ul class="list-unstyled">
                        <li><a class="link scroll" onclick="window.location = '{{route('homepage')}}';">
                                <span class="anchor-circle"></span>
                                <span class="anchor-text">Home</span>
                            </a></li>
                        <li><a class="link scroll" onclick="window.location = '{{route('feature')}}';">
                                <span class="anchor-circle"></span>
                                <span class="anchor-text">Features</span>
                            </a></li>
                        <li><a class="link scroll" onclick="window.location = '{{route('pricing')}}';">
                                <span class="anchor-circle"></span>
                                <span class="anchor-text">Pricing</span>
                            </a></li>
                        @if(Auth::check())
                            <li><a class="link scroll" onclick="window.location = '{{route('user.dashboard')}}';">
                                    <span class="anchor-circle"></span>
                                    <span class="anchor-text">Profile</span>
                                </a>
                            </li>
                            <li><a class="link scroll" onclick="window.location = '{{route('logout')}}';">
                                    <span class="anchor-circle"></span>
                                    <span class="anchor-text">Logout</span>
                                </a>
                            </li>
                        @else
                        <li><a class="link scroll" onclick="window.location = '{{route('login')}}';">
                                <span class="anchor-circle"></span>
                                <span class="anchor-text">Login</span>
                            </a></li>
                        @endif
                        <li><a class="link scroll" {{--onclick="window.location = 'login.html';"--}}>
                                <span class="anchor-circle"></span>
                                <span class="anchor-text">Free Trial</span>
                            </a></li>

                    </ul>
                    <span class="full-menu-dot" style="transform: scale(0);"></span>
                </nav>
                <img alt="shape" src="{{asset('_landing/agency/img/shape-8.png')}}">
            </div>
            <div class="shape-right">
                <div class="full-menu-detail hide-cursor">
                    <h6 class="title">Press Contact</h6>
                    <p><i class="fas fa-user-alt"></i>Compnay Name</p>
                    <p><i class="fas fa-mobile-alt"></i>+91 12 34 56 78 91</p>
                    <p><i class="fas fa-envelope"></i>info@picmoney.com</p>
                </div>
                <img alt="shape" src="{{asset('_landing/agency/img/shape-7.png')}}">
            </div>
        </div>
    </div>



