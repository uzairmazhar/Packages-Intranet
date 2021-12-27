@extends('layouts.web-layout')
@section('header')
    <style>
        .background-3{
            background-color: #ef3c3f;
        }
    </style>
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/banner-company-profile-2.jpg')}}">
    </section>
    <section class="padding-tb-100px background-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="margin-bottom-60px text-white wow fadeInUp">
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px">People Performance Process</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
                        <iframe style="margin-bottom: -7px" src="{{asset('assets/policies/human-resources/ppp/'.$ppp->ppp_training_manual)}}" width="100%" height="793px" frameborder="0">This is an embedded <a target="_blank" href="https://office.com">Microsoft Office</a> presentation, powered by <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                    </div>
                </div>
            </div>
			<div class="row">
                <div class="col-md-7">
                    <div class="margin-bottom-60px text-white wow fadeInUp">
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px">People Performance Process - New Joiners 2020</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
                        <iframe style="margin-bottom: -7px" src="{{asset('assets/policies/human-resources/ppp/PPP For New joiners 2020.pdf')}}" width="100%" height="793px" frameborder="0">This is an embedded <a target="_blank" href="https://office.com">Microsoft Office</a> presentation, powered by <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                    </div>
                </div>
            </div>
            <!--<div class="row">
                <div class="col-md-7">
                    <div class="margin-bottom-60px text-white wow fadeInUp">
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px">PPP 2019 Training Schedule</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
                        <iframe style="margin-bottom: -7px" src="{{asset('assets/policies/human-resources/ppp/'.$ppp->ppp_training)}}" width="100%" height="793px" frameborder="0">This is an embedded <a target="_blank" href="https://office.com">Microsoft Office</a> presentation, powered by <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
                    </div>
                </div>
            </div>-->
        </div>
    </section>
@endsection
@section('footer')
@endsection