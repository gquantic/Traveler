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

    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="rt-BototmTab">
                        <div class="tab-pane show active fade-in-bottom" id="rt-item_b_first" role="tabpanel" aria-labelledby="rt-item_b_first">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 mx-auto">
                                    <div class="rt-sidebar-group">
                                        <div class="rt-widget widget_range-slider">
                                            <h3 class="rt-widget-title">
                                                Фильтровать по цене
                                            </h3><!-- /.rt-widget-title -->

                                            <div class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 21.4286%; width: 60.7143%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 21.4286%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 82.1429%;"></a></div>
                                            <div class="price_slider_amount">
                                                <div class="clearfix">
                                                    <div class="float-left">
                                                        <span>Цена:</span>
                                                    </div><!-- /.float-left -->
                                                    <div class="float-right">
                                                        <input type="text" class="amount" name="price" placeholder="Введите цену">
                                                    </div><!-- /.float-right -->
                                                </div><!-- /.clearfix -->
                                            </div>
                                            <div class="text-center">
                                                <input type="submit" value="Filter" class="rt-btn rt-gradient rounded-sm rt-sm text-uppercase">
                                            </div><!-- /.text-center -->
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Пересадки
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="gridCheckrt-1">
                                                        <label class="form-check-label" for="gridCheckrt-1">
                                                            Нет (63)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">711₽</span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="gridCheckrt-2">
                                                        <label class="form-check-label" for="gridCheckrt-2">
                                                            Есть (34)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">610₽</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Время отправления
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="gridCheckrt-11">
                                                        <label class="form-check-label" for="gridCheckrt-11">
                                                            Утро (5:00 - 12:00)
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="gridCheckrt-111">
                                                        <label class="form-check-label" for="gridCheckrt-111">
                                                            Днем (12:00 - 18:00)
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="gridCheckrt-1111">
                                                        <label class="form-check-label" for="gridCheckrt-1111">
                                                            Вечер (18:00 - 22:00)
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>

                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Время прибытия
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="gridCheckrt-11">
                                                        <label class="form-check-label" for="gridCheckrt-11">
                                                            Утро (5:00 - 12:00)
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="gridCheckrt-111">
                                                        <label class="form-check-label" for="gridCheckrt-111">
                                                            Днем (12:00 - 18:00)
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="gridCheckrt-1111">
                                                        <label class="form-check-label" for="gridCheckrt-1111">
                                                            Вечер (18:00 - 22:00)
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>

                                        </div>
                                    </div><!-- /.rt-sidebar-group -->
                                </div><!-- /.col-lg-3 -->
                                <div class="col-xl-9 col-lg-10 mx-auto mt-5 mt-xl-0">
                                    <div class="row">
                                        <!-- <div class="col-12">
                                            <h3>Найденные билеты</h4>
                                        </div> -->
                                        <!-- /.col-lg-12 -->
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
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">В корзину</a>
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
                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="/images/all-img/flt-logo-2.png" alt="flt logo" draggable="false">
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
                                                        <span class="d-block"><a href="#collapseExample2" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample2">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">В корзину</a>
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
                                                        <span class="d-block"><a href="#collapseExample3" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample3">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">В корзину</a>
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
                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="/images/all-img/flt-logo-2.png" alt="flt logo" draggable="false">
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
                                                        <span class="d-block"><a href="#collapseExample4" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample4">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">В корзину</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample4">
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
                                                        <span class="d-block"><a href="#collapseExample5" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample5">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">В корзину</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample5">
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
                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="/images/all-img/flt-logo-2.png" alt="flt logo" draggable="false">
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
                                                        <span class="d-block"><a href="#collapseExample6" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample6">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">В корзину</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample6">
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
                                                        <span class="d-block"><a href="#collapseExample7" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample7">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">В корзину</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample7">
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
                                        </div><!-- /.col-lg-6 -->
                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="/images/all-img/flt-logo-2.png" alt="flt logo" draggable="false">
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
                                                        <span class="d-block"><a href="#collapseExample8" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample8">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">В корзину</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample8">
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
                                                        <span class="d-block"><a href="#collapseExample9" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample9">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">В корзину</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample9">
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
                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="/images/all-img/flt-logo-2.png" alt="flt logo" draggable="false">
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
                                                        <span class="d-block"><a href="#collapseExample10" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample10">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">В корзину</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample10">
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
                                                        <span class="d-block"><a href="#collapseExample11" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample11">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">В корзину</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample11">
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
                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="/images/all-img/flt-logo-2.png" alt="flt logo" draggable="false">
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
                                                        <span class="d-block"><a href="#collapseExample12" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample12">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">В корзину</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample12">
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
                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="/images/all-img/flt-logo-2.png" alt="flt logo" draggable="false">
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
                                                        <span class="d-block"><a href="#collapseExample13" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample13">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">610₽</span>
                                                        <span class="d-block">С пересадкой</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">В корзину</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->
                                                <div class="collapse bottom-content" id="collapseExample13">
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
                        <div class="tab-pane rtIncative fade-in-bottom" id="rt-item_b_second" role="tabpanel" aria-labelledby="rt-item_b_second">
                            <div class="row">
                                <div class="col-xl-3 mx-auto col-lg-3 col-md-6">
                                    <div class="rt-sidebar-group">
                                        <div class="rt-widget widget_rating">
                                            <h3 class="rt-widget-title">
                                                Star Rating
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-1xs">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-1xs">
                    <span>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star"></i>
                    </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-2xs">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-2xs">
                    <span>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                    </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-2xss">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-2xss">
                    <span>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                    </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-2xssa">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-2xssa">
                    <span>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                    </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_range-slider">
                                            <h3 class="rt-widget-title">
                                                Фильтровать по цене
                                            </h3><!-- /.rt-widget-title -->

                                            <div class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 21.4286%; width: 60.7143%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 21.4286%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 82.1429%;"></a></div>
                                            <div class="price_slider_amount">
                                                <div class="clearfix">
                                                    <div class="float-left">
                                                        <span>Цена:</span>
                                                    </div><!-- /.float-left -->
                                                    <div class="float-right">
                                                        <input type="text" class="amount" name="price" placeholder="Введите цену">
                                                    </div><!-- /.float-right -->
                                                </div><!-- /.clearfix -->
                                            </div>
                                            <div class="text-center">
                                                <input type="submit" value="Фильтровать" class="rt-btn rt-gradient rounded-sm rt-sm text-uppercase">
                                            </div><!-- /.text-center -->
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Политика Бронирования
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-1">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-1">
                                                            Мгновенное Подтверждение
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-2">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-2">
                                                            Бесплатная Отмена бронирования
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Тип кровати
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-3">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-3">
                                                            2 Односпальные кровати
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-4">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-4">
                                                            1 Двуспальная кровать
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Neighborhood
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-11">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-11">
                                                            New York (and vicinity)
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-111">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-111">
                                                            New York
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-1111">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-1111">
                                                            Manhattan
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-1s111">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-1s111">
                                                            Brooklyn
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>
                                            <div class="show-more-links">
                                                <a href="#">Show more</a>
                                            </div>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Amenities
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-22">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-22">
                                                            High-speed Internet
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-222">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-222">
                                                            Air conditioning
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-2222">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-2222">
                                                            Swimming pool
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-2s222">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-2s222">
                                                            Free breakfast
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>
                                            <div class="show-more-links">
                                                <a href="#">Show more</a>
                                            </div>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Property Type
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-1">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-1">
                                                            Hotel
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-2">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-2">
                                                            Private vacation home
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-3">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-3">
                                                            Bed &amp; Breakfast
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>

                                            </ul>
                                            <div class="show-more-links">
                                                <a href="#">Show more</a>
                                            </div>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Popular Locations
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-11">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-11">
                                                            Central Park
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-22">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-22">
                                                            Times Square
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-33">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-33">
                                                            Statue of Liberty
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-3s3">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-3s3">
                                                            Empire State Building
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>

                                            </ul>
                                            <div class="show-more-links">
                                                <a href="#">Show more</a>
                                            </div>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Accessibility
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-1rt1">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-1rt1">
                                                            Accessible bathroom
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-2rt2">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-2rt2">
                                                            In-room accessibility
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-3rt3">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-3rt3">
                                                            Roll-in shower
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>


                                            </ul>

                                        </div><!-- /.rt-widget -->
                                    </div><!-- /.rt-sidebar-group -->
                                </div><!-- /.col-lg-3 -->
                                <div class="col-xl-9 col-lg-9 mt-5 mt-lg-0">

                                    <div class="box-style__1 rt-mb-30">
                                        <form action="#" class="row">
                                            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                <button class="rt-btn pill rt-sm rt-gradient d-block">Recommended</button>
                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                <select class="rt-selectactive banner-select select2-hidden-accessible" name="from" style="width: 100%" data-select2-id="16" tabindex="-1" aria-hidden="true">
                                                    <option value="1" data-select2-id="18">Price</option>
                                                    <option value="2">100</option>
                                                    <option value="3">100</option>
                                                    <option value="4">400</option>
                                                    <option value="5">500</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="17" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-from-me-container"><span class="select2-selection__rendered" id="select2-from-me-container" role="textbox" aria-readonly="true" title="Price">Price</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div><!-- /.col-lg-3 -->
                                            <div class="col-lg-3 rt-input-group mini col-md-6  mb-3 mb-md-0">
                                                <input type="text" class="rt-date-picker form-control hasDatepicker" placeholder="Departure Time" id="dp1636372301081">
                                            </div><!-- /.col-lg-3 -->
                                            <div class="col-lg-3 rt-input-group mini col-md-6 ">
                                                <input type="text" class="form-control rt-date-picker hasDatepicker" placeholder="Arrival Time " id="dp1636372301082">
                                            </div><!-- /.col-lg-3 -->
                                        </form>
                                    </div><!-- /.flight-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-1.jpg)"></div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>Candlewood Suites NYC -Times Square <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi" tabindex="0"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="dumble" tabindex="0"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="resturent" tabindex="0"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="sofa" tabindex="0"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="watter" tabindex="0"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="music" tabindex="0"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="crolstve" tabindex="0"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="doller" tabindex="0"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="time" tabindex="0"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge" draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-2.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi" tabindex="0"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="dumble" tabindex="0"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="resturent" tabindex="0"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="sofa" tabindex="0"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="watter" tabindex="0"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="music" tabindex="0"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="crolstve" tabindex="0"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="doller" tabindex="0"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="time" tabindex="0"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge" draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-3.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>Empire Hotel Kowloon－Tsim Sha Tsui <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi" tabindex="0"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="dumble" tabindex="0"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="resturent" tabindex="0"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="sofa" tabindex="0"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="watter" tabindex="0"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="music" tabindex="0"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="crolstve" tabindex="0"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="doller" tabindex="0"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="time" tabindex="0"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge" draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-4.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>Regal Kowloon Hotel <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi" tabindex="0"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="dumble" tabindex="0"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="resturent" tabindex="0"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="sofa" tabindex="0"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="watter" tabindex="0"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="music" tabindex="0"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="crolstve" tabindex="0"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="doller" tabindex="0"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="time" tabindex="0"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge" draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-5.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi" tabindex="0"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="dumble" tabindex="0"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="resturent" tabindex="0"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="sofa" tabindex="0"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="watter" tabindex="0"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="music" tabindex="0"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="crolstve" tabindex="0"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="doller" tabindex="0"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="time" tabindex="0"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge" draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-6.jpg)"></div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi" tabindex="0"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="dumble" tabindex="0"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="resturent" tabindex="0"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="sofa" tabindex="0"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="watter" tabindex="0"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="music" tabindex="0"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="crolstve" tabindex="0"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="doller" tabindex="0"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="time" tabindex="0"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge" draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-7.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi" tabindex="0"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="dumble" tabindex="0"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="resturent" tabindex="0"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="sofa" tabindex="0"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="watter" tabindex="0"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="music" tabindex="0"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="crolstve" tabindex="0"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="doller" tabindex="0"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="time" tabindex="0"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge" draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-8.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi" tabindex="0"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="dumble" tabindex="0"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="resturent" tabindex="0"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="sofa" tabindex="0"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="watter" tabindex="0"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="music" tabindex="0"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="crolstve" tabindex="0"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="doller" tabindex="0"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="time" tabindex="0"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge" draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-9.jpg)"></div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>Hyatt Regency Hong Kong, Tsim Sha Tsui <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi" tabindex="0"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="dumble" tabindex="0"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="resturent" tabindex="0"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="sofa" tabindex="0"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="watter" tabindex="0"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="music" tabindex="0"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="crolstve" tabindex="0"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="doller" tabindex="0"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="time" tabindex="0"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge" draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-10.jpg)"></div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi" tabindex="0"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="dumble" tabindex="0"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="resturent" tabindex="0"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="sofa" tabindex="0"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="watter" tabindex="0"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="music" tabindex="0"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="crolstve" tabindex="0"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="doller" tabindex="0"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="time" tabindex="0"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge" draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-11.jpg)"></div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>Lan Kwai Fong Hotel Kau U Fong <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi" tabindex="0"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="dumble" tabindex="0"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="resturent" tabindex="0"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="sofa" tabindex="0"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="watter" tabindex="0"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="music" tabindex="0"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="crolstve" tabindex="0"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="doller" tabindex="0"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="time" tabindex="0"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge" draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-12.jpg)"></div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>InterContinental Grand Stanford Hong Kong <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi" tabindex="0"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="dumble" tabindex="0"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="resturent" tabindex="0"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="sofa" tabindex="0"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="watter" tabindex="0"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="music" tabindex="0"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="crolstve" tabindex="0"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="doller" tabindex="0"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="time" tabindex="0"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge" draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-1.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi" tabindex="0"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="dumble" tabindex="0"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="resturent" tabindex="0"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="sofa" tabindex="0"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="watter" tabindex="0"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="music" tabindex="0"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="crolstve" tabindex="0"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="doller" tabindex="0"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge" draggable="false"></span>
                                                        <span data-tippy="time" tabindex="0"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge" draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->

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
                        <div class="tab-pane rtIncative fade-in-bottom" id="rt-item_b_thrid" role="tabpanel" aria-labelledby="rt-item_b_thrid">
                            <div class="row">
                                <div class="col-lg-3 mx-auto col-md-7 mb-5 mb-lg-0">
                                    <div class="rt-sidebar-group">
                                        <div class="rt-widget widget_rating">
                                            <h3 class="rt-widget-title">
                                                Star Rating
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-1xs">
                                                        <label class="form-check-label" for="car_gridCheckrt-1xs">
                        <span>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>

                        </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2xs">
                                                        <label class="form-check-label" for="car_gridCheckrt-2xs">
                        <span>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                        </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2xss">
                                                        <label class="form-check-label" for="car_gridCheckrt-2xss">
                        <span>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                        </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2xssa">
                                                        <label class="form-check-label" for="car_gridCheckrt-2xssa">
                        <span>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                        </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Payment options
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-1w">
                                                        <label class="form-check-label" for="car_gridCheckrt-1w">
                                                            Pay now (72)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">30<₽/span>

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2w">
                                                        <label class="form-check-label" for="car_gridCheckrt-2w">
                                                            Pay later (425)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">32<₽/span>

                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Car type
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-1w1">
                                                        <label class="form-check-label" for="car_gridCheckrt-1w1">
                                                            Economy (42)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">30<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2w1">
                                                        <label class="form-check-label" for="car_gridCheckrt-2w1">
                                                            Compact (42)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">30<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-6">
                                                        <label class="form-check-label" for="car_gridCheckrt-2car-6">
                                                            Midsize (44)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">37<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-5">
                                                        <label class="form-check-label" for="car_gridCheckrt-2car-5">
                                                            Standard (44)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">37<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-4">
                                                        <label class="form-check-label" for="car_gridCheckrt-2car-4">
                                                            Full-size (44)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">37<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-3">
                                                        <label class="form-check-label" for="car_gridCheckrt-2car-3">
                                                            Premium (60)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">38<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-2">
                                                        <label class="form-check-label" for="car_gridCheckrt-2car-2">
                                                            Luxury (28)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">59<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-1">
                                                        <label class="form-check-label" for="car_gridCheckrt-2car-1">
                                                            Sports Car (11)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">250₽</span>
                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Seats
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-3">
                                                        <label class="form-check-label" for="car_gridCheckrt-3">
                                                            Less than 4 seats
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">1,8₽53.7</span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-4">
                                                        <label class="form-check-label" for="car_gridCheckrt-4">
                                                            4-5 Seats
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">25.₽07</span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-5">
                                                        <label class="form-check-label" for="car_gridCheckrt-5">
                                                            6-7 Seats
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">200₽.4</span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-51">
                                                        <label class="form-check-label" for="car_gridCheckrt-51">
                                                            8-9 Seats
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">259₽.03</span>
                                                </li>
                                            </ul>

                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Mileage Allowance
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-11">
                                                        <label class="form-check-label" for="car_gridCheckrt-11">
                                                            Unlimited Mileage
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">58.₽94</span>

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-111">
                                                        <label class="form-check-label" for="car_gridCheckrt-111">
                                                            Limited Mileage
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">25.₽07</span>

                                                </li>
                                            </ul>

                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Specifications
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-22">
                                                        <label class="form-check-label" for="car_gridCheckrt-22">
                                                            Automatic Transmission
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-222">
                                                        <label class="form-check-label" for="car_gridCheckrt-222">
                                                            Manual Transmission
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2222">
                                                        <label class="form-check-label" for="car_gridCheckrt-2222">
                                                            Air Conditioning
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>

                                        </div><!-- /.rt-widget -->

                                    </div><!-- /.rt-sidebar-group -->
                                </div><!-- /.col-lg-3 -->
                                <div class="col-lg-9">
                                    <div class="flight-list-box rt-mb-30">
                                        <form action="#" class="row">
                                            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                <button class="rt-btn pill rt-sm rt-gradient d-block">Recommended</button>
                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                <select class="rt-selectactive banner-select select2-hidden-accessible" name="from" style="width: 100%" data-select2-id="19" tabindex="-1" aria-hidden="true">
                                                    <option value="1" data-select2-id="21">Price</option>
                                                    <option value="2">100</option>
                                                    <option value="3">100</option>
                                                    <option value="4">400</option>
                                                    <option value="5">500</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="20" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-from-7x-container"><span class="select2-selection__rendered" id="select2-from-7x-container" role="textbox" aria-readonly="true" title="Price">Price</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div><!-- /.col-lg-3 -->
                                            <div class="col-lg-3 rt-input-group mini col-md-6  mb-3 mb-md-0">
                                                <input type="text" class="rt-date-picker form-control hasDatepicker" placeholder="Departure Time" id="dp1636372301083">
                                            </div><!-- /.col-lg-3 -->
                                            <div class="col-lg-3 rt-input-group mini col-md-6 ">
                                                <input type="text" class="form-control rt-date-picker hasDatepicker" placeholder="Arrival Time " id="dp1636372301084">
                                            </div><!-- /.col-lg-3 -->
                                        </form>
                                    </div><!-- /.flight-list-box -->
                                    <div class="flight-list-box rt-mb-30">
                                        <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                                            <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                                                <img src="/images/all-img/car-1.png" alt="car image" class="rt-border-primary2">
                                            </div><!-- /.car-thumb -->
                                            <div class="economy mb-5 mb-md-0">
                                                <h5 class="f-size-16 rt-medium">Economy</h5>
                                                <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                                                <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                                                <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                                <span class="primary-color">Excellent</span>
                                                <span class="f-size-12 text-878">( 86 Reviews )</span>
                                            </div><!-- /.economy -->
                                            <div class="ck-list">
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                                                    </li>
                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.ck-list -->
                                            <div class="price-mant text-lg-right">
                                                <span class="d-block f-size-12 text-878">7 days</span>
                                                <span class="d-block text-primary f-size-24 rt-semiblod title-font">275₽</span>
                                                <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                                            </div><!-- /.price-mant -->
                                        </div><!-- /.top-content -->
                                        <div class="bottom-content row">
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                                                    </li>

                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.single-discribe -->
                                        </div><!-- /.bottom-content -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30">
                                        <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                                            <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                                                <img src="/images/all-img/car-2.png" alt="car image" class="rt-border-primary2">
                                            </div><!-- /.car-thumb -->
                                            <div class="economy mb-5 mb-md-0">
                                                <h5 class="f-size-16 rt-medium">Economy</h5>
                                                <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                                                <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                                                <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                                <span class="primary-color">Excellent</span>
                                                <span class="f-size-12 text-878">( 86 Reviews )</span>
                                            </div><!-- /.economy -->
                                            <div class="ck-list">
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                                                    </li>
                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.ck-list -->
                                            <div class="price-mant text-lg-right">
                                                <span class="d-block f-size-12 text-878">7 days</span>
                                                <span class="d-block text-primary f-size-24 rt-semiblod title-font">275₽</span>
                                                <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                                            </div><!-- /.price-mant -->
                                        </div><!-- /.top-content -->
                                        <div class="bottom-content row">
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                                                    </li>

                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.single-discribe -->
                                        </div><!-- /.bottom-content -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30">
                                        <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                                            <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                                                <img src="/images/all-img/car-3.png" alt="car image" class="rt-border-primary2">
                                            </div><!-- /.car-thumb -->
                                            <div class="economy mb-5 mb-md-0">
                                                <h5 class="f-size-16 rt-medium">Economy</h5>
                                                <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                                                <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                                                <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                                <span class="primary-color">Excellent</span>
                                                <span class="f-size-12 text-878">( 86 Reviews )</span>
                                            </div><!-- /.economy -->
                                            <div class="ck-list">
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                                                    </li>
                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.ck-list -->
                                            <div class="price-mant text-lg-right">
                                                <span class="d-block f-size-12 text-878">7 days</span>
                                                <span class="d-block text-primary f-size-24 rt-semiblod title-font">275₽</span>
                                                <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                                            </div><!-- /.price-mant -->
                                        </div><!-- /.top-content -->
                                        <div class="bottom-content row">
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                                                    </li>

                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.single-discribe -->
                                        </div><!-- /.bottom-content -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30">
                                        <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                                            <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                                                <img src="/images/all-img/car-4.png" alt="car image" class="rt-border-primary2">
                                            </div><!-- /.car-thumb -->
                                            <div class="economy mb-5 mb-md-0">
                                                <h5 class="f-size-16 rt-medium">Economy</h5>
                                                <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                                                <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                                                <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                                <span class="primary-color">Excellent</span>
                                                <span class="f-size-12 text-878">( 86 Reviews )</span>
                                            </div><!-- /.economy -->
                                            <div class="ck-list">
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                                                    </li>
                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.ck-list -->
                                            <div class="price-mant text-lg-right">
                                                <span class="d-block f-size-12 text-878">7 days</span>
                                                <span class="d-block text-primary f-size-24 rt-semiblod title-font">275₽</span>
                                                <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                                            </div><!-- /.price-mant -->
                                        </div><!-- /.top-content -->
                                        <div class="bottom-content row">
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                                                    </li>

                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.single-discribe -->
                                        </div><!-- /.bottom-content -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30">
                                        <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                                            <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                                                <img src="/images/all-img/car-5.png" alt="car image" class="rt-border-primary2">
                                            </div><!-- /.car-thumb -->
                                            <div class="economy mb-5 mb-md-0">
                                                <h5 class="f-size-16 rt-medium">Economy</h5>
                                                <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                                                <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                                                <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                                <span class="primary-color">Excellent</span>
                                                <span class="f-size-12 text-878">( 86 Reviews )</span>
                                            </div><!-- /.economy -->
                                            <div class="ck-list">
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                                                    </li>
                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.ck-list -->
                                            <div class="price-mant text-lg-right">
                                                <span class="d-block f-size-12 text-878">7 days</span>
                                                <span class="d-block text-primary f-size-24 rt-semiblod title-font">275₽</span>
                                                <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                                            </div><!-- /.price-mant -->
                                        </div><!-- /.top-content -->
                                        <div class="bottom-content row">
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                                                    </li>

                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.single-discribe -->
                                        </div><!-- /.bottom-content -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30">
                                        <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                                            <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                                                <img src="/images/all-img/car-6.png" alt="car image" class="rt-border-primary2">
                                            </div><!-- /.car-thumb -->
                                            <div class="economy mb-5 mb-md-0">
                                                <h5 class="f-size-16 rt-medium">Economy</h5>
                                                <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                                                <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                                                <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                                <span class="primary-color">Excellent</span>
                                                <span class="f-size-12 text-878">( 86 Reviews )</span>
                                            </div><!-- /.economy -->
                                            <div class="ck-list">
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                                                    </li>
                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.ck-list -->
                                            <div class="price-mant text-lg-right">
                                                <span class="d-block f-size-12 text-878">7 days</span>
                                                <span class="d-block text-primary f-size-24 rt-semiblod title-font">275₽</span>
                                                <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                                            </div><!-- /.price-mant -->
                                        </div><!-- /.top-content -->
                                        <div class="bottom-content row">
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                                                    </li>

                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.single-discribe -->
                                        </div><!-- /.bottom-content -->
                                    </div><!-- /.flight-box -->


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
                        <div class="tab-pane rtIncative fade-in-bottom" id="rt-item_b_four" role="tabpanel" aria-labelledby="rt-item_b_four">
                            <div class="row">
                                <div class="col-lg-3 mx-auto mb-5 mb-lg-0 col-md-6">
                                    <div class="rt-sidebar-group">
                                        <div class="rt-widget widget_range-slider">
                                            <h3 class="rt-widget-title">
                                                Фильтровать по цене
                                            </h3><!-- /.rt-widget-title -->

                                            <div class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 21.4286%; width: 60.7143%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 21.4286%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 82.1429%;"></a></div>
                                            <div class="price_slider_amount">
                                                <div class="clearfix">
                                                    <div class="float-left">
                                                        <span>Цена:</span>
                                                    </div><!-- /.float-left -->
                                                    <div class="float-right">
                                                        <input type="text" class="amount" name="price" placeholder="Введите цену">
                                                    </div><!-- /.float-right -->
                                                </div><!-- /.clearfix -->
                                            </div>
                                            <div class="text-center">
                                                <input type="submit" value="Фильтровать" class="rt-btn rt-gradient rounded-sm rt-sm text-uppercase">
                                            </div><!-- /.text-center -->
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Время отправления
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-1">
                                                        <label class="form-check-label" for="train_gridCheckrt-1">
                                                            00:00-06:00
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-2">
                                                        <label class="form-check-label" for="train_gridCheckrt-2">
                                                            06:00-12:00
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-2-train-1">
                                                        <label class="form-check-label" for="train_gridCheckrt-2-train-1">
                                                            12:00-18:00
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-2-train-2">
                                                        <label class="form-check-label" for="train_gridCheckrt-2-train-2">
                                                            18:00-24:00
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Время прибытия
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-3tx">
                                                        <label class="form-check-label" for="train_gridCheckrt-3tx">
                                                            00:00-06:00
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-4sa">
                                                        <label class="form-check-label" for="train_gridCheckrt-4sa">
                                                            06:00-12:00
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-5">
                                                        <label class="form-check-label" for="train_gridCheckrt-5">
                                                            12:00-18:00
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-51">
                                                        <label class="form-check-label" for="train_gridCheckrt-51">
                                                            18:00-24:00
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Станция прибытия
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-11">
                                                        <label class="form-check-label" for="train_gridCheckrt-11">
                                                            Платов
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>

                                            </ul>

                                        </div><!-- /.rt-widget -->
                                    </div><!-- /.rt-sidebar-group -->
                                </div><!-- /.col-lg-3 -->
                                <div class="col-lg-9">
                                    <div class="flight-list-box rt-mb-30">
                                        <form action="#" class="row">
                                            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                <button class="rt-btn pill rt-sm rt-gradient d-block">Recommended</button>
                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                <select class="rt-selectactive banner-select select2-hidden-accessible" name="from" style="width: 100%" data-select2-id="22" tabindex="-1" aria-hidden="true">
                                                    <option value="1" data-select2-id="24">Price</option>
                                                    <option value="2">100</option>
                                                    <option value="3">100</option>
                                                    <option value="4">400</option>
                                                    <option value="5">500</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="23" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-from-7p-container"><span class="select2-selection__rendered" id="select2-from-7p-container" role="textbox" aria-readonly="true" title="Price">Price</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div><!-- /.col-lg-3 -->
                                            <div class="col-lg-3 rt-input-group mini col-md-6  mb-3 mb-md-0">
                                                <input type="text" class="rt-date-picker form-control hasDatepicker" placeholder="Departure Time" id="dp1636372301085">
                                            </div><!-- /.col-lg-3 -->
                                            <div class="col-lg-3 rt-input-group mini col-md-6 ">
                                                <input type="text" class="form-control rt-date-picker hasDatepicker" placeholder="Arrival Time " id="dp1636372301086">
                                            </div><!-- /.col-lg-3 -->
                                        </form>
                                    </div><!-- /.flight-list-box -->

                                    <div class="flight-list-box rt-mb-30 row">
                                        <div class="col-md-3 mb-md-0 mb-4">
                                            <div class="d-flex justify-content-between">
                                                <span class="rt-medium f-size-24 primary-color">G102</span>
                                                <ul class="rt-llist train-timeline">
                                                    <li class="f-size-18 text-424">
                                                        06:26
                                                    </li>
                                                    <li class="f-size-18 text-424">
                                                        12:29
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
                                            <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>25.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30 row">
                                        <div class="col-md-3 mb-md-0 mb-4">
                                            <div class="d-flex justify-content-between">
                                                <span class="rt-medium f-size-24 primary-color">G102</span>
                                                <ul class="rt-llist train-timeline">
                                                    <li class="f-size-18 text-424">
                                                        06:26
                                                    </li>
                                                    <li class="f-size-18 text-424">
                                                        12:29
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
                                            <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>25.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30 row">
                                        <div class="col-md-3 mb-md-0 mb-4">
                                            <div class="d-flex justify-content-between">
                                                <span class="rt-medium f-size-24 primary-color">G102</span>
                                                <ul class="rt-llist train-timeline">
                                                    <li class="f-size-18 text-424">
                                                        06:26
                                                    </li>
                                                    <li class="f-size-18 text-424">
                                                        12:29
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
                                            <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>25.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30 row">
                                        <div class="col-md-3 mb-md-0 mb-4">
                                            <div class="d-flex justify-content-between">
                                                <span class="rt-medium f-size-24 primary-color">G102</span>
                                                <ul class="rt-llist train-timeline">
                                                    <li class="f-size-18 text-424">
                                                        06:26
                                                    </li>
                                                    <li class="f-size-18 text-424">
                                                        12:29
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
                                            <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>25.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30 row">
                                        <div class="col-md-3 mb-md-0 mb-4">
                                            <div class="d-flex justify-content-between">
                                                <span class="rt-medium f-size-24 primary-color">G102</span>
                                                <ul class="rt-llist train-timeline">
                                                    <li class="f-size-18 text-424">
                                                        06:26
                                                    </li>
                                                    <li class="f-size-18 text-424">
                                                        12:29
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
                                            <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>25.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.flight-box -->
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

    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="rt-BototmTab">
                        <div class="tab-pane show active fade-in-bottom" id="rt-item_b_first" role="tabpanel"
                             aria-labelledby="rt-item_b_first">
                        </div>
                        <div class="tab-pane rtIncative fade-in-bottom" id="rt-item_b_second" role="tabpanel" aria-labelledby="rt-item_b_second">
                            <div class="row">
                                <div class="col-xl-3 mx-auto col-lg-3 col-md-6">
                                    <div class="rt-sidebar-group">
                                        <div class="rt-widget widget_rating">
                                            <h3 class="rt-widget-title">
                                                Star Rating
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-1xs">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-1xs">
                    <span>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star"></i>
                    </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-2xs">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-2xs">
                    <span>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                    </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-2xss">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-2xss">
                    <span>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                    </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-2xssa">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-2xssa">
                    <span>
                        <i class="icofont-star review"></i>
                        <i class="icofont-star review"></i>
                    </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_range-slider">
                                            <h3 class="rt-widget-title">
                                                Фильтровать по цене
                                            </h3><!-- /.rt-widget-title -->

                                            <div class="slider-range"></div>
                                            <div class="price_slider_amount">
                                                <div class="clearfix">
                                                    <div class="float-left">
                                                        <span>Price:</span>
                                                    </div><!-- /.float-left -->
                                                    <div class="float-right">
                                                        <input type="text" class="amount" name="price" placeholder="Add Your Price" />
                                                    </div><!-- /.float-right -->
                                                </div><!-- /.clearfix -->
                                            </div>
                                            <div class="text-center">
                                                <input type="submit" value="Filter" class="rt-btn rt-gradient rounded-sm rt-sm text-uppercase" />
                                            </div><!-- /.text-center -->
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Booking Policy
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-1">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-1">
                                                            Instant Confirmation
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-2">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-2">
                                                            Free Cancellation
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Bed Type
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-3">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-3">
                                                            2 Single beds
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-4">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-4">
                                                            1 Queen bed
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Neighborhood
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-11">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-11">
                                                            New York (and vicinity)
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-111">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-111">
                                                            New York
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-1111">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-1111">
                                                            Manhattan
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-1s111">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-1s111">
                                                            Brooklyn
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>
                                            <div class="show-more-links">
                                                <a href="#">Show more</a>
                                            </div>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Amenities
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-22">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-22">
                                                            High-speed Internet
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-222">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-222">
                                                            Air conditioning
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-2222">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-2222">
                                                            Swimming pool
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-2s222">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-2s222">
                                                            Free breakfast
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>
                                            <div class="show-more-links">
                                                <a href="#">Show more</a>
                                            </div>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Property Type
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-1">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-1">
                                                            Hotel
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-2">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-2">
                                                            Private vacation home
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-3">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-3">
                                                            Bed & Breakfast
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>

                                            </ul>
                                            <div class="show-more-links">
                                                <a href="#">Show more</a>
                                            </div>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Popular Locations
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-11">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-11">
                                                            Central Park
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-22">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-22">
                                                            Times Square
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-33">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-33">
                                                            Statue of Liberty
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-3s3">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-3s3">
                                                            Empire State Building
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>

                                            </ul>
                                            <div class="show-more-links">
                                                <a href="#">Show more</a>
                                            </div>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Accessibility
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-1rt1">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-1rt1">
                                                            Accessible bathroom
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-2rt2">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-2rt2">
                                                            In-room accessibility
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="Hotel_gridCheckrt-ex-3rt3">
                                                        <label class="form-check-label" for="Hotel_gridCheckrt-ex-3rt3">
                                                            Roll-in shower
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>


                                            </ul>

                                        </div><!-- /.rt-widget -->
                                    </div><!-- /.rt-sidebar-group -->
                                </div><!-- /.col-lg-3 -->
                                <div class="col-xl-9 col-lg-9 mt-5 mt-lg-0">

                                    <div class="box-style__1 rt-mb-30">
                                        <form action="#" class="row">
                                            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                <button class="rt-btn pill rt-sm rt-gradient d-block">Recommended</button>
                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                <select class="rt-selectactive banner-select" name="from" style="width: 100%">
                                                    <option value="1">Price</option>
                                                    <option value="2">100</option>
                                                    <option value="3">100</option>
                                                    <option value="4">400</option>
                                                    <option value="5">500</option>
                                                </select>
                                            </div><!-- /.col-lg-3 -->
                                            <div class="col-lg-3 rt-input-group mini col-md-6  mb-3 mb-md-0">
                                                <input type="text" class="rt-date-picker form-control" placeholder="Departure Time">
                                            </div><!-- /.col-lg-3 -->
                                            <div class="col-lg-3 rt-input-group mini col-md-6 ">
                                                <input type="text" class="form-control rt-date-picker" placeholder="Arrival Time ">
                                            </div><!-- /.col-lg-3 -->
                                        </form>
                                    </div><!-- /.flight-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-1.jpg)"></div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>Candlewood Suites NYC -Times Square <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="dumble"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="resturent"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="sofa"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="watter"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="music"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="crolstve"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="doller"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="time"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge"  draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-2.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="dumble"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="resturent"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="sofa"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="watter"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="music"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="crolstve"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="doller"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="time"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge"  draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-3.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>Empire Hotel Kowloon－Tsim Sha Tsui <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="dumble"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="resturent"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="sofa"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="watter"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="music"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="crolstve"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="doller"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="time"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge"  draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-4.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>Regal Kowloon Hotel <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="dumble"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="resturent"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="sofa"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="watter"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="music"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="crolstve"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="doller"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="time"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge"  draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-5.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="dumble"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="resturent"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="sofa"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="watter"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="music"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="crolstve"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="doller"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="time"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge"  draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-6.jpg)"></div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="dumble"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="resturent"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="sofa"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="watter"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="music"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="crolstve"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="doller"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="time"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge"  draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-7.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="dumble"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="resturent"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="sofa"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="watter"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="music"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="crolstve"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="doller"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="time"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge"  draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-8.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="dumble"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="resturent"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="sofa"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="watter"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="music"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="crolstve"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="doller"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="time"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge"  draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-9.jpg)"></div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>Hyatt Regency Hong Kong, Tsim Sha Tsui <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="dumble"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="resturent"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="sofa"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="watter"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="music"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="crolstve"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="doller"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="time"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge"  draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-10.jpg)"></div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="dumble"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="resturent"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="sofa"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="watter"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="music"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="crolstve"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="doller"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="time"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge"  draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-11.jpg)"></div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>Lan Kwai Fong Hotel Kau U Fong <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="dumble"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="resturent"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="sofa"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="watter"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="music"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="crolstve"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="doller"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="time"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge"  draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-12.jpg)"></div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>InterContinental Grand Stanford Hong Kong <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="dumble"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="resturent"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="sofa"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="watter"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="music"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="crolstve"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="doller"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="time"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge"  draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->
                                    <div class="box-style__1 rt-mb-30">
                                        <div class="hotel-inner-content row">
                                            <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url(/images/all-img/hotel-1.jpg)">
                                                    <div class="inner-icon">
                                                        <i class="icofont-gift"></i>
                                                    </div><!-- /.inner-icon -->
                                                </div>
                                            </div><!-- /.hotel-thumb -->
                                            <div class="hotel-text col-md-9">
                                                <div class="top mb-4 mb-md-0">
                                                    <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                                    <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                                                </div><!-- /.top -->
                                                <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                                    <div class="left">
                                                        <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                                        <span>Excellent</span>
                                                        <span>( 86 Reviews )</span>
                                                        <div>
                                                            <a href="#">Free Cancellation</a>
                                                        </div>
                                                    </div><!-- /.left- -->
                                                    <div class="right text-left text-md-right mt-4 mt-md-0">
                                                        <span class="d-block">From USD</span>
                                                        <span class="d-block">364₽</span>
                                                    </div><!-- /.right -->
                                                </div><!-- /.middle-text -->
                                                <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                                    <div class="left">
                                                        <span data-tippy="wifi"><img src="/images/all-img/hottel-cion-1.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="dumble"><img src="/images/all-img/hottel-cion-2.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="resturent"><img src="/images/all-img/hottel-cion-3.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="sofa"><img src="/images/all-img/hottel-cion-4.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="watter"><img src="/images/all-img/hottel-cion-5.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="music"><img src="/images/all-img/hottel-cion-6.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="crolstve"><img src="/images/all-img/hottel-cion-7.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="doller"><img src="/images/all-img/hottel-cion-8.png" alt="hotel iamge"  draggable="false"></span>
                                                        <span data-tippy="time"><img src="/images/all-img/hottel-cion-9.png" alt="hotel iamge"  draggable="false"></span>
                                                    </div><!-- /.left -->
                                                    <div class="right">
                                                        <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                                    </div><!-- /.right -->
                                                </div><!-- /.footer-elements -->
                                            </div><!-- /.hotel-text -->
                                        </div><!-- /.hotel-inner-content -->
                                    </div><!-- /.hotel-list-box -->

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
                        <div class="tab-pane rtIncative fade-in-bottom" id="rt-item_b_thrid" role="tabpanel" aria-labelledby="rt-item_b_thrid">
                            <div class="row">
                                <div class="col-lg-3 mx-auto col-md-7 mb-5 mb-lg-0">
                                    <div class="rt-sidebar-group">
                                        <div class="rt-widget widget_rating">
                                            <h3 class="rt-widget-title">
                                                Star Rating
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-1xs">
                                                        <label class="form-check-label" for="car_gridCheckrt-1xs">
                        <span>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>

                        </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2xs">
                                                        <label class="form-check-label" for="car_gridCheckrt-2xs">
                        <span>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                        </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2xss">
                                                        <label class="form-check-label" for="car_gridCheckrt-2xss">
                        <span>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                        </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2xssa">
                                                        <label class="form-check-label" for="car_gridCheckrt-2xssa">
                        <span>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                        </span>
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Payment options
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-1w">
                                                        <label class="form-check-label" for="car_gridCheckrt-1w">
                                                            Pay now (72)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">30<₽/span>

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2w">
                                                        <label class="form-check-label" for="car_gridCheckrt-2w">
                                                            Pay later (425)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">32<₽/span>

                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Car type
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-1w1">
                                                        <label class="form-check-label" for="car_gridCheckrt-1w1">
                                                            Economy (42)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">30<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2w1">
                                                        <label class="form-check-label" for="car_gridCheckrt-2w1">
                                                            Compact (42)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">30<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-6">
                                                        <label class="form-check-label" for="car_gridCheckrt-2car-6">
                                                            Midsize (44)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">37<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-5">
                                                        <label class="form-check-label" for="car_gridCheckrt-2car-5">
                                                            Standard (44)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">37<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-4">
                                                        <label class="form-check-label" for="car_gridCheckrt-2car-4">
                                                            Full-size (44)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">37<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-3">
                                                        <label class="form-check-label" for="car_gridCheckrt-2car-3">
                                                            Premium (60)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">38<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-2">
                                                        <label class="form-check-label" for="car_gridCheckrt-2car-2">
                                                            Luxury (28)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">59<₽/span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-1">
                                                        <label class="form-check-label" for="car_gridCheckrt-2car-1">
                                                            Sports Car (11)
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">250₽</span>
                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Seats
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-3">
                                                        <label class="form-check-label" for="car_gridCheckrt-3">
                                                            Less than 4 seats
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">1,8₽53.7</span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-4">
                                                        <label class="form-check-label" for="car_gridCheckrt-4">
                                                            4-5 Seats
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">25.₽07</span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-5">
                                                        <label class="form-check-label" for="car_gridCheckrt-5">
                                                            6-7 Seats
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">200₽.4</span>
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-51">
                                                        <label class="form-check-label" for="car_gridCheckrt-51">
                                                            8-9 Seats
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">259₽.03</span>
                                                </li>
                                            </ul>

                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Mileage Allowance
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-11">
                                                        <label class="form-check-label" for="car_gridCheckrt-11">
                                                            Unlimited Mileage
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">58.₽94</span>

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-111">
                                                        <label class="form-check-label" for="car_gridCheckrt-111">
                                                            Limited Mileage
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                    <span class="float-right">25.₽07</span>

                                                </li>
                                            </ul>

                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Specifications
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-22">
                                                        <label class="form-check-label" for="car_gridCheckrt-22">
                                                            Automatic Transmission
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-222">
                                                        <label class="form-check-label" for="car_gridCheckrt-222">
                                                            Manual Transmission
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2222">
                                                        <label class="form-check-label" for="car_gridCheckrt-2222">
                                                            Air Conditioning
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                            </ul>

                                        </div><!-- /.rt-widget -->

                                    </div><!-- /.rt-sidebar-group -->
                                </div><!-- /.col-lg-3 -->
                                <div class="col-lg-9">
                                    <div class="flight-list-box rt-mb-30">
                                        <form action="#" class="row">
                                            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                <button class="rt-btn pill rt-sm rt-gradient d-block">Recommended</button>
                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                <select class="rt-selectactive banner-select" name="from" style="width: 100%">
                                                    <option value="1">Price</option>
                                                    <option value="2">100</option>
                                                    <option value="3">100</option>
                                                    <option value="4">400</option>
                                                    <option value="5">500</option>
                                                </select>
                                            </div><!-- /.col-lg-3 -->
                                            <div class="col-lg-3 rt-input-group mini col-md-6  mb-3 mb-md-0">
                                                <input type="text" class="rt-date-picker form-control" placeholder="Departure Time">
                                            </div><!-- /.col-lg-3 -->
                                            <div class="col-lg-3 rt-input-group mini col-md-6 ">
                                                <input type="text" class="form-control rt-date-picker" placeholder="Arrival Time ">
                                            </div><!-- /.col-lg-3 -->
                                        </form>
                                    </div><!-- /.flight-list-box -->
                                    <div class="flight-list-box rt-mb-30">
                                        <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                                            <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                                                <img src="/images/all-img/car-1.png" alt="car image" class="rt-border-primary2">
                                            </div><!-- /.car-thumb -->
                                            <div class="economy mb-5 mb-md-0">
                                                <h5 class="f-size-16 rt-medium">Economy</h5>
                                                <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                                                <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                                                <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                                <span class="primary-color">Excellent</span>
                                                <span class="f-size-12 text-878">( 86 Reviews )</span>
                                            </div><!-- /.economy -->
                                            <div class="ck-list">
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                                                    </li>
                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.ck-list -->
                                            <div class="price-mant text-lg-right">
                                                <span class="d-block f-size-12 text-878">7 days</span>
                                                <span class="d-block text-primary f-size-24 rt-semiblod title-font">275₽</span>
                                                <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                                            </div><!-- /.price-mant -->
                                        </div><!-- /.top-content -->
                                        <div class="bottom-content row">
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                                                    </li>

                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.single-discribe -->
                                        </div><!-- /.bottom-content -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30">
                                        <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                                            <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                                                <img src="/images/all-img/car-2.png" alt="car image" class="rt-border-primary2">
                                            </div><!-- /.car-thumb -->
                                            <div class="economy mb-5 mb-md-0">
                                                <h5 class="f-size-16 rt-medium">Economy</h5>
                                                <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                                                <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                                                <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                                <span class="primary-color">Excellent</span>
                                                <span class="f-size-12 text-878">( 86 Reviews )</span>
                                            </div><!-- /.economy -->
                                            <div class="ck-list">
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                                                    </li>
                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.ck-list -->
                                            <div class="price-mant text-lg-right">
                                                <span class="d-block f-size-12 text-878">7 days</span>
                                                <span class="d-block text-primary f-size-24 rt-semiblod title-font">275₽</span>
                                                <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                                            </div><!-- /.price-mant -->
                                        </div><!-- /.top-content -->
                                        <div class="bottom-content row">
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                                                    </li>

                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.single-discribe -->
                                        </div><!-- /.bottom-content -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30">
                                        <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                                            <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                                                <img src="/images/all-img/car-3.png" alt="car image" class="rt-border-primary2">
                                            </div><!-- /.car-thumb -->
                                            <div class="economy mb-5 mb-md-0">
                                                <h5 class="f-size-16 rt-medium">Economy</h5>
                                                <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                                                <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                                                <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                                <span class="primary-color">Excellent</span>
                                                <span class="f-size-12 text-878">( 86 Reviews )</span>
                                            </div><!-- /.economy -->
                                            <div class="ck-list">
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                                                    </li>
                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.ck-list -->
                                            <div class="price-mant text-lg-right">
                                                <span class="d-block f-size-12 text-878">7 days</span>
                                                <span class="d-block text-primary f-size-24 rt-semiblod title-font">275₽</span>
                                                <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                                            </div><!-- /.price-mant -->
                                        </div><!-- /.top-content -->
                                        <div class="bottom-content row">
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                                                    </li>

                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.single-discribe -->
                                        </div><!-- /.bottom-content -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30">
                                        <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                                            <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                                                <img src="/images/all-img/car-4.png" alt="car image" class="rt-border-primary2">
                                            </div><!-- /.car-thumb -->
                                            <div class="economy mb-5 mb-md-0">
                                                <h5 class="f-size-16 rt-medium">Economy</h5>
                                                <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                                                <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                                                <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                                <span class="primary-color">Excellent</span>
                                                <span class="f-size-12 text-878">( 86 Reviews )</span>
                                            </div><!-- /.economy -->
                                            <div class="ck-list">
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                                                    </li>
                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.ck-list -->
                                            <div class="price-mant text-lg-right">
                                                <span class="d-block f-size-12 text-878">7 days</span>
                                                <span class="d-block text-primary f-size-24 rt-semiblod title-font">275₽</span>
                                                <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                                            </div><!-- /.price-mant -->
                                        </div><!-- /.top-content -->
                                        <div class="bottom-content row">
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                                                    </li>

                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.single-discribe -->
                                        </div><!-- /.bottom-content -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30">
                                        <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                                            <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                                                <img src="/images/all-img/car-5.png" alt="car image" class="rt-border-primary2">
                                            </div><!-- /.car-thumb -->
                                            <div class="economy mb-5 mb-md-0">
                                                <h5 class="f-size-16 rt-medium">Economy</h5>
                                                <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                                                <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                                                <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                                <span class="primary-color">Excellent</span>
                                                <span class="f-size-12 text-878">( 86 Reviews )</span>
                                            </div><!-- /.economy -->
                                            <div class="ck-list">
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                                                    </li>
                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.ck-list -->
                                            <div class="price-mant text-lg-right">
                                                <span class="d-block f-size-12 text-878">7 days</span>
                                                <span class="d-block text-primary f-size-24 rt-semiblod title-font">275₽</span>
                                                <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                                            </div><!-- /.price-mant -->
                                        </div><!-- /.top-content -->
                                        <div class="bottom-content row">
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                                                    </li>

                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.single-discribe -->
                                        </div><!-- /.bottom-content -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30">
                                        <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                                            <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                                                <img src="/images/all-img/car-6.png" alt="car image" class="rt-border-primary2">
                                            </div><!-- /.car-thumb -->
                                            <div class="economy mb-5 mb-md-0">
                                                <h5 class="f-size-16 rt-medium">Economy</h5>
                                                <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                                                <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                                                <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                                <span class="primary-color">Excellent</span>
                                                <span class="f-size-12 text-878">( 86 Reviews )</span>
                                            </div><!-- /.economy -->
                                            <div class="ck-list">
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                                                    </li>
                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.ck-list -->
                                            <div class="price-mant text-lg-right">
                                                <span class="d-block f-size-12 text-878">7 days</span>
                                                <span class="d-block text-primary f-size-24 rt-semiblod title-font">275₽</span>
                                                <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                                            </div><!-- /.price-mant -->
                                        </div><!-- /.top-content -->
                                        <div class="bottom-content row">
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                                                <p class="f-size-14 line-height-24 text-555">
                                                    323 West 34Th Street, <br>
                                                    Manhattan, New York, <br>
                                                    USA
                                                </p>
                                                <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                                                    0.51 mi from New <br>
                                                    York city center
                                                </p>
                                            </div><!-- /.single-discribe -->
                                            <div class="single-discribe col-md-4">
                                                <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                                                <ul class="rt-list">
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                                                    </li>
                                                    <li class="d-block">
                                                        <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                                                    </li>

                                                </ul><!-- /.rt-list -->
                                            </div><!-- /.single-discribe -->
                                        </div><!-- /.bottom-content -->
                                    </div><!-- /.flight-box -->


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
                        <div class="tab-pane rtIncative fade-in-bottom" id="rt-item_b_four" role="tabpanel" aria-labelledby="rt-item_b_four">
                            <div class="row">
                                <div class="col-lg-3 mx-auto mb-5 mb-lg-0 col-md-6">
                                    <div class="rt-sidebar-group">
                                        <div class="rt-widget widget_range-slider">
                                            <h3 class="rt-widget-title">
                                                Фильтровать по цене
                                            </h3><!-- /.rt-widget-title -->

                                            <div class="slider-range"></div>
                                            <div class="price_slider_amount">
                                                <div class="clearfix">
                                                    <div class="float-left">
                                                        <span>Price:</span>
                                                    </div><!-- /.float-left -->
                                                    <div class="float-right">
                                                        <input type="text" class="amount" name="price" placeholder="Add Your Price" />
                                                    </div><!-- /.float-right -->
                                                </div><!-- /.clearfix -->
                                            </div>
                                            <div class="text-center">
                                                <input type="submit" value="Filter" class="rt-btn rt-gradient rounded-sm rt-sm text-uppercase" />
                                            </div><!-- /.text-center -->
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Departure Time
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-1">
                                                        <label class="form-check-label" for="train_gridCheckrt-1">
                                                            00:00-06:00
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-2">
                                                        <label class="form-check-label" for="train_gridCheckrt-2">
                                                            06:00-12:00
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-2-train-1">
                                                        <label class="form-check-label" for="train_gridCheckrt-2-train-1">
                                                            12:00-18:00
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-2-train-2">
                                                        <label class="form-check-label" for="train_gridCheckrt-2-train-2">
                                                            18:00-24:00
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Arrival Time
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-3tx">
                                                        <label class="form-check-label" for="train_gridCheckrt-3tx">
                                                            00:00-06:00
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-4sa">
                                                        <label class="form-check-label" for="train_gridCheckrt-4sa">
                                                            06:00-12:00
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-5">
                                                        <label class="form-check-label" for="train_gridCheckrt-5">
                                                            12:00-18:00
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-51">
                                                        <label class="form-check-label" for="train_gridCheckrt-51">
                                                            18:00-24:00
                                                        </label>
                                                    </div><!-- ./orm-group -->
                                                </li>
                                            </ul>
                                        </div><!-- /.rt-widget -->
                                        <div class="rt-widget widget_plane_time">
                                            <h3 class="rt-widget-title">
                                                Arrival Station
                                            </h3><!-- /.rt-widget-title -->
                                            <ul>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-11">
                                                        <label class="form-check-label" for="train_gridCheckrt-11">
                                                            Beijing South
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>
                                                <li class="clearfix">

                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="train_gridCheckrt-111">
                                                        <label class="form-check-label" for="train_gridCheckrt-111">
                                                            Beijing
                                                        </label>
                                                    </div><!-- ./orm-group -->

                                                </li>

                                            </ul>

                                        </div><!-- /.rt-widget -->
                                    </div><!-- /.rt-sidebar-group -->
                                </div><!-- /.col-lg-3 -->
                                <div class="col-lg-9">
                                    <div class="flight-list-box rt-mb-30">
                                        <form action="#" class="row">
                                            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                <button class="rt-btn pill rt-sm rt-gradient d-block">Recommended</button>
                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                <select class="rt-selectactive banner-select" name="from" style="width: 100%">
                                                    <option value="1">Price</option>
                                                    <option value="2">100</option>
                                                    <option value="3">100</option>
                                                    <option value="4">400</option>
                                                    <option value="5">500</option>
                                                </select>
                                            </div><!-- /.col-lg-3 -->
                                            <div class="col-lg-3 rt-input-group mini col-md-6  mb-3 mb-md-0">
                                                <input type="text" class="rt-date-picker form-control" placeholder="Departure Time">
                                            </div><!-- /.col-lg-3 -->
                                            <div class="col-lg-3 rt-input-group mini col-md-6 ">
                                                <input type="text" class="form-control rt-date-picker" placeholder="Arrival Time ">
                                            </div><!-- /.col-lg-3 -->
                                        </form>
                                    </div><!-- /.flight-list-box -->

                                    <div class="flight-list-box rt-mb-30 row">
                                        <div class="col-md-3 mb-md-0 mb-4">
                                            <div class="d-flex justify-content-between">
                                                <span class="rt-medium f-size-24 primary-color">G102</span>
                                                <ul class="rt-llist train-timeline">
                                                    <li class="f-size-18 text-424">
                                                        06:26
                                                    </li>
                                                    <li class="f-size-18 text-424">
                                                        12:29
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
                                            <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>25.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30 row">
                                        <div class="col-md-3 mb-md-0 mb-4">
                                            <div class="d-flex justify-content-between">
                                                <span class="rt-medium f-size-24 primary-color">G102</span>
                                                <ul class="rt-llist train-timeline">
                                                    <li class="f-size-18 text-424">
                                                        06:26
                                                    </li>
                                                    <li class="f-size-18 text-424">
                                                        12:29
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
                                            <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>25.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30 row">
                                        <div class="col-md-3 mb-md-0 mb-4">
                                            <div class="d-flex justify-content-between">
                                                <span class="rt-medium f-size-24 primary-color">G102</span>
                                                <ul class="rt-llist train-timeline">
                                                    <li class="f-size-18 text-424">
                                                        06:26
                                                    </li>
                                                    <li class="f-size-18 text-424">
                                                        12:29
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
                                            <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>25.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30 row">
                                        <div class="col-md-3 mb-md-0 mb-4">
                                            <div class="d-flex justify-content-between">
                                                <span class="rt-medium f-size-24 primary-color">G102</span>
                                                <ul class="rt-llist train-timeline">
                                                    <li class="f-size-18 text-424">
                                                        06:26
                                                    </li>
                                                    <li class="f-size-18 text-424">
                                                        12:29
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
                                            <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>25.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.flight-box -->
                                    <div class="flight-list-box rt-mb-30 row">
                                        <div class="col-md-3 mb-md-0 mb-4">
                                            <div class="d-flex justify-content-between">
                                                <span class="rt-medium f-size-24 primary-color">G102</span>
                                                <ul class="rt-llist train-timeline">
                                                    <li class="f-size-18 text-424">
                                                        06:26
                                                    </li>
                                                    <li class="f-size-18 text-424">
                                                        12:29
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
                                            <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>25.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between rt-mb-15">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                            <div class="d-flex justify-content-between">
                                                <span class="f-size-14 text-333">2nd Class</span>
                                                <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12"></s₽pan>55.33</span>
                                                <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">В корзину</a>
                                            </div><!-- /.d-flex  -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.flight-box -->
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
@endsection
