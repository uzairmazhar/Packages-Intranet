@extends('layouts.web-layout')
@section('header')
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/main_banner-company-profile_2.jpg')}}">
    </section>
    <section class="background-light-grey padding-bottom-25px" style="background-color: #D6DB26">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="align-self: center">
                    <section class="text-grey-4">
                        <h1 class="font-weight-300 text-capitalize font-2 padding-tb-10px">
                            Welcome to Packages Limited
                        </h1>
                    </section>
                    <div class="padding-bottom-30px">
                        <div class="post-entry">
                            <div class="d-block text-up-small text-grey-4 margin-bottom-15px wow fadeInLeft">
                                <p>
                                    We believe in changing people’s lives for the greater good.<br>
                                    We take pride in producing quality products and packaging solutions that have made us pioneers in the tissue and packaging category.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 padding-tb-25px">
                    <div class="blog-entry background-white border-1 border-grey-1 margin-bottom-35px">
                        <div class="padding-30px">
                            <div class="post-entry">
                                <div class="d-block text-up-small text-grey-4 margin-bottom-15px">
                                    <p class="text-center"><strong>Customers</strong></p>
                                    <p class="text-center">Proud to have customers working with us for over 60 years</p>
                                    <p class="text-center"><strong>Employees</strong></p>
                                    <p class="text-center">Providing opportunities for over 2000 people</p>
                                    <p class="text-center"><strong>Sales</strong></p>
                                    <p class="text-center">Together as a team, we have executed over US $ 141 Million sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-color: #8bc541">
                <div class="row">
                    <div class="col-md-4 ">
                        <h3 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px text-right float-md-right text-white">
                            STATUS OF THE<br>COMPANY
                        </h3>
                    </div>
                    <div class="col-md-8" style="align-self: center">
                        <p class="text-white">Packages Limited is a manufacturing concern that is involved in the production and sale of packaging materials and tissue products</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding-tb-100px background-overlay background-img-light fixed" style="background-image: url('{{asset('assets/img/banners/banner-company-profile-2.jpg')}}');">
        <div class="container z-index-2 position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">

                </div>
            </div>
        </div>
    </section>
    <section class="padding-tb-100px background-light-grey" style="background-color: #D6DB26">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 sm-mb-30px">
                    <div class="blog-item background-white" style="height: 100%">
                        <div class="position-relative">
                            <div class="item-thumbnail background-dark"><img src="{{asset('assets/img/banners/research-2.jpg')}}" alt=""></div>
                        </div>
                        <a class="text-extra-large margin-tb-20px d-block padding-lr-30px">Research</a>
                        <hr>
                        <div class="padding-lr-30px">
                            <span class="margin-right-30px">One of the hallmarks of our success is continued research to refine our offerings. Through our joint ventures with some of the world’s biggest names, we continuously improve customer value with improvements in productivity.</span>
                        </div>
                        <hr class="margin-bottom-0px border-white">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-mb-30px">
                    <div class="blog-item background-white" style="height: 100%">
                        <div class="position-relative">
                            <div class="item-thumbnail background-dark"><img src="{{asset('assets/img/banners/innovation-1.jpg')}}" alt=""></div>
                        </div>
                        <a class="text-extra-large margin-tb-20px d-block padding-lr-30px">Innovation</a>
                        <hr>
                        <div class="padding-lr-30px">
                            <span class="margin-right-30px">We are at the forefront of new developments in packaging research and pioneered several innovations, including the use of wheat straw as a raw material for paper and board manufacture.</span>
                        </div>
                        <hr class="margin-bottom-0px border-white">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-mb-30px">
                    <div class="blog-item background-white" style="height: 100%">
                        <div class="position-relative">
                            <div class="item-thumbnail background-dark"><img src="{{asset('assets/img/banners/development.jpg')}}" alt=""></div>
                        </div>
                        <a class="text-extra-large margin-tb-20px d-block padding-lr-30px">Development</a>
                        <hr>
                        <div class="padding-lr-30px">
                            <span class="margin-right-30px">We provide comprehensive packaging solutions worldwide through creation and development for impactful designs that build stronger brands.</span>
                        </div>
                        <hr class="margin-bottom-0px border-white">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@endsection