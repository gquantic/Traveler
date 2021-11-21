<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <title>@yield('page-title') | Ecupay</title>
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

    <link rel="stylesheet" href="{{ asset('/plugins/roadmaker/roadmaker.css') }}">

    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>


<body>


<!--
      ================== Header Area Start===================
  -->

  <div class="rt-preloder">
    <div class="preloder-box">
        <img src="/images/all-img/preloder.svg" alt="preloder image" draggable="false">
        <br>
        <h4 style="color: #fd6277;margin-left: -10px;">Ecutravel</h4>
    </div><!-- /.preloder-box -->
</div><!-- /.rt-preloder -->

<header class="rt-site-header  rt-fixed-top white-menu">
    <div class="top-header d-none d-md-block @yield('header-class')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ul class="text-center text-md-left top-message">
                        @if(isset($logo) && $logo == "white")
                            <li class="text-white"><i class="icofont-headphone-alt text-white"></i>Поддержка</li>
                            <li class="text-white"><a href="mailto:info@emigrar.com" class="text-white">
                                <i class="icofont-email text-white"></i>info@ecutravel.ru</a>
                            </li>
                        @else
                            <li><i class="icofont-headphone-alt"></i>Поддержка</li>
                            <li><a href="mailto:info@emigrar.com "><i class="icofont-email"></i>info@ecutravel.ru</a></li>
                        @endif
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
            @if(isset($logo) && $logo == "white")
            <a href="/" class="brand-logo"><img src="/images/logo/logo-white.png" alt=""></a>
            <a href="/" class="sticky-logo"><img src="/images/logo/logo-white.png" alt=""></a>
            @else
            <a href="/" class="brand-logo"><img src="/images/logo/logo.png" alt=""></a>
            <a href="/" class="sticky-logo"><img src="/images/logo/logo.png" alt=""></a>
            @endif
            <div class="ml-auto d-flex align-items-center">


                <div class="main-menu">
                    <ul>
                        <li class="current-menu-item"><a href="/">Главная</a></li>
                        <li><a href="{{ route('about') }}" style="text-transform: none !important;">О сервисе</a></li>
                        <li><a href="{{ route('help') }}">Помощь</a></li>
                        <li><a href="{{ route('contacts') }}">Контакты</a></li>

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
                    <span class="d-md-inline d-none"><a href="" class="rt-btn rt-gradient2 rt-rounded text-uppercase rt-Bshadow-1">Войти</a></span>
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
                <h4>Войти в кабинет</h4>
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
                            <h2 class="rt-section-title" style="text-transform: initial !important;">
                                <span>УВЕДОМЛЕНИЯ</span>
                                Свежие идеи
                            </h2><!-- /.rt-section-title -->
                            <p>
                                Получайте предложения от EcuTravel на электронную почту. <br>
                                Вы можете отказаться от подписки в любое время. Ваша конфиденциальность и личная информация будут защищены.
                            </p>
                        </div><!-- /.rt-section-title-wrapper -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
                <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" placeholder="Ваш email" aria-describedby="button-addon2">
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


<!-- Modal -->
<div class="modal fade bd-example-modal-lg roadmaker" id="roadMakerModal" tabindex="-1" role="dialog" aria-labelledby="roadMakerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Выберите город</h5>
            </div>
            <div class="modal-body">
                <div class="single-input rt-input-group">
                    <input type="text" class="form-control" placeholder="Начните вводить название">
                </div>

                <div id="results" class="results">
                    <h5>Найдено 27 городов</h5>
                    <div class="result" id="result" data-value="Ростов-на-Дону" data-type="city">
                        <svg width="14" height="22" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.26032 21.7242C6.47069 22.0905 6.81624 22.0919 7.02896 21.7285C7.02896 21.7285 13.4444 11.036 13.4444 7.10949C13.4444 3.18303 10.4348 0 6.72222 0C3.00964 0 0 3.18303 0 7.10949C0 11.036 6.26032 21.7242 6.26032 21.7242ZM6.65831 10.7251C8.58169 10.7251 10.1409 9.07609 10.1409 7.04189C10.1409 5.0077 8.58169 3.35866 6.65831 3.35866C4.73492 3.35866 3.17571 5.0077 3.17571 7.04189C3.17571 9.07609 4.73492 10.7251 6.65831 10.7251Z"></path></svg>
                        <div>
                            <h4>Ростов-на-Дону</h4>
                            <span>Ростовская область, Россия</span>
                        </div>
                    </div>
                    <div class="result with-sub" id="result" data-value="Москва" data-type="city">
                        <svg width="14" height="22" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.26032 21.7242C6.47069 22.0905 6.81624 22.0919 7.02896 21.7285C7.02896 21.7285 13.4444 11.036 13.4444 7.10949C13.4444 3.18303 10.4348 0 6.72222 0C3.00964 0 0 3.18303 0 7.10949C0 11.036 6.26032 21.7242 6.26032 21.7242ZM6.65831 10.7251C8.58169 10.7251 10.1409 9.07609 10.1409 7.04189C10.1409 5.0077 8.58169 3.35866 6.65831 3.35866C4.73492 3.35866 3.17571 5.0077 3.17571 7.04189C3.17571 9.07609 4.73492 10.7251 6.65831 10.7251Z"></path></svg>
                        <div>
                            <h4>Москва</h4>
                            <span>Московская область, Россия</span>
                        </div>
                    </div>
                    <div class="result result-sub" id="result" data-value="Метро Павелецкая" data-type="station">
                        <svg width="17" height="23" viewBox="0 0 17 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.96094 3.08398V9.95898H13.9609V3.08398H2.96094ZM13.9609 14.084C13.9609 13.3246 13.3453 12.709 12.5859 12.709C11.8266 12.709 11.2109 13.3246 11.2109 14.084C11.2109 14.8434 11.8266 15.459 12.5859 15.459C12.7936 15.459 12.9905 15.413 13.167 15.3306C13.4342 15.2058 13.6547 14.9975 13.795 14.7394C13.9008 14.5446 13.9609 14.3213 13.9609 14.084ZM4.33594 15.459C5.09528 15.459 5.71094 14.8434 5.71094 14.084C5.71094 13.3246 5.09528 12.709 4.33594 12.709C3.5766 12.709 2.96094 13.3246 2.96094 14.084C2.96094 14.3213 3.02105 14.5445 3.12688 14.7394C3.27505 15.0121 3.51284 15.2292 3.80073 15.3509C3.96523 15.4205 4.14609 15.459 4.33594 15.459ZM4.33594 0.333984C2.81715 0.333984 1.58594 1.5652 1.58594 3.08398V14.084C1.58594 15.6028 2.81715 16.834 4.33594 16.834H12.5859C14.1047 16.834 15.3359 15.6028 15.3359 14.084V3.08398C15.3359 1.5652 14.1047 0.333984 12.5859 0.333984H4.33594ZM5.71094 18.209L2.96094 22.334H0.210938L2.96094 18.209H5.71094ZM13.9609 22.334L11.2109 18.209H13.9609L16.7109 22.334H13.9609Z"   ></path></svg>
                        <div>
                            <h4>Метро Павелецкая</h4>
                            <span>Московская область, Россия</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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

<script src="{{ asset('/plugins/roadmaker/roadmaker.js') }}"></script>

<!-- ==================End Js Link===================== -->

</body>

</html>
