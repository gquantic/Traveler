@extends('layouts.main')

@section('page-title')
    Рейс №{{ $race }}
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
                    <div class="col-12">
                        <h3 class="mb-4">Подробности о рейсе №{{ $race }}</h2>
                    </div>

                    <div class="col-lg-12">
                        <ul class="flight-timeline">
                            <li>
                                <span><i class="icofont-airplane-alt avia mr-1"></i> Ноябрь 12 10:55</span>
                            </li>
                            <li><span>Москва - Аэропорт Домодедово</span></li>
                            <li>
                                <span></span>
                            </li>
                            <li><span>Ростов - Аэропорт Платов</span></li>
                        </ul>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-8">
                                <img src="http://html.0effortthemes.com/go/images/flight-structure.png" width="100%" alt="">
                            </div>
                            <div class="col-lg-4">
                                <h3>Вы можете занять места,</h3>
                                <p>для этого отметьте их и продолжите заполнение ниже.</p>
                            </div>
                        </div>
                    </div>

                    <div class="spacer-bottom"></div>

                    <div class="col-lg-12 mb-5 mt-5">
                        <ul class="flight-timeline">
                            <li>
                                <span><i class="icofont-bus-alt-1 bus mr-1"></i> Ноябрь 12 10:55</span>
                            </li>
                            <li><span>Ростов - Аэропорт Платов</span></li>
                            <li>
                                <span></span>
                            </li>
                            <li><span>Ростов - Красноармейская 17</span></li>
                        </ul>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-8 d-flex justify-content-center">
                                <img src="/images/resources/bus_project.png" width="300px" alt="">
                            </div>
                            <div class="col-lg-4">
                                <h3>Вы можете занять места,</h3>
                                <p>для этого отметьте их и продолжите заполнение ниже.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <h2>Информация о пассажирах</h2>
                        <form action="">
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <div class="spacer-bottom"></div><!-- /.spacer-bottom -->
@endsection
