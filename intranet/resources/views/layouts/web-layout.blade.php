<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Intranet - Packages Limited</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/icon.png')}}">

    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Travel, HTML5, CSS3, Hotel , Multipurpose, Template, Create a Travel website fast">
    <meta name="description" content="HTML5 Multipurpose Template, Create a website fast">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:300i,400,700,400i,500%7CDosis:300')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}"/>

    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/colors/color-7.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/colors/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/elegant_icon.css')}}">

    <script type="text/javascript" src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.gomap-1.3.3.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('assets/revslider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/revslider/fonts/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/revslider/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/side-panel.css')}}">

    <script type="text/javascript" src="{{asset('assets/revslider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revslider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revslider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revslider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revslider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revslider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revslider/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revslider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revslider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revslider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/revslider/js/extensions/revolution.extension.video.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/animate/animate.css')}}">

    <style>
        li .has-dropdown a::after {
            content: " " !important;
        }
    </style>
    @yield('header')
</head>
<body class="background-white">
<div class="icon-bar" id="icon-bar" style="margin-left: -43px;">
    <a onclick="openNav()" class="openbtn" style="color: #fff;">Quick Links</a>
</div>
<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" style="padding-top: 20px" onclick="closeNav()">×</a>
    <a href="http://172.16.25.250/pkgs/gatepasss/new.php" target="_blank">Gate Pass</a>
    <a href="http://ers.packagesgroup.com" target="_blank">Employee Reimbursement System</a>
