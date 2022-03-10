@extends('layouts.main')

@section('page-title')
    Найденные билеты
@endsection

@section('content')
    <style>
        .top-social li a {
            color: rgba(0,0,0,.5);
        }

        .white-menu .main-menu > ul > li.current-menu-item > a,
        .white-menu .main-menu > ul > li > a {
            color: #000;
        }

        .white-menu .main-menu > ul > li.current-menu-item > a:hover {
            color: inherit;
        }
    </style>
    <div style="margin-top: 200px;"></div>
    <div class="mt-5" style="margin-bottom: -100px;">
        <div class="container">
            <div class="row">
                <div class="spacer-bottom"></div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    </div>

    <style type="text/css">
        #mini_preloader {
            transition: .3s ease;
        }
        #results {
            opacity: 0;
        }
    </style>

    <script type="text/javascript">
        // Тут скрипт прелоадера, пока только визуалка
        setTimeout(function () {
            $('#mini_preloader').css("opacity", "0");
        }, 0); // 3000

        setTimeout(function () {
            $('#mini_preloader').remove();
            $('#results').removeClass('hide');
        }, 0); // 3400

        setTimeout(function () {
            $('#results').css("opacity", "1");
        }, 0); // 3400
    </script>

    <section class="content-area d-flex align-items-center justify-content-center" id="mini_preloader">
        <div style="background: url('https://cdn.dribbble.com/users/502620/screenshots/2013586/airplane_morph_800x600.gif');
                background-size: 150%;background-position: center center;
                border-radius: 14px;width:300px;height: 300px;
                display: flex;justify-content: center;align-items: flex-end;">
            <span id="preloadertext" style="color: #fff; margin-bottom: 25px;">Ищем лучшие билеты для Вас!</span>
        </div>
    </section>

    <section class="content-area hide" id="results">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-5">Найдены следующие варианты</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="col-12 d-flex">
                        <a href="/road/make/train/">
                            <div class="card-race card-race-hover-effect" style="background: #F92853;">
                                <i class="icofont-train-line train"></i>

                                <h6>Минимальная цена</h6>
                                <span>1500 руб.</span>

                                <h6>Самый быстрый рейс:</h6>
                                <span>12 часов</span>

                                <div class="arrow">
                                    <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.2361 12L0.236069 0.452994V23.547L20.2361 12Z" fill="white"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="card-race card-race-hover-effect" style="background: #6D3EFF;transform: translateX(-200px);">
                            <a href="/road/make/avia/" class="text-white">
                                <i class="icofont-airplane-alt avia"></i>

                                <h6>Минимальная цена</h6>
                                <span>1500 руб.</span>

                                <h6>Самый быстрый рейс:</h6>
                                <span>12 часов</span>

                                <div class="arrow">
                                    <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.2361 12L0.236069 0.452994V23.547L20.2361 12Z" fill="white"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <a href="/road/make/bus/">
                            <div class="card-race" style="background: #84C03B;transform: translateX(-400px);">
                                <i class="icofont-bus-alt-1 bus"></i>

                                <h6>Минимальная цена</h6>
                                <span>1500 руб.</span>

                                <h6>Самый быстрый рейс:</h6>
                                <span>12 часов</span>

                                <div class="arrow">
                                    <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.2361 12L0.236069 0.452994V23.547L20.2361 12Z" fill="white"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="mb-4">Какое-нибудь заполнение для поля</h4>
                    <p class="mt-3">
                        Какое-нибудь заполнение для блока Какое-нибудь
                        заполнение для блока Какое-нибудь заполнение для блока Какое-нибудь заполнение для блока Какое-нибудь заполнение для блока
                    </p>
                </div>
            </div>
        </div><!-- /.container -->
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <style>
        #search_loader {
            transition: .0s ease;
        }
        #pane_animation {
            transition: .0s ease;
        }
        #pane_animation * {
            transition: .0s ease; /* .2s ease */
        }
    </style>
    <script>
        $( window ).on( "load", function () {
            setTimeout(function () {
                $('#search_loader').css("opacity", "0");
                $('#pane_animation').css("opacity", "0");
                $('#pane_animation *').css("opacity", "0");

                setTimeout(function () {
                    $('#search_loader').remove();
                    $('#pane_animation').remove();
                }, 0); // 500
            }, 0); // 1000
        });
    </script>

    <div class="spacer-bottom"></div><!-- /.spacer-bottom -->
@endsection
