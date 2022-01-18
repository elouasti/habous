<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="https://vjs.zencdn.net/7.17.0/video-js.css" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>
        @yield('css')
    </head>
    <body>
        <header>
            <div class="top">
                <div class="top_logo">
                    <a href="/"><img id="habous-logo" src="{{asset('assets/img/logo.png')}}" alt="Logo habous"></a>
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
                    <li class="nav_item navigation"><a class="nav_link" href="/">الرئيسية</a><box-icon class="home_icon" name='home' color="#fff"></box-icon></li>
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
                <img src="{{asset('assets/img/logo-2.png')}}" alt="">
            </div>
            <div class="footer_bottom">
                <div class="footer_link">
                    <ul class="mnu_rac">
                        <li><a href="/pelerinage/">الحج</a></li>
                        <li><a href="/%D8%A7%D9%84%D9%85%D8%AC%D9%84%D8%B3-%D8%A7%D9%84%D8%B9%D9%84%D9%85%D9%8A-%D8%A7%D9%84%D8%A7%D8%B9%D9%84%D9%89.html">المجلس العلمي الأعلى</a></li>
                        <li><a href="/tv/2017/5847-2015-07-20-09-13-64.html">الدروس الحسنية</a></li>
                        <li><a href="/%D8%A7%D9%84%D9%88%D8%B2%D9%8A%D8%B1.html" class="link" title="الوزير احمد التوفيق">الوزير</a></li>
                        <li><a href="/%D8%A7%D9%84%D9%83%D8%AA%D8%A7%D8%A8%D8%A9-%D8%A7%D9%84%D8%B9%D8%A7%D9%85%D8%A9.html" class="link" title="الكتابة العامة">الكتابة العامة</a></li>
                        <li><a href="/%D8%A7%D9%84%D9%85%D9%81%D8%AA%D8%B4%D9%8A%D8%A9-%D8%A7%D9%84%D8%B9%D8%A7%D9%85%D8%A9.html" class="link" title="المفتشية العامة">المفتشية العامة</a></li>
                        <li><a href="/%D8%A7%D9%84%D9%86%D8%B8%D8%A7%D8%B1%D8%A7%D8%AA-15.html" class="link" title="النظارات">النظارات</a></li>
                        <li><a href="/%D8%A7%D9%84%D9%85%D9%86%D8%AF%D9%88%D8%A8%D9%8A%D8%A7%D8%AA.html" class="link" title="المندوبيات">المندوبيات</a></li>
                        <li><a href="/%D9%81%D9%8A-%D8%A7%D9%84%D8%A8%D8%B1%D9%84%D9%85%D8%A7%D9%86.html" title="في البرلمان"><span class="link">في البرلمان</span></a></li>
                        <li><a href="/%D9%86%D8%B4%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D9%86%D8%AC%D8%B2%D8%A7%D8%AA.html" class="link" title="نشرة المنجزات">نشرة المنجزات</a></li>
                        <li><a href="/%D8%A7%D9%84%D9%86%D8%B5%D9%88%D8%B5-%D8%A7%D9%84%D8%AA%D8%B4%D8%B1%D9%8A%D8%B9%D9%8A%D8%A9.html" class="link" title="نصوص تشريعية">نصوص تشريعية</a></li>
                    </ul>
                </div>
                <div class="footer_middle">
                    <ul class="mnu_rac">
                        <li><a href="/2012-06-26-07-34-28.html" class="link" title="الإمام">الإمام</a></li>
                        <li><a href="/%D8%A7%D9%84%D8%A5%D8%B3%D9%84%D8%A7%D9%85-%D9%81%D9%8A-%D8%A7%D9%84%D9%85%D8%BA%D8%B1%D8%A8.html" class="link" title="الإسلام في المغرب">الإسلام في المغرب</a></li>
                        <li><a href="/%D8%AE%D8%B7%D8%A8-%D8%A7%D9%84%D8%AC%D9%85%D8%B9%D8%A9.html" class="link" title="خطب منبرية">خطب منبرية</a></li>
                        <li><a href="/%D9%83%D8%B1%D9%88%D9%86%D9%88%D9%84%D9%88%D8%AC%D9%8A%D8%A7.html" class="link" title="كرونولوجيا">كرونولوجيا</a></li>
                    </ul>
                    <div class="social">
                        <a href=""><box-icon animation='tada-hover' class="social_icon" type='logo'  color="#C1A783" name='facebook-circle'></box-icon></a>
                        <a href=""><box-icon animation='tada-hover' class="social_icon" type='logo' color="#C1A783" name='twitter'></box-icon></a>
                        <a href=""><box-icon animation='tada-hover' class="social_icon" type='logo' color="#C1A783" name='youtube'></box-icon></a>
                    </div>
                </div>
                <div class="footer_right">
                    <ul class="mnu_rac">
                        <li><a href="/%D8%A7%D9%84%D9%88%D8%B2%D9%8A%D8%B1.html" class="link" title="الوزير احمد التوفيق">الوزير</a></li>
                        <li><a href="/%D8%A7%D9%84%D9%83%D8%AA%D8%A7%D8%A8%D8%A9-%D8%A7%D9%84%D8%B9%D8%A7%D9%85%D8%A9.html" class="link" title="الكتابة العامة">الكتابة العامة</a></li>
                        <li><a href="/%D8%A7%D9%84%D9%85%D9%81%D8%AA%D8%B4%D9%8A%D8%A9-%D8%A7%D9%84%D8%B9%D8%A7%D9%85%D8%A9.html" class="link" title="المفتشية العامة">المفتشية العامة</a></li>
                        <li><a href="/%D8%A7%D9%84%D9%86%D8%B8%D8%A7%D8%B1%D8%A7%D8%AA-15.html" class="link" title="النظارات">النظارات</a></li>
                        <li><a href="/%D8%A7%D9%84%D9%85%D9%86%D8%AF%D9%88%D8%A8%D9%8A%D8%A7%D8%AA.html" class="link" title="المندوبيات">المندوبيات</a></li>
                        <li><a href="/%D9%81%D9%8A-%D8%A7%D9%84%D8%A8%D8%B1%D9%84%D9%85%D8%A7%D9%86.html" title="في البرلمان"><span class="link">في البرلمان</span></a></li>
                        <li><a href="/%D9%86%D8%B4%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D9%86%D8%AC%D8%B2%D8%A7%D8%AA.html" class="link" title="نشرة المنجزات">نشرة المنجزات</a></li>
                        <li><a href="/%D8%A7%D9%84%D9%86%D8%B5%D9%88%D8%B5-%D8%A7%D9%84%D8%AA%D8%B4%D8%B1%D9%8A%D8%B9%D9%8A%D8%A9.html" class="link" title="نصوص تشريعية">نصوص تشريعية</a></li>
                        <li><a href="/tv/coran-tv/" title="القرآن الكريم">القرآن الكريم</a></li>
                        <li><a href="/prieres/" title="مواقيت الصلاة">مواقيت الصلاة</a></li>
                        <li><a href="/2014-07-24-09-21-35.html" title="جوائز محمد السادس">جوائز محمد السادس</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- Footer -->
        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>
    </body>
</html>
