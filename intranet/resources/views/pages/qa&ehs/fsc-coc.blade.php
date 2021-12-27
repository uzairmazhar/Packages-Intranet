@extends('layouts.web-layout')
@section('header')
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/quality-focus.jpg')}}">
    </section>
    <section class="padding-tb-100px">
        <div class="container">
            <h1 class="font-weight-300 opacity-7 text-center margin-bottom-45px wow fadeInUp">FSC COC</h1>
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('assets/docs/fsc-coc/FSC Approved Suppliers List.docx')}}">FSC Approved Suppliers List</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('assets/docs/fsc-coc/IMS-IP-F-03 Master List of Documents.doc')}}">IMS-IP-F-03 Master List of Documents</a></h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.6s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('assets/docs/fsc-coc/IMS-IP-F-04 Master list of Records.doc')}}">IMS-IP-F-04 Master list of Records</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.4s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('assets/docs/fsc-coc/Material groups-Packages.docx')}}">Material Groups-Packages</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.8s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('assets/docs/fsc-coc/Packages FSC Policy.JPG')}}">Packages FSC Policy</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="1.0s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('assets/docs/fsc-coc/Packages FSC Procedures.docx')}}">Packages FSC Procedures</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="1.0s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('assets/docs/fsc-coc/Product groups-Packages.docx')}}">Product Groups-Packages</a></h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="1.0s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('assets/docs/fsc-coc/unloading sheet revised.doc')}}">Unloading Sheet Revised</a></h4>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')

@endsection