</div>
<header>
    <div class="fixed-header-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <a id="logo" href="{{URL::to('/')}}" class="d-inline-block margin-tb-10px"><img src="{{asset('assets/img/logo-packages-limited.png')}}" style="height: 70px;" alt="packages-blue-logo"></a>
                    <a class="mobile-toggle padding-15px background-main-color" href="#"><i class="fas fa-bars"></i></a>
                </div>
                <div class="col-lg-8 position-inherit">
                    <ul id="menu-main" class="nav-menu link-padding-tb-25px text-center">
                        <li class="has-dropdown"><a href="#">Who We Are</a>
                            <ul class="sub-menu">
                                <li class="has-dropdown"><a href="{{URL::to('company-profile')}}">Company Profile</a></li>
                                <li class="has-dropdown"><a href="{{URL::to('over-the-years')}}">Over the Years</a></li>
                                <li class="has-dropdown"><a href="{{URL::to('our-core-values')}}">Our Core Values</a></li>
                                <li class="has-dropdown"><a href="{{URL::to('legal-information')}}">Legal Information</a></li>
                                <li class="has-dropdown"><a href="{{URL::to('legacy-of-love')}}">Legacy of Love</a></li>
                                <li class="has-dropdown"><a href="{{asset('assets/packages-story/PKGS_STORY.pdf')}}" target="_blank">The Story Of Packages</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="#">SAP</a>
                            <ul class="sub-menu">
                                <li class="has-dropdown"><a href="{{URL::to('sap/materials-management')}}">Materials Management</a></li>
                                <li class="has-dropdown"><a href="{{URL::to('sap/sales-and-distribution')}}">Sales and Distribution</a></li>
                                <li class="has-dropdown"><a href="{{URL::to('sap/production-planning')}}">Production Planning</a></li>
                                <li class="has-dropdown"><a href="{{URL::to('sap/plant-maintenance')}}">Plant Maintenance</a></li>
                                <li class="has-dropdown"><a href="{{URL::to('sap/controlling')}}">Controlling</a></li>
                                <li class="has-dropdown"><a href="{{URL::to('sap/finance-accounting')}}">Finance Accounting</a></li>
                                <li class="has-dropdown"><a href="{{URL::to('request-initiation')}}">Request Initiation</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="#">EHS</a>
                            <ul class="sub-menu">
                                <!--<li class="has-dropdown"><a href="{{URL::to('qa&ehs')}}">EHS and Food Safety</a></li>-->
                                <!--<li class="has-dropdown"><a href="{{URL::to('green-office')}}">Green Office</a></li>-->
                                <!--<li class="has-dropdown"><a href="{{URL::to('iso')}}">ISO 9001</a></li>-->
                                <!--<li class="has-dropdown"><a href="{{URL::to('fsc-coc')}}">FSC COC</a></li>-->
                                <li class="has-dropdown"><a href="{{asset('assets/policies/ehs/Sustainability Report 2018.pdf')}}">Sustainability Report 2018</a></li>
								<li class="has-dropdown"><a href="{{asset('assets/policies/ehs/packages_group_sustainability_report_2019.pdf')}}">Sustainability Report 2019</a></li>
								<li class="has-dropdown"><a href="{{asset('assets/policies/ehs/2020 - Packages Sustainability Report.pdf')}}">Sustainability Report 2020</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="#">Policies</a>
                            <ul class="sub-menu">
                                <li class="has-dropdown"><a>Human Resource</a>
                                    <ul class="sub-menu">
                                        <li class="has-dropdown"><a href="{{URL::to('hr/people-process/documents')}}">People Process - Documents</a></li>
                                        <li class="has-dropdown"><a href="{{URL::to('hr/people-process/forms')}}">People Process - Forms</a></li>
                                        <li class="has-dropdown"><a href="{{URL::to('hr/packages-group/talent-framework')}}">Packages Group Talent Framework</a></li>
                                        <li class="has-dropdown"><a href="{{URL::to('hr/packages-group/working-way')}}">Packages Group Working Way </a></li>
					<li class="has-dropdown"><a href="{{asset('assets/policies/human-resources/EES guide Packages group 2019.pptx')}}">Employee Engagement Survey </a></li>
					<li class="has-dropdown"><a href="{{URL::to('hr/packages-group/e-learning')}}">E- Learnings by Syeda Henna Babar Ali </a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a>Inventory</a>
                                    <ul class="sub-menu">
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/inventory/returnable-items-gatepass-process.pdf')}}" target="_blank">Returnable Items gate pass process</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/inventory/inventory-monetoring-procedure.pdf')}}" target="_blank">Inventory Monitoring procedure</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/inventory/compliance-with-material-write-off-procedure.pdf')}}" target="_blank">Compliance with material write off procedure</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a>General</a>
                                    <ul class="sub-menu">
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/general/risk-management-policy.pdf')}}">Risk Management policy</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a>Procurement</a>
                                    <ul class="sub-menu">
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/procurement/Policy for rotation of purchasers.pdf')}}">Rotation of Purchasers</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/procurement/payment-of-invoices.pdf')}}">Procurement Protocol</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/procurement/procurement-policy.pdf')}}">Procurement Policy</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/procurement/procurement -policy-bufp.pdf')}}">Procurement policy-BUFP</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/procurement/Payment of Invoices.pdf')}}">Payment of Invoices</a></li>
										<li class="has-dropdown"><a href="{{asset('assets/policies/procurement/SC_Manual_Final.pdf')}}">Group Supply Chain Manual</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a>Sales & Marketing</a>
                                    <ul class="sub-menu">
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/sales&marketing/credit-policy-(bucp).pdf')}}">Credit Policy(BUCP)</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/sales&marketing/marketing-policy-(bucp).pdf')}}">Marketing Policy (BUCP)</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/sales&marketing/credit-policy-(industrial-marketing).pdf')}}">Credit Policy(Industrial Marketing)</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a>Finance & Accounts</a>
                                    <ul class="sub-menu">
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/version-1-1/Asset Capitalization Procedures and Controls.pdf')}}">Asset Capitalization Procedures & Controls</a></li>
										<li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/version-1-1/Investor Relations and Communication Policy.pdf')}}">Investor Relations and Communication Policy</a></li>
										<li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/version-1-2/Distribution On-boarding SOP and form.pdf')}}">Distribution On-boarding SOP and form</a></li>
										<li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/version-1-2/Distributor Termination SOP and Form.pdf')}}">Distributor Termination SOP and Form</a></li>
										<li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/version-1-2/SOP for Dispatch of Stocks to 3rd Party.pdf')}}">SOP for Dispatch of Stocks to 3rd Party</a></li>
										<li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/version-1-1/Insider Trading Policy.pdf')}}">Insider Trading Policy</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/investment-policy.pdf')}}">Investment Policy</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/debtors-write-off-policy.pdf')}}">Debtors Write Off Policy</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/fixed-asset-tagging&transfer-protocol.pdf')}}">Fixed Asset tagging & transfer protocol</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/3rd-party-contractor-bill-processing-protocol-kumail.pdf')}}">3rd Party Contractor Bill Processing Protocol - Kumail</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/3rd-party-contractor-bill-processing-protocol-lms.pdf')}}">3rd Party Contractor Bill Processing Protocol - LMS</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/3rd-party-contractor-bill-processing-protocol-brooms.pdf')}}">3rd Party Contractor Bill Processing Protocol - Brooms</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/materiality-policy.pdf')}}">Materiality Policy</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/shareholder-communication-and-investor-relations-policy.pdf')}}">Shareholder Communication and Investor Relations Policy</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/finance&accounts/related-party-transactions-policy.pdf')}}">Related Party Policy</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a>Internal Audit</a>
                                    <ul class="sub-menu">
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/internal-audit/internal-audit-manual.pdf')}}">Internal Audit Manual</a></li>
										<li class="has-dropdown"><a href="{{asset('assets/policies/internal-audit/internal-audit-policy.pdf')}}">Internal Audit Policy</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a>Information Technology</a>
                                    <ul class="sub-menu">
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/information-technology/it-policy.pdf')}}">IT Policy</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/information-technology/disaster-recovery -plan.pdf')}}">Disaster Recovery Plan</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/information-technology/website&intranet-update-protocol.pdf')}}">Website & Intranet update protocol</a></li>
                                        <li class="has-dropdown"><a href="{{asset('assets/policies/information-technology/Information-technology-policy-and-procedure-manual.pdf')}}">Group Information Technology Policy and Procedure Manual </a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a href="{{URL::to('company-policy')}}">Company Policy</a></li>
                                <li class="has-dropdown"><a href="#">Forms</a>
                                    <ul class="sub-menu">
                                        <li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/Materials Disposal Form.pdf')}}">Materials Disposal Form </a></li>
                                        <li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/Amended Vacancy Approval Form.pdf')}}">Amended Vacancy Approval Form</a></li>
                                        <li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/Asset Transfer Form.pdf')}}">Asset Transfer Form </a></li>
                                        <li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/Capital Expenditure Form.pdf')}}"> Capital Expenditure Form</a></li>
                                        <li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/In Patient Form.pdf')}}">In Patient form</a></li>
                                        <li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/Medical Claim Form.pdf')}}"> Medical Claim Form</a></li>
                                        <li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/Misc Cash Voucher.pdf')}}">Miscellaneous Cash Voucher</a></li>
                                        <li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/Providend fund load form.pdf')}}">Provident Fund Loan Form</a></li>
                                        <li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/Assets Disposal Form.pdf')}}">Assets Disposal Form </a></li>
										<li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/Change_in_Vendor_Information_Form.pdf')}}">Change in Vendor Information Form </a></li>
										<li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/No_Conflict_of_Interest_Declaration.pdf')}}">No Conflict of Interest Declaration</a></li>
										<li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/Supplier_Registration_Form.pdf')}}">Supplier Registration Form</a></li>
										<li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/Worksheet_in_Chapter_IV_Vendor_Registration_Evaluation_and_Approval_Ver_01_Services.pdf')}}">Worksheet in Chapter IV Vendor Registration Evaluation and Approval Ver 01 Services</a></li>
										<li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/Forms/Worksheet_in_Chapter_IV_Vendor_Registration_Evaluation_and_Approval_Ver_01_Goods.pdf')}}">Worksheet in Chapter IV Vendor Registration Evaluation and Approval Ver 01 Goods</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/1-Registration process.docx')}}">1-Registration process.docx</a></li>
                                <li class="has-dropdown"><a target="_blank" href="{{asset('assets/docs/2-Income tax return and wealth statement process.docx')}}">2-Income tax return and wealth statement process.docx</a></li>
                                <li class="has-dropdown"><a target="_blank" href="{{asset('assets/policies/other/Anti Harassment Policy.pdf')}}">Anti Harassment Policy</a></li>
                                <li class="has-dropdown"><a target="_blank" href="{{asset('assets/policies/other/Whistle Blowing Policy & Procedures.pdf')}}">Whistle Blowing Policy</a></li>
				<li class="has-dropdown"><a target="_blank" href="{{asset('assets/policies/other/Anti Fraud Policy.pdf')}}">Anti Fraud Policy</a></li>
				<li class="has-dropdown"><a target="_blank" href="{{asset('assets/policies/other/Group Code of Conduct.pdf')}}">Group Code of Conduct</a></li>
				<li class="has-dropdown"><a href="#">Consumer Division</a>
                                    <ul class="sub-menu">
                                        <li class="has-dropdown"><a href="{{URL::to('cpd/irpolicies/documents')}}">Innovation & Renovation</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class=""><a href="" data-toggle="modal" data-target="#delete">Packages & You</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-2 text-right">
                    <a id="logo" href="{{URL::to('/')}}" class="d-inline-block margin-tb-10px">
                        <img src="{{asset('assets/img/logo-packages-values.png')}}" style="height: 70px;" alt="packages-blue-logo">
                    </a>
                    <a class="mobile-toggle padding-15px background-main-color" href="#"><i class="fas fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="modal animated rubberBand text-left" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header background-main-color white">
                <h4 class="modal-title white" id="myModalLabel10" style="color: white">Login - Packages & You</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="http://172.16.25.250/packages-and-you/site/login.php">
                <div class="modal-body">
                    <div class="text-center">
                        <div class="p-1">
                            <img src="{{asset('assets/img/logo-packages-values.png')}}" alt="branding logo" style="width: 30%; height: auto">
                        </div>
                    </div>
                    <hr>
                    <div class="form row">
                        <div class="form-group col-md-12 mb-2">
                            <label class="form-control-label">Employee ID</label>
                            <input type="text" class="form-control" name="emp_id" maxlength="4" required>
                        </div>
                        <div class="form-group col-md-12 mb-2">
                            <label class="form-control-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group col-md-12 mb-2 text-center">
                            <a href="https://ers.packagesgroup.com/forget/password" style="color: #336699">Forget Password ?</a>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-success" style="margin-top: 90px; margin-bottom: 0px">
        <strong>Oh !</strong> Please fix the following issues to continue
        <ul class="error">
            @foreach ($errors->all() as $error)
                <li style="list-style: circle">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has("error"))
    <div class="alert alert-danger" style="margin-top: 90px; margin-bottom: 0px">
        <strong>Oh !</strong> {{ Session::get("error") }}
    </div>
