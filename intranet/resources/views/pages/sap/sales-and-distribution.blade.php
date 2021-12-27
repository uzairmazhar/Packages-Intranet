@extends('layouts.web-layout')
@section('header')
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
    </section>
    <section class="padding-tb-100px">
        <div class="container">
            <h1 class="font-weight-300 opacity-7 text-center margin-bottom-45px wow fadeInUp">Sales and Distribution</h1>
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/sales-and-distribution/cpd')}}">CPD</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/sales-and-distribution/bspm-pbd')}}">BSPM_PBD</a></h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.6s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/sales-and-distribution/pack')}}">Pack</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.4s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/sales-and-distribution/sales-flow-chart')}}">Sales Flow Chart</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.8s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/sales-and-distribution/rsf-engine')}}">RSF Engine</a> </h4>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@endsection