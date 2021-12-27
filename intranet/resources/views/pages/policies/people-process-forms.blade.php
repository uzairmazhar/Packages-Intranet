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
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px">People Process Forms</h3>
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
                                <td>Employee Change Request Form</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/Employee Change Request Form.doc')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Employee Clearance Form</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/Form - Employee Clearance.docx')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Employee Information Form</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/version-1-3/Employee Information Form.doc')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Joining Report</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/Joining Report.doc')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Probation Evaluation Form</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/version-1-3/Probation Evaluation Form.doc')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Advance Salary Form</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/version-1-3/Advance Salary Form.docx')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Application Form</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/Application Form.docx')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Hiring Request Form</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/version-1-2/Hiring-Request-Form.docx')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Internal Job Announcement form new</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/Internal Job Announcement form new.docx')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Internal Job Application Form - New</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/version-1-1/Internal Job Application Form - New.docx')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Internship Evaluation</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/Internship Evaluation.png')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Interview Evaluation Form</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/version-1-4/INTERVIEW EVALUATION FORM.docx')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>13</td>
                                <td>Job Description-Form</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/Job Description-Form.docx')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Request for Change in Headcount Plan</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/Request for Change in Headcount Plan.docx')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Medical Claim Form</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/version-1-1/Medical Claim Form.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Packages Limited OPD Claim Form</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/version-1-1/Packages Limited OPD Claim Form.pdf')}}" target="_blank">Download</a></td>
                            </tr>
			    <tr>
                                <td>17</td>
                                <td>Training Nomination Form</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-forms/Training Nomination Form.docx')}}" target="_blank">Download</a></td>
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