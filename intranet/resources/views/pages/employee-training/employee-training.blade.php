@extends('layouts.web-layout')
@section('header')
    <style>
        .background-1{
            background-color: #fbaf42;
        }
    </style>
    @endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/banner-2.jpg')}}">
    </section>
    <section class="padding-tb-100px">
        <div class="container">
            <div class="row justify-content-center wow fadeInUp">
                <div class="col-md-7">
                    <div class="margin-bottom-60px text-center wow fadeInUp">
                        <h3 class="text-title-large margin-bottom-25px text-main-color font-2">Employee Trainings</h3>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6">
                    <div class="padding-lr-30px padding-tb-60px background-overlay background-main-color" style="background-color: #fbaf42">
                        <div class="text-left z-index-2 position-relative text-white">
                            <h2 class="text-extra-large  margin-bottom-25px">
                                LUMS CPBM
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="padding-lr-30px padding-tb-60px background-overlay background-second-color" style="background-color: #ef3c3f">
                        <div class="text-left z-index-2 position-relative text-white">
                            <h2 class="text-extra-large  margin-bottom-25px">
                                Leadership care & Growth
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="padding-lr-30px padding-tb-60px background-overlay background-second-color" style="background-color: #fbaf42">
                        <div class="text-left z-index-2 position-relative text-white">
                            <h2 class="text-extra-large  margin-bottom-25px">
                                Service Excellence
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="padding-lr-30px padding-tb-60px background-overlay background-main-color" style="background-color: #ef3c3f">
                        <div class="text-left z-index-2 position-relative text-white">
                            <h2 class="text-extra-large  margin-bottom-25px">
                                Values Training
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="padding-lr-30px padding-tb-60px background-overlay background-main-color" style="background-color: #fbaf42">
                        <div class="text-left z-index-2 position-relative text-white">
                            <h2 class="text-extra-large  margin-bottom-25px">
                                In House Trainings
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    @endsection