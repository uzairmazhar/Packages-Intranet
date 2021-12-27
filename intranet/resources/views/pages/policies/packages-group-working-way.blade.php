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
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px">Packages Group Working Way</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
                        <table>
                            <thead>
                            <tr>
                                <td><strong>Sr. #</strong></td>
                                <td><strong>Description</strong></td>
                                <td><strong>Action</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Values</td>
                                <td><a href="{{URL::to('our-core-values')}}">Download</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Leadership Expectations</td>
                                <td><a href="{{asset('assets/policies/human-resources/packages-group-working-way/leadership-expectations.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>People Expectations</td>
                                <td><a href="{{asset('assets/policies/human-resources/packages-group-working-way/people-expectations-framework.pptx')}}" target="_blank">Download</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@endsection