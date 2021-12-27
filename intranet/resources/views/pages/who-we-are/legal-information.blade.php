@extends('layouts.web-layout')
@section('header')
    @endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/banner-legal-information-2.jpg')}}">
    </section>
    <section class="fullscreen-container" >
        <div class="background-grey-1 padding-25px text-center" style="background-color: #f1574f">
            <h2 class="text-white">Legal Information</h2>
        </div>
    </section>
    <div class="padding-tb-40px background-light-grey" style="transform: none;">
        <div class="container">
            <div class="row">
                <div class="padding-tb-10px">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#advisor" role="tab">Advisor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#board-of-directors" role="tab">Board of Directors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#audit-committee" role="tab">Audit Committee</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#company-secretary" role="tab">Company Secretary</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#hr-remuneration" role="tab">HR &amp; Remuneration Committee</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#auditors" role="tab">Auditors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#legal-advisors" role="tab">Legal Advisors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#credit-rating" role="tab">Credit Rating</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#company-bankers" role="tab">Company Bankers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#head-office" role="tab">Head Office &amp; Works</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active padding-30px" id="advisor" role="tabpanel">
                                    <blockquote>
                                        <ul style="list-style: none">
                                            <li>Syed Babar Ali</li>
                                        </ul>
                                    </blockquote>
                                </div>
                                <div class="tab-pane padding-30px" id="board-of-directors" role="tabpanel">
                                    <blockquote>
                                        <ul style="list-style: none">
                                            <li>Mr. Towfiq Habib Chinoy</li>
                                            <li>Syed Hyder Ali</li>
                                            <li>Syed Shahid Ali</li>
                                            <li>Mr. Josef Meinrad Mueller</li>
                                            <li>Syed Aslam Mehdi</li>
                                            <li>Mr. Imran Khalid Niazi</li>
                                            <li>Mr. Atif Aslam Bajwa</li>
                                            <li>Mr. Shaheen Sadiq</li>
                                            <li>Mr. Khurram Raza Bakhtayari</li>
                                            <li>Mr. Asghar Abbas</li>
                                        </ul>
                                    </blockquote>
                                </div>
                                <div class="tab-pane padding-30px" id="audit-committee" role="tabpanel">
                                    <blockquote>
                                        <ul style="list-style: none">
                                            <li>Mr. Atif Aslam Bajwa</li>
                                            <li>Mr. Tariq Iqbal Khan </li>
                                            <li>Shamim Ahmed Khan</li>
                                            <li>Imran Khalid Niazi</li>
                                            <li>Syed Shahid Ali</li>
                                            <li>Syed Aslam Mehdi</li>
                                        </ul>
                                    </blockquote>
                                </div>
                                <div class="tab-pane padding-30px" id="company-secretary" role="tabpanel">
                                    <blockquote>
                                        <ul style="list-style: none">
                                            <li>Adi J. Cawasji</li>
                                        </ul>
                                    </blockquote>
                                </div>
                                <div class="tab-pane padding-30px" id="hr-remuneration" role="tabpanel">
                                    <blockquote>
                                        <ul style="list-style: none">
                                            <li>Mr. Atif Aslam Bajwa</li>
                                            <li>Mr. Towfiq Habib Chinoy</li>
                                            <li>Mr. Josef Meinrad Mueller</li>
                                            <li>Mr. Tariq Iqbal Khan</li>
                                            <li>Mr. Nayab Baig</li>
                                        </ul>
                                    </blockquote>
                                </div>
                                <div class="tab-pane padding-30px" id="auditors" role="tabpanel">
                                    <blockquote>
                                        <ul style="list-style: none">
                                            <li>A.F. Ferguson & Co.</li>
                                            <li>Chartered Accountants</li>
                                        </ul>
                                    </blockquote>
                                </div>
                                <div class="tab-pane padding-30px" id="legal-advisors" role="tabpanel">
                                    <blockquote>
                                        <ul style="list-style: none">
                                            <li>Akhtar Ali & Associates (Lahore)</li>
                                            <li>Altaf And Altaf  Law Associates (Lahore)</li>
                                            <li>Andrabi and Gabriel Advocates, Solicitors and Tax Attorneys (Lahore)</li>
                                            <li>Ashtar Ali & Co, Advocates and Corporate Consultants (Lahore)</li>
                                            <li>Cornelius, Lane & Mufti (Lahore)</li>
                                            <li>Farogh Naseem and Company Advocates (Karachi)</li>
                                            <li>Haider Mota BNR (Lahore)</li>
                                            <li>Hassan & Hassan Advocates (Lahore)</li>
                                            <li>Hassan Qureshi & Mamdot Advocates &Legal Consultants (Lahore)</li>
                                            <li>Ijaz Ahmed & Associates (Karachi)</li>
                                            <li>Iqbal and Asim (Karachi)</li>
                                            <li>Lexium (Lahore)</li>
                                            <li>Masood Aziz & Associates (Karachi)</li>
                                            <li>ORR, Dignam & Co Advocates (Karachi)</li>
                                            <li>Sirajul Haque & Co. (Karachi)</li>
                                        </ul>
                                    </blockquote>
                                </div>
                                <div class="tab-pane padding-30px" id="credit-rating" role="tabpanel">
                                    <blockquote>
                                        <ul style="list-style: none">
                                            <ul>
                                                <li>Long-Term AA (Double A)</li>
                                                <li>Short-Term A1+ (A One Plus)</li>
                                            </ul>
                                        </ul>
                                    </blockquote>
                                </div>
                                <div class="tab-pane padding-30px" id="company-bankers" role="tabpanel">
                                    <blockquote>
                                        <ul style="list-style: none">
                                            <li>Allied Bank Limited</li>
                                            <li>Askari Bank Limited</li>
                                            <li>Bank Alfalah Limited</li>
                                            <li>Bank Al-Habib Limited</li>
                                            <li>Deutsche Bank AG</li>
                                            <li>Dubai Islamic Bank Pakistan Limited</li>
                                            <li>Habib Bank Limited</li>
                                            <li>Habib Metropolitan Bank Limited</li>
                                            <li>International Finance Corporation (IFC)</li>
                                            <li>JS Bank Limited</li>
                                            <li>MCB Bank Limited</li>
                                            <li>Meezan Bank Limited</li>
                                            <li>Samba Bank Limited</li>
                                            <li>Soneri Bank Limited</li>
                                            <li>Standard Chartered Bank (Pakistan) Limited</li>
                                            <li>The Bank of Punjab</li>
                                            <li>MUFG Bank Limited (Formerly The Bank of Tokyo-Mitsubishi UFJ, Ltd.)</li>
                                            <li>National Bank of Pakistan</li>
                                            <li>United Bank Limit</li>
                                        </ul>
                                    </blockquote>
                                </div>
                                <div class="tab-pane padding-30px" id="head-office" role="tabpanel">
                                    <blockquote>
                                        <ul style="list-style: none">
                                            <li>
                                                Shahrah-e-Roomi
                                                P.O. Amer Sidhu
                                                Lahore - 54760, Pakistan<br>
                                                Tel. : (0423) 5811541-46, 5811191-94<br>
                                                Cable : PACKAGES LAHORE<br>
                                                Fax : (0423) 5811195, 5820147
                                            </li>
                                        </ul>
                                    </blockquote>
                                    <blockquote>
                                        <ul style="list-style: none">
                                            <li>
                                                <strong>Registered Office & Regional Sales office</strong><br><br>
                                                4th Floor, The Forum
                                                Suite No. 416 - 422, G-20, Block 9,
                                                Khayaban-e-Jami, Clifton,
                                                Karachi-75600, Pakistan<br>
                                                Tel. : (021) 35874047-49, 35378650-51, 35831618, 35833011, 35831664<br>
                                                Fax : (021) 35860251
                                            </li><br>
                                            <li>
                                                <strong>Regional Sales office</strong><br><br>
                                                2nd Floor, G.D. Arcade
                                                73-E, Fazal-ul-Haq Road, Blue Area,
                                                Islamabad-44000, Pakistan<br>
                                                Tel. : (051) 2348307-9, 2806267<br>
                                                Fax : (051) 2348310
                                            </li><br>
                                            <li>
                                                <strong>Zonal Sales Offices</strong><br><br>
                                                C-2, Hassan Arcade Nusrat Road,
                                                Multan Cantt. - 60000, Pakistan<br>
                                                Tel & Fax : (061) 4504553<br><br>

                                                9th Floor, State Life Building,
                                                2-Liaquat Road, Faisalabad<br>
                                                Tel. : (041) 2540842, 2540815<br>
                                                Fax. : (041) 2540842, 2540815<br><br>

                                                Uzair Enterprises, Teer Chowk,
                                                Bhuta Road, Sukkur-65200<br>
                                                Tel : (071) 5616138<br>
                                                Fax : (071) 5616138<br><br>

                                                M. Hamza Traders, 15-D Gul Plaza,
                                                Opposite Charsadda Bus Stand,
                                                Peshawar-25000<br>
                                                Tel : 0301-8650486, (091) 2043719<br>
                                                Fax : (061) 4504553<br>
                                            </li>
                                        </ul>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="fullscreen-container" >
        <div class="background-grey-1 padding-25px text-center" style="background-color: #fbaf42">
            <h2 class="text-white">Reports</h2>
        </div>
    </section>
    <div class="padding-tb-40px background-light-grey" style="transform: none;">
        <div class="container">
            <div class="row">
                <div class="padding-tb-10px">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#annual-reports" role="tab">Annual Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#quarterly-reports" role="tab">Quarterly Reports</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active padding-30px" id="annual-reports" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/rep2001.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/rep2001.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2001</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/rep2002.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/rep2002.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2002</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/rep2003.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/rep2003.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2003</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/rep2004.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/rep2004.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2004</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/rep2005.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/rep2005.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2005</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/rep2006.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/rep2006.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2006</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/rep2007.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/rep2007.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2007</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/rep2008.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/rep2008.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2008</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/rep2009.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/rep2009.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2009</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/rep2010.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/rep2010.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2010</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/rep2011.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/rep2011.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2011</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Annual-Report-2012.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Annual-Report-2012.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2012</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Annual-Report-2013.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Annual-Report-2013.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2013</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Annual-Report-2014.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Annual-Report-2014.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2014</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Annual-Report-2015.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Annual-Report-2015.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2015</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/annual-Report-2016.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/annual-Report-2016.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2016</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/annual-Report-2017.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/annual-Report-2017.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2017</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/annual-Report-2018.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/annual-Report-2018.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">2018</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane padding-30px" id="quarterly-reports" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/FQR2009.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/FQR2009.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">March 2009</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/SQR2009.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/SQR2009.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">June 2009</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/TQR2009.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/TQR2009.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">Sep 2009</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/FQR2010.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/FQR2010.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">March 2010</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/SQR2010.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/SQR2010.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">June 2010</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/TQR2010.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/TQR2010.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">Sep 2010</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/FQR2011.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/FQR2011.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">March 2011</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/SQR2011.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/SQR2011.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">June 2011</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/TQR2011.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/TQR2011.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">Sep 2011</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/FQR2012.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/FQR2012.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">March 2012</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/SQR2012.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/SQR2012.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">June 2012</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/TQR2012.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/TQR2012.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">Sep 2012</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/March_2013.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/March_2013.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">March 2013</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/June_2013.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/June_2013.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">June 2013</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Sept_2013.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Sept_2013.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">Sep 2013</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="#"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="#" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">March 2014</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/SQR2014.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/SQR2014.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">June 2014</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Sept_2014.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Sept_2014.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">Sep 2014</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/FQR2015.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/FQR2015.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">March 2015</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/June2015.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/June2015.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">June 2015</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Sep2015.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Sep2015.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">Sep 2015</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/March-2016.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/March-2016.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">March 2016</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/June-2016.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/June-2016.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">June 2016</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Pkg-Sep-2016.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Pkg-Sep-2016.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">Sep 2016</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/pkg-March-2017.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/pkg-March-2017.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">March 2017</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Pkg-June-2017.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Pkg-June-2017.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">June 2017</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Pkg-Sep-2017.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Pkg-Sep-2017.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">Sep 2017</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Pkg-March-2018.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Pkg-March-2018.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">March 2018</a>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/June-2018-Report.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/June-2018-Report.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">June 2018</a>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Sep-2018-Report.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Sep-2018-Report.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">Sep 2018</a>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Pkg-March-2019.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Pkg-March-2019.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">March 2019</a>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/Pkg-June-2019.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/Pkg-June-2019.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">June 2019</a>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-2 margin-bottom-40px">
                                            <div class="background-white border border-grey text-center">
                                                <a href="{{asset('assets/financial-reports/PKG-Sep-2019.pdf')}}"><img src="{{asset('assets/img/documents-icon/pdf.png')}}" alt=""></a>
                                                <div class="card-body">
                                                    <a href="{{asset('assets/financial-reports/PKG-Sep-2019.pdf')}}" target="_blank" class="d-block text-dark text-uppercase text-medium margin-bottom-15px font-weight-700">Sep 2019</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @endsection