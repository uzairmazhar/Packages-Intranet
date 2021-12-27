@extends('layouts.web-layout')
@section('header')
    <style>
        .background-3{
            background-color: #fbb34f;
        }
        .color-3{
            color: #fbb34f;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">

@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
    </section>
    <section class="padding-tb-100px">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="margin-bottom-60px wow fadeInUp">
                        <h3 class="font-weight-700 text-title-large color-3 margin-bottom-25px">Group Phone Directory</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item margin-bottom-50px wow fadeInUp">
                        <table class="data-table">
                            <thead>
                            <tr>
                                <td><strong>Department</strong></td>
                                <td><strong>Name</strong></td>
                                <td><strong>Designation</strong></td>
                                <td><strong>Ext</strong></td>
                                <td><strong>Direct Line</strong></td>
                                <td><strong>Mobile Number</strong></td>
                                <td><strong>Email Address</strong></td>
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
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
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