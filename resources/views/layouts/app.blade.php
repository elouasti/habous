<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
        <title>Laravel</title>
    </head>
    <body>
        <header>
            <div class="top">
                <div class="top_logo">
                    <a href=""><img id="habous-logo" src="{{asset('assets/img/logo.png')}}" alt="Logo habous"></a>
                </div>
            </div>
            <nav>
                <div class="toggle_menu" id="toggle-menu">
                    <box-icon name='menu'></box-icon>
                </div>
                <ul class="nav_list" id="nav-menu">
                    <div class="close_menu" id="close-menu">
                        <box-icon name='x'></box-icon>
                    </div>
                    <li class="nav_item navigation"><a class="nav_link" href="">الرئيسية</a><box-icon class="home_icon" name='home' color="#fff"></box-icon></li>
                    <li class="nav_item navigation"><a class="nav_link" href="">إمارة المؤمنين</a></li>
                    <li class="nav_item dropdown navigation" id="dropdown">
                        <a class="nav_link " id="dropdown-link" href="#">المديريات والمؤسسات</a>
                        <box-icon class="dropdown_icon" id="dropdown_icon" name='chevron-down' color="#fff"></box-icon>
                        <div class="megamenu" id="megamenu">
                            <ul class="content">
                                <li class="megamenu_item megamenu_header">المؤسسات</li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/mosque.png')}}" alt="Mosque" width="30" height="30">
                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">الأوقاف</a>
                                    </div>
                                </li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/bab-mansour.png')}}" alt="Mosque" width="30" height="30">
                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">الشؤون الإسلامية</a>
                                    </div>
                                </li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/mosquee.png')}}" alt="Mosque" width="30" height="30">
                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">المساجد</a>
                                    </div>
                                </li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/mosque.png')}}" alt="Mosque" width="30" height="30">
                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">القيمون الدينيون</a>
                                    </div>
                                </li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/mosque.png')}}" alt="Mosque" width="30" height="30">
                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">التعليم العتيق ومحو الأمية بالمساجد</a>
                                    </div>
                                </li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/mosque.png')}}" alt="Mosque" width="30" height="30">

                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">الشؤون الإدارية التعاون</a>
                                    </div>
                                </li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/mosque.png')}}" alt="Mosque" width="30" height="30">
                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">الشؤون القانونية</a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="content">
                                <li class="megamenu_item megamenu_header"> المديريات</li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/mosque.png')}}" alt="Mosque" width="30" height="30">
                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">الأوقاف</a>
                                    </div>
                                </li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/bab-mansour.png')}}" alt="Mosque" width="30" height="30">
                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">الشؤون الإسلامية</a>
                                    </div>
                                </li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/rabat (1).png')}}" alt="Mosque" width="30" height="30">
                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">المساجد</a>
                                    </div>
                                </li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/mosque.png')}}" alt="Mosque" width="30" height="30">
                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">القيمون الدينيون</a>
                                    </div>
                                </li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/mosque.png')}}" alt="Mosque" width="30" height="30">
                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">التعليم العتيق ومحو الأمية بالمساجد</a>
                                    </div>
                                </li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/mosque.png')}}" alt="Mosque" width="30" height="30">

                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">الشؤون الإدارية التعاون</a>
                                    </div>
                                </li>
                                <li class="megamenu_item">
                                    <div class="menu_icon">
                                        <img src="{{asset('assets/img/mosque.png')}}" alt="Mosque" width="30" height="30">
                                    </div>
                                    <div class="menu_link">
                                        <a class="nav_link" href="#">الشؤون القانونية</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav_item navigation"><a class="nav_link" href="">كرونولوجيا</a></li>
                    <li class="nav_item navigation"><a class="nav_link" href="">النشر الإستباقي</a></li>
                </ul>
            </nav>
        </header>

        @yield('content')

        <!-- Footer -->
        <footer>
            <div class="footer_top">

            </div>
            <div class="footer_bottom">
                <div class="footer_link">
                    <img src="{{asset('assets/img/logo.png')}}" width="130" alt="">
                </div>
                <div class="footer_middle">

                </div>
                <div class="footer_right">

                </div>
            </div>
        </footer>
        <!-- Footer -->
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
