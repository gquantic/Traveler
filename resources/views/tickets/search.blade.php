@extends('layouts.main')

@section('page-title')
    Найденные билеты
@endsection

@section('content')
    <div class="rt-breadcump rt-breadcump-height with-logn-height">
        <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(images/backgrounds/bredcump.png)">
        </div><!-- /.rt-page-bg -->
        <div class="container">
            <div class="row rt-breadcump-height with-logn-height">
                <div class="col-12">
                    <div class="breadcrumbs-content">
                        <h3>Flight</h3>
                        <div class="breadcrumbs">
                            <span class="divider"><i class="icofont-home"></i></span>
                            <a href="#" title="Home">Home</a>
                            <span class="divider"><i class="icofont-simple-right"></i></span>
                            Найденные билеты
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.breadcrumbs-content -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="bredcump-search">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="rt-banner-searchbox flight-search wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active" id="rt-item_a_first" role="tabpanel" aria-labelledby="rt-item_a_first">
                                    <form action="#">
                                        <div class="rt-radio-group">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                                       class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1">В одну сторону</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="customRadioInline2"
                                                       class="custom-control-input">
                                                <label class="custom-control-label"
                                                       for="customRadioInline2">Поездка в оба конца</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline3" name="customRadioInline3"
                                                       class="custom-control-input">
                                                <label class="custom-control-label"
                                                       for="customRadioInline3">Многогородской</label>
                                            </div>
                                            <div class="dropdown form-check-inline rt-searchlink mr-md-5">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    1 взрослый
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#">Room one</a>
                                                    <a class="dropdown-item" href="#">Room two</a>
                                                    <a class="dropdown-item" href="#">Room three</a>
                                                </div>
                                            </div><!-- ./dropdown -->
                                            <div class="dropdown form-check-inline rt-searchlink">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Эконом
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                    <a class="dropdown-item" href="#">Room one</a>
                                                    <a class="dropdown-item" href="#">Room two</a>
                                                    <a class="dropdown-item" href="#">Room three</a>
                                                </div>
                                            </div><!-- ./dropdown -->
                                        </div><!-- /.radio-group -->
                                        <div class="rt-input-group">
                                            <div class="single-input  col-rt-in-3">
                                                <select class="rt-selectactive banner-select" name="Откуда"
                                                        style="width: 100%">
                                                    <option value="1">Октуда</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                                <span class="input-iconbadge"><img
                                                        src="{{asset('images/icons-image/s_icon_1.png')}}" alt=""
                                                        draggable="false"></span>
                                            </div><!-- /.single-input -->
                                            <div class="single-input  col-rt-in-3">
                                                <select class="rt-selectactive banner-select" name="Куда" style="width: 100%">
                                                    <option value="1">Куда</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                                <span class="input-iconbadge"><img
                                                        src="{{asset('images/icons-image/s_icon_2.png')}}" alt=""
                                                        draggable="false"></span>
                                            </div><!-- /.single-input -->
                                            <div class="single-input  col-rt-in-3">
                                                <input type="text" class="form-control rt-date-picker has-icon"
                                                       placeholder="Когда">
                                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                            </div><!-- /.single-input -->
                                            <div class="single-input  col-rt-in-3">
                                                <input type="text" class="form-control rt-date-picker has-icon"
                                                       placeholder="Обратно">
                                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                            </div><!-- /.single-input -->
                                            <div class="single-input  col-rt-in-1">
                                                <button type="submit" style="width: 100px;margin: 0px;margin-top: -25px !important;margin-right: -69px !important;">
                                                    <i class="icofont-search" style="font-size: 27px;"></i>
                                                </button>
                                            </div><!-- /.single-input -->
                                        </div><!-- /.rt-input-group -->
                                    </form><!-- ./ form -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-lg-10 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </div><!-- /.rt-bredcump -->

    <div class="spacer-bottom"></div><!-- /.spacer-bottom -->
    <section class="content-area"F>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="rt-BototmTab">
                        <div class="tab-pane show active fade-in-bottom" id="rt-item_b_first" role="tabpanel" aria-labelledby="rt-item_b_first">
                            <div class="row">
                                <div class="col-12 mb-5">
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
                                        <li class="nav-item ">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#avia" role="tab" aria-controls="profile" aria-selected="false"><i class="icofont-airplane-alt avia "></i> Авиа</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#trains" role="tab" aria-controls="contact" aria-selected="false"><i class="icofont-train-line train"></i> ЖД</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#bus" role="tab" aria-controls="contact" aria-selected="false"><i class="icofont-bus-alt-1 bus"></i> Автобусы</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#rentacar" role="tab" aria-controls="contact" aria-selected="false"><i class="icofont-car-alt-1 car "></i> Аренда авто</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-12 col-lg-12 mx-auto mt-5 mt-xl-0">
                                    <div class="row">

                                        <div class="col-lg-12">
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
                                                        <input type="text" class="rt-date-picker form-control text-center" placeholder="Дата отправления">
                                                    </div><!-- /.col-lg-3 -->
                                                    <div class="col-lg-3 rt-input-group mini col-md-6">
                                                        <input type="text" class="form-control rt-date-picker text-center" placeholder="Дата прибытия ">
                                                    </div><!-- /.col-lg-3 -->
                                                </form>
                                            </div><!-- /.flight-list-box -->
                                        </div><!-- /.col-lg-12 -->
                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center  justify-content-lg-between">
                                                    <div class="col-lg-5 col-md-12">
                                                        <div class="d-flex">
                                                            <div class="col-8 d-flex">

                                                                <div class="card-race card-race-hover-effect" style="background: #F92853;">
                                                                    <a href="">
                                                                        <i class="icofont-train-line train"></i>

                                                                        <h6>Минимальная цена</h6>
                                                                        <span>1500 руб.</span>

                                                                        <h6>Самый быстрый рейс:</h6>
                                                                        <span>12 часов</span>

                                                                    </a>
                                                                </div>

                                                                <div class="card-race card-race-hover-effect" style="background: #6D3EFF;transform: translateX(-200px);">
                                                                    <a href="" class="text-white">
                                                                        <i class="icofont-airplane-alt avia white"></i>

                                                                        <h6>Минимальная цена</h6>
                                                                        <span>1500 руб.</span>

                                                                        <h6>Самый быстрый рейс:</h6>
                                                                        <span>12 часов</span>
                                                                    </a>
                                                                </div>

                                                                <div class="card-race card-race-hover-effect" style="background: #84C03B;transform: translateX(-400px);">
                                                                    <a href="bus" class="text-white">
                                                                        <i class="icofont-bus-alt-1 bus"></i>

                                                                        <h6>Минимальная цена</h6>
                                                                        <span>1500 руб.</span>

                                                                        <h6>Самый быстрый рейс:</h6>
                                                                        <span>12 часов</span>

                                                                    </a>
                                                                </div>

                                                                <div class="card-race" style="background: #ffa500;transform: translateX(-600px);">
                                                                    <a href="">
                                                                        <i class="icofont-car-alt-1 car white"></i>

                                                                        <h6>Минимальная цена</h6>
                                                                        <span>1500 руб.</span>

                                                                        <h6>Самый быстрый рейс:</h6>
                                                                        <span>12 часов</span>

                                                                        <div class="arrowmini">
                                                                            <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M20.2361 12L0.236069 0.452994V23.547L20.2361 12Z" fill="white"/>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="flight-time d-flex justify-content-between ">
                                                        <div class="left">
                                                            <span class="d-block">10:55</span>
                                                            <span class="d-block">HKG T2</span>
                                                        </div><!-- /.left -->
                                                        <div class="middle">
                                                            <img src="{{asset('images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                                                        </div><!-- /.middle -->
                                                        <div class="right">
                                                            <span class="d-block">15.00</span>
                                                            <span class="d-block">SIN T2</span>
                                                        </div><!-- /.rght -->
                                                    </div><!-- /.flight-time -->
                                                    <div class="flight-detils">
                                                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time --> 4h 5m</span>
                                                        <span class="d-block">
                                                            <a href="#collapseExample" class="flt-d-clic btn-lg  pill rt-gradient text-uppercase" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Подробнее о рейсе <i class="icofont-simple-down"></i></a></span>
                                                    </div><!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">$610</span>
                                                        <span class="d-block">Roundtrip</span>
                                                    </div><!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                                                    </div><!-- /.book-now -->
                                                </div><!-- /.top-content -->





                                                <div class="collapse bottom-content card-results" id="collapseExample">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h3 class="mb-0">Просмотр составного рейса Москва - Витязево</h3>
                                                                <span class="text-muted">Сборный рейс: Москва - Витязево</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-5">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <h6 class="mb-0">Отбытие</h6>
                                                                        <h2 class="mb-0">10:55</h2>
                                                                        <span class="text-muted">HGK T2</span>
                                                                    </div>
                                                                    <div class="col-2 d-flex align-items-center ml-4">
                                                                        <img src="/images/info-arrow.svg" alt="">
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <h6 class="mb-0">Прибытие</h6>
                                                                        <h2 class="mb-0">15:00</h2>
                                                                        <span class="text-muted">SIN T2</span>
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
                                                                        <h3 style="color: #6E3FFF;font-weight: bolder;">5 часов 32 минуты</h3>
                                                                    </div>
                                                                    <div class="col-12 mt-3">
                                                                        <h5 class="mb-0" style="text-transform: none;">Стоимость</h5>
                                                                        <h3 class="mb-0" style="color: #6E3FFF;font-weight: bolder;">5 860 руб.</h3>
                                                                    </div>
                                                                    <div class="col-12 mt-3">
                                                                        <h5 class="mb-0" style="text-transform: none;">Количество пересадок</h5>
                                                                        <h3 class="mb-0" style="color: #6E3FFF;font-weight: bolder;">3</h3>
                                                                    </div>
                                                                    <div class="col-12" style="margin-top: 30px;">
                                                                        <button class="by-btn">Перейти к оформлению</button>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="d-flex flex-row flex-wrap justify-content-center">
                                                                    <div class="col-12 d-flex">

                                                                        <div class="card-race card-race-hover-effect" style="background: #F92853;">
                                                                                <a href="">
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
                                                                                </a>
                                                                            </div>

                                                                        <div class="card-race card-race-hover-effect" style="background: #6D3EFF;transform: translateX(-200px);">
                                                                            <a href="">
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

                                                                        <div class="card-race card-race-hover-effect" style="background: #84C03B;transform: translateX(-400px);">
                                                                            <a href="bus">
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
                                                                            </a>
                                                                        </div>

                                                                        <div class="card-race" style="background: #ffa500;transform: translateX(-600px);">
                                                                                <a href="">
                                                                                <i class="icofont-car-alt-1 car"></i>

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



                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
@endsection
