@extends('layouts.main')

@section('page-title')
    Контакты
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
                    <h3>Контакты</h3>
                    <div class="breadcrumbs">
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

<section class="contact-area">
    <div class="rt-design-elmnts rtbgprefix-contain" style="background-image: url(/images/all-img/abt_vec_3.png)">

    </div><!-- /.rt-design-elmnts -->
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Наши контакты</span>
                        
                        Отправить вопрос
                    </h2><!-- /.rt-section-title -->
                    <p>Если у Вас остались вопросы по оформлению билетов, или возникли вопросы 
                    напишите нам и мы постараемся ответить как можно скорее</p>
                    <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                    <form action="#" class="rt-form rt-line-form">
                        <input type="text" placeholder="Ваше имя" class="form-control rt-mb-30">
                        <input type="email" placeholder="Ваш Email" class="form-control rt-mb-30">
                        <textarea placeholder="Ваше сообщение или вопрос" class="form-control rt-mb-30"></textarea>
                        <input type="submit" value="ОТПРАВИТЬ" class="rt-btn rt-gradient pill text-uppercase rt-mb-30">
                    </form>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
    </div><!-- /.container -->
</section>

<section class="rt-map-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center shdoaw-style wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="icon-thumb">
                        <img src="/images/icons-image/con-1.png" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Наш адрес</h5>
                        <p>350051, г. Краснодар <br>
                        ул. Дальняя 27</p>
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mx-auto col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center shdoaw-style wow fadeInUp animated" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                    <div class="icon-thumb">
                        <img src="/images/icons-image/con-2.png" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Контакты</h5>
                        <p>+7(861)217-6665 <br>
                        info@ecupay.ru</p>
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mx-auto col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center shdoaw-style wow fadeInUp animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
                    <div class="icon-thumb">
                        <img src="/images/icons-image/con-3.png" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Соц сети</h5>
                        <ul class="rt-social rt-circle-style">
                            
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="googleMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116834.1509316622!2d90.34928591742289!3d23.780620653401414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1569663745803!5m2!1sen!2sbd" width="100%" height="582" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section>
@endsection