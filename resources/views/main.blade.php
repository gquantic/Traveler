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
                                Explore <br>
                                The World!
                            </h1>
                            <p class="wow fade-in-top">
                                You can create a Custom Trip.Search Our Lowest Fares to <br>
                                Your Favorite Destinations.Find a better way to travel
                            </p>

                            <div class="rt-banner-searchbox standard-search wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane show active" id="rt-item_a_first" role="tabpanel" aria-labelledby="rt-item_a_first">
                                        <form action="{{ route('make-road') }}" method="post">
                                            @csrf
                                            <div class="rt-radio-group">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline1">One-way</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="customRadioInline2" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline2">Round-trip</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline3" name="customRadioInline3" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline3">Multi-city</label>
                                                </div>
                                                <div class="dropdown form-check-inline rt-searchlink mr-md-5">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        1 Adult
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Room one</a>
                                                        <a class="dropdown-item" href="#">Room two</a>
                                                        <a class="dropdown-item" href="#">Room three</a>
                                                    </div>
                                                </div><!-- ./dropdown -->
                                                <div class="dropdown form-check-inline rt-searchlink">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        Economy
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
                                                    <select class="rt-selectactive banner-select" name="from" style="width: 100%">
                                                        <option value="">from</option>
                                                        <option value="Alaska">Alaska</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Caribbean">Caribbean</option>
                                                        <option value="Europe">Europe</option>
                                                        <option value="Hawaii">Hawaii</option>
                                                    </select>
                                                    <span class="input-iconbadge"><img src="images/icons-image/s_icon_1.png" alt="" draggable="false"></span>
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-3">
                                                    <select class="rt-selectactive banner-select" name="to" style="width: 100%">
                                                        <option value="">To</option>
                                                        <option value="Alaska">Alaska</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Caribbean">Caribbean</option>
                                                        <option value="Europe">Europe</option>
                                                        <option value="Hawaii">Hawaii</option>
                                                    </select>
                                                    <span class="input-iconbadge"><img src="images/icons-image/s_icon_2.png" alt="" draggable="false"></span>
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-3">
                                                    <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart" name="depart">
                                                    <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-3">
                                                    <input type="text" class="form-control rt-date-picker has-icon" placeholder="Return" name="return">
                                                    <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-1">
                                                    <button type="submit"><i class="icofont-search"></i></button>
                                                </div><!-- /.single-input -->
                                            </div><!-- /.rt-input-group -->
                                        </form><!-- ./ form -->
                                    </div>
                                    <div class="tab-pane  rtIncative" id="rt-item_a_second" role="tabpanel" aria-labelledby="rt-item_a_second">
                                        <form action="#">
                                            <div class="rt-radio-group">
                                                <div class="dropdown form-check-inline rt-searchlink">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink24" data-toggle="dropdown"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        Guestes per room
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink24">
                                                        <a class="dropdown-item" href="#">Room one</a>
                                                        <a class="dropdown-item" href="#">Room two</a>
                                                        <a class="dropdown-item" href="#">Room three</a>
                                                    </div>
                                                </div><!-- ./dropdown -->
                                            </div><!-- /.radio-group -->
                                            <div class="rt-input-group">
                                                <div class="single-input  col-rt-in-3">
                                                    <input type="text" class="form-control" placeholder="destination">

                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-3">
                                                    <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                                    <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-3">
                                                    <input type="text" class="form-control rt-date-picker has-icon" placeholder="Return">
                                                    <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-3">
                                                    <input type="text" class="form-control" placeholder="keywords(optional)">
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-1">
                                                    <button type="submit"><i class="icofont-search"></i></button>
                                                </div><!-- /.single-input -->
                                            </div><!-- /.rt-input-group -->
                                        </form><!-- ./ form -->
                                    </div>
                                    <div class="tab-pane  rtIncative" id="rt-item_a_third" role="tabpanel" aria-labelledby="rt-item_a_third">
                                        <form action="#">

                                            <div class="rt-input-group">
                                                <div class="single-input  col-rt-in-3">
                                                    <input type="text" class="form-control" placeholder="destination">
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-3">
                                                    <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                                    <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-3">
                                                    <input type="text" class="form-control rt-date-picker has-icon" placeholder="Return">
                                                    <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-3">
                                                    <input type="text" class="form-control" placeholder="keywords(optional)">
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-1">
                                                    <button type="submit"><i class="icofont-search"></i></button>
                                                </div><!-- /.single-input -->
                                            </div><!-- /.rt-input-group -->
                                        </form><!-- ./ form -->
                                    </div>
                                    <div class="tab-pane  rtIncative" id="rt-item_a_four" role="tabpanel" aria-labelledby="rt-item_a_four">
                                        <form action="#">
                                            <div class="rt-input-group">
                                                <div class="single-input  col-rt-in-3">
                                                    <select class="rt-selectactive banner-select" name="from" style="width: 100%">
                                                        <option value="1">from</option>
                                                        <option value="2">Alaska</option>
                                                        <option value="3">Bahamas</option>
                                                        <option value="4">Bermuda</option>
                                                        <option value="5">Canada</option>
                                                        <option value="6">Caribbean</option>
                                                        <option value="7">Europe</option>
                                                        <option value="8">Hawaii</option>
                                                    </select>
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-3">
                                                    <select class="rt-selectactive banner-select" name="to" style="width: 100%">
                                                        <option value="1">To</option>
                                                        <option value="2">Alaska</option>
                                                        <option value="3">Bahamas</option>
                                                        <option value="4">Bermuda</option>
                                                        <option value="5">Canada</option>
                                                        <option value="6">Caribbean</option>
                                                        <option value="7">Europe</option>
                                                        <option value="8">Hawaii</option>
                                                    </select>
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-3">
                                                    <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                                    <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-3">
                                                    <input type="text" class="form-control" placeholder="train no( opt)">
                                                </div><!-- /.single-input -->
                                                <div class="single-input  col-rt-in-1">
                                                    <button type="submit"><i class="icofont-search"></i></button>
                                                </div><!-- /.single-input -->
                                            </div><!-- /.rt-input-group -->
                                        </form><!-- ./ form -->
                                    </div>
                                </div>
                            </div><!-- /.rt-banner-searchbox -->


                            <ul class="nav serachnavs wow fade-in-bottom" id="rtMultiTab" role="tablist" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                <li class="nav-item">
                                    <a class="nav-link active" id="first-tab" data-target="#rt-item_b_first" data-secondary="#rt-item_a_first"
                                       data-toggle="tab" href="#first" role="tab" aria-controls="first-tab" aria-selected="false">
                                        <i class="icofont-airplane"></i>
                                        <span>Flights</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link inactive" id="second-tab" data-target="#rt-item_b_second" data-secondary="#rt-item_a_second"
                                       data-toggle="tab" href="#second" role="tab" aria-controls="second-tab" aria-selected="true">

                                        <i class="icofont-hotel"></i>
                                        <span>Hotels</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link inactive" id="third-tab" data-target="#rt-item_b_thrid" data-secondary="#rt-item_a_third"
                                       data-toggle="tab" href="#third" role="tab" aria-controls="third-tab" aria-selected="false">
                                        <i class="icofont-car-alt-4"></i>
                                        <span>Cars</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link inactive" id="four-tab" data-target="#rt-item_b_four" data-secondary="#rt-item_a_four"
                                       data-toggle="tab" href="#four" role="tab" aria-controls="four-tab" aria-selected="false">
                                        <i class="icofont-train-line"></i>
                                        <span>Trains</span>
                                    </a>
                                </li>
                            </ul>
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
                        <h5>Trusted Members</h5>
                        <h6><span class="counter">90,000</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-12" >
                <div class="media counter-box-1 align-items-center wow fadeInUp" data-wow-duration="1.5s">
                    <img src="images/counter-icons/counter_iocn_2.png" alt="counter_iocn" draggable="false">
                    <div class="media-body">
                        <h5>Trusted Members</h5>
                        <h6><span class="counter">2,00</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="media counter-box-1 align-items-center wow fadeInUp" data-wow-duration="2s">
                    <img src="images/counter-icons/counter_iocn_3.png" alt="counter_iocn" draggable="false">
                    <div class="media-body">
                        <h5>Trusted Members</h5>
                        <h6><span class="counter">80,000</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
@endsection
