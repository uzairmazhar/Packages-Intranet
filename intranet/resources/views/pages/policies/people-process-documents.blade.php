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
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px">People Process Documents</h3>
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
                                <td>Headcount Planning & Organisation Structures Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Headcount Planning & Organisation Structures Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Recruitment Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/version-1-8/Recruitment Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Promotion Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/version-1-9/Promotion Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Employee Onboarding Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Employee Onboarding Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Probation and Confirmation Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Probation and Confirmation Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Employee Change Request Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Employee Change Request Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Employee Clearance Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Employee Clearance Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Salary Adjustment and Annual Increment Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Salary Adjustment and Annual Increment Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Retirement Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Retirement Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Payroll Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Payroll Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Salary Advance Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Salary Advance Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Internship Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/version-1-4/Internship-Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Family Relationship Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Family Relationship Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Equal Opportunity Practice</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Equal Opportunity Practice.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Life Insurance Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/version-1-7/Life Insurance Process.docx')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Long Service Awards Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Long Service Awards Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Business Card Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Business Card Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Non Smoking Environment</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Non Smoking Environment.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Gratuity Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Gratuity Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Provident Fund Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Provident Fund Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Leave Rules</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Leave Rules.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Medical Amendments</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Medical Amendments.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Medical Policy Booklet</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Medical Policy Booklet.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Registering Attendance</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Registering Attendance.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Transfer and Travel Rules</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Transfer and Travel Rules.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>ACCA/ICAEW Training Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/version-1-1/ACCA-ICAEW Training process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>OPD Hospital List</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/version-1-1/OPD Hospital List.xlsx')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Panel Hospital List</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/version-1-1/Panel Hospital List.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Car policy for M and above</td>
                                <!--<td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Car Policy M.pdf')}}" target="_blank">Download</a></td>-->
								<td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/29_Vehicle_Policy_Grade_M.pdf')}}" target="_blank">Download</a></td>
                            	<!--<td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/29_Car_Policy_for_Grade_M_and_above.pdf')}}" target="_blank">Download</a></td>-->
                            
							</tr>
                            <tr>
                                <td>30</td>
                                <td>Laptop Policy</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Laptop Policy.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Professional Fee Reimbursement Policy</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Professional Fee Reimbursement Policy.pdf')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>32 A</td>
                                <td>Vehicle Policy Grade E</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/32. Vehicle Policy Grade E.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Dental and Optical Benefits</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Dental & Optical Benefits.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Fuel Utilization Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/fuel-utilization-process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Mobile Handset</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/version-1-2/mobile-handset-process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Relocation Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/version-1-2/35_Relocation_Process.pdf')}}" target="_blank">Download</a></td>
								<!--<td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/version-1-2/relocation-process.pdf')}}" target="_blank">Download</a></td>-->
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Disciplinary & Grievance Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/version-1-1/Disciplinary & Grievance Process PDF.pdf')}}" target="_blank">Download</a></td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Learning & Development Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/Learning & Development ProcessPDF.pdf')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>38</td>
                                <td>LUMS EMBA Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/version-1-6/LUMS EMBA Process.pdf')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>39</td>
                                <td>Medical Amendments – Room & Board Limits</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/version-1-6/Medical Amendments _ Room & Board Limits 2019.pdf')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>40</td>
                                <td>002-Apprenticeship-Basic Version-Workers Only</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/002-Apprenticeship-Basic Version-Workers Only.pdf')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>41</td>
                                <td>007-Annual Increment Process-Workers Only</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/007-Annual Increment Process-Workers Only.pdf')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>42</td>
                                <td>005B-[Separation] Employee Clearance Process- Workers only</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/005B-[Separation] Employee Clearance Process- Workers only.pdf')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>43</td>
                                <td>005A-Recruitment Process- Workers Only</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/005A-Recruitment Process- Workers Only.pdf')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>44</td>
                                <td>HR Manual-Rest of the processes</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/HR Manual.pdf')}}" target="_blank">Download</a></td>
                            </tr>
							<tr>
                                <td>45</td>
                                <td>Internal & External Job Placement Process</td>
                                <td><a href="{{asset('assets/policies/human-resources/peopleprocess-documents/45. Internal & External Job Placement Process.pdf')}}" target="_blank">Download</a></td>
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