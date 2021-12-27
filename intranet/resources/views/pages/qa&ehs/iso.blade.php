@extends('layouts.web-layout')
@section('header')
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/quality-focus.jpg')}}">
    </section>
    <section class="padding-tb-100px">
        <div class="container">
            <h1 class="font-weight-300 opacity-7 text-center margin-bottom-45px wow fadeInUp">ISO 9001 Documents</h1>
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('qa&ehs/iso-documents/bucp')}}">BUCP</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('qa&ehs/iso-documents/bufc')}}">BUFC</a></h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.6s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('qa&ehs/iso-documents/bufp')}}">BUFP</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.4s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('qa&ehs/iso-documents/common')}}">Common</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.8s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('qa&ehs/iso-documents/csd')}}">CSD</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="1.0s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('qa&ehs/iso-documents/hr-ir')}}">HR / IR</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="1.0s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('qa&ehs/iso-documents/marketing-sales')}}">Marketing & Sales</a></h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="1.0s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('qa&ehs/iso-documents/qa')}}">QA</a></h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="1.0s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('qa&ehs/iso-documents/supply-management')}}">Supply Management</a></h4>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')

@endsection