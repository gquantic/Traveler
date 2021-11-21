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
{{--                    <div class="col-lg-8 mx-auto">--}}
{{--                        <div class="wow fade-in-bottom fly-form p-5" data-wow-duration="1s" data-wow-delay="1s">--}}
{{--                            <form action="{{ route('make-road') }}" method="post" class="text-dark">--}}
{{--                                @csrf--}}

{{--                                <div class="form-group d-flex flex-column">--}}
{{--                                    <label>Ваше местоположение</label>--}}
{{--                                    <input type="text" class="form-control">--}}
{{--                                </div>--}}

{{--                                @if($data[1] == true)--}}
{{--                                    <div class="form-group d-flex flex-column">--}}
{{--                                        <label>Укажите точный адрес Вашего местоположения</label>--}}
{{--                                        <input type="text" class="form-control">--}}
{{--                                    </div>--}}
{{--                                @endif--}}

{{--                                <div class="form-group d-flex flex-column">--}}
{{--                                    <label>Куда?</span></label>--}}
{{--                                    <input type="text" class="form-control">--}}
{{--                                </div>--}}

{{--                                @if($data[1] == true)--}}
{{--                                    <div class="form-group d-flex flex-column">--}}
{{--                                        <label>Укажите точный адрес, куда Вы направляетесь</label>--}}
{{--                                        <input type="text" class="form-control">--}}
{{--                                    </div>--}}
{{--                                @endif--}}

