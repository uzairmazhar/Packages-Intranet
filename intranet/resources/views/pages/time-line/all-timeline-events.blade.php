@extends('layouts.web-layout')
@section('header')
    @endsection
@section('body')
    <section class="padding-tb-100px background-packages-value-orange" style="background: #fdfdfd;padding-top: 130px">
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
        </div>
    </section>
@endsection
@section('footer')
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
@endsection