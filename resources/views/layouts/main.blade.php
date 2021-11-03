<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page-title') | Traveler</title>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <!-- ==================Start Css Link===================== -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/datepicker.min.css">
    <link rel="stylesheet" href="/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/icofont.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/slick-theme.css">
    <link rel="stylesheet" href="/css/slider-range.css">
    <link rel="stylesheet" href="/css/select2.min.css">
    <link rel="stylesheet" href="/css/tippy.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/self.css">
    <!-- ==================End Css Link===================== -->

    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body>


<!--
      ================== Header Area Start===================
   -->

<div class="rt-preloder">
    <div class="preloder-box">
        <img src="/images/all-img/preloder.svg" alt="preloder image" draggable="false">
    </div><!-- /.preloder-box -->
</div><!-- /.rt-preloder -->

<header class="rt-site-header  rt-fixed-top white-menu">
    <div class="top-header d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ul class="text-center text-md-left top-message">
                        <li><i class="icofont-headphone-alt"></i>Поддержка</li>
                        <li><a href="mailto:info@emigrar.com "><i class="icofont-email"></i>info@ecutravel.ru</a></li>
                    </ul>
                </div><!-- end top header single -->
                <div class="col-md-6">
                    <ul class="text-center text-md-right top-social">
                        <li><a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe-americas"></i>Русский</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">English</a>
                                <a class="dropdown-item" href="#">French</a>
                                <a class="dropdown-item" href="#">Trukis</a>
                            </div>
                        </li>
                        <li><a href="#"><i class="fas fa-briefcase"></i>Мои туры</a></li>
                        <li><a href="#" data-target="#rtmodal-1" data-toggle="modal"><i class="far fa-user-circle"></i>Войти в кабинет</a></li>
                    </ul>
                </div><!-- end top header single -->
            </div>
        </div>
    </div> <!-- end top header -->


    <div class="main-header rt-sticky">
        <nav class="navbar">
            <div class="container">
                <a href="/" class="brand-logo"><img src="/images/logo/logo.png" alt=""></a>
                <a href="/" class="sticky-logo"><img src="/images/logo/logo.png" alt=""></a>
                <div class="ml-auto d-flex align-items-center">


                    <div class="main-menu">
                        <ul>
                            <li class="current-menu-item"><a href="">Главная</a></li>
                            <li><a href="">Связь с нами</a></li>
                            <li><a href="">Составные билеты</a></li>
                            <li><a href="">Блог</a></li>

                        </ul>
                        <div class="mobile-menu">
                            <div class="menu-click">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div><!-- end main menu -->
                    <div class="rt-nav-tolls d-flex align-items-center">
    <span class="d-md-inline d-none"><a href="contact.html" class="rt-btn rt-gradient2 rt-rounded text-uppercase rt-Bshadow-1">Мой профиль</a></span>
                    </div>

                </div>
            </div>
        </nav>
    </div><!-- /.bootom-header -->

</header>


<!-- Modal -->
<div class="modal fade" id="rtmodal-1" tabindex="-1" role="dialog" aria-labelledby="rtmodal-1"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered rt-lgoinmodal " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="rt-modal-headr rt-mb-20 one">
                    <img src="/images/logo/Logo-icon.png" alt="modal logo" draggable="false">
                    <h4>Login in to Emigrar</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-headr rt-mb-20 two">
                    <img src="/images/logo/Logo-icon.png" alt="modal logo" draggable="false">
                    <h4>Create your Account</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-input one">
                    <form action="#" class="rt-form">
                        <input type="text" class="form-control pill rt-mb-15" placeholder="User name">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Password">
                        <div class="form-group forgot-pass">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheckss">
                                <label class="form-check-label" for="gridCheckss">
                                    Remember Password
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                        <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase " value="Log In">
                    </form>
                    <div class="ac-register">
                        <span>Don’t have an account? <a href="#" class="open-creatac">Sign Up Now <i class="icofont-double-right"></i></a></span>
                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class="rt-modal-input two">
                    <form action="#" class="rt-form">
                        <input type="text" class="form-control pill rt-mb-15" placeholder="User name">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Enter your mail address">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Password">
                        <div class="form-group forgot-pass">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck333">
                                <label class="form-check-label" for="gridCheck333">
                                    I'd like to hear about promos, new products,and much more!
                                </label>
                            </div><!-- ./orm-group -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck222">
                                <label class="form-check-label" for="gridCheck222">
                                    By clicking "Sign up" you agree to our Terms of Service and Privacy Policy
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                        <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase " value="Log In">
                    </form>
                    <div class="ac-register">
                        <span>Already have an account?<a href="#">LOGIN <i class="icofont-double-right"></i></a></span>

                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class="rt-modal-footer">
                    <span>Or</span>
                    <h4>Sign Up with social media</h4>
                    <ul class="rt-social rt-circle-style2">

                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                    </ul>
                </div><!-- /.rt-modal-footer -->
            </div>
        </div>
    </div>
</div>

@yield('content')

<!--
    !============= Footer Area Start ===========!
 -->
