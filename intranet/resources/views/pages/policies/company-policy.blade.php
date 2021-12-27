@extends('layouts.web-layout')
@section('header')
    <style>
        .background-3{
            background-color: #b42389;
        }
    </style>
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/banner-company-profile-2.jpg')}}">
    </section>
    <section class="padding-tb-100px background-3">
        <div class="container">
            <!-- section title -->
            <div class="row">
                <div class="col-md-7">
                    <div class="margin-bottom-60px text-white wow fadeInUp">
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px">Company Policy</h3>
                    </div>
                </div>
            </div>
            <!-- // section title -->


            <div class="row">

                <div class="col-md-10">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
                        <div class="title margin-bottom-15px">
                            <div class="width-32px float-left margin-right-15px pull-top-5px"></div>
                            <h2>Quality Policy</h2>
                        </div>
                        <p class="opacity-5">
				•	Packages Ltd. is strongly committed to produce quality products that conform to customer’s requirements at a competitive price and all applicable legal, regulatory and other requirements.<br>
				•	We will continually improve our Quality Management System, quality performance, infrastructure and human resources.<br>
				•	We will proactively identify & eliminate or minimize potential risks to the quality of our product and other specific commitment(s) relevant to the context of the organization.<br>
				•	We will achieve satisfaction of all interested parties by meeting our obligations and exceeding them where applicable.<br>
				•	We will set quality objectives at all levels and allocate appropriate resources to achieve them.<br>
				•	We will ensure the availability of Quality Policy to all interested parties and its communication within company so that all our employees are aware of this policy.
			</p>
			<h6><a href="{{asset('assets/docs/qa/qa-ehs-version-1.1/Quality Policy.pdf')}}" target="_blank">Click here to download quality policy</a></h6>
                    </div>
                </div>


                <div class="col-md-8">
                    <div class="item margin-bottom-50px text-white wow fadeInUp" data-wow-delay="0.2s">
                        <div class="title margin-bottom-15px">
                            <div class="width-32px float-left margin-right-15px pull-top-5px"></div>
                            <h2>Environment, Health and Safety (EHS/IMS) Policy</h2>
                        </div>
                        <p class="opacity-5">
				We intend to be a world class company that not only delivers quality products & services but also takes care of its personnel wellbeing & safety, environment / energy & overall sustainability of the community.<br><br>
				We are committed to achieve this by:<br><br>
					1.	Complying with all applicable laws and regulatory requirements.<br>
					2.	Setting objectives and targets for reviewing and continually improving management systems as we are upgrading our IMS (BRC, HFMS, FSSC 22000, En-MS, EMS, FSC COC, ISO 45001 & Social Compliance) in perpetuity.<br>
					3.	Developing an effective integrated management system to reduce waste, eliminate hazards, reduce Occupational Health and Safety Risks, prevent incident/accident/ill health & Environmental impact mitigation by conserving all natural/synthetic resources.
					4.	Promoting workers engagement in reducing overall risks related to Environment, Health and Safety including all the associated hazards in our operations.<br>
					5.	Ensuring that all food related packaging material is procured, stock up, produced, stored and delivered in safe and hygienic condition as per applicable standard and customer requirements. <br>
					6.	Creating a safe and friendly work environment for all stakeholders.<br>
					7.	Implementing individual compatibility to comply with IMS, BRC, HFMS, and En-MS requirements.<br>
					8.	Managing our social impacts and ensuring supply chain sustainability throughout our product life cycle by closely working with our suppliers to mitigate potential risk for continual improvement.<br>
					9.	Ensuring the peace of mind of our consumers by providing Halaal Packaging and Consumer Products and effective communication on Halaal food issues with our suppliers, customers and relevant interested parties in the food chain.<br>
					10.	Improving the organization's energy performance through implementation of energy management system by avoiding energy wastage, continually improve our energy performance, upholding legal and other requirements regarding energy and ensuring information and resources that are necessary to achieve energy objectives and set targets. Also by supporting the purchase of energy-efficient products, services and design for energy performance improvement.<br>
					11.	Leading by example and committing to keeping our own carbon footprint to an absolute minimum.<br>
					12.	Reducing our water foot print along with its conservation considering it as an asset of nature.<br><br>

				This policy is applicable to each individual whether employee, contractor / sub-contractor, supplier, visitor and all other stake holders of Packages Limited. It is available for all via printed copies, intranet and internet postings
			<h6><a href="{{asset('assets/docs/qa/qa-ehs-version-1.1/IMS policy - signed.jpg')}}" target="_blank">Click here to download IMS policy</a></h6>
			</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="item margin-bottom-50px text-white wow fadeInUp" data-wow-delay="0.4s">
                        <div class="title margin-bottom-15px">
                            <div class="width-32px float-left margin-right-15px pull-top-5px"></div>
                            <h2>Packages FSC CoC Policy</h2>
                        </div>
                        <p class="opacity-5">
				Being a responsible body corporate, Packages Ltd. is aware of the harmful effects of deforestation on our ecology. We strive to be environmentally aware and observe the highest social, environmental, occupational health and safety standards in the market.<br><br>
				Alongside other achievements, we take pride in announcing that we implement our best efforts to avoid trading and sourcing wood or wood fiber from the following categories: <br>
					1. Illegal logging or the trade in illegal wood or forest products<br>
					2. Violation of traditional and human rights in forestry operations<br>
					3. Destruction of high conservation values in forestry operations<br>
					4. Significant conversion of forests to plantations or non-forest use<br>
					5. Introduction of genetically modified organisms in forestry operations<br>
					6. Violation of any of the ILO Core Conventions, as defined in the ILO Declaration on Fundamental Principles and Rights at Work, 1998<br>
					7. Non-compliance with any legal and regulatory requirements in this regard. <br><br>

				Packages Limited is authorized to buy from its approved FSC suppliers and sell tree-based material with labels FSC 100%, FSC Mix, FSC Controlled and FSC Recycled under Transfer System.<br>
				This policy is applicable to each individual whether employee, contractor/sub-contractor, supplier, visitor and all other stake holders of Packages Limited. It is available for all via printed copies, intranet and internet postings.
				<h6><a href="{{asset('assets/docs/qa/qa-ehs-version-1.1/Packages FSC Policy - Signed.JPG')}}" target="_blank">Click here to download FSC CoC policy</a></h6>
				<br>
				<hr>
				<div class="title margin-bottom-15px">
                            <div class="width-32px float-left margin-right-15px pull-top-5px"></div>
                            <h2>Packages Smoking Policy</h2>
                        </div>
				<h6><a href="{{asset('assets/docs/qa/qa-ehs-version-1.1/Smoking-Policy-Rev-2.pdf')}}" target="_blank">Click here to download Smoking Policy</a></h6>
			</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    @endsection