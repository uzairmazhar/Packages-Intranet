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
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px">E- Learnings by Syeda Henna Babar Ali</h3>
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
                                <td>Focus</td>
                                <td><a href="{{asset('assets/policies/human-resources/e-learning/FOCUS.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Goals</td>
                                <td><a href="{{asset('assets/policies/human-resources/e-learning/GOALS.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Lead to Change Yourself </td>
                                <td><a href="{{asset('assets/policies/human-resources/e-learning/Lead To Change Your Self.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Lead to serve </td>
                                <td><a href="{{asset('assets/policies/human-resources/e-learning/lead to serve.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Lead to Win</td>
                                <td><a href="{{asset('assets/policies/human-resources/e-learning/Lead To Win.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Leadership and excellence </td>
                                <td><a href="{{asset('assets/policies/human-resources/e-learning/Leadership and Excellence.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Reflection and Meditation </td>
                                <td><a href="{{asset('assets/policies/human-resources/e-learning/Reflection and Meditation.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Time Management </td>
                                <td><a href="{{asset('assets/policies/human-resources/e-learning/Time Management.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Work Life Balance </td>
                                <td><a href="{{asset('assets/policies/human-resources/e-learning/Work-Life Balance.pdf')}}" target="_blank">Download</a></td>
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