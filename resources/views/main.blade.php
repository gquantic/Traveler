@extends('layouts.main')

@section('page-title')
    Поиск билетов
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('/css/awesome_checkbox.css') }}">
    <section class="rt-banner-area">
        <div class="single-rt-banner rt-banner-height" style="background-image: url(images/all-img/banner01.png)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="rt-banner-content">
                            <h1 class="wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.5s">
                                Умный поиск <br>
                                билетов!
                            </h1>
                            <p class="wow fade-in-top">
                                Сервис поиска и покупки прямых и составных рейсов
                            </p>

                            <ul class="nav serachnavs wow fade-in-bottom" id="rtMultiTab" role="tablist" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                <li class="nav-item">
                                    <a class="nav-link active" id="first-tab" data-target="#rt-item_b_first" data-secondary="#rt-item_a_first"
                                       style="width: 150px;"
                                       data-toggle="tab" href="#first" role="tab" aria-controls="first-tab" aria-selected="false">
                                        <span>
                                            <i class="icofont-airplane"></i>
                                            <i class="icofont-car-alt-4"></i>
                                            <i class="icofont-train-line"></i>
                                            <i class="icofont-car-alt-4"></i>
                                        </span>
                                        <span>Составной</span>
                                    </a>
                                </li>
                                <!-- id="first-tab" data-target="#rt-item_b_first" data-secondary="#rt-item_a_first"
                                       data-toggle="tab" href="#first" role="tab" aria-controls="first-tab" aria-selected="false" -->
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="icofont-airplane"></i>
                                        <span>Авиа</span>
                                    </a>
                                </li>
                                <!-- id="second-tab" data-target="#rt-item_b_second" data-secondary="#rt-item_a_second"
                                       data-toggle="tab" href="#second" role="tab" aria-controls="second-tab" aria-selected="true" -->
                                <li class="nav-item">
                                    <a class="nav-link inactive">

                                        <i class="icofont-hotel"></i>
                                        <span>Отели</span>
                                    </a>
                                </li>
                                <!-- id="third-tab" data-target="#rt-item_b_thrid" data-secondary="#rt-item_a_third"
                                       data-toggle="tab" href="#third" role="tab" aria-controls="third-tab" aria-selected="false" -->
                                <li class="nav-item">
                                    <a class="nav-link inactive">
                                        <i class="icofont-car-alt-4"></i>
                                        <span>Авто</span>
                                    </a>
                                </li>
                                <!-- id="four-tab" data-target="#rt-item_b_four" data-secondary="#rt-item_a_four"
                                       data-toggle="tab" href="#four" role="tab" aria-controls="four-tab" aria-selected="false" -->
                                <li class="nav-item">
                                    <a class="nav-link inactive">
                                        <i class="icofont-train-line"></i>
                                        <span>ЖД</span>
                                    </a>
                                </li>
                                <!-- data-target="#rt-item_b_thrid" id="third-tab" data-secondary="#rt-item_a_third"
                                       data-toggle="tab" href="#third" role="tab" aria-controls="third-tab" aria-selected="false" -->
                                <li class="nav-item">
                                    <a class="nav-link inactive">
                                        <i class="icofont-car-alt-4"></i>
                                        <span>Такси</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="wow fade-in-bottom mt-4" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane show active" id="rt-item_a_first" role="tabpanel" aria-labelledby="rt-item_a_first">
                                        <form action="{{ route('make-road') }}" method="get" id="form-cards">
                                            @csrf
                                            <div class="rt-input-group effect-input hide dialog-item" id="question1">
                                                <div class="msg" style="width: 710px;padding-left: 85px;margin-left: -69px;">
                                                    Введите город отправления и желаете ли Вы получить расчет от двери до двери?
                                                </div>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <div class="single-input col-rt-in-12 mr-5 mt-2 d-flex align-items-center">
                                                        <div class="button_checkbox__block" style="margin-bottom: -16px;" id="awesome_checkbox">
                                                            <input type="hidden" name="checkbox" id="checkbox" value="no">
                                                            <div class="button_checkbox active" data-value="no">Нет</div>
                                                            <div class="slideThree">
                                                                <input type="checkbox" value="Yes" id="slideThree" name="check" checked="">
                                                                <label for="slideThree" class="slideThree_label">
                                                                    <span></span>
                                                                    <span></span>
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="button_checkbox" data-value="yes">Да</div>
                                                        </div>
                                                    </div>
                                                    <div class="single-input col-rt-in-12">
                                                        <input type="text" class="form-control" placeholder=""
                                                        name="from" id="from" onclick="roadMaker('from')">
                                                        <button type="button"><i class="icofont-location-arrow"></i></button>
                                                    </div>
                                                </div>
                                                
                                            </div>

