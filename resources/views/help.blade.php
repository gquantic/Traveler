@extends('layouts.main')

@section('page-title')
    Справочный Центр
@endsection

@section('header-class')
white-menu
@endsection

@php $logo = "white"; @endphp

@section('content')
<div class="rt-breadcump rt-breadcump-height">
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(/images/backgrounds/bredcump.png)">
    </div><!-- /.rt-page-bg -->
    <div class="container">
        <div class="row rt-breadcump-height">
            <div class="col-12">
                <div class="breadcrumbs-content">
                    <h3>Справочный центр</h3>
                    <div class="breadcrumbs">


                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

<section class="works-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 text-center mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>добро пожаловать в наш</span>
                        Справочный центр
                    </h2><!-- /.rt-section-title -->
                    <p>Мы готовы помогать Вам 24/7, и создали несколько уровней системы поддержки и помощи для Вас.</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom animated" style="visibility: visible; animation-name: fade-in-bottom;">
                    <div class="services-thumb">
                        <img src="images/all-img/help-icon-1.png" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>Account менеджер</h4>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom animated" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fade-in-bottom;">
                    <div class="services-thumb">
                        <img src="images/all-img/help-icon-2.png" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>FAQ</h4>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom animated" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fade-in-bottom;">
                    <div class="services-thumb">
                        <img src="images/all-img/help-icon-3.png" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>Колл центр</h4>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fade-in-bottom;">
                    <div class="services-thumb">
                        <img src="images/all-img/help-icon-4.png" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>Чат</h4>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<div class="spacer-bottom"></div>

<section class="caltoaction-4 rt-dim-light rt-pt-100 rt-pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="f-size-40 rt-semibold rt-mb-40 f-size-md-32 f-size-xs-26">Нужна индивидуальная помощь? Отправьте запрос и мы свяжемся с Вами"</h4>
                <a href="#" class="rt-btn rt-gradient rt-rounded rt-sm text-uppercase">Отправить</a>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<div class="spacer-top"></div>

<section class="about-area2">
    <div class="rt-design-elmnts  rtbgprefix-contain" style="background-image: url(images/all-img/faq-img.png)">
    </div><!-- /.rt-design-elmnts -->
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div id="accordion">
                    <div class="card wow fade-in-bottom animated" style="visibility: visible; animation-name: fade-in-bottom;">
                        <div class="card-header card-primary" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="d-inline-block f-size-18 rt-hw-40 bg-gradient-primary rt-circle rt-mr-10 text-center text-white"><i class="icofont-question"></i></span>Какие виды транспорта доступы для составных рейсов?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                В настоящее время у нас доступны Авиа, Жд, Автобусы, Водный транспорт, Аэроэкспресс, Такси, Трансферы, Аренда авто.
                                Все эти виды транспорта позволяют собрать практически бесшовный составной маршрут.

                            </div>
                        </div>
                    </div><!-- end single accrodain -->
                    <div class="card wow fade-in-bottom animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1s; animation-name: fade-in-bottom;">
                        <div class="card-header card-primary" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="d-inline-block f-size-18 rt-hw-40 bg-gradient-primary rt-circle rt-mr-10 text-center text-white"><i class="icofont-question"></i></span> Почему оформлять и покупать билеты у Вас выгодней ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Наша интелектуальная система выдает выгодные предложения за счет более точного прогнозирования и планирования логистики, которая в затратах даёт экономию до 50%

                            </div>
                        </div>
                    </div><!-- end single accrodain -->
                    <div class="card wow fade-in-bottom animated" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fade-in-bottom;">
                        <div class="card-header card-primary" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="d-inline-block f-size-18 rt-hw-40 bg-gradient-primary rt-circle rt-mr-10 text-center text-white"><i class="icofont-question"></i></span> Билеты покупаются на сайтах у каждого перевозчика?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Нет, все билеты составного маршрута оформляются и оплачиваютчся на нашем сайте.

                            </div>
                        </div>
                    </div><!-- end single accrodian -->
                    <div class="card wow fade-in-bottom animated" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fade-in-bottom;">
                        <div class="card-header card-primary" id="headingThree2">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                    <span class="d-inline-block f-size-18 rt-hw-40 bg-gradient-primary rt-circle rt-mr-10 text-center text-white"><i class="icofont-question"></i></span> Как можно вернуть билеты и отказатьсся от всего маршрута?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2" data-parent="#accordion">
                            <div class="card-body">
                                Наш сервис позволяет отказаться и вернуть купленные билеты с моментальным получением денежных средств на баланс 
                                в личном кабинете,
                                или на банковскую карту с которой производилась оплата заказа (в случае получения денег на банковскую карту срок зачисления зависит от банка выпустевшего Вашу карту).
                            </div>
                        </div>
                    </div><!-- end single accrodian -->
                    <div class="card wow fade-in-bottom animated" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fade-in-bottom;">
                        <div class="card-header card-primary" id="headingThree21">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree21" aria-expanded="false" aria-controls="collapseThree21">
                                    <span class="d-inline-block f-size-18 rt-hw-40 bg-gradient-primary rt-circle rt-mr-10 text-center text-white"><i class="icofont-question"></i></span> Можно ли отказаться от части билетов?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree21" class="collapse" aria-labelledby="headingThree21" data-parent="#accordion">
                            <div class="card-body">
                                Да, Вы можете вернуть стоимость билетов как по всему маршруту Вашего составного рейса, так и отказаться от одного из билетов 
                                Вашего маршрута.

                            </div>
                        </div>
                    </div><!-- end single accrodian -->

                </div><!-- end accrodian group -->


            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>


@endsection