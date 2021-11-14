@extends('layouts.main')

@section('page-title')
    О сервисе
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
                    <h3>Сложное - Легко!</h3>


                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div>

    <section class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title"><span>Как это работает?</span>
                    Быстрый поиск</h2>
                    <p>Простой и моментальный подбор сложных и составных маршрутов.</p>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-8 -->
        </div><!-- ./row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row align-items-center">
            <div class="col-lg-6 mb-0 mb-md-4">
                <div class="rt-icon rt-hw-45 rt-circle icon-glow-1 icon-gradinet-1 f-size-20">
                    01
                </div><!-- /.rt-icon -->
                <img src="/images/all-img/work-img-1.png" alt="work image" draggable="false">
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-5 offset-lg-1 mb-0 mb-md-4">
                <div class="rt-icon rt-hw-65 f-size-45  rt-dotted-primary text-gradinet-primary rt-mb-30">
                        <i class="icofont-hand-drag1"></i>
                </div><!-- /.rt-icon -->
                <h4 class="f-size-24 rt-semiblod rt-mb-20">Определите точки А и Б</h4>
                <div class="text-424">
                    <p class="f-size-14 ">Наша умная система незаменимая вещь для нестандартных путешествий.
                        Введите в поисковой строке адрес точки Вашего выезда и адрес пребытия, город, улицу, дом....
                        Получите полный расчет выгодного предложения Вашего маршрута подобранного агрегатором EcuTravel.
                        </p>
                </div><!-- /.text-424 -->
               
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row align-items-center">
            <div class="col-lg-5 mb-0 mb-md-4">
                <div class="rt-icon rt-hw-65 f-size-45  rt-dotted-primary text-gradinet-primary rt-mb-30">
                    <i class="icofont-hand-drag1"></i>
                </div><!-- /.rt-icon -->
                <h4 class="f-size-24 rt-semiblod rt-mb-20">Оформление в "одном окне"</h4>
                <div class="text-424">
                    <p class="f-size-14 ">Оформления и покупка билета производится на нашем сайте  .
                    Вам нужно выбрать наиболее подходящий стыковочный маршрут, предложенный нашим агрегатором
                    далее перейти на страницу оформления, ввести один раз данные пассажиров и получить билеты на все виды транспорта 
                    в выбранном составном рейсе
                    </p>
                </div><!-- /.text-424 -->
            
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 offset-lg-1">
                <div class="rt-icon rt-hw-45 rt-circle icon-glow-1 icon-gradinet-1 f-size-20">
                    02
                </div><!-- /.rt-icon -->
                <img src="/images/all-img/work-img-2.png" alt="work image" draggable="false">
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row align-items-center">
            <div class="col-lg-6 mb-0 mb-md-4">
                <div class="rt-icon rt-hw-45 rt-circle icon-glow-1 icon-gradinet-1 f-size-20">
                    03
                </div><!-- /.rt-icon -->
                <img src="/images/all-img/work-img-3.png" alt="work image" draggable="false">
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-5 offset-lg-1">
                <div class="rt-icon rt-hw-65 f-size-45  rt-dotted-primary text-gradinet-primary rt-mb-30">
                    <i class="icofont-runner-alt-1"></i>
                </div><!-- /.rt-icon -->
                <h4 class="f-size-24 rt-semiblod rt-mb-20">В добрый путь! </h4>
                <div class="text-424">
                    <p class="f-size-14 ">Наша интелектуальная система подберет стыковочные рейсы настолько удобно, что
                    Вам не надо будет беспокоиться о том, где и сколько времени неообходимо, чтобы переждать время между пересадками. 
                    Вы получите максимально бесшовный составной маршрут, и соответственно сэкономите и деньги и время
                    </p>
                </div><!-- /.text-424 -->
        
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- ./ copntainer -->
</section>

<div class="bg-gradient-primary call-toaction-fullwidth rt-pt-100 rt-pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-lg-9 mx-auto">
                            <div class="rt-section-title-wrapper text-white text-center">
                                <h2 class="rt-section-title">
                                    <span>Экономьте деньги, Экономьте время</span>
                                    Давайте начнем!
                                </h2><!-- /.rt-section-title -->
                                <p>Для удобсва предлагаем пройти регистрацию и в личном кабинете попробовать всю силу нашего сервиса в деле.
                                    </p>
                                <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                                <a href="#" class="rt-btn rt-light pill rt-xl rt-Bshadow-1 text-uppercase">Личный кабинет</a>
                            </div><!-- /.rt-section-title-wrapper- -->
                        </div><!-- /.col-lg-7 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

<div class="spacer-top"></div>

<section class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title"><span>Это безопасно!</span>
                    
                    Защита ваших данных</h2>
                    <p>Мы работаем над защитой вашей личной информации, используя соответствующие и общепринятые меры предосторожности
                   </p>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-8 -->
        </div><!-- ./row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row align-items-center">
            <div class="col-lg-5 mb-0 mb-md-4">
                <div class="icon-thumb rt-mb-30">
                    <img src="/images/all-img/iconx-1.png" alt="icon-image" draggable="false">
                </div><!-- /.icon-thumb --> 
                <h4 class="f-size-24 rt-semiblod rt-mb-20">Персональная поддержка</h4>
                <div class="text-424">
                    <ul class="rt-list">
                        <li><span class="rt-pr-4"><i class="icofont-check-circled"></i></span> В случае возникновения спорных вопросов наш сервис 
                            обеспечит персональную поддержку.
                           </li>
                        <li><span class="rt-pr-4"><i class="icofont-check-circled"></i></span>Не разберетесь с пересадками? Наш менеджер всегда рядом,
                            и доступен 24/7.</li>
                    
                    </ul>
                </div><!-- /.text-424 -->
                <a href="#" class="rt-btn rt-gradient rt-rounded text-uppercase rt-sm rt-mt-25">Связаться с нами</a>
        
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 offset-lg-1">
                <img src="/images/all-img/work-img-4.png" alt="work image" draggable="false">
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row align-items-center">
            <div class="col-lg-6 mb-0 mb-md-4">
               
                <img src="/images/all-img/work-img-5.png" alt="work image" draggable="false">
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-5 offset-lg-1">
                <div class="icon-thumb rt-mb-30">
                    <img src="/images/all-img/iconx-2.png" alt="icon-image" draggable="false">
                </div><!-- /.icon-thumb -->
                <h4 class="f-size-24 rt-semiblod rt-mb-20">Защита на всём пути</h4>
                <div class="text-424">
                    <ul class="rt-list">
                        <li><span class="rt-pr-4"><i class="icofont-check-circled"></i></span> Мы работаем только с проверенными перевозчиками и компаниями, что обеспечивает гарантию
                        от мошенничества.</li>
                       <li><span class="rt-pr-4"><i class="icofont-check-circled"></i></span>EcuTravel возмести ущерб и вернет стоимость затраченных средств на билет в случае непредвиденных обстоятельств.</li>
                      
                      
                    </ul>
                </div><!-- /.text-424 -->
                <a href="#" class="rt-btn rt-gradient rt-rounded text-uppercase rt-sm rt-mt-25">Подробнее</a>

            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        
        
    </div><!-- ./ copntainer -->
</section>
@endsection