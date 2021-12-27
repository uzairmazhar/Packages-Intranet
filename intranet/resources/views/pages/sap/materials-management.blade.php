@extends('layouts.web-layout')
@section('header')
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
    </section>
    <section class="padding-tb-100px">
        <div class="container">
            <h1 class="font-weight-300 opacity-7 text-center margin-bottom-45px wow fadeInUp">Materials Management</h1>
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/materials-management/material-master')}}">Material Master</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/materials-management/vendor-master')}}">Vendor Master</a></h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.6s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/materials-management/logistics-invoices')}}">Logistics Invoices</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.4s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/materials-management/goods-issues')}}">Goods Issues</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="0.8s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/materials-management/goods-receipts')}}">Goods Receipts</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="1.0s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/materials-management/transfer-posting')}}">Transfer Posting</a> </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="1.0s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/materials-management/request-for-quotations')}}">Request For Quotations</a>  </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="1.0s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/materials-management/purchase-orders')}}">Purchase Orders</a>  </h4>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="1.0s">
                    <h4 class="background-main-color text-white padding-15px text-center border-radius-10"><a href="{{URL::to('sap/materials-management/purchase-requisition')}}">Purchase Requisitions</a>  </h4>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@endsection