@extends('layouts.web-layout')
@section('header')
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/quality-focus.jpg')}}">
    </section>
    <section class="background-light-grey padding-tb-25px" style="background-color: #FBAF42">
        <div class="container">
            <h1 class="font-weight-300 opacity-7 text-center margin-bottom-45px wow fadeInUp">EHS & Food Safety</h1>
            <div class="row">
                <div class="col-md-4 bg-white">
                    <h3 class="font-weight-300 opacity-7 text-center padding-tb-10px wow fadeInUp"><small>Standard</small><br>Integrated Management System (IMS)</h3>
					<div class="col-lg-12 col-md-12 col-sm-12 text-center wow fadeInUp" data-wow-delay="1.0s">
                     <h4 class="background-grey-2 text-white padding-15px text-center border-radius-10"><a href="{{URL::to('ims-documents')}}" target="_blank">IMS Policy</a>  </h4>
                    </div>
		    <div class="col-lg-12 col-md-12 col-sm-12 text-center wow fadeInUp" data-wow-delay="1.0s">
                        <h4 class="background-grey-2 text-white padding-15px text-center border-radius-10"><a href="{{URL::to('assets/docs/qa/qa-ehs-version-1.1/Quality Policy.pdf')}}" target="_blank">Quality Policy</a>  </h4>
                    </div>
                </div>
                <div class="col-md-4 background-white-alpha">
                    <h3 class="font-weight-300 opacity-7 text-center padding-tb-10px wow fadeInUp">Food Safety Documents</h3>
					<div class="col-lg-12 col-md-12 col-sm-12 text-center wow fadeInUp" data-wow-delay="1.0s">
                     <h4 class="background-grey-2 text-white padding-15px text-center border-radius-10"><a href="{{URL::to('food-safety-documents')}}" target="_blank">Food Safety Documents</a>  </h4>
                    </div>
                </div>
                <div class="col-md-4 bg-white">
                    <h3 class="font-weight-300 opacity-7 text-center padding-tb-10px wow fadeInUp"><small>IFC</small><br>Guidelines</h3>
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center wow fadeInUp" data-wow-delay="1.0s">
                        <h4 class="background-grey-2 text-white padding-15px text-center border-radius-10"><a href="{{URL::to('assets/docs/qa/ifc-printing.pdf')}}">IFC Printing</a>  </h4>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center wow fadeInUp" data-wow-delay="1.0s">
                        <h4 class="background-grey-2 text-white padding-15px text-center border-radius-10"><a href="{{URL::to('assets/docs/qa/ifc-general.pdf')}}">IFC General</a>  </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@endsection