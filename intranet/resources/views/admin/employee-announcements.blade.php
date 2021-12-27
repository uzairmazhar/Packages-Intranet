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
                            <h4 class="card-title">Employee Announcements</h4>
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
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Title Attachment</th>
                                        <th>Attachment 1</th>
                                        <th>Attachment 2</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($announcements as $announcement)
                                        <tr>
                                            <td>{{$announcement->id}}</td>
                                            <td>{{date('d M, Y', strtotime($announcement->created_at))}}</td>
                                            <td>{{date('H:i:s', strtotime($announcement->created_at))}}</td>
                                            <td>{{$announcement->category}}</td>
                                            <td>{{$announcement->title}}</td>
                                            <td>{{$announcement->description}}</td>
                                            <td><a href="{{asset('assets/employee-announcements'.'/'.$announcement->title_attachment)}}">{{$announcement->title_attachment}}</a></td>
                                            <td><a href="{{asset('assets/employee-announcements'.'/'.$announcement->attachment_1)}}">{{$announcement->attachment_1}}</a></td>
                                            <td><a href="{{asset('assets/employee-announcements'.'/'.$announcement->attachment_2)}}">{{$announcement->attachment_2}}</a></td>
                                            <td>
                                                @if($announcement->enabled == 0)
                                                    <a href="{{URL::to('employee-announcements/enable'.'/'.$announcement->id)}}"><i class="la la-check-circle success"></i></a>
                                                @elseif($announcement->enabled == 1)
                                                    <a href="{{URL::to('employee-announcements/disable'.'/'.$announcement->id)}}"><i class="la la-times-circle danger"></i></a>
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