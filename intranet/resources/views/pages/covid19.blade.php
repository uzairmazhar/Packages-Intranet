@extends('layouts.web-layout')
@section('header')
    <style>
        .background-3{
            background-color: #ef3c3f;
        }
    </style>
@endsection
@section('body')
    <section class="fullscreen-container" style="padding-top: 90px">
        <img class="img-responsive" style="width: 100%" src="{{asset('assets/img/banners/banner-covid-19.jpg')}}">
    </section>
    <section class="padding-tb-100px background-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="margin-bottom-60px text-white wow fadeInUp">
                        <h3 class="font-weight-700 text-title-large margin-bottom-25px">COVID-19 Employee Bulletins</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="flipsection red">
                        <div>
                            <div id="photobook" style="height:100px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')

    <script type="text/javascript" src="{{asset('assets/js/jquery-1.11.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.mousewheel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/three.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.onebook3d-2.33.js')}}"></script>
    <script>

        $(function(){
            var src4 = [
                "{{asset('assets/img/emp_bullets/1.png')}}",
                "{{asset('assets/img/emp_bullets/2a.png')}}",
                "{{asset('assets/img/emp_bullets/2b.png')}}",
                "{{asset('assets/img/emp_bullets/3a.png')}}",
                "{{asset('assets/img/emp_bullets/3b.png')}}",
                "{{asset('assets/img/emp_bullets/4.png')}}",
                "{{asset('assets/img/emp_bullets/5a.png')}}",
                "{{asset('assets/img/emp_bullets/5b.png')}}",
                "{{asset('assets/img/emp_bullets/6a.png')}}",
                "{{asset('assets/img/emp_bullets/6b.png')}}",
                "{{asset('assets/img/emp_bullets/6c.png')}}",
                "{{asset('assets/img/emp_bullets/7a.png')}}",
                "{{asset('assets/img/emp_bullets/7b.png')}}",
                "{{asset('assets/img/emp_bullets/7c.png')}}",
                "{{asset('assets/img/emp_bullets/7d.png')}}",
                "{{asset('assets/img/emp_bullets/8a.png')}}",
                "{{asset('assets/img/emp_bullets/8b.png')}}",
                "{{asset('assets/img/emp_bullets/8c.png')}}",
                "{{asset('assets/img/emp_bullets/9a.png')}}",
                "{{asset('assets/img/emp_bullets/9b.png')}}",
                "{{asset('assets/img/emp_bullets/9c.png')}}",
                "{{asset('assets/img/emp_bullets/10a.png')}}",
                "{{asset('assets/img/emp_bullets/10b.png')}}",
                "{{asset('assets/img/emp_bullets/11a.png')}}",
                "{{asset('assets/img/emp_bullets/11b.png')}}",
                "{{asset('assets/img/emp_bullets/12a.png')}}",
                "{{asset('assets/img/emp_bullets/12b.png')}}",
                "{{asset('assets/img/emp_bullets/13a.png')}}",
                "{{asset('assets/img/emp_bullets/13b.png')}}",
                "{{asset('assets/img/emp_bullets/13c.png')}}",
                "{{asset('assets/img/emp_bullets/14a.png')}}",
                "{{asset('assets/img/emp_bullets/14b.png')}}",
                "{{asset('assets/img/emp_bullets/15a.png')}}",
                "{{asset('assets/img/emp_bullets/15b.png')}}",
                "{{asset('assets/img/emp_bullets/16a.png')}}",
                "{{asset('assets/img/emp_bullets/16b.png')}}",
                "{{asset('assets/img/emp_bullets/17a.png')}}",
                "{{asset('assets/img/emp_bullets/17b.png')}}",
                "{{asset('assets/img/emp_bullets/18a.png')}}",
                "{{asset('assets/img/emp_bullets/18b.png')}}",
                "{{asset('assets/img/emp_bullets/18c.png')}}",
                "{{asset('assets/img/emp_bullets/19a.png')}}",
                "{{asset('assets/img/emp_bullets/19b.png')}}",
                "{{asset('assets/img/emp_bullets/19c.png')}}",
                "{{asset('assets/img/emp_bullets/20.png')}}",
                "{{asset('assets/img/emp_bullets/21a.png')}}",
				"{{asset('assets/img/emp_bullets/21b.png')}}",
                "{{asset('assets/img/emp_bullets/22.png')}}",
                "{{asset('assets/img/emp_bullets/23a.png')}}",
				"{{asset('assets/img/emp_bullets/23b.png')}}",
                "{{asset('assets/img/emp_bullets/24a.png')}}",
				"{{asset('assets/img/emp_bullets/24b.png')}}",
                "{{asset('assets/img/emp_bullets/24c.png')}}",
				"{{asset('assets/img/emp_bullets/26a.png')}}",
                "{{asset('assets/img/emp_bullets/26b.png')}}",
				"{{asset('assets/img/emp_bullets/27a.png')}}",
                "{{asset('assets/img/emp_bullets/27b.png')}}",
				"{{asset('assets/img/emp_bullets/27c.png')}}",
                "{{asset('assets/img/emp_bullets/28a.png')}}",
				"{{asset('assets/img/emp_bullets/28b.png')}}",
                "{{asset('assets/img/emp_bullets/29a.png')}}",
				"{{asset('assets/img/emp_bullets/29b.png')}}",
                "{{asset('assets/img/emp_bullets/29c.png')}}",
				"{{asset('assets/img/emp_bullets/30a.png')}}",
                "{{asset('assets/img/emp_bullets/30b.png')}}",
				"{{asset('assets/img/emp_bullets/31a.png')}}",
                "{{asset('assets/img/emp_bullets/31b.png')}}",
				"{{asset('assets/img/emp_bullets/31c.png')}}",
                "{{asset('assets/img/emp_bullets/33a.png')}}",
				"{{asset('assets/img/emp_bullets/33b.png')}}",
				"{{asset('assets/img/emp_bullets/33c.png')}}"
            ];
            $('#photobook').onebook(src4,{skin:['light','dark'], bgDark:'#56998c',bgLight:'#d97f6f', border:0, cesh:false});
        });


    </script>

@endsection