@extends('layouts.main')

@section('page-title')
    Поиск билетов
@endsection

@section('content')
    <section class="rt-banner-area">
        <div class="single-rt-banner rt-banner-height" style="background-image: url(images/all-img/banner01.png)">
            <div class="container">
                <div class="row  rt-banner-height align-items-center">
                    <div class="col-lg-9">
                        <div class="rt-banner-content">
                            <h1 class="wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.5s">
                                Умный поиск <br>
                                Рейсов и билетов!
                            </h1>
                            <p class="wow fade-in-top">
                                Мы найдём для Вас самые выгодные варианты <br> поездки от двери до двери
                            </p>

                            <ul class="nav serachnavs wow fade-in-bottom" id="rtMultiTab" role="tablist" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                <li class="nav-item">
                                    <a class="nav-link active" id="first-tab" data-target="#rt-item_b_first" data-secondary="#rt-item_a_first"
                                       style="width: 150px;"
                                       data-toggle="tab" href="#first" role="tab" aria-controls="first-tab" aria-selected="false">
                                        <i class="icofont-airplane"></i>
                                        <span>Составные рейсы</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="first-tab" data-target="#rt-item_b_first" data-secondary="#rt-item_a_first"
                                       data-toggle="tab" href="#first" role="tab" aria-controls="first-tab" aria-selected="false">
                                        <i class="icofont-airplane"></i>
                                        <span>Самолеты</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link inactive" id="second-tab" data-target="#rt-item_b_second" data-secondary="#rt-item_a_second"
                                       data-toggle="tab" href="#second" role="tab" aria-controls="second-tab" aria-selected="true">

                                        <i class="icofont-hotel"></i>
                                        <span>Отели</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link inactive" id="third-tab" data-target="#rt-item_b_thrid" data-secondary="#rt-item_a_third"
                                       data-toggle="tab" href="#third" role="tab" aria-controls="third-tab" aria-selected="false">
                                        <i class="icofont-car-alt-4"></i>
                                        <span>Такси</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link inactive" id="four-tab" data-target="#rt-item_b_four" data-secondary="#rt-item_a_four"
                                       data-toggle="tab" href="#four" role="tab" aria-controls="four-tab" aria-selected="false">
                                        <i class="icofont-train-line"></i>
                                        <span>Автобусы</span>
                                    </a>
                                </li>
                            </ul>

                            <div class=" wow fade-in-bottom mt-4" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane show active" id="rt-item_a_first" role="tabpanel" aria-labelledby="rt-item_a_first">
                                        <form action="{{ route('make-road') }}" method="post" id="form-cards">
                                        @csrf<!-- /.radio-group -->
                                            <div class="rt-input-group d-flex align-items-center effect-input hide" id="question1">
                                                <div class="single-input  col-rt-in-8" style="width: 400px;">
                                                    <input type="text" class="form-control" placeholder=""
                                                           name="from">
                                                </div>
                                                <div class="msg">
                                                    Введите город отправления
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center mt-4 effect-input hide" id="question2">
                                                <div class="single-input mr-3 d-flex justify-content-start" style="width: 30px;height: 30px;">
                                                    <label for="fastyes" class="d-flex align-items-center mr-3">
                                                        <input type="radio" name="fast_delivery" id="fastyes" value="yes">
                                                        <p class="mb-0 ml-2">Да</p>
                                                    </label>
                                                    <label for="fastno" class="d-flex align-items-center">
                                                        <input type="radio" name="fast_delivery" id="fastno" value="no">
                                                        <p class="mb-0 ml-2">Нет</p>
                                                    </label>
                                                </div>
                                                <div class="msg" style="margin-left: 40px;">
                                                    Желаете получить расчет от двери до двери?
                                                </div>
                                            </div>

                                            <div class="rt-input-group d-flex align-items-center effect-input hide mt-4" id="question3">
                                                <div class="single-input  col-rt-in-8" style="width: 400px;">
                                                    <input type="text" class="form-control" placeholder=""
                                                           name="from">
                                                </div>
                                                <div class="msg" id="msg">
                                                    Введите адрес Вашего местонахождения
                                                </div>

                                                <div class="msg effect-input hide mt-4" id="msg2">
                                                    Ок, отлично
                                                </div>
                                            </div>

                                            <div class="rt-input-group d-flex align-items-center effect-input hide mt-4" id="question4">
                                                <div class="single-input  col-rt-in-8" style="width: 400px;">
                                                    <input type="text" class="form-control" placeholder=""
                                                           name="where">
                                                </div>
                                                <div class="msg" id="msg">
                                                    Введите город и адрес пребытия
                                                </div>
                                            </div>

                                            <div class="rt-input-group d-flex align-items-center effect-input hide mt-4" id="question5">
                                                <div class="single-input  col-rt-in-8" style="width: 400px;">
                                                    <input type="date" class="form-control" placeholder=""
                                                           name="from">
                                                </div>
                                                <div class="msg" id="msg">
                                                    Когда вы хотите уехать?
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center mt-4 effect-input hide" id="question6">
                                                <div class="single-input mr-3 d-flex justify-content-start" style="width: 30px;height: 30px;">
                                                    <label for="total_count_yes" class="d-flex align-items-center mr-3">
                                                        <input type="radio" name="total_count" id="total_count_yes" value="yes">
                                                        <p class="mb-0 ml-2">Да</p>
                                                    </label>
                                                    <label for="total_count_no" class="d-flex align-items-center">
                                                        <input type="radio" name="total_count" id="total_count_no" value="no">
                                                        <p class="mb-0 ml-2">Нет</p>
                                                    </label>
                                                </div>
                                                <div class="msg" style="margin-left: 40px;">
                                                    Хотите рассчитать с учётом обратной дороги
                                                </div>

                                                <button style="transform: translateY(100px);height: 50px;width: 200px;font-size: 17px;" class="btn btn-primary">Заказать</button>
                                            </div>
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

<div class="counter-area">
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
                        <h6><span class="counter">2,00</span></h6>
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
@endsection
