@extends('layouts.main')

@section('page-title')
    Найденные билеты
@endsection

@section('content')
{{--    @dd(t)--}}
    @php
        $arrivalTime = explode(':', $ticket['arrival_time']);
        $departTime = explode(':', $ticket['depart_time']);

        $duration = explode(':', $ticket['duration']);
        $durationDisplay = "{$duration[0]} часов";


        if ($duration[1])
            $durationDisplay = $durationDisplay . " {$duration[1]} минуты";
    @endphp

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
                    <h3 class="mb-0">Просмотр сборного рейса {{ $ticket['route_departure_address'] }} - {{ $ticket['route_arrival_address'] }}</h3>
                    <span class="text-muted">Сборный рейс: {{ $ticket['route_departure_address'] }} - {{ $ticket['route_arrival_address'] }}</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-12">
                    <div class="row">
                        <div class="col-2">
                            <h6 class="mb-0">Отбытие</h6>
                            <h2 class="mb-0">{{ $ticket['depart_time'] }}</h2>
                            <span class="text-muted">{{ $ticket['route_depart_station'] }}</span>
                        </div>
                        <div class="col-3 d-flex align-items-center" style="margin-left: 60px;">
                            <img src="/images/info-arrow.svg" alt="">
                        </div>
                        <div class="col-2">
                            <h6 class="mb-0">Прибытие</h6>
                            <h2 class="mb-0">{{ $ticket['arrival_time'] }}</h2>
                            <span class="text-muted">{{ $ticket['route_arrival_station'] }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div style="width: 354px;height: 5px;background: #6E3FFF;border-radius: 12px;opacity: .2;margin-top: 30px;margin-bottom: 30px;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h5 class="mb-0" style="text-transform: none;">Время в пути</h5>
                            <h3 style="color: #6E3FFF;font-weight: bolder;">{{ $durationDisplay }}</h3>
                        </div>
                        <div class="col-12 mt-3">
                            <h5 class="mb-0" style="text-transform: none;">Стоимость</h5>
                            <h3 class="mb-0" style="color: #6E3FFF;font-weight: bolder;">{{ $ticket['price'] }} руб.</h3>
                        </div>
                        <div class="col-12" style="margin-top: 30px;">
                            <a href="/road/make/order/{{ $ticket['id'] }}" class="by-btn">Перейти к оформлению</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="col-12 d-flex flex-row flex-wrap justify-content-around">
                        <div class="card-race card-race-hover" style="background: #ffa500;">
                            <a href="">
                                <i class="icofont-car-alt-1 car white"></i>

                                <h6>Минимальная цена</h6>
                                <span>1500 руб.</span>

                                <h6>Самый быстрый рейс:</h6>
                                <span>12 часов</span>

                            </a>
                        </div>
                        @switch($ticket['vehicle_type'])
                            @case('РЖД')
                            <div class="card-race" style="background: #f92853;">
                                <a href="" class="text-white">
                                    <i class="icofont-train-line train"></i>

                                    <h6>Минимальная цена</h6>
                                    <span>{{ $ticket['price'] }} руб.</span>

                                    <h6>Самый быстрый рейс:</h6>
                                    <span>{{ $durationDisplay }}</span>
                                </a>
                            </div>
                            @break
                        @case('Авиа')
                            <div class="card-race card-race-hover" style="background: #6D3EFF;">
                                <a href="" class="text-white">
                                    <i class="icofont-airplane-alt avia white"></i>

                                    <h6>Минимальная цена</h6>
                                    <span>{{ $ticket['price'] }} руб.</span>

                                    <h6>Самый быстрый рейс:</h6>
                                    <span>{{ $durationDisplay }}</span>
                                </a>
                            </div>
                        @break
                        @endswitch
                        <div class="card-race card-race-hover mt-3" style="background: #ffa500;">
                            <a href="">
                                <i class="icofont-car-alt-1 car white"></i>

                                <h6>Минимальная цена</h6>
                                <span>1500 руб.</span>

                                <h6>Самый быстрый рейс:</h6>
                                <span>12 часов</span>

                            </a>
                        </div>
                    </div>
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