{{--                                            <div class="d-flex align-items-center mt-4 effect-input hide" id="question2">--}}
{{--                                                <div class="single-input mr-3 d-flex justify-content-start" style="width: 30px;height: 30px;">--}}
{{--                                                    <label for="fastyes" class="d-flex align-items-center mr-3">--}}
{{--                                                        <input type="radio" name="fast_delivery" id="fastyes" value="yes">--}}
{{--                                                        <p class="mb-0 ml-2">Да</p>--}}
{{--                                                    </label>--}}
{{--                                                    <label for="fastno" class="d-flex align-items-center">--}}
{{--                                                        <input type="radio" name="fast_delivery" id="fastno" value="no">--}}
{{--                                                        <p class="mb-0 ml-2">Нет</p>--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="msg" style="margin-left: 40px;">--}}
{{--                                                    Желаете получить расчет от двери до двери?--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

                                            <div class="rt-input-group effect-input hide mt-2 dialog-item" id="question3">
                                                <div class="msg" id="msg1" style="margin-left: -41px;">
                                                    Введите адрес Вашего местонахождения
                                                </div>
                                                <div class="single-input col-rt-in-8" style="width: 400px;">
                                                    <input type="text" class="form-control" placeholder=""
                                                           name="from_detals">
                                                    <button type="button"><i class="icofont-location-arrow"></i></button>
                                                </div>
                                                <div class="msg effect-input hide mt-4" id="msg2" style="margin-left: -41px;">
                                                    Ок, отлично
                                                </div>
                                            </div>

                                            <div class="rt-input-group effect-input hide mt-2 dialog-item" id="question4">
                                                <div class="msg" id="msg" style="margin-left: -41px;">
                                                    Введите город пребытия
                                                </div>
                                                <div class="single-input  col-rt-in-8" style="width: 400px;">
                                                    <input type="text" class="form-control" placeholder=""
                                                           name="where" id="where" onclick="roadMaker('where')">
                                                    <button type="button"><i class="icofont-location-arrow"></i></button>
                                                </div>
                                            </div>

                                            <div class="rt-input-group effect-input hide mt-4 dialog-item" id="question5">
                                                <div class="msg" id="msg" style="margin-left: -41px;">
                                                    Когда вы хотите уехать?
                                                </div>
                                                <div class="single-input col-rt-in-8" style="width: 400px;">
                                                    <input type="date" class="form-control" placeholder=""
                                                           name="fromtime">
                                                </div>
                                            </div>

                                            <div class="single-input mt-4 effect-input hide dialog-item" id="question6">
                                                <div class="msg" style="margin-left: -41px;">
                                                    Хотите рассчитать с учётом обратной дороги?
                                                </div>
                                                <div class="single-input mr-3 d-flex justify-content-start" style="width: 100px;height: 30px;">
                                                    <label for="total_count_yes" class="d-flex align-items-center mr-3">
                                                        <input type="radio" name="total_count" id="total_count_yes" value="yes">
                                                        <p class="mb-0 ml-2">Да</p>
                                                    </label>
                                                    <label for="total_count_no" class="d-flex align-items-center">
                                                        <input type="radio" name="total_count" id="total_count_no" value="no">
                                                        <p class="mb-0 ml-2">Нет</p>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="rt-input-group effect-input hide mt-4 dialog-item" id="question7">
                                                <div class="msg" id="msg" style="margin-left: -41px;">
                                                    Когда вы хотите обратно?
                                                </div>
                                                <div class="single-input col-rt-in-8" style="width: 400px;">
                                                    <input type="date" class="form-control" placeholder=""
                                                           name="backtime">
                                                </div>
                                            </div>

                                            <div class="rt-input-group effect-input hide mt-4 dialog-item" id="question8">
                                                <div class="msg" id="msg" style="margin-left: -73px;width: 738px;padding-left: 90px;">
                                                     Отлично! Вся информация введена, для поиска билетов нажмите кнопку "Найти"
                                                </div>
                                            </div>

                                            <button style="transform: translateY(20px);height: 50px;width: 200px;font-size: 17px;line-height: 18px !important;"
                                                    class="effect-input rt-btn rt-gradient2 rt-rounded text-uppercase rt-Bshadow-1 hide" id="orderPay">
                                                Найти
                                            </button>
                                        </form><!-- ./ form -->
                                    </div>
                                    <div class="tab-pane  rtIncative" id="rt-item_a_second" role="tabpanel" aria-labelledby="rt-item_a_second">
                                        <!-- ./ form -->
                                    </div>
                                    <div class="tab-pane  rtIncative" id="rt-item_a_third" role="tabpanel" aria-labelledby="rt-item_a_third">
                                        <!-- ./ form -->
                                    </div>
                                    <div class="tab-pane  rtIncative" id="rt-item_a_four" role="tabpanel" aria-labelledby="rt-item_a_four">
                                        <!-- ./ form -->
                                    </div>
                                </div>
                            </div><!-- /.rt-banner-searchbox -->
                        </div><!-- end banner content -->
                    </div><!-- end column -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end single rt banner -->
    </section>


    <div class="counter-area info-selfcontent">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="media counter-box-1 align-items-center wow fadeInUp">
                        <img src="images/counter-icons/counter_iocn_1.png" alt="counter_iocn" draggable="false">
                        <div class="media-body">
                            <h5>Поисковых запросов</h5>
                            <h6><span class="counter">90,000</span><span>+</span></h6>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-md-6 col-12" >
                    <div class="media counter-box-1 align-items-center wow fadeInUp" data-wow-duration="1.5s">
                        <img src="images/counter-icons/counter_iocn_2.png" alt="counter_iocn" draggable="false">
                        <div class="media-body">
                            <h5>Перевозчиков</h5>
                            <h6><span class="counter">1,200</span></h6>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="media counter-box-1 align-items-center wow fadeInUp" data-wow-duration="2s">
                        <img src="images/counter-icons/counter_iocn_3.png" alt="counter_iocn" draggable="false">
                        <div class="media-body">
                            <h5> Довольных клиентов</h5>
                            <h6><span class="counter">80,000</span><span>+</span></h6>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

    <section class="emigr-services-area rtbgprefix-contain" style="background-image: url(/images/backgrounds/dotbg.png)">
        <div class="spacer-bottom"></div><!-- /.spacer-bottom -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <div class="rt-section-title-wrapper">
                        <h2 class="rt-section-title">
                            <span>почему выбирают нас?</span>
                            наши приемущества
                        </h2><!-- /.rt-section-title -->
                        <p>Наш уникальный сервис подбирет сложные и составные маршруты,
                            Вам не надо искать на разных сайтах билеты для пересадок, мы просчитаем Вам путь от адреса до адреса</p>
                    </div><!-- /.rt-section-title-wrapper- -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
            <div class="row">
                <div class="col-lg-4 col-md-6 mx-auto text-center">
                    <div class="services-box-1 wow fade-in-bottom animated" style="visibility: visible; animation-name: fade-in-bottom;">
                        <div class="services-thumb">
                            <img src="{{ asset('/images/service-icons/s_icon_1.png') }}" alt="" draggable="false">
                        </div><!-- /.services-thumb -->
                        <h4>Умный поиск</h4>
                        <p>Наша система сама подберает самые выгодные билеты и предлагает варианты расчета всего пути.</p>
                    </div><!-- /.services-box-1 -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-md-6 mx-auto text-center">
                    <div class="services-box-1 wow fade-in-bottom animated" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fade-in-bottom;">
                        <div class="services-thumb">
                            <img src="{{ asset('/images/service-icons/s_icon_2.png') }}" alt="" draggable="false">
                        </div><!-- /.services-thumb -->
                        <h4>Бронирование</h4>
                        <p>Все билеты стыковочного рейса оформляются и оплачиваются на нашем сайте в едином окне.</p>
                    </div><!-- /.services-box-1 -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-md-6 mx-auto text-center">
                    <div class="services-box-1 wow fade-in-bottom animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fade-in-bottom;">
                        <div class="services-thumb">
                            <img src="{{ asset('/images/service-icons/s_icon_3.png') }}" alt="" draggable="false">
                        </div><!-- /.services-thumb -->
                        <h4>Экономия до 50%</h4>
                        <p>Точное прогнозирование и планирование логистики может сэкономить до 50% затрат на весь транспортный путь.</p>
                    </div><!-- /.services-box-1 -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="spacer-bottom"></div><!-- /.spacer-bottm -->
    </section>

    <div class="spacer-top"></div>

    <section class="portfolio-area rt-section-padding rtbgprefix-full bg-hide-md gradinet-bg-md" style="background-image: url(/images/backgrounds/portfoliobg.png)">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 text-center mx-auto text-center">
                    <div class="rt-section-title-wrapper text-white">
                        <h2 class="rt-section-title">
                            <span>лучшие предложения от партнёров</span>
                            необычные экскурсии
                        </h2><!-- /.rt-section-title -->
                        <p>Наши популярные туры помогут вам найти путешествие, которое идеально подходит для Вас!</p>
                        <div class="exp-row exp-row_first multiple"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="spacer-top"></div>

    <section class="flight-dela-area" data-scrollax-parent="true">
        <div class="rt-shape-emenetns-1" style="background-image: url(/images/shape-elements/shape_1.png); transform: translateZ(0px) translateY(-137.456px);" data-scrollax="properties: { translateY: '340px' }"></div><!-- /.rt-shape-emenetns-1 -->
        <div class="rt-shape-emenetns-2" style="background-image: url(/images/shape-elements/shape-2.png); transform: translateZ(0px) translateX(56.5995px);" data-scrollax="properties: { translateX: '-140px' }"></div><!-- /.rt-shape-elemenets2 -->
        <div class="container">
            <div class="row">
                <div class="col-xl-10 mx-auto text-center">
                    <div class="rt-section-title-wrapper">
                        <h2 class="rt-section-title">
                            <span>выгодные билеты авиакомпаний</span>
                            предложения авиакомпаний
                        </h2><!-- /.rt-section-title -->
                        <p>
                            Получите вдохновение, найдите лучшие предложения и начните незабываемое путешествие. Ищете лучшие предложения на авиабилеты для вашей следующей поездки?
                        </p>
                    </div><!-- /.rt-section-title-wrapper -->
                </div><!-- /.col-lg-9 -->
            </div><!-- /.row -->
            <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
            <div class="row">
                <div class="col-xl-8 col-lg-10">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="flight-box wow fade-in-bottom animated" data-wow-duration="1s" data-wow-delay=".02s" href="#" style="background-image: url(/images/flights/flt_1.jpg); visibility: visible; animation-duration: 1s; animation-delay: 0.02s; animation-name: fade-in-bottom;">
                                <div class="rt-inner-overlay color_1"></div><!-- /.rt-overlay -->
                                <div class="trip-to">
                                <span>
                                    Краснодар
                                </span>
                                    <span>
                                    Москва
                                </span>
                                </div><!-- /.trip-to -->
                                <div class="trip-form">
                                    <span>27 предложений</span>
                                    <span>от 2590Р</span>
                                </div><!-- /.trip-form -->
                            </a><!-- /.flight-box -->
                        </div><!-- /.col-lg-4 -->
                        <div class=" col-md-6">
                            <a class="flight-box wow fade-in-bottom animated" href="#" data-wow-duration="1.3s" data-wow-delay=".04s" style="background-image: url(/images/flights/flt_2.jpg); visibility: visible; animation-duration: 1.3s; animation-delay: 0.04s; animation-name: fade-in-bottom;">
                                <div class="rt-inner-overlay color_2"></div><!-- /.rt-overlay -->
                                <div class="trip-to">
                                <span>
                                    Волгоград
                                </span>
                                    <span>
                                    санкт-петербург
                                </span>
                                </div><!-- /.trip-to -->
                                <div class="trip-form">
                                    <span>12 предложений</span>
                                    <span>от 4570Р</span>
                                </div><!-- /.trip-form -->
                            </a><!-- /.flight-box -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-md-6">
                            <a class="flight-box wow fade-in-bottom animated" data-wow-duration="1.6s" data-wow-delay=".06s" href="#" style="background-image: url(/images/flights/flt_3.jpg); visibility: visible; animation-duration: 1.6s; animation-delay: 0.06s; animation-name: fade-in-bottom;">
                                <div class="rt-inner-overlay color_3"></div><!-- /.rt-overlay -->
                                <div class="trip-to">
                                <span>
                                    Сочи
                                </span>
                                    <span>
                                    Барнаул
                                </span>
                                </div><!-- /.trip-to -->
                                <div class="trip-form">
                                    <span>23 предложения</span>
                                    <span>от 4570Р</span>
                                </div><!-- /.trip-form -->
                            </a><!-- /.flight-box -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-md-6">
                            <a class="flight-box wow fade-in-bottom animated" data-wow-duration="1.9s" data-wow-delay=".08s" href="#" style="background-image: url(/images/flights/flt_4.jpg); visibility: visible; animation-duration: 1.9s; animation-delay: 0.08s; animation-name: fade-in-bottom;">
                                <div class="rt-inner-overlay color_4"></div><!-- /.rt-overlay -->
                                <div class="trip-to">
                                <span>
                                    Краснодар
                                </span>
                                    <span>
                                    Калининград
                                </span>
                                </div><!-- /.trip-to -->
                                <div class="trip-form">
                                    <span>16 предложений</span>
                                    <span>от 4590Р</span>
                                </div><!-- /.trip-form -->
                            </a><!-- /.flight-box -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-md-6">
                            <a class="flight-box wow fade-in-bottom animated" data-wow-duration="2.2s" data-wow-delay=".010s" href="#" style="background-image: url(/images/flights/flt_5.jpg); visibility: visible; animation-duration: 2.2s; animation-delay: 0.01s; animation-name: fade-in-bottom;">
                                <div class="rt-inner-overlay color_5"></div><!-- /.rt-overlay -->
                                <div class="trip-to">
                                <span>
                                    Анапа
                                </span>
                                    <span>
                                    Саратов
                                </span>
                                </div><!-- /.trip-to -->
                                <div class="trip-form">
                                    <span>9 предложений</span>
                                    <span>от 3580Р</span>
                                </div><!-- /.trip-form -->
                            </a><!-- /.flight-box -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-md-6">
                            <a class="flight-box wow fade-in-bottom animated" data-wow-duration="2.6s" data-wow-delay=".12s" href="#" style="background-image: url(/images/flights/flt_6.jpg); visibility: visible; animation-duration: 2.6s; animation-delay: 0.12s; animation-name: fade-in-bottom;">
                                <div class="rt-inner-overlay color_6"></div><!-- /.rt-overlay -->
                                <div class="trip-to">
                                <span>
                                    Самара
                                </span>
                                    <span>
                                    Владивосток
                                </span>
                                </div><!-- /.trip-to -->
                                <div class="trip-form">
                                    <span>7 предложений</span>
                                    <span>от 14570Р</span>
                                </div><!-- /.trip-form -->
                            </a><!-- /.flight-box -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-12 text-center mt-4">
                            <a href="#" class="rt-btn rt-gradient rt-sm text-uppercase rt-rounded rt-Bshadow-2">Посмотреть еще</a>
                            <!-- /.rt-btn -->
                        </div><!-- /.col-12 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <div class="spacer-top"></div>

    <section class="rt-cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-box-1 d-flex flex-lg-row flex-column align-items-center text-center text-lg-left justify-content-lg-between rtbgprefix-cover text-white justify-content-center" style="background-image: url(/images/backgrounds/cat_1.jpg)">
                        <div class="left-column">
                            <h4 class="wow fade-in-top animated" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fade-in-top;">
                                У Вас сложный маршрут? <span>Мы готовы помочь и сделать выгодное предложение</span>
                            </h4>
                            <p class="wow fade-in-bottom animated" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fade-in-bottom;">
                                Отправьте нам запрос и наши специалисты свяжуться с Вами в ближаейшее время!
                            </p>
                        </div><!-- /.left-column -->
                        <div class="right-column">
                            <a href="#" class="rt-btn rt-gradient rt-sm text-uppercase rt-rounded rt-Bshadow-2 wow fade-in-left animated" data-wow-duration="1s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fade-in-left;">Написать нам</a><!-- /.rt-btn -->
                        </div><!-- /.right-column -->
                    </div><!-- /.inner-content -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <div class="spacer-top"></div>

    <section class="app-area rtbgprefix-cover" style="background-image: url(/images/backgrounds/app_bg.png)" data-scrollax-parent="true">
        <div class="rt-shape-elements-1 rtbgprefix-contain" style="background-image: url(/images/shape-elements/shape-3.png); transform: translateZ(0px) translateY(-18.7028px);" data-scrollax="properties: { translateY: '50px' }"></div><!-- /.rt-shape-elements-1 -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 text-center text-lg-left">
                    <img src="/images/all-img/app-mbl.png" alt="mockup image" draggable="false" class="wow fade-in-left animated" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fade-in-left;">
                </div><!-- /.col-lg-5 -->
                <div class="col-lg-7">
                    <div class="rt-section-title-wrapper">
                        <div class="wow fade-in-bottom animated" data-wow-duration="1s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fade-in-bottom;">
                            <h2 class="rt-section-title">
                                <span>поиск еще удобнее.</span>
                                Скоро приложение
                            </h2><!-- /.rt-section-title -->
                            <p>
                                Все ваши планы путешествий в одном месте. Вы получите доступ к бронированиям, картам и многому другому на вашем любимом устройстве! Просматривайте трендовые направления. Откройте для себя популярные поездки. Познайте мир. Найдите или создайте свое идеальное путешествие. Создайте незабываемые воспоминания. Будьте в курсе активных поездок.

                            </p>
                            <br>
                            <p>
                                Приложение EcuTravel станет удобным попутчиком для каждого из нашего постоянно растущего сообщества страстных путешественников.
                            </p>
                        </div><!-- /.wow -->
                        <div class="rt-button-group mt-5 wow fade-in-bottom animated" data-wow-duration="1s" data-wow-delay="0.9s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.9s; animation-name: fade-in-bottom;">
                            <a href="#" class="rt-btn rt-app-parimary rt-rounded">
                                <div class="app-thumb">
                                    <i class="fab fa-google-play"></i>
                                </div><!-- /.app-thumb -->
                                <div class="app-text">
                                    <span>Доступно</span>
                                    <span>Appstore</span>
                                </div><!-- /.app-text -->
                            </a>
                            <a href="#" class="rt-btn rt-app-secondary rt-rounded">
                                <div class="app-thumb">
                                    <i class="fab fa-apple"></i>
                                </div><!-- /.app-thumb -->
                                <div class="app-text">
                                    <span>Доступно</span>
                                    <span>Appstore</span>
                                </div><!-- /.app-text -->
                            </a>
                        </div><!-- /.rt-button-group -->
                    </div><!-- /.rt-section-title-wrapper -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <div class="play-video rtbgprefix-full bg-hide-md" style="background-image: url(/images/backgrounds/videobg.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="play-video-box rtbgprefix-cover" style="background-image: url(/images/backgrounds/play-video-bg.png)">
                        <a href="https://vimeo.com/310740632" class="rt-btn rt-video-light playVideo"></a>
                    </div><!-- /.play-video-box -->
                </div><!-- /.col-lg-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

    <script src="{{ asset('/js/awesome_checkbox.js') }}"></script>
@endsection