@endif
@if(Session::has("systemError"))
    <div class="alert alert-success" style="margin-top: 90px; margin-bottom: 0px">
        <strong>Oh ! Please contact system administrator.</strong><br>{{ Session::get("systemError") }}<br><br><strong>Sorry for Inconvenience</strong>.
    </div>
@endif
@if(Session::has("success"))
    <div class="alert alert-success" style="margin-top: 90px; margin-bottom: 0px">
        <strong>Yeah !</strong> {{ Session::get("success") }}
    </div>
@endif
@if(Cookie::has('success'))
    <div class="alert alert-success" style="margin-top: 90px; margin-bottom: 0px">
        <strong>Yeah !</strong> {{ Session::get("success") }}
    </div>
@endif
@yield('body')
<div class="padding-tb-20px background-main-color">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="text-white margin-tb-15px text-center text-lg-left">
                    Packages | @2018 All copy rights reserved
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-center">
                    <img src="{{asset('assets/img/pWhite.png')}}" style="height: 70px;" alt="packages-white-logo">
                </div>
            </div>
            <div class="col-md-5">
                <ul class="list-inline text-lg-right text-center margin-lr-0px margin-tb-15px text-white">
                    <li class="list-inline-item margin-lr-8px">
                        <a>Creating a Better Tomorrow</a>
                    </li>
                    <li class="list-inline-item margin-lr-8px">
                        <a class="facebook" target="_blank" href="{{URL::to('https://www.facebook.com/PackagesLimited/')}}"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item margin-lr-8px">
                        <a class="facebook" target="_blank" href="{{URL::to('https://www.linkedin.com/in/packages-limited-570a03132/')}}"><i class="fab fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script></script>
<script type="text/javascript" src="{{asset('assets/js/sticky-sidebar.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/YouTubePopUp.jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/imagesloaded.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/secure-me.js')}}"></script>

<script src="{{asset('app-assets/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>
@yield('footer')
<script>
    function openNav() {
        document.getElementById("mySidepanel").style.width = "25%";
        document.getElementById("icon-bar").setAttribute("hidden",true);
    }

    function closeNav() {
        document.getElementById("mySidepanel").style.width = "0px";
        document.getElementById("icon-bar").removeAttribute("hidden");


    }
</script>
</body>
</html>