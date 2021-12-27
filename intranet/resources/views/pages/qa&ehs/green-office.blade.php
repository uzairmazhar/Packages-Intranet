@extends('layouts.web-layout')
@section('header')
    <style>
        .background-3{
            background-color: #559a1c;
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
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px">Green Office</h3>
                    </div>
                </div>
            </div>
            <!-- // section title -->
            <div class="row">
                <div class="col-md-10">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
                        <div class="title margin-bottom-15px">
                            <div class="width-32px float-left margin-right-15px pull-top-5px"></div>
                            <h2>Paper Conversion Tips</h2>
                        </div>
                        <p class="opacity-5">
				1.	Use both sides of paper: When making copies, set your machine to use both sides of paper and cut your consumption in half. <br>
				2.	Shred and reuse unwanted paper: Instead of throwing away old documents, shred or reuse them. <br>
				3.	Reuse boxes: When you get shipments in, save your boxes so that you can use them again for shipments out. <br>
				4.	Avoid color printing: Color printing generally uses more ink, so print in black and white when you can. <br>
				5.	Print wisely: Print only if necessary otherwise use emails. Try to print on both sides of paper. Print Preview the document to ensure formatting before hitting print button.<br>
				6.	Buy recycled toner and ink: Cartridges contribute metal and plastic to landfills, but buying toner and ink that’s refilled can help alleviate this environmental burden. <br>
				7.	Distribute memos via email: Instead of printing out memos for distribution, email them and let employees decide whether or not they wish to print them. <br>
				8.	Store manuals, policies and other documents online: Don’t print out huge employee handbooks. Allow employees to access PDF copies. <br>
			</p>
                    </div>
                </div>
 		<div class="col-md-10">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
                        <div class="title margin-bottom-15px">
                            <div class="width-32px float-left margin-right-15px pull-top-5px"></div>
                            <h2>Transportation</h2>
                        </div>
                        <p class="opacity-5">
				1.	Create a carpool program: Many of your employees may want to carpool, but don’t know where coworkers live or simply don’t have the courage to ask around. You can help by administering a program to get them connected. <br>
				2.	Videoconference: Whenever possible, try to videoconference instead of traveling to meetings. <br>
			</p>
                    </div>
                </div>
		<div class="col-md-10">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
                        <div class="title margin-bottom-15px">
                            <div class="width-32px float-left margin-right-15px pull-top-5px"></div>
                            <h2>Equipment</h2>
                        </div>
                        <p class="opacity-5">
				1.	Unplug equipment when not in use: Shut down and unplug copiers, printers and other equipment nightly and on weekends. <br>
				2.	Buy high-quality equipment: Be sure to purchase that will last and not become obsolete quickly. <br>
			</p>
                    </div>
                </div>
		<div class="col-md-10">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
                        <div class="title margin-bottom-15px">
                            <div class="width-32px float-left margin-right-15px pull-top-5px"></div>
                            <h2>Electricity</h2>
                        </div>
                        <p class="opacity-5">
				1.	Change your thermostat: Set your thermostat at 26C⁰ <br>
				2.	Switch to LED Lights: Switch towards LED Lights wherever possible. <br>
				3.	Turn off lights when not in use: Turn off lights when not in use. <br>
				4.	Take advantage of natural lighting: Install windows and skylights so that you can use natural daytime light instead of electrical lighting. <br>
			</p>
                    </div>
                </div>
		<div class="col-md-10">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
                        <div class="title margin-bottom-15px">
                            <div class="width-32px float-left margin-right-15px pull-top-5px"></div>
                            <h2>Computers/Electronics Devices</h2>
                        </div>
                        <p class="opacity-5">
				1.	Unplug computers when not in use: 
				2.	Buy for quality: When buying , buy units that will last and avoid becoming obsolete too quickly. <br>
				3.	Buy for energy savings: Be sure your computers, monitors and printers are energy efficient. <br>
				4.	Give your computer a nap: Set your computers to go to sleep when not in use. Creating short energy breaks can cut energy use by up to 70 percent. <br>
				5.	Banish screen savers: Make sure to know screen savers won’t save energy. They eat up lighting and processing energy. Instead, set screen savers to “none” or “blank screen.” <br>
				6.	Consider laptops: Consider buying laptops, it uses 90% less energy than desktop computers. <br>
			</p>
                    </div>
                </div>
		<div class="col-md-10">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
                        <div class="title margin-bottom-15px">
                            <div class="width-32px float-left margin-right-15px pull-top-5px"></div>
                            <h2>Miscellaneous</h2>
                        </div>
                        <p class="opacity-5">
				1.	Provide filtered water: Instead of bottled water, provide employees with filtered drinking water and reusable cups. <br>
				2.	Install low-flow faucets and toilets: Help conserve water by installing low-flow faucets and toilets in restrooms and other common areas. <br>
				3.	Report Water Leakages: Report any water leakages immediately and get it fixed. <br>
				4.	Consider office sharing: If you have a number of employees that don’t use the office regularly, consider assigning offices based on a schedule. You’ll save on utilities, equipment, furniture and more. <br>
			</p>
                    </div>
                </div>
		<div class="col-md-10">
                    <div class="item margin-bottom-50px text-white wow fadeInUp">
                        <div class="title margin-bottom-15px">
                            <div class="width-32px float-left margin-right-15px pull-top-5px"></div>
                            <h2>Buying green</h2>
                        </div>
                        <p class="opacity-5">
				1.	Reuse and refill toner cartridges and ribbons. <br>
				2.	Purchase non-toxic, biodegradable cleaners that contain low- or no-volatile organic compounds. <br>
				3.	Buy in bulk. <br>
				4.	Buy products that are reusable, returnable or refillable. <br>
				5.	Buy recycled office products that contain post-consumer recycled material. <br>
				6.	Use flexible interior features, such as movable walls, to reduce waste associated with renovation. <br>
			</p>
			<h6><a href="{{asset('assets/docs/qa/qa-ehs-version-1.1/WWF Green Office Diploma Certificate.jpg')}}" target="_blank">Green Office Certificate 2019</a></h6>
			<h6><a href="{{asset('assets/docs/qa/qa-ehs-version-1.1/Green-Office-logo (1).tif')}}" target="_blank">Green Office Logo</a></h6>
			<h6><a href="{{asset('assets/docs/qa/qa-ehs-version-1.1/Green Office Checklist.pdf')}}" target="_blank">Green Office Checklist</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    @endsection