<section class="rt-site-footer" data-scrollax-parent="true">
    <div class="rt-shape-emenetns-1" style="background-image: url(/images/shape-elements/shape-4.png)" data-scrollax="properties: { translateY: '340px' }"></div><!-- /.rt-shape-emenetns-1 -->
    <div class="footer-top rtbgprefix-cover" style="background-image: url(/images/backgrounds/footerbg.png)">
        <div class="footer-subscripbe-box wow fade-in-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 mx-auto text-center">
                        <div class="rt-section-title-wrapper text-white">
                            <h2 class="rt-section-title">
                                <span>Наша рассылка</span>
                                Новостей и акций
                            </h2><!-- /.rt-section-title -->
                            <p>
                                Подпишитесь, чтобы быть в курсе последних новостией и акций!
                            </p>
                        </div><!-- /.rt-section-title-wrapper -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
                <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" placeholder="Enter your email address" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn" type="button" id="button-addon2">Подписаться</button>
                            </div>
                        </div><!-- end input gorup -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
                <div class="rt-dot-divider"></div><!-- /.rt-dot-divider -->
            </div><!-- /.container -->
        </div><!-- /.footer-subscripbe-box -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="rt-single-widget wow fade-in-bottom" data-wow-duration="1s">
                        <h3 class="rt-footer-title">Информация</h3><!-- /.rt-footer-title -->
                        <ul class="rt-usefulllinks">
                            <li>
                                <a href="#">О нас</a>
                            </li>
                            <li>
                                <a href="#">Связаться с нами</a>
                            </li>
                            <li>
                                <a href="#">Гарантии</a>
                            </li>
                            <li>
                                <a href="#">Условия использования</a>
                            </li>
                            <li>
                                <a href="#">Конфедициальность</a>
                            </li>
                            <li>
                                <a href="#">Лицензия</a>
                            </li>

                        </ul>

                    </div><!-- /.rt-single-widge -->
                </div><!-- /.col-lg-3-->
                <div class="col-lg-3 col-md-6">
                    <div class="rt-single-widget wow fade-in-bottom" data-wow-duration="1.5s">
                        <h3 class="rt-footer-title">Работайте с нами</h3>
                        <ul class="rt-usefulllinks">
                            <li><a href="#">Для партнеров</a></li>
                            <li><a href="#">Вакансии</a></li>
                            <li><a href="#">Инвесторам</a></li>
                            <li><a href="#">Партнерская программа</a></li>
                            <li><a href="#">Разработчикам</a></li>
                        </ul>
                    </div><!-- /.rt-single-widget -->
                </div><!-- /.col-lg-3-->
                <div class="col-lg-3 col-md-6">
                    <div class="rt-single-widget wow fade-in-bottom" data-wow-duration="2s">
                        <h3 class="rt-footer-title">
                            Профиль
                        </h3>
                        <ul class="rt-usefulllinks">

                            <li><a href="#">Просмотр</a></li>
                            <li><a href="#">Мои акции</a></li>
                            <li><a href="#">Статус заказа</a></li>
                            <li><a href="#">Советы</a></li>
                            <li><a href="#">История</a></li>
                        </ul><!-- /.rt-usefulllinks -->
                    </div><!-- end single widget -->
                </div><!-- /.col-lg-3-->
                <div class="col-lg-3 col-md-6">
                    <div class="rt-single-widget wow fade-in-bottom" data-wow-duration="2.5s">
                        <h3 class="rt-footer-title">
                            Запланируйте поездку
                        </h3>
                        <ul class="rt-usefulllinks">
                            <li><a href="#">Отложенные билеты</a></li>
                            <li><a href="#">Отели</a></li>
                            <li><a href="#">Самолеты</a></li>
                            <li><a href="#">Пакеты туров</a></li>
                            <li><a href="#">Составные билеты</a></li>
                            <li><a href="#">Перевозка</a></li>
                        </ul><!-- /.rt-usefulllinks -->
                    </div><!-- end single widget -->
                </div><!-- /.col-lg-3-->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <div class="copy-text wow fade-in-bottom" data-wow-duration="1s">
                        EcuTravel © 2018.All Все права защищены. Разработка <a href="https://t.me/gquantic">GQuantic</a>
                    </div><!-- /.copy-text -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="rt-footer-social wow fade-in-bottom" data-wow-duration="1.5s">
{{--                        <ul>--}}
{{--                            <li><a href="#"><img src="/images/brands/card-1.png" alt="cardimage" draggable="false"></a></li>--}}
{{--                            <li><a href="#"><img src="/images/brands/card-2.png" alt="cardimage" draggable="false"></a></li>--}}
{{--                            <li><a href="#"><img src="/images/brands/card-3.png" alt="cardimage" draggable="false"></a></li>--}}
{{--                            <li><a href="#"><img src="/images/brands/card-4.png" alt="cardimage" draggable="false"></a></li>--}}
{{--                            <li><a href="#"><img src="/images/brands/card-5.png" alt="cardimage" draggable="false"></a></li>--}}

{{--                        </ul>--}}
                    </div><!-- /.rt-footer-social -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</section>



<!-- ==================Start Js Link===================== -->
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/moment.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/isotope.pkgd.min.js"></script>
<script src="/js/instafeed.min.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/jquery.scrollUp.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/TweenMax.min.js"></script>
<script src="/js/scrollax.min.js"></script>

<script src="https://atuin.ru/demo/jquery.bubble.text.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
<script src="/js/wow.js"></script>
<script src="/js/jquery.overlayScrollbars.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/jquery.appear.js"></script>
<script src="/js/select2.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/slider-range.js"></script>
<script src="/js/vivus.min.js"></script>
<script src="/js/tippy.all.min.js"></script>
<script src="/js/app.js"></script>

<script src="{{ asset('/js/main.js') }}"></script>

<!-- ==================End Js Link===================== -->

</body>

</html>
