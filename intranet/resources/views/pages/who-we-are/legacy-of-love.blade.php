@extends('layouts.web-layout')
@section('header')
    <style>
        .background-3{
            background-color: #fff;
        }
    </style>
@endsection
@section('body')
    <section class="padding-tb-100px background-3" style="padding-top: 110px">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="margin-bottom-60px text-white wow fadeInUp">
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px" style="color: #336699;">Legacy of Love</h3>
                        <h4 class="margin-bottom-25px" style="color: #336699">Corporate Social Responsibility</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 wow fadeInUp">
                    <div class="blog-item thum-hover background-white text-center">
                        <div class="padding-20px background-dark" style="background-color: #336699">
                            <a href="#" class="text-extra-large text-white  d-block">Naqsh School of Arts</a>
                        </div>
                        <div class="position-relative">
                            <a href="#">
                                <div class="item-thumbnail background-dark"><img src="{{asset('assets/img/legacy-of-love/naqsh.jpg')}}" alt=""></div>
                            </a>
                        </div>
                        <div class="padding-20px background-grey-4 text-white" style="background-color: #1d7ebe">
                            <p class="opacity-6 margin-bottom-0px">Seek excellence in your work, so you can be admired by the world.<br>~Syed Babar Ali</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <div class="blog-item thum-hover background-white text-center">
                        <div class="padding-20px background-dark" style="background-color: #336699">
                            <a href="#" class="text-extra-large text-white  d-block">Packages Foundation</a>
                        </div>
                        <div class="position-relative">
                            <a href="#">
                                <div class="item-thumbnail background-dark"><img src="{{asset('assets/img/legacy-of-love/foundation.jpg')}}" alt=""></div>
                            </a>
                        </div>
                        <div class="padding-20px background-grey-4 text-white" style="background-color: #1d7ebe">
                            <p class="opacity-6 margin-bottom-0px">Always give in charity. The more you give, the more you will get.<br>~Syed Babar Ali</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <div class="blog-item thum-hover background-white text-center">
                        <div class="padding-20px background-dark" style="background-color: #336699">
                            <a href="#" class="text-extra-large text-white d-block">Syedanwala</a>
                        </div>
                        <div class="position-relative">
                            <a href="#">
                                <div class="item-thumbnail background-dark"><img src="{{asset('assets/img/legacy-of-love/syedanwala.jpg')}}" alt=""></div>
                            </a>
                        </div>
                        <div class="padding-20px background-grey-4 text-white" style="background-color: #1d7ebe">
                            <p class="opacity-6 margin-bottom-0px">For Pakistan, three priorities for development one Education, Education and Education. ~Syed Babar Ali</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-4 wow fadeInUp">
                    <div class="blog-item thum-hover background-white text-center">
                        <div class="padding-20px background-dark" style="background-color: #336699">
                            <a href="#" class="text-extra-large text-white  d-block">Sports</a>
                        </div>
                        <div class="position-relative">
                            <a href="#">
                                <div class="item-thumbnail background-dark"><img src="{{asset('assets/img/legacy-of-love/sports.jpg')}}" alt=""></div>
                            </a>
                        </div>
                        <div class="padding-20px background-grey-4 text-white" style="background-color: #1d7ebe">
                            <p class="opacity-6 margin-bottom-0px">Healthy body, Healthy mind<br>~Syed Babar Ali</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <div class="blog-item thum-hover background-white text-center">
                        <div class="padding-20px background-dark" style="background-color: #336699">
                            <a href="#" class="text-extra-large text-white  d-block">Babar Ali Foundation</a>
                        </div>
                        <div class="position-relative">
                            <a href="#">
                                <div class="item-thumbnail background-dark"><img src="{{asset('assets/img/legacy-of-love/babar-ali-foundation.jpg')}}" alt=""></div>
                            </a>
                        </div>
                        <div class="padding-20px background-grey-4 text-white" style="background-color: #1d7ebe">
                            <p class="opacity-6 margin-bottom-0px">Educating a boy educates an individual but educating a girl educates a family.<br>~Syed Babar Ali</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <div class="blog-item thum-hover background-white text-center">
                        <div class="padding-20px background-dark" style="background-color: #336699">
                            <a href="#" class="text-extra-large text-white  d-block">Ali Institute of Education</a>
                        </div>
                        <div class="position-relative">
                            <a href="#">
                                <div class="item-thumbnail background-dark"><img src="{{asset('assets/img/legacy-of-love/ali-institute.jpg')}}" alt=""></div>
                            </a>
                        </div>
                        <div class="padding-20px background-grey-4 text-white" style="background-color: #1d7ebe">
                            <p class="opacity-6 margin-bottom-0px">Poor schooling cannot be made up for even by the best college education<br>~Syed Babar Ali</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@endsection