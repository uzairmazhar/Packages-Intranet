@extends('layouts.web-layout')
@section('header')
    @endsection
@section('body')
    <section class="fullscreen-container" >
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/core-values-banner.jpg')}}">
    </section>
    <section class="fullscreen-container" >
        <div class="background-grey-1 padding-25px text-center">
            <h1>We are passionate about what we do</h1>
        </div>
    </section>
    <section class="fullscreen-container" >
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/core-values.jpg')}}">
    </section>
    <section class="padding-tb-100px background-overlay background-img-light fixed background-grey-1" style="background-image: url('{{asset('assets/img/logo-packages-values.png')}}'); background-size: 35%;background-repeat: no-repeat;background-position: center;">
        <div class="container z-index-2 position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">

                </div>
            </div>
        </div>
    </section>
    <section class="fullscreen-container">
        <iframe style="margin-bottom: -7px" src="https://onedrive.live.com/embed?cid=37B82D0B12E900A7&amp;resid=37B82D0B12E900A7%2123782&amp;authkey=AIH5BUx4bBY-ciU&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="100%" height="793px" frameborder="0">This is an embedded <a target="_blank" href="https://office.com">Microsoft Office</a> presentation, powered by <a target="_blank" href="https://office.com/webapps">Office Online</a>.</iframe>
    </section>
@endsection
@section('footer')
@endsection