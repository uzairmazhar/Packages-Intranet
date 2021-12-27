@extends('layouts.web-layout')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/over-the-years-slider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/over-the-years-slider/fonts/font-awesome/css/font-awesome.min.css')}}">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/over-the-years-slider/css/settings.css')}}">
    <!-- REVOLUTION LAYERS STYLES -->
    <style>.tp-caption.WebProduct-Title-Light,.WebProduct-Title-Light{color:rgba(255,255,255,1.00);font-size:90px;line-height:90px;font-weight:100;font-style:normal;font-family:Raleway;padding:0 0 0 0px;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px;text-align:left}.tp-caption.WebProduct-SubTitle-Light,.WebProduct-SubTitle-Light{color:rgba(255,255,255,0.35);font-size:15px;line-height:20px;font-weight:400;font-style:normal;font-family:Raleway;padding:0 0 0 0px;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px;text-align:left}.tp-caption.WebProduct-Content-Light,.WebProduct-Content-Light{color:rgba(255,255,255,0.65);font-size:16px;line-height:24px;font-weight:600;font-style:normal;font-family:Raleway;padding:0 0 0 0px;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px;text-align:left}</style>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{asset('assets/over-the-years-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/over-the-years-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{asset('assets/over-the-years-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/over-the-years-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/over-the-years-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/over-the-years-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/over-the-years-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/over-the-years-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/over-the-years-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/over-the-years-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/over-the-years-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/banner-over-the-years.jpg')}}">
    </section>
    <section class="fullscreen-container" style="background-color: #25a8e0">
        <div class="padding-tb-25px text-center">
            <h1>The long and rich tradition of Packages has its roots in humble beginnings.</h1>
        </div>
    </section>
    <div class="padding-tb-40px background-light-grey" style="transform: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-4">
                    <h2>Over 60 years of being market<br>leaders in packaging<br>solutions.</h2>
                </div>
                <div class="col-md-6">
                    <p>
                        We’ve come a long way to become one of the<br>leading packaging companies in the region.<br>
                        But it all began with a dream to change the way<br>consumers view our packaged products.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="fullscreen-container">
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/banner-over-the-years-2.jpg')}}">
    </section>
    <div id="rev_slider_10_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="web-product-dark11" style="background-color:transparent;padding:0px;">
        <div id="rev_slider_10_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.2.6">
            <ul>
                <li data-index="rs-21" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset('assets/over-the-years-slider/assets/Untitled-4.jpg')}}"  alt="" title="Untitled-4"  width="1349" height="600" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption   tp-resizeme"
                         id="slide-21-layer-1"
                         data-x="right" data-hoffset="-80"
                         data-y="center" data-voffset="-9"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:right;s:1500;e:Power3.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="2500"
                         data-responsive_offset="on"


                         style="z-index: 5;"><img src="http://www.packages.com.pk/wp-content/uploads/2017/10/packages.jpg" alt="" data-ww="696px" data-hh="476px" data-no-retina> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-21-layer-3"
                         data-x="736"
                         data-y="208"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:right;s:1500;e:Power3.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="2750"
                         data-responsive_offset="on"


                         style="z-index: 6;"><img src="http://www.packages.com.pk/wp-content/uploads/2016/11/Take-a-look-at-where-our-ideas-.png" alt="" data-ww="518.8177676537586" data-hh="421" data-no-retina> </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-21-layer-5"
                         data-x="557"
                         data-y="263"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:right;s:1500;e:Power3.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="3000"
                         data-responsive_offset="on"


                         style="z-index: 7;"><img src="http://www.packages.com.pk/wp-content/uploads/2016/11/innovation-1.jpg" alt="" data-ww="455px" data-hh="368px" data-no-retina> </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-21-layer-7"
                         data-x="66"
                         data-y="center" data-voffset="-205"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 8; white-space: nowrap;">Year
                        1956
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-21-layer-10"
                         data-x="76"
                         data-y="485"
                         data-width="['396','auto','auto','auto']"
                         data-height="['135','auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1250"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 9; min-width: 396px; max-width: 396px; max-width: 135px; max-width: 135px; white-space: normal; line-height: 29px; color: rgba(255, 255, 255, 1.00);letter-spacing:2px;font-weight:500;">It all began when paper met paperboard to create consumer packaging. We started with a joint venture as Ali Group of Pakistan and Akerlund & Rausing of Sweden. </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-21-layer-9"
                         data-x="74"
                         data-y="center" data-voffset="11"
                         data-width="['460','334','277','356']"
                         data-height="['118','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1500"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 10; min-width: 460px; max-width: 460px; max-width: 118px; max-width: 118px; white-space: normal; font-size: 44px; line-height: 54px; font-weight: 700; color: rgba(255, 255, 255, 1.00);text-transform:uppercase;">This is where our journey starts </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-24" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assets/over-the-years-slider/assets/Untitled-.jpg')}}"  alt="" title="Untitled-"  width="1349" height="600" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-24-layer-7"
                         data-x="37"
                         data-y="center" data-voffset="-255"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 5; white-space: nowrap;">
                        Year  1968 </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-24-layer-10"
                         data-x="505"
                         data-y="center" data-voffset="-248"
                         data-width="['606','auto','auto','auto']"
                         data-height="['34','auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1520"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 6; min-width: 606px; max-width: 606px; max-width: 34px; max-width: 34px; white-space: normal; font-size: 40px; color: rgba(255, 255, 255, 1.00);text-transform:uppercase;letter-spacing:2px;font-weight:500;">Our first ever paper mill </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-24-layer-9"
                         data-x="513"
                         data-y="center" data-voffset="-135"
                         data-width="['587','334','277','356']"
                         data-height="['auto','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1570"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 7; min-width: 587px; max-width: 587px; white-space: normal; font-size: 18px; line-height: 30px; color: rgba(255, 255, 255, 0.75);">We set up our first pulp and paper mill, partnering with International Finance Corporation of Washington. We increased the capacity to almost 30000  tons per year, in just 35 years, making us the largest producer in Pakistan. </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-24-layer-11"
                         data-x="718"
                         data-y="center" data-voffset="42"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:right;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1980"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 8; white-space: nowrap;">
                        Year  1982 </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-24-layer-12"
                         data-x="671"
                         data-y="center" data-voffset="166"
                         data-width="['606','auto','auto','auto']"
                         data-height="['34','auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="2300"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 9; min-width: 606px; max-width: 606px; max-width: 34px; max-width: 34px; white-space: normal; font-size: 40px; color: rgba(255, 255, 255, 1.00);text-transform:uppercase;letter-spacing:2px;font-weight:500;">The birth of Rose Petal </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-24-layer-13"
                         data-x="674"
                         data-y="center" data-voffset="250"
                         data-width="['586','334','277','356']"
                         data-height="['99','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="2600"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 10; min-width: 586px; max-width: 586px; max-width: 99px; max-width: 99px; white-space: normal; font-size: 18px; line-height: 30px; color: rgba(255, 255, 255, 0.75);">In response to a growing need for hygienic and disposable tissues, we launched ‘Rose Petal’ as a brand, that offered a comprehensive disposable hygiene solutions. </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-24-layer-14"
                         data-x="60"
                         data-y="368"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;rZ:338;"

                         data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:300;"
                         data-start="2920"
                         data-responsive_offset="on"


                         style="z-index: 11;"><img src="http://www.packages.com.pk/wp-content/uploads/2017/09/1982-Plates.jpg" alt="" data-ww="476px" data-hh="360px" data-no-retina> </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-29" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Examples" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="http://www.packages.com.pk/wp-content/uploads/revslider/web-product-dark/webproduct_darkbg2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-29-layer-3"
                         data-x="735"
                         data-y="126"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;rZ:-10;"
                         data-transform_hover="o:1;sX:0.9;sY:0.9;rX:0;rY:0;rZ:-10;z:0;s:500;e:Power1.easeInOut;"
                         data-style_hover="c:rgba(255, 255, 255, 1.00);"

                         data-transform_in="y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;s:1500;e:Power3.easeOut;"
                         data-transform_out="opacity:0;s:2000;e:Power4.easeIn;"
                         data-start="1920"
                         data-responsive_offset="on"


                         style="z-index: 5;"><img src="http://www.packages.com.pk/wp-content/uploads/2017/09/1986-Aerial87.jpg" alt="" data-ww="374px" data-hh="211px" data-no-retina> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-29-layer-5"
                         data-x="743"
                         data-y="239"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;rZ:10;"
                         data-transform_hover="o:1;sX:0.9;sY:0.9;rX:0;rY:0;rZ:10;z:0;s:500;e:Power1.easeInOut;"
                         data-style_hover="c:rgba(255, 255, 255, 1.00);"

                         data-transform_in="y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;s:1500;e:Power3.easeOut;"
                         data-transform_out="opacity:0;s:2000;e:Power4.easeIn;"
                         data-start="2350"
                         data-responsive_offset="on"


                         style="z-index: 6;"><img src="http://www.packages.com.pk/wp-content/uploads/2017/09/1993-Tri-Pack.jpg" alt="" data-ww="411px" data-hh="232px" data-no-retina> </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-29-layer-7"
                         data-x="32"
                         data-y="center" data-voffset="-246"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 7; white-space: nowrap;">Year 1986
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-29-layer-10"
                         data-x="38"
                         data-y="center" data-voffset="-148"
                         data-width="['495','auto','auto']"
                         data-height="['36','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1250"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 8; min-width: 495px; max-width: 495px; max-width: 36px; max-width: 36px; white-space: normal; font-size: 34px; color: rgba(255, 255, 255, 1.00);text-transform:uppercase;letter-spacing:2px;font-weight:500;">Safe food for everyone </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-29-layer-9"
                         data-x="center" data-hoffset="-437"
                         data-y="center" data-voffset="-60"
                         data-width="['448','334','277','356']"
                         data-height="['auto','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1500"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 9; min-width: 448px; max-width: 448px; white-space: normal; line-height: 33px;">The food industry was growing. And with it the need for safe and advanced food packaging. To meet these needs, we set up our first flexible packaging unit. </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-29-layer-11"
                         data-x="255"
                         data-y="center" data-voffset="101"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="3000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 10; white-space: nowrap;">Year 1993
                    </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-29-layer-12"
                         data-x="265"
                         data-y="center" data-voffset="222"
                         data-width="['412','auto','auto']"
                         data-height="['30','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="3280"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 11; min-width: 412px; max-width: 412px; max-width: 30px; max-width: 30px; white-space: normal; font-size: 34px; color: rgba(255, 255, 255, 1.00);text-transform:uppercase;letter-spacing:2px;font-weight:500;">Joining hands with </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-29-layer-13"
                         data-x="266"
                         data-y="center" data-voffset="260"
                         data-width="['210','auto','auto']"
                         data-height="['21','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="3280"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 12; min-width: 210px; max-width: 210px; max-width: 21px; max-width: 21px; white-space: normal; font-size: 34px; color: rgba(255, 255, 255, 1.00);text-transform:uppercase;letter-spacing:2px;font-weight:500;">Mitsubishi </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-29-layer-14"
                         data-x="708"
                         data-y="center" data-voffset="287"
                         data-width="['448','334','277','356']"
                         data-height="['auto','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="3510"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 13; min-width: 448px; max-width: 448px; white-space: normal; font-size: 18px; line-height: 33px;">We made a joint venture with Mitsubishi Corporation of Japan, known as Tri-Pack Films Limited. This project was responsible for the manufacture of Polypropylene films and started production in June 1995. </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-26" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Examples" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assets/over-the-years-slider/assets/Untitled-4.jpg')}}"  alt="" title="Untitled-4"  width="1349" height="600" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-26-layer-1"
                         data-x="right" data-hoffset="81"
                         data-y="center" data-voffset="-26"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;rZ:360;tO:20% 50%;"
                         data-transform_hover="o:1;sX:0.9;sY:0.9;skX:0px;rX:0;rY:0;rZ:0;z:0;s:500;e:Power1.easeInOut;"
                         data-style_hover="c:rgba(255, 255, 255, 1.00);"

                         data-transform_in="x:right;s:2000;e:Power4.easeInOut;"
                         data-transform_out="opacity:0;s:2000;e:Power4.easeIn;"
                         data-start="2400"
                         data-responsive_offset="on"


                         style="z-index: 5;"><img src="http://www.packages.com.pk/wp-content/uploads/2017/09/1994-Coates-L.jpg" alt="" data-ww="549px" data-hh="311px" data-no-retina> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-26-layer-7"
                         data-x="38"
                         data-y="center" data-voffset="-264"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 6; white-space: nowrap;">Year 1994
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-26-layer-10"
                         data-x="50"
                         data-y="center" data-voffset="-107"
                         data-width="['352','auto','auto']"
                         data-height="['40','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1250"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 7; min-width: 352px; max-width: 352px; max-width: 40px; max-width: 40px; white-space: normal; font-size: 40px; color: rgba(255, 255, 255, 1.00);text-transform:uppercase;letter-spacing:2px;font-weight:500;">Printing inks </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-26-layer-9"
                         data-x="50"
                         data-y="center" data-voffset="-22"
                         data-width="['606','334','277','356']"
                         data-height="['121','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1500"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 8; min-width: 606px; max-width: 606px; max-width: 121px; max-width: 121px; white-space: normal; font-size: 18px; line-height: 36px;">In order to ensure world class printing quality for our customers, <br>we partnered with the world’s biggest printing ink company Coates <br>Lorilleux Pakistan Limited (DIC Pakistan Limited). </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-26-layer-11"
                         data-x="49"
                         data-y="center" data-voffset="123"
                         data-width="['492','auto','auto']"
                         data-height="['41','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1840"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 9; min-width: 492px; max-width: 492px; max-width: 41px; max-width: 41px; white-space: normal; font-size: 40px; color: rgba(255, 255, 255, 1.00);text-transform:uppercase;letter-spacing:2px;font-weight:500;">Pollution control </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-26-layer-12"
                         data-x="48"
                         data-y="center" data-voffset="211"
                         data-width="['591','334','277','356']"
                         data-height="['121','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="2150"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 10; min-width: 591px; max-width: 591px; max-width: 121px; max-width: 121px; white-space: normal; font-size: 18px; line-height: 36px;">At the same time, our paper and board mill increased production capacity to 65,000 tons per year with improved efficiency and pollution control to meet the World Bank environmental guidelines. </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-22" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Easy to Use" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assets/over-the-years-slider/assets/webproduct_darkbg2.jpg')}}"  alt="" title="webproduct_darkbg2.jpg"  width="1920" height="1080" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-22-layer-1"
                         data-x="right" data-hoffset="206"
                         data-y="center" data-voffset="242"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:right;s:1500;e:Power3.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="2060"
                         data-responsive_offset="on"


                         style="z-index: 5;"><img src="http://www.packages.com.pk/wp-content/uploads/revslider/web-product-dark/macbookpro.png" alt="" data-ww="501px" data-hh="301px" data-no-retina> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-22-layer-2"
                         data-x="780"
                         data-y="534"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-start="2620"
                         data-responsive_offset="on"


                         style="z-index: 6;"><img src="http://www.packages.com.pk/wp-content/uploads/2017/09/1999-fp1.jpg" alt="" data-ww="327px" data-hh="205px" data-no-retina> </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-22-layer-7"
                         data-x="42"
                         data-y="center" data-voffset="-141"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 7; white-space: nowrap;">Year 1996
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-22-layer-10"
                         data-x="54"
                         data-y="center" data-voffset="18"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1250"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 8; white-space: nowrap; font-size: 38px; line-height: 39px; color: rgba(255, 255, 255, 1.00);text-transform:uppercase;letter-spacing:2px;font-weight:500;">Packages goes to <br>Sri Lanka </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-22-layer-9"
                         data-x="52"
                         data-y="center" data-voffset="155"
                         data-width="['448','334','277','356']"
                         data-height="['auto','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1500"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 9; min-width: 448px; max-width: 448px; white-space: normal; font-size: 18px; line-height: 33px;">We made a joint venture agreement with Printcare (Ceylon) Limited for the production of flexible packaging materials in Sri Lanka, as we set up Packages Lanka (Private) Limited. </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-22-layer-11"
                         data-x="771"
                         data-y="center" data-voffset="-266"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="y:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="3050"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 10; white-space: nowrap;">Year 1999
                    </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-22-layer-12"
                         data-x="673"
                         data-y="center" data-voffset="-147"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="y:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="3350"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 11; white-space: nowrap; font-size: 38px; line-height: 39px; color: rgba(255, 255, 255, 1.00);text-transform:uppercase;letter-spacing:2px;font-weight:500;">New century, New additions </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-22-layer-13"
                         data-x="650"
                         data-y="center" data-voffset="-18"
                         data-width="['678','334','277','356']"
                         data-height="['auto','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="y:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="3540"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 12; min-width: 678px; max-width: 678px; white-space: normal; font-size: 18px; line-height: 33px;text-align:center;">Between 1999 – 2002, we expanded our flexible packaging line by installing a new rotogravure printing machine and enhancing the carton line by putting up a new Lemanic rotogravure machine.
                        In addition, a new 8 color Flexographic printing machine was installed in the flexible packaging line in 2001.
                        We started production of corrugated boxes in 2002. </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-28" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Easy to Use" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assets/over-the-years-slider/assets/Untitled-4-1.jpg')}}"  alt="" title="Untitled-4"  width="1349" height="600" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-28-layer-7"
                         data-x="38"
                         data-y="center" data-voffset="-81"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 5; white-space: nowrap;">Year 2005
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-28-layer-10"
                         data-x="35"
                         data-y="center" data-voffset="66"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1250"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 6; white-space: nowrap; font-size: 32px; line-height: 41px; color: rgba(255, 255, 255, 1.00);text-transform:uppercase;letter-spacing:2px;font-weight:500;">New production site of <br>Bulleh Shah Paper Mill<br> in Kasur </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-28-layer-9"
                         data-x="29"
                         data-y="center" data-voffset="251"
                         data-width="['569','334','277','356']"
                         data-height="['194','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1500"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 7; min-width: 569px; max-width: 569px; max-width: 194px; max-width: 194px; white-space: normal; font-size: 18px; line-height: 32px;">To expand paper and board production, we started Bulleh Shah Packaging (Private) Limited. With this new production site, our capacity tripled from 100,000 tons per year to 210,000 tons per year. Commercial operations commenced in 2007 and further units were added in 2009. </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-28-layer-11"
                         data-x="868"
                         data-y="center" data-voffset="-218"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="2070"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 8; white-space: nowrap;">Year 2008
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-28-layer-12"
                         data-x="864"
                         data-y="center" data-voffset="-85"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="2650"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 9; white-space: nowrap; font-size: 32px; line-height: 41px; color: rgba(255, 255, 255, 1.00);text-align:right;text-transform:uppercase;letter-spacing:2px;font-weight:500;">New ventures in the <br>International market </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-28-layer-13"
                         data-x="834"
                         data-y="center" data-voffset="84"
                         data-width="['448','334','277','356']"
                         data-height="['auto','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="x:50px;opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="3060"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="z-index: 10; min-width: 448px; max-width: 448px; white-space: normal; font-size: 18px; line-height: 34px;text-align:right;">We started a new tissue paper manufacturing machine as we set out for capacity expansion. This allowed us to increase production capacity to 30,000 tons per year, as we started exporting tissue products to the international market. </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-20" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Examples" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="http://www.packages.com.pk/wp-content/uploads/revslider/web-product-dark/webproduct_darkbg2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption   tp-resizeme"
                         id="slide-20-layer-3"
                         data-x="889"
                         data-y="71"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;rZ:-10;"
                         data-transform_hover="o:1;sX:0.9;sY:0.9;rX:0;rY:0;rZ:-10;z:0;s:500;e:Power1.easeInOut;"
                         data-style_hover="c:rgba(255, 255, 255, 1.00);"

                         data-transform_in="y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;s:1500;e:Power3.easeOut;"
                         data-transform_out="opacity:0;s:2000;e:Power4.easeIn;"
                         data-start="1840"
                         data-responsive_offset="on"


                         style="z-index: 5;"><img src="http://www.packages.com.pk/wp-content/uploads/2017/09/2011-BSPM-Opening-by-SBA-2-1.jpg" alt="" data-ww="336px" data-hh="190px" data-no-retina> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-20-layer-5"
                         data-x="854"
                         data-y="242"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;rZ:10;tO:44% 50%;"
                         data-transform_hover="o:1;sX:0.9;sY:0.9;rX:0;rY:0;rZ:10;z:0;s:500;e:Power1.easeInOut;"
                         data-style_hover="c:rgba(255, 255, 255, 1.00);"

                         data-transform_in="y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;s:1500;e:Power3.easeOut;"
                         data-transform_out="opacity:0;s:2000;e:Power4.easeIn;"
                         data-start="2190"
                         data-responsive_offset="on"


                         style="z-index: 6;"><img src="http://www.packages.com.pk/wp-content/uploads/2017/09/2011-BSPM-Opening-by-SBA-1.jpg" alt="" data-ww="425px" data-hh="241px" data-no-retina> </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-20-layer-7"
                         data-x="43"
                         data-y="center" data-voffset="-301"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 7; white-space: nowrap;">Year 2011
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-20-layer-10"
                         data-x="43"
                         data-y="center" data-voffset="-195"
                         data-width="['721','auto','auto']"
                         data-height="['41','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1250"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 8; min-width: 721px; max-width: 721px; max-width: 41px; max-width: 41px; white-space: normal; font-size: 34px; color: rgba(255, 255, 255, 1.00);text-transform:uppercase;letter-spacing:2px;font-weight:500;">High speed lamination machine </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-20-layer-9"
                         data-x="center" data-hoffset="-306"
                         data-y="center" data-voffset="-104"
                         data-width="['686','334','277','356']"
                         data-height="['133','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1500"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 9; min-width: 686px; max-width: 686px; max-width: 133px; max-width: 133px; white-space: normal; line-height: 33px;">We set up Pakistan’s first high speed solvent-less automatic lamination machine at our flexible unit. This new addition had a cost of PKR 96 million, with a capacity of 450 meters per minute.

                        We upgraded our paper machine at Bulleh Shah Paper Mills to achieve capacity expansion to 30,000 tons. </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-20-layer-11"
                         data-x="46"
                         data-y="center" data-voffset="88"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="3250"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 10; white-space: nowrap;">Year 2012
                    </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-20-layer-13"
                         data-x="56"
                         data-y="center" data-voffset="189"
                         data-width="['626','auto','auto']"
                         data-height="['43','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="3410"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 11; min-width: 626px; max-width: 626px; max-width: 43px; max-width: 43px; white-space: normal; font-size: 34px; color: rgba(255, 255, 255, 1.00);text-transform:uppercase;letter-spacing:2px;font-weight:500;">New Rotogravure Machine </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-20-layer-14"
                         data-x="56"
                         data-y="center" data-voffset="297"
                         data-width="['805','334','277','356']"
                         data-height="['148','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="3580"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 12; min-width: 805px; max-width: 805px; max-width: 148px; max-width: 148px; white-space: normal; font-size: 18px; line-height: 33px;">In keeping with the rapid technological developments in global packaging business, we invested in a new rotogravure machine for our flexible packaging business.<br>

                        We also partnered with Stora Enso OYJ Group of Finland and Bulleh Shah Packaging (Private) Limited, for paper and paperboard and corrugated business operations at Kasur and Karachi. </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-20-layer-15"
                         data-x="895"
                         data-y="428"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;rZ:-10;"
                         data-transform_hover="o:1;sX:0.9;sY:0.9;rX:0;rY:0;rZ:-12;z:0;s:500;e:Power1.easeInOut;"
                         data-style_hover="c:rgba(255, 255, 255, 1.00);"

                         data-transform_in="y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;s:1500;e:Power3.easeOut;"
                         data-transform_out="opacity:0;s:2000;e:Power4.easeIn;"
                         data-start="2860"
                         data-responsive_offset="on"


                         style="z-index: 13;"><img src="http://www.packages.com.pk/wp-content/uploads/2017/10/2012-WH-Printing-.jpg" alt="" data-ww="444px" data-hh="251px" data-no-retina> </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-25" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assets/over-the-years-slider/assets/Untitled-4-2.jpg')}}"  alt="" title="Untitled-4"  width="1349" height="600" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                         id="slide-25-layer-15"
                         data-x="-142"
                         data-y="21"
                         data-width="['full','full','full','full']"
                         data-height="['full','full','full','full']"
                         data-transform_idle="o:1;"

                         data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="s:1500;"
                         data-start="0"
                         data-responsive_offset="on"


                         style="z-index: 5;background-color:rgba(114,108,101,0.95);border-color:rgba(109, 103, 96, 0.50);"> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-25-layer-7"
                         data-x="50"
                         data-y="center" data-voffset="-23"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 6; white-space: nowrap;">Year 2014
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-25-layer-10"
                         data-x="644"
                         data-y="center" data-voffset="-225"
                         data-width="['auto','auto','auto','auto']"
                         data-height="['auto','auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1250"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 7; white-space: nowrap; font-size: 37px; line-height: 43px; color: rgba(255, 255, 255, 1.00);text-align:center;text-transform:uppercase;letter-spacing:2px;font-weight:500;">Offset Printing for <br>Folding Cartons </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-25-layer-9"
                         data-x="561"
                         data-y="center" data-voffset="-64"
                         data-width="['609','334','277','356']"
                         data-height="['193','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1500"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 8; min-width: 609px; max-width: 609px; max-width: 193px; max-width: 193px; white-space: normal; font-size: 18px; line-height: 32px;text-align:center;">Offset Printing for Folding Cartons
                        To continue our efforts in improving our technological developments in the Packaging business, we invested in a new Offset Printing Line, which was equipped to meet growing customer demands in the folding carton business. </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-25-layer-11"
                         data-x="719"
                         data-y="center" data-voffset="87"
                         data-width="['auto','auto','auto','auto']"
                         data-height="['auto','auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1820"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 9; white-space: nowrap; font-size: 40px; line-height: 53px; color: rgba(255, 255, 255, 1.00);text-align:center;text-transform:uppercase;letter-spacing:2px;font-weight:500;">Packages Mall </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-25-layer-12"
                         data-x="576"
                         data-y="center" data-voffset="216"
                         data-width="['609','334','277','356']"
                         data-height="['193','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="2150"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 10; min-width: 609px; max-width: 609px; max-width: 193px; max-width: 193px; white-space: normal; font-size: 18px; line-height: 32px;text-align:center;">Under our diversification strategy, we initiated the development of a high quality, most happening retail mall, on an area of 1.2M square feet, promising 200+ brands and shopping, leisure, food and entertainment for everyone, under one roof. </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-23" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Get a License" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assets/over-the-years-slider/assets/Untitled-4.jpg')}}"  alt="" title="Untitled-4"  width="1349" height="600" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption WebProduct-Title-Light   tp-resizeme"
                         id="slide-23-layer-7"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="-80"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 5; white-space: nowrap;text-align:center;">Year 2015
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme"
                         id="slide-23-layer-10"
                         data-x="center" data-hoffset="4"
                         data-y="center" data-voffset="30"
                         data-width="['auto','auto','auto']"
                         data-height="['auto','auto','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1250"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 6; white-space: nowrap; font-size: 35px; color: rgba(255, 255, 255, 1.00);text-align:center;text-transform:uppercase;letter-spacing:2px;font-weight:500;">Growth and new friends </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption WebProduct-Content-Light   tp-resizeme"
                         id="slide-23-layer-9"
                         data-x="center" data-hoffset="10"
                         data-y="center" data-voffset="170"
                         data-width="['685','334','277','356']"
                         data-height="['163','76','68','auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                         data-start="1500"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 7; min-width: 685px; max-width: 685px; max-width: 163px; max-width: 163px; white-space: normal; font-size: 18px; line-height: 30px;text-align:center;">Due to the growing demand, a new toilet roll line ‘Maxob’ was introduced, which was expected to increase sales by 30%.

                        We completed the acquisition of 55% share in the operations of a flexible packaging company in South Africa.

                        A 50/50 joint venture with Omya Group of Switzerland was also initiated. </div>
                </li>
            </ul>
            <div style="" class="tp-static-layers">

                <!-- LAYER NR. 1 -->
                <div class="tp-caption -   tp-static-layer"
                     id="slider-10-layer-1"
                     data-x="right" data-hoffset="30"
                     data-y="30"
                     data-width="['auto']"
                     data-height="['auto']"
                     data-transform_idle="o:1;"

                     data-transform_in="opacity:0;s:1000;e:Power3.easeInOut;"
                     data-transform_out="auto:auto;s:1000;"
                     data-start="500"
                     data-splitin="none"
                     data-splitout="none"
                     data-actions='[{"event":"click","action":"toggleclass","layer":"slider-10-layer-1","delay":"0","classname":"open"},{"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slider-10-layer-3","delay":"0"},{"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slider-10-layer-4","delay":"0"},{"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slider-10-layer-5","delay":"0"},{"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slider-10-layer-6","delay":"0"}]'
                     data-basealign="slide"
                     data-responsive_offset="off"
                     data-responsive="off"
                     data-startslide="0"
                     data-endslide="8"

                     style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);"><div id="rev-burger" class="white">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div> </div>
            </div>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
    </div>
@endsection
@section('footer')
    <script type="text/javascript">
        var tpj=jQuery;

        var revapi10;
        tpj(document).ready(function() {
            if(tpj("#rev_slider_10_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_10_1");
            }else{
                revapi10 = tpj("#rev_slider_10_1").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"//packages.development/wp-content/plugins/revslider/public/assets/js/",
                    sliderLayout:"fullscreen",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"on",
                        keyboard_direction: "vertical",
                        mouseScrollNavigation:"on",
                        mouseScrollReverse:"default",
                        onHoverStop:"off",
                        touch:{
                            touchenabled:"on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "vertical",
                            drag_block_vertical: false
                        }
                    },
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:1400,
                    gridheight:800,
                    lazyType:"none",
                    parallax: {
                        type:"mouse",
                        origo:"enterpoint",
                        speed:400,
                        levels:[5,10,15,20,25,30,35,40,45,50,47,48,49,50,51,55],
                        type:"mouse",
                    },
                    shadow:0,
                    spinner:"off",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            }
        });	/*ready*/
    </script>

@endsection