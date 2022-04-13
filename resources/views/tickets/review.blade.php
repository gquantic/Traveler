@extends('layouts.main')

@section('page-title')
    Просмотр
@endsection

@section('content')

    <div class="rt-breadcump rt-breadcump-height">
        <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(images/backgrounds/bredcump.png)">
        </div><!-- /.rt-page-bg -->
        <div class="container">
            <div class="row rt-breadcump-height">
                <div class="col-12">
                    <div class="breadcrumbs-content">
                        <h3>Flight</h3>
                        <div class="breadcrumbs">
                            <span class="divider"><i class="icofont-home"></i></span>
                            <a href="#" title="Home">Home</a>
                            <span class="divider"><i class="icofont-simple-right"></i></span>
                            Flight
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.breadcrumbs-content -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.rt-bredcump -->

    @php
        $arrivalTime = explode(':', $ticket['arrival_time']);
        $departTime = explode(':', $ticket['depart_time']);

        $duration = explode(':', $ticket['duration']);
        $durationDisplay = "{$duration[0]} часов";


        if ($duration[1])
            $durationDisplay = $durationDisplay . " {$duration[1]} минуты";
    @endphp

    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto mx-lg-0">
                    <h4 class="rt-strong text-uppercase rt-mb-20"> Ознакомьтесь с деталями рейса и забронируйте </h4>
                </div><!-- /.col-12 -->
                <div class="col-xl-9 mx-auto col-lg-10">
                    <div class="alert rt-alrt-1">
                        <div class="media">
                            <i class="icofont-check mr-2"></i>
                            <div class="media-body">
                                <h6 class="mt-0 rt-semiblod">Nice Job! You picked one of our best value flights.</h6>
                                Book now so you don't miss out on this price!
                            </div>
                        </div>
                    </div><!-- /.alert -->
                    <div class="section-title-spacer"></div><!-- /.rt-section-title-spacer -->

                    <div class="flt-dtls-box rt-mb-30">
                        <div class="upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center">
                            <div class="left">
                                <span>{{ $ticket['route_departure_address'] }}</span> <span><img src="{{asset('images/all-img/shp-ln-1.png')}}" alt="line image" draggable="false"></span> <span>{{ $ticket['route_arrival_address'] }}</span>
                                <p>{{$ticket['departure_date']}} </p>
                            </div><!-- /.left -->
                            <div class="right">
                                <a href="" class="rt-btn rt-gradient3 rt-Bshadow-3  pill text-uppercase rt-sm2">Обновить</a>
                            </div><!-- /.right -->
                        </div><!-- /.upper-top-content -->
                        <div class="flight-list-box">
                            <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                <div class="col-5 d-flex">
                                    <div class="card-racecm card-race-hover-effect" style="background: #ffa500;">
                                        <a href="" class="text-white">
                                            <i class="icofont-car-alt-1 car white"></i>

                                            <h6>Минимальная цена</h6>
                                            <span>1500 руб.</span>

                                            <h6>Самый быстрый рейс:</h6>
                                            <span>12 часов</span>

                                        </a>
                                    </div>
                                    @switch($ticket['vehicle_type'])
                                        @case('РЖД')
                                        <div class="card-racecm card-race-hover-effect" style="background: #F92853;">
                                            <a href="" class="text-white">
                                                <i class="icofont-train-line train"></i>

                                                <h6>Минимальная цена</h6>
                                                <span>{{ $ticket['price'] }}</span>

                                                <h6>Самый быстрый рейс:</h6>
                                                <span>{{ $durationDisplay }}</span>

                                            </a>
                                        </div>
                                    @break
                                    @case('Авиа')
                                        <div class="card-racecm card-race-hover-effect" style="background: #6D3EFF;transform: translateX(-200px);">
                                            <a href="" class="text-white">
                                                <i class="icofont-airplane-alt avia white"></i>

                                                <h6>Минимальная цена</h6>
                                                <span>{{ $ticket['price'] }}</span>

                                                <h6>Самый быстрый рейс:</h6>
                                                <span>{{ $durationDisplay }}</span>
                                            </a>
                                        </div>
                                    @endswitch
                                        <div class="card-racecm card-race-hover-effect" style="background: #ffa500;transform: translateX(-400px)">
                                            <a href="" class="text-white">
                                                <i class="icofont-car-alt-1 car white"></i>

                                                <h6>Минимальная цена</h6>
                                                <span>1500 руб.</span>

                                                <h6>Самый быстрый рейс:</h6>
                                                <span>12 часов</span>

                                            </a>
                                        </div>

                                </div><!-- /.pricing -->
                                <div class="flight-time d-flex justify-content-between align-items-center">
                                    <div class="left">
                                        <span class="d-block">{{ $ticket['depart_time'] }}</span>
                                        <span class="d-block">{{ $ticket['route_depart_station'] }}</span>
                                    </div><!-- /.left -->
                                    <div class="middle">
                                        <img src="{{asset('images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                                    </div><!-- /.middle -->
                                    <div class="right">
                                        <span class="d-block">{{ $ticket['arrival_time'] }}</span>
                                        <span class="d-block">{{ $ticket['route_arrival_station'] }}</span>
                                    </div><!-- /.rght -->
                                </div><!-- /.flight-time -->
                                <div class="flight-detils">
                                    <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time --> 4h 5m</span>

                                    <span class="d-block"><a href="#collapseExample" class="flt-d-clic btn-lg  pill rt-gradient text-uppercase" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Подробнее <i class="icofont-simple-down"></i></a></span>
                                </div><!-- /.flight-detils -->


                                <div class="trip book-now text-center">
                                    <span class="d-blok">{{ $ticket['price'] }}</span>
{{--                                    <span class="d-block">Roundtrip</span>--}}
{{--                                    <a href="#" class="rt-btn  pill rt-gradient text-uppercase">Book</a>--}}
                                </div><!-- /.trip -->

                            </div><!-- /.top-content -->
                            <div class="collapse bottom-content card-results" id="collapseExample">
                                <div class="container more-info-card">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="mb-0">  Просмотр составного рейса {{ $ticket['route_departure_address'] }} - {{ $ticket['route_arrival_address'] }}</h3>
                                            <span class="text-muted">Сборный рейс: Москва - Витязево</span>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-lg-5 col-md-12">
                                            <div class="row">
                                                <div class="col-2">
                                                    <h6 class="mb-0">Отбытие</h6>
                                                    <h3 class="mb-0">{{ $ticket['depart_time'] }}</h3>
                                                    <span class="text-muted">{{ $ticket['route_depart_station'] }}</span>
                                                </div>
                                                <div class="col-2 d-flex align-items-center ml-4">
                                                    <img src="/images/info-arrow.svg" alt="">
                                                </div>
                                                <div class="col-2">
                                                    <h6 class="mb-0">Прибытие</h6>
                                                    <h3 class="mb-0">{{ $ticket['arrival_time'] }}</h3>
                                                    <span class="text-muted">{{ $ticket['route_arrival_station'] }}</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div style="width: 300px;height: 5px;background: #6E3FFF;border-radius: 12px;opacity: .2;margin-top: 30px;margin-bottom: 30px;"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="mt-1" style="text-transform: none;">Время в пути</h5>
                                                    <h3 style="color: #6E3FFF;font-weight: bolder;">{{ $durationDisplay }}</h3>
                                                    <h5 class="mt-1" style="text-transform: none;">Стоимость</h5>
                                                    <h3 class="mt-1" style="color: #6E3FFF;font-weight: bolder;">{{ $ticket['price'] }} руб.</h3>
                                                    <h5 class="mt-1" style="text-transform: none;">Количество пересадок</h5>
                                                    <h3 class="mt-1" style="color: #6E3FFF;font-weight: bolder;">{{ $ticket['condition_tours'] }}</h3>
                                                    <button class="by-btn">Перейти к оформлению</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-12">
                                            <div class="row row-cols-1 row-cols-md-2">
                                                <div class="col-lg-6">
                                                    <div class="card-racecm text-white" style="background: #ffa500;">
                                                        <a href="">
                                                            <i class="icofont-car-alt-1 car"></i>

                                                            <h6>Минимальная цена</h6>
                                                            <h6 class="info">1500 руб.</h6>

                                                            <h6>Самый быстрый рейс:</h6>
                                                            <h6 class="info">12 часов</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                                @switch($ticket['vehicle_type'])
                                                    @case('РЖД')
                                                <div class="col-lg-6">
                                                    <div class="card-racecm text-white" style="background: #F92853;">
                                                        <a href="">
                                                            <i class="icofont-train-line train"></i>

                                                            <h6>Минимальная цена</h6>
                                                            <h6 class="info">1500 руб.</h6>

                                                            <h6>Самый быстрый рейс:</h6>
                                                            <h6 class="info">12 часов</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                                @break
                                                @case('Авиа')
                                                <div class="col-lg-6">
                                                    <div class="card-racecm text-white" style="background: #6D3EFF;">
                                                        <a href="">
                                                            <i class="icofont-airplane-alt avia"></i>

                                                            <h6>Минимальная цена</h6>
                                                            <h6 class="info">1500 руб.</h6>

                                                            <h6>Самый быстрый рейс:</h6>
                                                            <h6 class="info">12 часов</h6>
                                                        </a>
                                                    </div>
                                                    @break
                                                    @endswitch
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-racecm text-white" style="background: #ffa500;">
                                                        <a href="">
                                                            <i class="icofont-car-alt-1 car"></i>

                                                            <h6>Минимальная цена</h6>
                                                            <h6 class="info">1500 руб.</h6>

                                                            <h6>Самый быстрый рейс:</h6>
                                                            <h6 class="info">12 часов</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="flt-dtls-box rt-mb-30">--}}
{{--                        <div class="upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center">--}}
{{--                            <div class="left">--}}
{{--                                <span>Москва (Домодедово)</span> <span><img src="images/all-img/shp-ln-1.png" alt="line image" draggable="false"></span> <span>Краснодар (Пашковский)</span>--}}
{{--                                <p>Ноябрь 12, 2018 | 1 взрослый </p>--}}
{{--                            </div><!-- /.left -->--}}
{{--                            <div class="right">--}}
{{--                                <a href="#" class="rt-btn rt-gradient3 rt-Bshadow-3  pill text-uppercase rt-sm2">Update</a>--}}
{{--                            </div><!-- /.right -->--}}
{{--                        </div><!-- /.upper-top-content -->--}}
{{--                        <div class="flight-list-box rt-mb-30">--}}
{{--                            <div class="col-lg-12 col-md-6">--}}
{{--                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">--}}
{{--                                    <div class="flight-logo">--}}
{{--                                        <img src="images/all-img/flt-logo-1.png" alt="flt logo" draggable="false">--}}
{{--                                    </div><!-- /.flight-logo -->--}}
{{--                                    <div class="pricing">--}}
{{--                                        <h5>Аэрофлот</h5>--}}
{{--                                        <p>TR978 | Airbus A320-212</p>--}}
{{--                                    </div><!-- /.pricing -->--}}
{{--                                    <div class="flight-time d-flex justify-content-between align-items-lg-center">--}}
{{--                                        <div class="left">--}}
{{--                                            <span class="d-block">10:55</span>--}}
{{--                                            <span class="d-block">HKG T2</span>--}}
{{--                                        </div><!-- /.left -->--}}
{{--                                        <div class="middle">--}}
{{--                                            <img src="images/all-img/time-shape-line.png" alt="time shape" draggable="false">--}}
{{--                                        </div><!-- /.middle -->--}}
{{--                                        <div class="right">--}}
{{--                                            <span class="d-block">15.00</span>--}}
{{--                                            <span class="d-block">SIN T2</span>--}}
{{--                                        </div><!-- /.rght -->--}}
{{--                                    </div><!-- /.flight-time -->--}}
{{--                                    <div class="flight-detils">--}}
{{--                                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>--}}
{{--                                        <span class="d-block"><a href="#collapseExample2" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Flight details <i class="icofont-simple-down"></i></a></span>--}}
{{--                                    </div><!-- /.flight-detils -->--}}
{{--                                    <div class="trip">--}}
{{--                                        <span class="d-blok">$610</span>--}}
{{--                                        <span class="d-block">Roundtrip</span>--}}
{{--                                    </div><!-- /.trip -->--}}
{{--                                    <div class="book-now">--}}
{{--                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>--}}
{{--                                    </div><!-- /.book-now -->--}}
{{--                                </div><!-- /.top-content -->--}}
{{--                                <div class="collapse bottom-content" id="collapseExample2">--}}
{{--                                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>--}}
{{--                                    <ul class="flight-timeline">--}}

{{--                                        <li>--}}
{{--                                            <span>Nov 12 10:55</span>--}}

{{--                                        </li>--}}
{{--                                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>--}}
{{--                                        <li>--}}
{{--                                            <span>Nov 12 15:00</span>--}}

{{--                                        </li>--}}
{{--                                        <li><span>SIN - Singapore Changi Airport T2</span></li>--}}
{{--                                    </ul>--}}
{{--                                </div><!-- /.bottom content -->--}}
{{--                            </div><!-- /.flight-box -->--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="flt-dtls-box rt-mb-30">--}}
{{--                        <div class="upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center">--}}
{{--                            <div class="left">--}}
{{--                                <span>Краснодар</span> <span><img src="images/all-img/shp-ln-1.png" alt="line image" draggable="false"></span> <span>Анапа (Автобус)</span>--}}
{{--                            </div><!-- /.left -->--}}
{{--                        </div><!-- /.upper-top-content -->--}}
{{--                        <div class="flight-list-box rt-mb-30">--}}
{{--                            <div class="col-lg-12 col-md-6">--}}
{{--                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">--}}
{{--                                    <div class="pricing">--}}
{{--                                        <h2 class="text-primary">G102</h2>--}}
{{--                                    </div><!-- /.pricing -->--}}
{{--                                    <div class="flight-time d-flex justify-content-between align-items-lg-center">--}}
{{--                                        <div class="left">--}}
{{--                                            <span class="d-block"> <i class="icofont-info-circle"></i> 06:26</span>--}}
{{--                                        </div><!-- /.left -->--}}
{{--                                    </div><!-- /.flight-time -->--}}
{{--                                    <div class="flight-detils">--}}
{{--                                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h 5m</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="flight-detils">--}}
{{--                                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->2an Class</span>--}}
{{--                                    </div><!-- /.flight-detils -->--}}
{{--                                    <div class="trip">--}}
{{--                                        <span class="d-blok">$25.33</span>--}}
{{--                                    </div><!-- /.trip -->--}}
{{--                                    <div class="book-now">--}}
{{--                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>--}}
{{--                                    </div><!-- /.book-now -->--}}
{{--                                </div><!-- /.top-content -->--}}
{{--                            </div><!-- /.flight-box -->--}}
{{--                        </div>--}}
{{--                    </div>--}}


                    <div class="flt-dtls-box rt-mb-30">
                        <div class="upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center">
                            <div class="left">
                                <span>Анапа</span> <span><img src="images/all-img/shp-ln-1.png" alt="line image" draggable="false"></span> <span>с. Витязево (Аренда Авто)</span>
                            </div><!-- /.left -->
                        </div><!-- /.upper-top-content -->
                        <div class="flight-list-box rt-mb-30">
                            <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                                <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                                    <img src="http://pixner.net/emigrar/emigrar/assets/images/all-img/car-2.png" alt="car image" class="rt-border-primary2">
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
                                    <span class="d-block text-primary f-size-24 rt-semiblod title-font">$275</span>
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
                        </div>
                    </div>



                    <div class="flight-list-box rt-mb-30 ask-for-login d-md-flex flex-md-row justify-content-md-between align-items-center pt-30">
                        <div class="left">
                            <h6 class="rt-strong">Уже есть аккаунт ? </h6>
                            <p>Войдите, чтобы заработать баллы и упростить бронирование!</p>
                        </div><!-- /.left -->
                        <div class="right">
                            <a href="#" class="link-text rt-strong f-size-14" data-toggle="modal" data-target="#rtmodal-1"> <i class="fa fa-user icon-share icon-gradinet-1 rt-circle mr-2"></i><!-- /.fa -->  Войдите</a>
                        </div><!-- /.left -->
                    </div><!-- /.flight-list-box -->

                    <div class="flight-list-box rt-mb-30 pt-30">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <h1 class=" text-capitalize rt-30  rt-semiblod">22</h1>
                                    <h4 class="">Место</h4>
                                </div>
                                <div class="col-4 text-nowrap text-truncate">
                                    <h3 class="font-weight-bold ">2000,00 RUB</h3>
                                </div>
                                <div class="col-2">
                                    <span class="d-block"><a class="flt-d-clic btn-lg text-white  pill rt-gradient text-uppercase" >Резерв </a></span>
                                    <p>До</p>
                                    <p>13.03.2020</p>
                                    <p>21:32</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <form action="" class="rt-form rt-line-form flight-lable">
                            <div class="row">
                                <div class="col-md-12 rt-mb-30 ">
                                    <label for="fst-name">Категория билета</label>
                                    <input type="text" class="form-control" id="fst-name" placeholder="Полный билет">
                                </div>
                                <div class="row ml-1">
                                    <div class="col-md-4 rt-mb-30 ">
                                        <label for="fst-name">Имя</label>
                                        <input type="text" class="form-control" id="fst-name" placeholder="Имя">
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-4 rt-mb-30">
                                        <label for="lst-name">Фамилия</label>
                                        <input type="text" class="form-control" id="lst-name" placeholder="Фамилия ">
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-4 rt-mb-30">
                                        <label for="lst-name">Отчество</label>
                                        <input type="text" class="form-control" id="lst-name" placeholder="Отчество ">
                                    </div><!-- /.col-md-6 -->
                                </div>
                                <div class="col-lg-6 rt-mb-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Пол</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2s" value="option2">
                                                <label class="form-check-label" for="inlineRadio2s">Женский</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2ss" value="option2">
                                                <label class="form-check-label" for="inlineRadio2ss">Мужской</label>
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 rt-mb-30">
                                    <label for="lst-name">Дата рождения</label>
                                    <input type="text" class="form-control" id="lst-name" placeholder="Дата рождения ">
                                </div><!-- /.col-md-6 -->
                                <div class="col-lg-6 rt-mb-30">
                                    <label for="select-1">Документ</label>
                                    <select id="select-1">
                                        <option value="1" disabled=""></option>
                                        <option value="2">Alaska</option>
                                        <option value="3">Bahamas</option>
                                        <option value="4">Bermuda</option>
                                        <option value="5">Canada</option>
                                        <option value="6">Caribbean</option>
                                        <option value="7">Europe</option>
                                        <option value="8">Hawaii</option>
                                    </select>
                                </div>
                                <div class="col-md-6 rt-mb-30">
                                    <label for="lst-name">Номер документа</label>
                                    <input type="text" class="form-control" id="lst-name" placeholder="Номер документа">
                                </div>
                                <div class="col-md-6 rt-mb-30">
                                    <label for="select-1">Гражданство</label>
                                    <select id="select-1">
                                        <option value="1">Тест</option>
                                        <option value="2">Alaska</option>
                                        <option value="3">Bahamas</option>
                                        <option value="4">Bermuda</option>
                                        <option value="5">Canada</option>
                                        <option value="6">Caribbean</option>
                                        <option value="7">Europe</option>
                                        <option value="8">Hawaii</option>
                                    </select>
                                </div>
                                <div class="col-md-6 rt-mb-30">
                                    <label >Телефон</label>
                                    <input type="number" class="form-control" placeholder="Номер телефона">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                        </div>
                                        <div class="col-5">
                                        </div>
                                        <div class="col-2">
                                            <a href="%" class=" rt-btn text-white  pill rt-gradient ">+ Пассажир</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </form>
                    </div>
                    <h3 class="rt-mb-30 pt-30">Оформление билета</h3>

                    <div class="flight-list-box rt-mb-30 pt-30">
                        <h6 class="text-333 rt-semiblod">Контактные данные пользователя</h6> <br>
                        <form action="" class="rt-form rt-line-form flight-lable">
                            <div class="row">
                                <div class="col-md-12 rt-mb-25">
                                    <label for="contact-name">Фамилия</label>
                                    <input type="text" placeholder="Фамилия" id="contact-name">

                                    <label for="mbl-name">Имя</label>
                                    <input type="text" placeholder="Имя" id="mbl-name">

                                    <label for="eml-name">Email</label>
                                    <input type="email" placeholder="Электронная почта" id="eml-name">

                                    <label for="eml-name">Телефон</label>
                                    <input type="tel" placeholder="Телефон" id="eml-name">
                                    <p class="mt-5">Пожалуйста, будьте внимательны при вводе адреса электронной почты.Электронные билеты будут отправлены на указанный адрес электронной почты и, если он указан не правильно, то письмо уйдет по другому адресу и билетами может воспользоваться другой человек</p>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="flight-list-box pt-30">
                        <h4 class="f-size-24 rt-strong rt-mb-20">Promo Code</h4>
                        <form action="" class="rt-form rt-line-form flight-lable">
                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <label>Add promo code</label>
                                    <input type="text" placeholder="Please enter promo code">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <a href="#" class="rt-btn rt-gradient3 pill text-uppercase ">Verify</a>
                                </div><!-- /.col-md- -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.flight-list-box -->
                </div>
                <div class="col-xl-3 mx-auto mt-5 mt-xl-0">
                    <div class="rt-sidebar-group">
                        <div class="rt-widget final-booking">
                            <ul>
                                <li class="clearfix">

                                    <span>Adult</span>
                                    <span class="float-right">$203.94 x 1</span>
                                </li>
                                <li class="clearfix">

                                    <span>Fare</span>
                                    <span class="float-right">$170</span>
                                </li>
                                <li class="clearfix">

                                    <span>taxex & Fees</span>
                                    <span class="float-right">$33.34</span>
                                </li>
                                <li class="clearfix sub-total">

                                    <span>Total</span>
                                    <span class="float-right"><small>$</small>203.94</span>
                                </li>

                            </ul>
                            <div class="text-center rt-mb-30">
                                <a href="#" class="rt-btn rt-gradient pill rt-sm">Continue Booking</a>
                            </div><!-- /.text-center -->
                            <p class="f-size-12 line-height-12">By proceeding, I acknowledge that I
                                have read and agree to Emigrar
                                <a href="#">Terms of Use</a> and <a href="#">Privacy Statement.</a></p>
                        </div><!-- /.rt-widget -->

                        <div class="plain-box pl-md-3">
                            <p class="rt-strong">Payment Method</p>
                            <div class="rt-footer-social">
                                <ul>
                                    <li><a href="#"><img src="assets/images/brands/card-1.png" alt="cardimage" draggable="false"></a></li>
                                    <li><a href="#"><img src="assets/images/brands/card-2.png" alt="cardimage" draggable="false"></a></li>
                                    <li><a href="#"><img src="assets/images/brands/card-3.png" alt="cardimage" draggable="false"></a></li>
                                    <li><a href="#"><img src="assets/images/brands/card-4.png" alt="cardimage" draggable="false"></a></li>
                                    <li><a href="#"><img src="assets/images/brands/card-5.png" alt="cardimage" draggable="false"></a></li>
                                </ul>
                            </div>
                        </div><!-- /.plain-box -->
                    </div><!-- /.rt-sidebar-group -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <style>
        .more-info-card .card-racecm {
            width: 200px;
            min-width: 200px;
            height: 170px;
            margin-bottom: 20px;
        }

        .more-info-card .card-racecm i {
            font-size: 20px;
        }

        .more-info-card .card-racecm h6 {
            margin-top: 0px !important;
        }

        .more-info-card .card-racecm h6.info {
            margin-bottom: 15px;
        }
    </style>
@endsection