{{--                                <div class="text-right mt-4">--}}
{{--                                    <button class="btn btn-primary" style="height: 45px; width: 170px; font-size: 17px;">Заказать</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div><!-- /.rt-banner-searchbox -->--}}
{{--                    </div><!-- /.col-lg-10 -->--}}

                    <!-- <div id="search_loader">
                        {{-- @extends('animations.plane') --}}
                    </div> -->

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
        }, 3000);

        setTimeout(function () {
            $('#mini_preloader').remove();
            $('#results').removeClass('hide');
        }, 3400);

        setTimeout(function () {
            $('#results').css("opacity", "1");
        }, 3400);
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
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active d-flex justify-content-center modal-tickets-tab" id="home-tab" data-toggle="tab" href="#modal" role="tab" aria-controls="home" aria-selected="true" style="width: 250px;">
                            <div class="group-icons">
                                <i class="icofont-airplane-alt avia"></i>
                                <i class="icofont-train-line train" style="margin-left: -20px;"></i>
                                <i class="icofont-bus-alt-1 bus" style="margin-left: -20px;"></i>
                            </div>
                            Составные
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#avia" role="tab" aria-controls="profile" aria-selected="false"><i class="icofont-airplane-alt avia"></i> Авиа</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#trains" role="tab" aria-controls="contact" aria-selected="false"><i class="icofont-train-line train"></i> ЖД</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#bus" role="tab" aria-controls="contact" aria-selected="false"><i class="icofont-bus-alt-1 bus"></i> Автобусы</a>
                    </li>
                </ul>
            </div> <br><br><br>
                <div class="col-12">
                    <div class="tab-content" id="rt-BototmTab">
                        <div class="tab-pane show active fade-in-bottom" id="modal" role="tabpanel" aria-labelledby="rt-item_b_first">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 mx-auto mt-5 mt-xl-0">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="https://pics.avs.io/99/36/RT.png" alt="flt logo" draggable="false">
                                                    </div><!-- /.flight-logo -->
                                                    <div class="pricing">
                                                        <h5>Ростов-на-Дону</h5>
                                                        <p>TR978 | Airbus A320-212</p>
                                                    </div><!-- /.pricing -->
                                                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                                                        <div class="left">
                                                            <span class="d-block">10:55</span>
                                                            <span class="d-block">HKG T2</span>
                                                        </div><!-- /.left -->
                                                        <div class="middle">
                                                            <img src="/images/all-img/time-shape-line.png" alt="time shape" draggable="false">
                                                        </div><!-- /.middle -->
                                                        <div class="right">
                                                            <span class="d-block">15.00</span>
                                                            <span class="d-block">SIN T2</span>
                                                        </div><!-- /.rght -->
                                                    </div><!-- /.flight-time -->
                                                    <div class="flight-detils">
                                                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                                                        <span class="d-block"><a href="#collapseExample4" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">1610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="/race/233" target="_blank" class="rt-btn  pill rt-gradient text-uppercase">Оформить</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample4">
                                                    <p><span>Ростов-на-Дону - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                                                    <ul class="flight-timeline">

                                                        <li>
                                                            <span><i class="icofont-airplane-alt avia mr-1"></i> Ноябрь 12 10:55</span>

                                                        </li>
                                                        <li><span>Москва - Аэропорт Домодедово</span></li>
                                                        <li>
                                                            <span><i class="icofont-bus-alt-1 bus mr-1"></i> Ноябрь 12 15:00</span>

                                                        </li>
                                                        <li><span>Ростов - Аэропорт Платов</span></li>
                                                    </ul>
                                                </div><!-- /.bottom content -->
                                            </div><!-- /.flight-box -->
                                        </div><!-- /.col-lg-12 -->

                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="https://pics.avs.io/al_square/36/36/UT@2x.png" alt="flt logo" draggable="false">
                                                    </div><!-- /.flight-logo -->
                                                    <div class="pricing">
                                                        <h5>Ростов-на-Дону</h5>
                                                        <p>TR978 | Airbus A320-212</p>
                                                    </div><!-- /.pricing -->
                                                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                                                        <div class="left">
                                                            <span class="d-block">10:55</span>
                                                            <span class="d-block">HKG T2</span>
                                                        </div><!-- /.left -->
                                                        <div class="middle">
                                                            <img src="/images/all-img/time-shape-line.png" alt="time shape" draggable="false">
                                                        </div><!-- /.middle -->
                                                        <div class="right">
                                                            <span class="d-block">15.00</span>
                                                            <span class="d-block">SIN T2</span>
                                                        </div><!-- /.rght -->
                                                    </div><!-- /.flight-time -->
                                                    <div class="flight-detils">
                                                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                                                        <span class="d-block"><a href="#collapseExample" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">1610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Оформить</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample">
                                                    <p><span>Ростов-на-Дону - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                                                    <ul class="flight-timeline">

                                                        <li>
                                                            <span><i class="icofont-airplane-alt avia mr-1"></i> Ноябрь 12 10:55</span>

                                                        </li>
                                                        <li><span>Москва - Аэропорт Домодедово</span></li>
                                                        <li>
                                                            <span><i class="icofont-bus-alt-1 bus mr-1"></i> Ноябрь 12 15:00</span>

                                                        </li>
                                                        <li><span>Ростов - Аэропорт Платов</span></li>
                                                    </ul>
                                                </div><!-- /.bottom content -->
                                            </div><!-- /.flight-box -->
                                        </div><!-- /.col-lg-12 -->


                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="https://pics.avs.io/al_square/36/36/U6@2x.png" alt="flt logo" draggable="false">
                                                    </div><!-- /.flight-logo -->
                                                    <div class="pricing">
                                                        <h5>Ростов-на-Дону</h5>
                                                        <p>TR978 | Airbus A320-212</p>
                                                    </div><!-- /.pricing -->
                                                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                                                        <div class="left">
                                                            <span class="d-block">10:55</span>
                                                            <span class="d-block">HKG T2</span>
                                                        </div><!-- /.left -->
                                                        <div class="middle">
                                                            <img src="/images/all-img/time-shape-line.png" alt="time shape" draggable="false">
                                                        </div><!-- /.middle -->
                                                        <div class="right">
                                                            <span class="d-block">15.00</span>
                                                            <span class="d-block">SIN T2</span>
                                                        </div><!-- /.rght -->
                                                    </div><!-- /.flight-time -->
                                                    <div class="flight-detils">
                                                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                                                        <span class="d-block"><a href="#collapseExample2" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">1610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Оформить</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample2">
                                                    <p><span>Ростов-на-Дону - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                                                    <ul class="flight-timeline">

                                                        <li>
                                                            <span><i class="icofont-airplane-alt avia mr-1"></i> Ноябрь 12 10:55</span>

                                                        </li>
                                                        <li><span>Москва - Аэропорт Домодедово</span></li>
                                                        <li>
                                                            <span><i class="icofont-bus-alt-1 bus mr-1"></i> Ноябрь 12 15:00</span>

                                                        </li>
                                                        <li><span>Ростов - Аэропорт Платов</span></li>
                                                    </ul>
                                                </div><!-- /.bottom content -->
                                            </div><!-- /.flight-box -->
                                        </div><!-- /.col-lg-12 -->



                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="https://pics.avs.io/al_square/36/36/5N@2x.png" alt="flt logo" draggable="false">
                                                    </div><!-- /.flight-logo -->
                                                    <div class="pricing">
                                                        <h5>Ростов-на-Дону</h5>
                                                        <p>TR978 | Airbus A320-212</p>
                                                    </div><!-- /.pricing -->
                                                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                                                        <div class="left">
                                                            <span class="d-block">10:55</span>
                                                            <span class="d-block">HKG T2</span>
                                                        </div><!-- /.left -->
                                                        <div class="middle">
                                                            <img src="/images/all-img/time-shape-line.png" alt="time shape" draggable="false">
                                                        </div><!-- /.middle -->
                                                        <div class="right">
                                                            <span class="d-block">15.00</span>
                                                            <span class="d-block">SIN T2</span>
                                                        </div><!-- /.rght -->
                                                    </div><!-- /.flight-time -->
                                                    <div class="flight-detils">
                                                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                                                        <span class="d-block"><a href="#collapseExample3" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">1610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Оформить</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample3">
                                                    <p><span>Ростов-на-Дону - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                                                    <ul class="flight-timeline">

                                                        <li>
                                                            <span><i class="icofont-airplane-alt avia mr-1"></i> Ноябрь 12 10:55</span>

                                                        </li>
                                                        <li><span>Москва - Аэропорт Домодедово</span></li>
                                                        <li>
                                                            <span><i class="icofont-bus-alt-1 bus mr-1"></i> Ноябрь 12 15:00</span>

                                                        </li>
                                                        <li><span>Ростов - Аэропорт Платов</span></li>
                                                    </ul>
                                                </div><!-- /.bottom content -->
                                            </div><!-- /.flight-box -->
                                        </div><!-- /.col-lg-12 -->






                                    </div><!-- /.row -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination  rt-paganation justify-content-center">
                                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div><!-- /.col-lg-9 -->
                            </div><!-- /.row -->
                        </div>
                        <!-- TAB END -->


                        <div class="tab-pane fade-in-bottom" id="avia" role="tabpanel" aria-labelledby="rt-item_b_first">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 mx-auto mt-5 mt-xl-0">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="/images/all-img/flt-logo-1.png" alt="flt logo" draggable="false">
                                                    </div><!-- /.flight-logo -->
                                                    <div class="pricing">
                                                        <h5>Ростов-на-Дону</h5>
                                                        <p>TR978 | Airbus A320-212</p>
                                                    </div><!-- /.pricing -->
                                                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                                                        <div class="left">
                                                            <span class="d-block">10:55</span>
                                                            <span class="d-block">HKG T2</span>
                                                        </div><!-- /.left -->
                                                        <div class="middle">
                                                            <img src="/images/all-img/time-shape-line.png" alt="time shape" draggable="false">
                                                        </div><!-- /.middle -->
                                                        <div class="right">
                                                            <span class="d-block">15.00</span>
                                                            <span class="d-block">SIN T2</span>
                                                        </div><!-- /.rght -->
                                                    </div><!-- /.flight-time -->
                                                    <div class="flight-detils">
                                                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                                                        <span class="d-block"><a href="#collapseExample" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="/race/233" target="_blank" class="rt-btn  pill rt-gradient text-uppercase">Оформить</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample">
                                                    <p><span>Ростов-на-Дону - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                                                    <ul class="flight-timeline">

                                                        <li>
                                                            <span>Ноябрь 12 10:55</span>

                                                        </li>
                                                        <li><span>Москва - Аэропорт Домодедово</span></li>
                                                        <li>
                                                            <span>Ноябрь 12 15:00</span>

                                                        </li>
                                                        <li><span>Ростов - Аэропорт Платов</span></li>
                                                    </ul>
                                                </div><!-- /.bottom content -->
                                            </div><!-- /.flight-box -->
                                        </div><!-- /.col-lg-12 -->
                                    </div><!-- /.row -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination  rt-paganation justify-content-center">
                                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div><!-- /.col-lg-9 -->
                            </div><!-- /.row -->
                        </div>


                        <div class="tab-pane fade-in-bottom" id="trains" role="tabpanel" aria-labelledby="rt-item_b_first">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 mx-auto mt-5 mt-xl-0">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="/images/all-img/flt-logo-1.png" alt="flt logo" draggable="false">
                                                    </div><!-- /.flight-logo -->
                                                    <div class="pricing">
                                                        <h5>Ростов-на-Дону</h5>
                                                        <p>TR978 | Airbus A320-212</p>
                                                    </div><!-- /.pricing -->
                                                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                                                        <div class="left">
                                                            <span class="d-block">10:55</span>
                                                            <span class="d-block">HKG T2</span>
                                                        </div><!-- /.left -->
                                                        <div class="middle">
                                                            <img src="/images/all-img/time-shape-line.png" alt="time shape" draggable="false">
                                                        </div><!-- /.middle -->
                                                        <div class="right">
                                                            <span class="d-block">15.00</span>
                                                            <span class="d-block">SIN T2</span>
                                                        </div><!-- /.rght -->
                                                    </div><!-- /.flight-time -->
                                                    <div class="flight-detils">
                                                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                                                        <span class="d-block"><a href="#collapseExample2" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Оформить</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample2">
                                                    <p><span>Ростов-на-Дону - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                                                    <ul class="flight-timeline">

                                                        <li>
                                                            <span>Ноябрь 12 10:55</span>

                                                        </li>
                                                        <li><span>Москва - Аэропорт Домодедово</span></li>
                                                        <li>
                                                            <span>Ноябрь 12 15:00</span>

                                                        </li>
                                                        <li><span>Ростов - Аэропорт Платов</span></li>
                                                    </ul>
                                                </div><!-- /.bottom content -->
                                            </div><!-- /.flight-box -->
                                        </div><!-- /.col-lg-12 -->
                                    </div><!-- /.row -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination  rt-paganation justify-content-center">
                                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div><!-- /.col-lg-9 -->
                            </div><!-- /.row -->
                        </div>


                        <div class="tab-pane fade-in-bottom" id="bus" role="tabpanel" aria-labelledby="rt-item_b_first">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 mx-auto mt-5 mt-xl-0">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="/images/all-img/flt-logo-1.png" alt="flt logo" draggable="false">
                                                    </div><!-- /.flight-logo -->
                                                    <div class="pricing">
                                                        <h5>Ростов-на-Дону</h5>
                                                        <p>TR978 | Airbus A320-212</p>
                                                    </div><!-- /.pricing -->
                                                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                                                        <div class="left">
                                                            <span class="d-block">10:55</span>
                                                            <span class="d-block">HKG T2</span>
                                                        </div><!-- /.left -->
                                                        <div class="middle">
                                                            <img src="/images/all-img/time-shape-line.png" alt="time shape" draggable="false">
                                                        </div><!-- /.middle -->
                                                        <div class="right">
                                                            <span class="d-block">15.00</span>
                                                            <span class="d-block">SIN T2</span>
                                                        </div><!-- /.rght -->
                                                    </div><!-- /.flight-time -->
                                                    <div class="flight-detils">
                                                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                                                        <span class="d-block"><a href="#collapseExample3" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Оформить</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample3">
                                                    <p><span>Ростов-на-Дону - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                                                    <ul class="flight-timeline">

                                                        <li>
                                                            <span>Ноябрь 12 10:55</span>

                                                        </li>
                                                        <li><span>Москва - Аэропорт Домодедово</span></li>
                                                        <li>
                                                            <span>Ноябрь 12 15:00</span>

                                                        </li>
                                                        <li><span>Ростов - Аэропорт Платов</span></li>
                                                    </ul>
                                                </div><!-- /.bottom content -->
                                            </div><!-- /.flight-box -->
                                        </div><!-- /.col-lg-12 -->
                                    </div><!-- /.row -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination  rt-paganation justify-content-center">
                                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div><!-- /.col-lg-9 -->
                            </div><!-- /.row -->
                        </div>
                    
                    

                    </div>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <style>
        #search_loader {
            transition: .2s ease;
        }
        #pane_animation {
            transition: .2s ease;
        }
        #pane_animation * {
            transition: .2s ease;
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
                }, 500);
            }, 1000);
        });
    </script>

    <div class="spacer-bottom"></div><!-- /.spacer-bottom -->
@endsection
