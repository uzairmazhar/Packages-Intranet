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
                            <h4 class="card-title">Complete Directory</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <table class="table table-striped table-bordered data-table">
                                    <thead>
                                    <tr>
                                        <td><strong>Department</strong></td>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Designation</strong></td>
                                        <td><strong>Ext</strong></td>
                                        <td><strong>Direct Line</strong></td>
                                        <td><strong>Mobile Number</strong></td>
                                        <td><strong>Email Address</strong></td>
                                        <td><strong>Enabled</strong></td>
                                        <td><strong>Actions</strong></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($employees as $employee)
                                        <tr>
                                            <td>{{$employee->department}}</td>
                                            <td>{{$employee->name}}</td>
                                            <td>{{$employee->designation}}</td>
                                            <td>{{$employee->extension}}</td>
                                            <td>{{$employee->direct_line}}</td>
                                            <td>{{$employee->mobile_number}}</td>
                                            <td>{{$employee->email}}</td>
                                            <td>{{$employee->enabled == 1 ? 'Yes':'No'}}</td>
                                            <td>
                                                @if($employee->enabled == 1)
                                                    <a href="{{URL::to('directory/disable'.'/'.$employee->id)}}"><i class="la la-times-circle danger"></i></a>
                                                @else
                                                    <a href="{{URL::to('directory/enable'.'/'.$employee->id)}}"><i class="la la-check-circle success"></i></a>
                                                @endif
                                                <a href="{{URL::to('directory/update'.'/'.$employee->id)}}"><i class="la la-pencil-square primary"></i></a>
                                                <a href="{{URL::to('directory/delete'.'/'.$employee->id)}}"><i class="la la-trash danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
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
    <script>
        $(document).ready(function(){
            var table = $('.data-table').DataTable({
                "columnDefs": [
                    { "visible": false, "targets": 0 }
                ],
                "sort":null,
                "info":null,
                "drawCallback": function ( settings ) {
                    var api = this.api();
                    var rows = api.rows( {page:'current'} ).nodes();
                    var last=null;

                    api.column(0, {page:'current'} ).data().each( function ( group, i ) {
                        if ( last !== group ) {
                            $(rows).eq( i ).before(
                                    '<tr style="background-color: #545454; color: white; text-align: center;font-size: 14px;"><td colspan="20" style="padding: 10px "><strong>'+group+'</strong></td></tr>'
                            );
                            last = group;
                        }
                    } );
                }
            } );
        });
    </script>
@endsection