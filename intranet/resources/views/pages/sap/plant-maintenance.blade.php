@extends('layouts.web-layout')
@section('header')
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
    </section>
    <section class="padding-tb-100px">
        <div class="container">
            <h1 class="font-weight-300 opacity-7 text-center margin-bottom-45px wow fadeInUp">Plant Maintenance</h1>
            <div class="row">
                <table>
                    <thead>
                    <tr>
                        <th>Sr. #</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>PM_TM_Equipment</td>
                        <td><a href="{{asset('assets/SAP/plant-maintenance/PM_TM_Equipment.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PM_TM_Functional Location</td>
                        <td><a href="{{asset('assets/SAP/plant-maintenance/PM_TM_Functional.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PM_TM_Maintenance Order</td>
                        <td><a href="{{asset('assets/SAP/plant-maintenance/PM_TM_Maintainance.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Personnel Administration</td>
                        <td><a href="{{asset('assets/SAP/plant-maintenance/PM_TM_Scheduling.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>PM_TM_Maintenance Plan</td>
                        <td><a href="{{asset('assets/SAP/plant-maintenance/PM_TM_MaintainancePlan.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>PM_TM_Notification</td>
                        <td><a href="{{asset('assets/SAP/plant-maintenance/PM_TM_Notification.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>PM_TM_Task List</td>
                        <td><a href="{{asset('assets/SAP/plant-maintenance/PM_TM_Task.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>PM_TM_Work Centre</td>
                        <td><a href="{{asset('assets/SAP/plant-maintenance/PKGS_PM_TM_Work.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@endsection