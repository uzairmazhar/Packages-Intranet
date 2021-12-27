@extends('layouts.web-layout')
@section('header')
    <style>
        .background-3{
            background-color: #ef3c3f;
        }
    </style>
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/banner-company-profile-2.jpg')}}">
    </section>
    <section class="padding-tb-100px background-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="margin-bottom-60px text-white wow fadeInUp">
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px">Gate Approval Forms</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
                        <table>
                            <thead>
                            <tr>
                                <td><strong>Sr. #</strong></td>
                                <td><strong>Description</strong></td>
                                <td><strong>Action</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <!--<td>Gate # 1-Idea Generation-Approval Form</td>-->
                                <td>Gate # 1: Define</td>
                                <!-- <td><a href="{{asset('assets/policies/inr_policies/Gate1-IdeaGeneration-ApprovalForm.docx')}}" target="_blank">Download</a></td>-->
								<td><a href="{{asset('assets/policies/inr_policies/int/Gate-1-Define.docx')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <!--<td>Gate # 2- Product Selection-Approval Form</td>-->
                                <td>Gate # 2: Explore</td>
                                <!--<td><a href="{{asset('assets/policies/inr_policies/Gate2-ProductSelection-ApprovalForm.docx')}}" target="_blank">Download</a></td>-->
								<td><a href="{{asset('assets/policies/inr_policies/int/Gate-2-Explore.docx')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <!--<td>Gate # 3-Product Development-Approval Form</td>-->
                                <td>Gate # 3: Develop</td>
                                <!--<td><a href="{{asset('assets/policies/inr_policies/Gate3-ProductDevelopment-ApprovalForm.docx')}}" target="_blank">Download</a></td>-->
								<td><a href="{{asset('assets/policies/inr_policies/int/Gate-3-Develop.docx')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <!--<td>Gate # 4-Product Launch-Approval Form</td>-->
                                <td>Gate # 4: Launch</td>
                                <!--<td><a href="{{asset('assets/policies/inr_policies/Gate4-ProductLaunch-ApprovalForm.docx')}}" target="_blank">Download</a></td>-->
								<td><a href="{{asset('assets/policies/inr_policies/int/Gate-4-Launch.docx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>5</td>
                                <!--<td>Gate # 5-Product Measure Form</td>-->
                                <td>Gate # 5: Measure</td>
                                <!--<td><a href="{{asset('assets/policies/inr_policies/Gate4-ProductLaunch-ApprovalForm.docx')}}" target="_blank">Download</a></td>-->
								<td><a href="{{asset('assets/policies/inr_policies/int/Gate-5-Measure.docx')}}" target="_blank">Download</a></td>
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
@endsection