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
                            <h4 class="card-title">All News</h4>
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
                                        <th>News Description</th>
                                        <th>Enabled</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($news as $message)
                                        <tr>
                                            <td>{{$message->id}}</td>
                                            <td>{{date('d M, Y', strtotime($message->created_at))}}</td>
                                            <td>{{date('H:i:s', strtotime($message->created_at))}}</td>
                                            <td>{{$message->news_description}}</td>
                                            <td>{{$message->enabled == 1 ? 'Yes':'No'}}</td>
                                            <td>
                                                @if($message->enabled == 1)
                                                    <a href="{{URL::to('news/disable'.'/'.$message->id)}}"><i class="la la-times-circle danger"></i></a>
                                                @else
                                                    <a href="{{URL::to('news/enable'.'/'.$message->id)}}"><i class="la la-check-circle success"></i></a>
                                                @endif
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