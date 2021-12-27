@extends('layouts.admin-layout')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
@section('body')
    <div class="content-body">
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sub Keh Do! <small>Un-Approved</small></h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Submission Date</th>
                                        <th>Submission Time</th>
                                        <th>Submitted By</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>IP Address</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($messages as $message)
                                        <tr>
                                            <td>{{$message->id}}</td>
                                            <td>{{date('d M, Y', strtotime($message->created_at))}}</td>
                                            <td>{{date('H:i:s', strtotime($message->created_at))}}</td>
                                            <td>{{$message->name}}</td>
                                            <td>{{$message->email}}</td>
                                            <td>{{$message->message}}</td>
                                            <td>{{$message->ip_address}}</td>
                                            <td>
                                                <a href="{{URL::to('message/approve'.'/'.$message->id)}}"><i class="la la-check-circle success"></i></a>
                                                <a href="{{URL::to('message/decline'.'/'.$message->id)}}"><i class="la la-times-circle danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sub Keh Do! <small>Approved</small></h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Submission Date</th>
                                        <th>Submission Time</th>
                                        <th>Submitted By</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>IP Address</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($approvedMessages as $message)
                                        <tr>
                                            <td>{{$message->id}}</td>
                                            <td>{{date('d M, Y', strtotime($message->created_at))}}</td>
                                            <td>{{date('H:i:s', strtotime($message->created_at))}}</td>
                                            <td>{{$message->name}}</td>
                                            <td>{{$message->email}}</td>
                                            <td>{{$message->message}}</td>
                                            <td>{{$message->ip_address}}</td>
                                            <td>
                                                <a href="{{URL::to('message/decline'.'/'.$message->id)}}"><i class="la la-times-circle danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sub Keh Do! <small>Declined</small></h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Submission Date</th>
                                        <th>Submission Time</th>
                                        <th>Submitted By</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>IP Address</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($declinedMessages as $message)
                                        <tr>
                                            <td>{{$message->id}}</td>
                                            <td>{{date('d M, Y', strtotime($message->created_at))}}</td>
                                            <td>{{date('H:i:s', strtotime($message->created_at))}}</td>
                                            <td>{{$message->name}}</td>
                                            <td>{{$message->email}}</td>
                                            <td>{{$message->message}}</td>
                                            <td>{{$message->ip_address}}</td>
                                            <td>
                                                <a href="{{URL::to('message/approve'.'/'.$message->id)}}"><i class="la la-check-circle success"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('footer')
    <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
@endsection