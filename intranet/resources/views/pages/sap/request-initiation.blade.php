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
                        <h3 class="font-weight-700 text-title-large color-3 margin-bottom-25px">Request Initiation</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item margin-bottom-50px wow fadeInUp">
                        <table class="data-table">
                            <thead>
                            <tr>
                                <td><strong>Application Name</strong></td>
                                <td><strong>Description</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="http://172.16.25.250/pkgs/mc/new.php" target="_blank">Material Creation</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="http://172.16.25.250/pkgs/sap/new_dev.php" target="_blank">SAP Development</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="http://172.16.25.250/pkgs/sap/new_ar.php" target="_blank">SAP Authorization</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="http://172.16.25.250/pkgs/ccform" target="_blank">Customer Complaints</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="http://172.16.25.250/pkgs/OHSAS/create.php" target="_blank">Daily OHSAS & FSSC</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="http://172.16.25.250/pkgs/qacar/new.php" target="_blank">QA CAR System</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="http://172.16.25.250/pkgs/meetings/meeting_rooms_public/" target="_blank">Irshad Hall / Meeting Rooms Booking</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="http://172.16.25.250/pkgs/gatepasss/new.php" target="_blank">Gate Pass</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="http://172.16.25.250/pkgs/pr/new.php" target="_blank">IT-Equipment PR Form</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="http://172.16.25.250/pkgs/capex/" target="_blank">CAPEX Form</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="http://172.16.25.250/pkgs/financedcars/insurance_form.php" target="_blank">Insurance Survey Request</a></td>
                                <td></td>
                            </tr>
							<tr>
                                <td><a href="http://172.16.25.250/pkgs/assetdisposal/" target="_blank">Asset Disposal Packages Convertors Limited</a></td>
                                <td></td>
                            </tr>
							
							<tr>
                                <td><a href="http://172.16.25.250/pkgs/assetdisposal_pkgs/" target="_blank">Asset Disposal Packages Limited</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="http://ers.packagesgroup.com" target="_blank">Employee Reimbursement System</a></td>
                                <td></td>
                            </tr>
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
            $('.data-table').dataTable();
        });
    </script>
@endsection