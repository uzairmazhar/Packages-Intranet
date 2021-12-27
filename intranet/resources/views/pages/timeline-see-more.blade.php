@extends('layouts.web-layout-1')

@section('header')
@endsection

@section('body')
        <!-- Page title --->
<section class="background-grey-1 padding-tb-25px text-grey-4">
    <div class="container">
        <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px"><h3>Timeline</h3></h6>

        <div class="clearfix"></div>
    </div>
</section>
<!-- // Page title --->


<!-- page output -->
<div class="col-lg-12" style="padding:0px; background: #fafafa;">
    <div class="container"
         style="background: #ffffff;border-color: #eeeded;border-width: 1px;border-style:solid;  ">
        <!--Begin TimeLine Header-->
        <section class="background-grey-1 padding-tb-25px text-grey-4"
                 style="padding-bottom: 0px;padding-top:0px; background:#ffffff;border-color: #eeeded; border-bottom-width: 1px;border-bottom-style:solid;margin-bottom: 20px;  ">
            <!--End TimeLine Header-->
            <div class="container">
                <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px"
                    style="padding-bottom: 0;"><p
                            class="btn btn-sm border-2 border-radius-30 btn-block background-third-color text-white">
                        <i
                                class="fa fa-fw" aria-hidden="true" title="Timelien"></i> Timeline</p>
                </h6>
                <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                    <li class="active"><a href="{{URL::to('pic-video')}}" target="_blank"
                                          class="btn btn-sm border-2 border-radius-30 btn-danger btn-block">
                            <i class="fa fa-fw" aria-hidden="true" title="Copy to use television"></i>
                            Gallery
                        </a></li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </section>

        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="timeline">

                    <!-- timeline item -->
                    <div class="timeline-item row">
                        <div class="col-1 date border-right-2 border-main-color">
                            <h6 class="text-third-color">19:45</h6>
                        </div>
                        <div class="col-11 post padding-bottom-30px">
                            <!-- <img style="max-width: 60px;height: auto;"
                                             src="{{asset('http://placehold.it/60x60')}}"
                                             class="float-left margin-right-20px margin-bottom-20px" alt="">-->
                            <i style="max-width: 60px;height: auto; font-size: 60px; color:sandybrown;"
                               class="fa fa-fw float-left margin-right-20px margin-bottom-20px" aria-hidden="true"
                               title="Copy to use birthday-cake"></i>
                            <h5 class="text-medium text-dark text-uppercase  margin-top-8px"><a href="{{URL::to('intranet/resources/views/pages/pic-video.blade.php/#away-day')}}" target="_blank">Away Day</a></h5>
                                        <span class="text-extra-small text-grey-3">Date :  <a href="#"
                                                                                              class="text-grey-3">July
                                                15, 2016</a></span>
                            <a href="pic-video" target="_blank">
                                <br>
                                <!--<h2>Away Day</h2>-->
                                <ul style="overflow: hidden; list-style:  none; float: left; padding-left: 0">

                                    <li style="float: right;  padding-left: 2px;">
                                        <div class="with-hover">
                                            <img style="max-width: 60px;height: auto;"
                                                 src="{{asset('assets/img/intranet/TRAININGS/FC AWAY DAY/200517_001.JPG')}}"
                                                 alt="">
                                            <a href="{{URL::to('assets/img/intranet/TRAININGS/FC AWAY DAY/200517_001.JPG')}}"
                                               target="_blank"
                                               data-toggle="lightbox"
                                               data-gallery="example-gallery"
                                               class="d-block hover-option  img-fluid">

                                            </a>
                                        </div>
                                    </li>
                                    <li style="float: right;  padding-left: 2px;">
                                        <div class="with-hover">
                                            <img style="max-width: 60px;height: auto;"
                                                 src="{{asset('assets/img/intranet/TRAININGS/FC AWAY DAY/200517_002.JPG')}}"
                                                 alt="">
                                            <a href="{{URL::to('assets/img/intranet/TRAININGS/FC AWAY DAY/200517_002.JPG')}}"
                                               target="_blank"
                                               data-toggle="lightbox"
                                               data-gallery="example-gallery"
                                               class="d-block hover-option  img-fluid">

                                            </a>
                                        </div>
                                    </li>
                                    <li style="float: right; padding-left: 2px;">
                                        <div class="with-hover">
                                            <img style="max-width: 60px;height: auto;"
                                                 src="{{asset('assets/img/intranet/TRAININGS/FC AWAY DAY/200517_003.JPG')}}"
                                                 alt="">
                                            <a href="{{URL::to('assets/img/intranet/TRAININGS/FC AWAY DAY/200517_003.JPG')}}"
                                               target="_blank"
                                               data-toggle="lightbox"
                                               data-gallery="example-gallery"
                                               class="d-block hover-option  img-fluid">

                                            </a>
                                        </div>
                                    </li>
                                    <li style="float: right; padding-left: 2px;">
                                        <div class="with-hover">
                                            <img style="max-width: 60px;height: auto;"
                                                 src="{{asset('assets/img/intranet/TRAININGS/FC AWAY DAY/200517_004.JPG')}}"
                                                 alt="">
                                            <a href="{{URL::to('assets/img/intranet/TRAININGS/FC AWAY DAY/200517_004.JPG')}}"
                                               target="_blank"
                                               data-toggle="lightbox"
                                               data-gallery="example-gallery"
                                               class="d-block hover-option  img-fluid">

                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </a>

                        </div>
                    </div>
                    <!-- //  timeline item -->

                    <!-- timeline item -->
                    <div class="timeline-item row">
                        <div class="col-1 date border-right-2 border-main-color">
                            <h6 class="text-third-color">19:45</h6>
                        </div>
                        <div class="col-11 post padding-bottom-30px">
                            <!-- <img style="max-width: 60px;height: auto;"
                                             src="{{asset('http://placehold.it/60x60')}}"
                                             class="float-left margin-right-20px margin-bottom-20px" alt="">-->
                            <i style="max-width: 60px;height: auto; font-size: 60px; color: pink"
                               class="fa fa-fw float-left margin-right-20px margin-bottom-20px" aria-hidden="true"
                               title="Copy to use birthday-cake"></i>
                            <h5 class="text-medium text-dark text-uppercase  margin-top-8px">Nauman
                                Abid Happy Birthday</h5>
                                        <span class="text-extra-small text-grey-3">
                                            <i class="fa fa-fw" aria-hidden="true" title="Copy to use gift"></i>
                                            <a href="#"
                                               class="text-grey-3">
                                                Aug 27,1995</a></span>

                        </div>
                    </div>
                    <!-- //  timeline item -->


                    <!-- timeline item -->
                    <div class="timeline-item row">
                        <div class="col-1 date border-right-2 border-main-color">
                            <h6 class="text-third-color">20:00</h6>
                        </div>
                        <div class="col-11 post padding-bottom-30px">
                            <img style="max-width: 60px;height: auto;"
                                 src="{{asset('assets/img/icon/man-icon.jpg')}}"
                                 class="float-left margin-right-20px margin-bottom-20px" alt="">
                            <h5 class="text-medium text-dark text-uppercase  margin-top-8px">Anonymous</h5>
                                        <span class="text-extra-small text-grey-3">Date :  <a href="#"
                                                                                              class="text-grey-3">July
                                                15, 2016</a></span>
                            <p class="text-main-color-2">There are many variations of passages of Lorem
                                Ipsum available,
                                but the majority have suffered alteration in some form, by injected
                                humour,
                                or
                                randomised words which don't look even slightly believable. If you are
                                going
                                to use a
                                passage of Lorem Ipsum</p>
                        </div>
                    </div>
                    <!-- //  timeline item -->

                    <!-- timeline item -->
                    <div class="timeline-item row">
                        <div class="col-1 date border-right-2 border-main-color">
                            <h6 class="text-third-color">19:45</h6>
                        </div>
                        <div class="col-11 post padding-bottom-30px">
                            <!-- <img style="max-width: 60px;height: auto;"
                                             src="{{asset('http://placehold.it/60x60')}}"
                                             class="float-left margin-right-20px margin-bottom-20px" alt="">-->
                            <i style="max-width: 60px;height: auto; font-size: 60px; color: red"
                               class="fa fa-fw float-left margin-right-20px margin-bottom-20px" aria-hidden="true"
                               title="Copy to use calendar-check-o"></i>
                            <h5 class="text-medium text-dark text-uppercase  margin-top-8px">Event Notification</h5>
                                        <span class="text-extra-small text-grey-3">
                                            <i class="fa fa-fw" aria-hidden="true" title="Copy to use gift"></i>
                                            <a href="#"
                                               class="text-grey-3">
                                                Aug 27,1995</a></span>
                            <p class="text-main-color-2">Description about Event</p>

                        </div>
                    </div>
                    <!-- //  timeline item -->

                </div>

            </div>
        </div>

    </div>
</div>
<!-- //  page output -->


@endsection
@section('footer')
@endsection