
@extends('layouts.web-layout-1')

@section('header')
@endsection
@section('body')
    <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->

            <!-- END: Subheader -->
            <div class="m-content">
                <!--begin:: Widgets/Stats-->

                <!--end:: Widgets/Stats-->
                <!--Begin::Section-->

                <!--End::Section-->
                <!--Begin::Section-->

                <!--End::Section-->
                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-12" style="margin-top:60px ">
                        <!--begin::Portlet-->
                        <div class="m-portlet " id="m_portlet">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-map-location"></i>
												</span>
                                        <h3 class="m-portlet__head-text">
                                            Calendar
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item">
                                            <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
														<span>
															<i class="la la-plus"></i>
															<span>
																Add Event
															</span>
														</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div id="m_calendar"></div>
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>
                </div>
                <!--End::Section-->

            </div>
        </div>
        <!--
    </div>
    -->
    </div>
@endsection
@section('footer')
@endsection