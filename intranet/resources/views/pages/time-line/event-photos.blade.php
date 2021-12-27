@extends('layouts.web-layout')
@section('header')
    @endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
    </section>
    <div class="margin-tb-0px">
        <ul class="row no-gutters padding-0px margin-0px list-unstyled">
            @foreach($event->photos as $photo)
                <li class="col-lg-3 col-md-6 with-hover">
                    <img src="{{asset('assets/event-photos'.'/'.$event->event_title.'/'.$photo->name)}}" alt="">
                    <a href="{{asset('assets/event-photos'.'/'.$event->event_title.'/'.$photo->name)}}" data-toggle="lightbox" data-gallery="example-gallery" class="d-block hover-option background-main-color img-fluid">
                        <h1 class="text-center text-white padding-top-n-40"><i class="fa fa-search"></i></h1>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
@section('footer')
    @endsection