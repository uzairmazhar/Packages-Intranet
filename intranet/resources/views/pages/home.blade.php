@extends('layouts.web-layout')
@section('header')
    <style>
        .rs-background-video-layer iframe {visibility:inherit !important;}
        .marquee {
            overflow: hidden;
        }
        .like{
            cursor: pointer
        }
        .dislike{
            cursor: pointer;
        }
		
		.flipsection {width:1000px;border-radius:10px; margin:50px auto;}
		.flipsection p{text-align:center;margin:0px;font:16px sans-serif;}
        .flipsection p strong {color:gold;}
    </style>
@endsection
@section('body')
    <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="the-nile-9" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <div id="rev_slider_26_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <li data-index="rs-89" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_3e3b4-18.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <video style="height:auto;" autoplay loop muted id="vid">
                        <source src="{{asset('assets/img/main-page.mp4')}}" id="vid" data-bgposition="center center" type="video/mp4">
                    </video>
                </li>
                <li data-index="rs-89" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_3e3b4-18.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <video style="height:auto;" autoplay loop muted id="vid">
                        <source src="{{asset('assets/img/safety-video.mp4')}}" id="vid" data-bgposition="center center" type="video/mp4">
                    </video>
                </li>
                <li data-index="rs-89" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_3e3b4-18.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <video style="height:auto;" autoplay loop muted id="vid">
                        <source src="{{asset('assets/img/new-year-video-2019.mp4')}}" id="vid" data-bgposition="center center" type="video/mp4">
                    </video>
                </li>
                <li data-index="rs-89" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_3e3b4-18.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <video style="height:auto;" autoplay loop muted id="vid">
                        <source src="{{asset('assets/img/packages-flower.mp4')}}" id="vid" data-bgposition="center center" type="video/mp4">
                    </video>
                </li>
				<li data-index="rs-89" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_3e3b4-18.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <video style="height:auto;" autoplay loop muted id="vid">
                        <source src="{{asset('assets/img/video-corona.mp4')}}" id="vid" data-bgposition="center center" type="video/mp4">
                    </video>
                </li>
				<li data-index="rs-89" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_3e3b4-18.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <video style="height:auto;" autoplay loop muted id="vid">
                        <source src="{{asset('assets/img/marking-of-attendance.mp4')}}" id="vid" data-bgposition="center center" type="video/mp4">
                    </video>
                </li>
				<li data-index="rs-89" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_3e3b4-18.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <video style="height:auto;" autoplay loop muted id="vid">
                        <source src="{{asset('assets/img/corona-virus-awareness.mp4')}}" id="vid" data-bgposition="center center" type="video/mp4">
                    </video>
                </li>
				<li data-index="rs-89" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_3e3b4-18.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <video style="height:auto;" autoplay loop muted id="vid">
                        <source src="{{asset('assets/img/covid_video_2.mp4')}}" id="vid" data-bgposition="center center" type="video/mp4">
                    </video>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <div>
        <a href="{{URL::to('historical/news')}}">
            <div class="marquee" style="background-color:#1d78cb; color:#ffffff; padding: 7px">
                @foreach($news as $row)
                    <span>{{$row->news_description.'.'}}</span>
                @endforeach
				@if($messMenu)
                    <span>{{"Today's mess menu is ".$messMenu->menu."."}}</span>
                @endif
            </div>
        </a>
    </div>
    <section class="padding-tb-100px background-packages-value-light-green" style="background: url('/intranet_packages/assets/img/background-overlay/background-overlay-green.jpg'); margin-top: -2px">
        <div class="container">
            <div class="text-center margin-bottom-35px text-white wow fadeInUp" style="margin-bottom: 46px">
                <h1 class="font-weight-300 text-black opacity-8" style="font-size: 40px">Employee Announcements</h1>
            </div>
            <div class="testimonial-carousel dark owl-carousel owl-theme wow fadeInUp">
                @foreach($announcements as $announcement)
                    <div class="item margin-lr-15px">
                        <div class="background-grey-1 padding-30px">
                            @if(strtotime(date('Y-m-d', strtotime($announcement->created_at))) >= strtotime(date('Y-m-d'). '- 5 days'))
                                <div class="float-right width-70px text-white rounded-circle padding-10px text-center bg-success" style="text-shadow: 2px 2px 4px #000000; font-family: 'Bradley Hand ITC';font-weight: bold;font-size: 14pt;">
                                    New
                                </div>
                            @endif
                            <small class="text-black opacity-6">{{$announcement->category}}</small>
                            <h4 class="margin-bottom-0px text-black opacity-8">
                                <a href="{{asset('assets/employee-announcements'.'/'.$announcement->title_attachment)}}" class="text-" target="_blank" style="color: #336699;">{{$announcement->title}}</a>
                                <div class="text-right">
                                    @if(isset($announcement->attachment_1))
                                        <a href="{{asset('assets/employee-announcements'.'/'.$announcement->attachment_1)}}" target="_blank"><i class="fa fa-paperclip"></i></a>
                                    @endif
                                    @if(isset($announcement->attachment_2))
                                        <a href="{{asset('assets/employee-announcements'.'/'.$announcement->attachment_2)}}" target="_blank"><i class="fa fa-paperclip"></i></a>
                                    @endif
                                </div>
                            </h4>
                            <hr>
                            <p class="text-grey-3">{!! $announcement->description !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
	
	<section class="padding-tb-100px background-main-color" style="background: url('/intranet_packages/assets/img/background-overlay/background-overlay-blue.jpg'); margin-top: -2px">
        <div class="container">
            <div class="text-center margin-bottom-35px text-white wow fadeInUp" style="margin-bottom: : -100px;">
                <h1 class="text-white"><a href="{{URL::to('covid-19')}}" class="text-white" style="color:#0864b2">Click Here For COVID-19 Employee Bulletins</a></h1>
            </div>
        </div>
    </section>
	
    <section class="padding-tb-100px background-packages-value-orange" style="background: #fdfdfd ; margin-top: -2px">
        <div class="container">
            <div class="text-center margin-bottom-35px text-white wow fadeInUp">
                <h1 class="font-weight-300 text-black opacity-8">Timeline</h1>
            </div>
            <div class="padding-tb-50px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="timeline">
                                @foreach($events as $event)
                                    <div class="timeline-item row">
                                        <div class="col-2 date border-right-2 border-main-color">
                                            <h6 class="text-third-color">{{date('M d, Y', strtotime($event->event_date))}}</h6>
                                        </div>
                                        <div class="col-10 post padding-bottom-30px">
                                            <h5 class="text-main-color"><a href="{{URL::to('event/photos'.'/'.$event->id)}}" class="text-main-color">{{$event->event_title}}</a></h5>
                                            <p class="text-main-color-2">{{$event->description}}</p>
                                            <ul style="overflow: hidden; list-style:  none; float: left; padding-left: 0">
                                                @if(isset($event->photos[0]))
                                                    <li style="float: right;  padding-left: 2px;">
                                                        <div class="with-hover hvr-float hvr-sh2">
                                                            <img style="max-width: 100px;height: auto;" src="{{asset('assets/event-photos'.'/'.$event->event_title.'/'.$event->photos[0]->name)}}" alt="">
                                                            <a href="{{asset('assets/event-photos'.'/'.$event->event_title.'/'.$event->photos[0]->name)}}" target="_blank" data-toggle="lightbox" data-gallery="example-gallery" class="d-block hover-option  img-fluid"></a>
                                                        </div>
                                                    </li>
                                                @endif
                                                @if(isset($event->photos[1]))
                                                    <li style="float: right;  padding-left: 2px;">
                                                        <div class="with-hover hvr-float hvr-sh2">
                                                            <img style="max-width: 100px;height: auto;" src="{{asset('assets/event-photos'.'/'.$event->event_title.'/'.$event->photos[1]->name)}}" alt="">
                                                            <a href="{{asset('assets/event-photos'.'/'.$event->event_title.'/'.$event->photos[1]->name)}}" target="_blank" data-toggle="lightbox" data-gallery="example-gallery" class="d-block hover-option  img-fluid"></a>
                                                        </div>
                                                    </li>
                                                @endif
                                                @if(isset($event->photos[2]))
                                                    <li style="float: right;  padding-left: 2px;">
                                                        <div class="with-hover hvr-float hvr-sh2">
                                                            <img style="max-width: 100px;height: auto;" src="{{asset('assets/event-photos'.'/'.$event->event_title.'/'.$event->photos[2]->name)}}" alt="">
                                                            <a href="{{asset('assets/event-photos'.'/'.$event->event_title.'/'.$event->photos[2]->name)}}" target="_blank" data-toggle="lightbox" data-gallery="example-gallery" class="d-block hover-option  img-fluid"></a>
                                                        </div>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6" style="display: flex; align-items: center">
                            <div class="container">
                                <div class="testimonial-carousel dark owl-carousel owl-theme wow page-dark fadeInUp" id="custom-carousel">
                                    @foreach($events as $event)
                                        @foreach($event->photos as $photo)
                                            <div class="item">
                                                <div class="background-grey-1">
                                                    <div class="float-left width-50px margin-right-20px">
                                                        <i></i>
                                                    </div>
                                                    <a href="{{asset('assets/event-photos'.'/'.$event->event_title.'/'.$photo->name)}}">
                                                        <div class="item-thumbnail background-dark">
                                                            <img src="{{asset('assets/event-photos'.'/'.$event->event_title.'/'.$photo->name)}}" alt="">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center text-white wow fadeInUp">
                <h1><a href="{{URL::to('all-timeline-events')}}" class="text-black" style="color:#0864b2">Click here to view complete TimeLine</a></h1>
            </div>
        </div>
    </section>
    <section class="background-main-color">
        <div class="row no-gutters margin-0px padding-0px">
            <div class="col-lg-6 col-md-6 wow fadeInUp" style="background: #f04b48;">
                <div class="padding-100px sm-padding-30px">
                    <div class="margin-bottom-40px font-weight-300 text-white opacity-8 wow fadeInUp">
                        <h1 class="font-weight-300 text-title-large">Sub Keh Do!</h1>
                    </div>
                    <ul class="margin-0px padding-0px list-unstyled wow fadeInUp" data-wow-delay="0.2s" style="overflow-y: auto; height: 450px;">
                        @foreach($messages as $message)
                            <li class="text-white margin-bottom-40px message" data-id="{{$message->id}}" data-likedby="{{$message->responseIps}}">
                                <a class="text-extra-large d-block">
                                    {!! $message->message !!}
                                </a>
                                <div class="opacity-7">
                                    <span class="margin-right-30px">By : <a>{!! $message->name !!}</a></span>
                                </div>
                                <div class="like_dislike_status">

                                </div>
                                <div class="like_dislike">
                                    <span class="margin-right-30px likeText"><a role="button" tabindex="0" class="like" data-id="{{$message->id}}"><i class="fa fa-thumbs-up"></i><span> Like</span></a></span>
                                    <span class="margin-right-30px dislikeText"><a role="button" tabindex="0" class="dislike" data-id="{{$message->id}}"><i class="fa fa-thumbs-down"></i> <span> Dislike</span></a></span>
                                </div>
                                <hr class="padding-top-5px padding-bottom-0px">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp background-second-color" style="background-color: #fbaf42" data-wow-delay="0.2s">
                <div class="padding-100px sm-padding-30px">
                    <div class="margin-bottom-40px font-weight-300 text-white">
                        <h1 class="font-weight-300 text-title-large">Enter you Message</h1>
                        <p>Dear Colleagues,<br>
                            Welcome to ‘Sub Keh Dou’.<br>
                            Packages  welcomes your comments, opinions and suggestions; please feel free to express yourself, but, with respect to others.<br>
                            Your comments will be shared with the concerned Department Heads for an appropriate response to be provided to you – this will be done via an email addressed to you.
                        </p>
                    </div>
                    <form class="dark-form" action="{{URL::to('sub-keh-do')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Full Name</label>
                                <input type="text" class="form-control" id="inputName4" style="color: black;" placeholder="Name" name="full_name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" style="color: black;" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="ipAddress" style="color: black;" placeholder="IP Address" name="ipAddress" readonly hidden>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" style="color: black;" rows="2" maxlength="255" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn-sm btn-lg btn-block border-2 border-white text-white text-center font-weight-bold text-uppercase rounded-0 padding-15px" style="background: transparent">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    <script type="text/javascript">
        var tpj = jQuery;
        var revapi26;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_26_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_26_1");
            } else {
                revapi26 = tpj("#rev_slider_26_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//localhost/revslider-standalone/revslider/public/assets/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "twoxtwo",
                    delay: 9000,
                    navigation: {
                        onHoverStop: "off",
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1920, 1110, 1024, 778, 480],
                    gridheight: [1080, 620, 720, 500, 500],
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner1",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false
                    }
                });
            }
        });
    </script>
    <script>
        $('#custom-carousel').owlCarousel({
            items:1,
            center:true,
            autoWidth:true,
            autoHeight: true,
            loop:true,
            nav:true
        });
    </script>
    <script type='text/javascript' src='{{asset('assets/js/marquee.js')}}'></script>
    <script>
        $('.marquee').marquee({
            duplicated: true,
            duration:20000,
            pauseOnHover:true
        });
    </script>
    <script>
        setTimeout(function(){
            document.getElementById('vid').play();
        },1000);
    </script>
    <script type="text/javascript">
        for(var i in navigator){
            console.log(i+"="+navigator[i]+'<br>');
        }
    </script>
    <script>
        $(document).ready(function(){
            like_dislike();
        });
        function like_dislike(){
            $('.message').each(function(){
                var ip_address = $('#ipAddress').val();
                var likes = $(this).data('likedby');
                var likesCount = 0;
                var disLikesCount = 0;

                for(var i=0; i<likes.length; i++){
                    if(likes[i].like_dislike == 1){
                        if(likes[i].ip_address != ip_address){
                            likesCount++;
                        }
                    }
                    else if(likes[i].like_dislike == 0){
                        if(likes[i].ip_address != ip_address) {
                            disLikesCount++;
                        }
                    }
                }
                for(var j=0; j<likes.length; j++){
                    if(likes[j].ip_address == ip_address){
                        if(likes[j].like_dislike == 1){
                            $(this).find('.likeText').remove();
                            if(likesCount>0){
                                $(this).find('.like_dislike_status').append('<span>You and '+likesCount+' other Like This</span>');
                            }
                            else{
                                $(this).find('.like_dislike_status').append('<span>You Like This</span>');
                            }
                        }
                        else if(likes[j].like_dislike == 0){
                            $(this).find('.dislikeText').remove();
                            if(disLikesCount>0){
                                $(this).find('.like_dislike_status').append('<span>You and '+disLikesCount+' other Dislike This</span>');
                            }
                            else{
                                $(this).find('.like_dislike_status').append('<span>You Dislike This</span>');
                            }
                        }
                    }
                }
            })
        }
    </script>
    <script>
        $('.like').on('click', function(){
            var ipAddress = $('#ipAddress').val();
            var message_id = $(this).data('id');
            var element = $(this);
            $.ajax({
                url: "{!! URL::to('like') !!}",
                method: "GET",
                data:{
                    message_id: message_id,
                    ipAddress: ipAddress
                },
                success:function(response){
                    $(element).closest('li').data('likedby', response);
                    var likes = JSON.parse($(element).closest('li').data('likedby'));
                    var likesCount = 0;
                    var disLikesCount = 0;
                    var ip_address = $('#ipAddress').val();
                    console.log(likes);
                    for(var i=0; i<likes.length; i++){
                        if(likes[i].like_dislike == 1){
                            if(likes[i].ip_address != ip_address){
                                likesCount++;
                            }
                        }
                        else if(likes[i].like_dislike == 0){
                            if(likes[i].ip_address != ip_address) {
                                disLikesCount++;
                            }
                        }
                    }
                    $(element).closest('li').find('.like_dislike_status').find('span').remove();

                    if(likesCount>0){
                        $(element).closest('li').find('.like_dislike_status').append('<span>You and '+likesCount+' other Like This</span>');
                    }
                    else{
                        $(element).closest('li').find('.like_dislike_status').append('<span>You Like This</span>');
                    }
                    $(element).closest('li').find('.likeText').remove();
                },
                error:function(response){
                    console.log(response.responseText);
                }
            });
        });
        $('.dislike').on('click', function(){
            var ipAddress = $('#ipAddress').val();
            var message_id = $(this).data('id');
            var element = $(this);
            $.ajax({
                url: "{!! URL::to('dislike') !!}",
                method: "GET",
                data:{
                    message_id: message_id,
                    ipAddress: ipAddress
                },
                success:function(response){
                    $(element).closest('li').data('likedby', response);
                    var likes = JSON.parse($(element).closest('li').data('likedby'));
                    var likesCount = 0;
                    var disLikesCount = 0;
                    var ip_address = $('#ipAddress').val();
                    console.log(likes);
                    for(var i=0; i<likes.length; i++){
                        if(likes[i].like_dislike == 1){
                            if(likes[i].ip_address != ip_address){
                                likesCount++;
                            }
                        }
                        else if(likes[i].like_dislike == 0){
                            if(likes[i].ip_address != ip_address) {
                                disLikesCount++;
                            }
                        }
                    }
                    $(element).closest('li').find('.like_dislike_status').find('span').remove();
                    if(likesCount>0){
                        $(element).closest('li').find('.like_dislike_status').append('<span>You and '+disLikesCount+' other Dislike This</span>');
                    }
                    else{
                        $(element).closest('li').find('.like_dislike_status').append('<span>You Dislike This</span>');
                    }
                    $(element).closest('li').find('.dislikeText').remove();
                    if(!$(element).closest('li').find('.dislikeText').length){

                    }
                },
                error:function(response){
                    console.log(response.responseText);
                }
            });
        });
    </script>
@endsection