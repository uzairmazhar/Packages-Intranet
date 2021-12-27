@extends('layouts.web-layout')
@section('header')
    <style>
        .background-3{
            background-color: #ef3c3f;
            color: white;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">

@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
    </section>
    <section class="padding-tb-100px background-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="margin-bottom-60px wow fadeInUp">
                        <h3 class="font-weight-700 text-title-large color-3 margin-bottom-25px">Historical News</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item margin-bottom-50px wow fadeInUp">
                        <table class="data-table">
                            <thead>
                            <tr>
                                <td><strong>Id</strong></td>
                                <td><strong>News Description</strong></td>
                                <td><strong>Date</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->news_description}}</td>
                                    <td>{{date('d M,Y', strtotime($row->created_at))}}</td>
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
                "order": [[ 0, "desc" ]]
            });
        });
    </script>
@endsection