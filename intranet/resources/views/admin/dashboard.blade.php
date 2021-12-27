@extends('layouts.admin-layout')
@section('body')
    <div class="content-body">
        <!-- eCommerce statistic -->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="warning">{{$uniqueVisitors}}</h3>
                                    <h6><a class="grey-blue">Unique Visitors</a></h6>
                                </div>
                                <div>
                                    <i class="la la-users warning font-large-2 float-right"></i>
                                </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: {{$hits==0?0:($uniqueVisitors/$hits)*(100).'%'}}" aria-valuenow="{{$uniqueVisitors}}" aria-valuemin="0" aria-valuemax="{{$hits}}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="success">{{$upApprovedSubKehDo}}</h3>
                                    <h6><a class="grey-blue">Un Approved Sub Keh Do!</a></h6>
                                </div>
                                <div>
                                    <i class="la la-microphone success font-large-2 float-right"></i>
                                </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: {{$upApprovedSubKehDo==0?0:($upApprovedSubKehDo/$upApprovedSubKehDo)*(100).'%'}}" aria-valuenow="{{$upApprovedSubKehDo}}" aria-valuemin="0" aria-valuemax="{{$upApprovedSubKehDo}}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection