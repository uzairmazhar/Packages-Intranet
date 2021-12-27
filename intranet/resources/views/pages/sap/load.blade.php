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
    @if(view()->exists($view))
        @include($view)
    @endif
@endsection
@section('footer')
    <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            var table = $('.common-table').DataTable({
                "columnDefs": [
                    { "visible": false, "targets": 2 }
                ],
                "sort":null,
                "info":null,
                "drawCallback": function ( settings ) {
                    var api = this.api();
                    var rows = api.rows( {page:'current'} ).nodes();
                    var last=null;

                    api.column(2, {page:'current'} ).data().each( function ( group, i ) {
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
@endsection