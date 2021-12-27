@extends('layouts.web-layout-1')
@section('header')
@endsection
@section('body')
    <div class="padding-tb-40px background-light-grey" style="transform: none;">
        <div class="container" style="transform: none;">

            <div class="row" style="transform: none;">
                <!--  content -->

                <div class="col-lg-12 col-md-12 sticky-content"
                     style="position: relative; overflow: visible; box-sizing: border-box; min-height: 870px;">
                    <section class="background-grey-1 padding-tb-25px text-grey-4">
                        <div class="container">
                            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">
                                <h3> Policies</h3>
                            </h6>
                            <div class="clearfix">

                            </div>
                        </div>
                    </section>
                    <div class="blog-entry background-white border-1 border-grey-1 margin-bottom-35px wow fadeInRight">
                        <ul class="row no-gutters padding-0px margin-0px list-unstyled">
                            <li class="col-lg-12 col-md-10 with-hover">
                                <img src="{{asset('assets\img\pol.jpg')}} " style="height: auto; width:100%;" alt="">
                                <a href="{{URL::to('assets\img\pol.jpg')}}" data-toggle="lightbox"
                                   data-gallery="example-gallery"
                                   class="d-block hover-option  img-fluid">

                                </a>
                            </li>
                        </ul>
                        <div class="padding-30px">
                            <div class="post-entry">
                                <div class="d-block text-up-small text-grey-4 margin-bottom-15px wow fadeInLeft">
                                    <h3>Quality Policy</h3>
                                    <p>Packages Ltd. is strongly committed to produce quality products that conform to
                                        customer’s requirements at a competitive price. We shall continually improve our
                                        Quality Management System and quality performance of all business processes. We
                                        shall set quality objectives at all levels and allocate appropriate resources to
                                        achieve them. We shall ensure all our employees are well aware of company's
                                        Quality Policy and are motivated to apply it in their areas of responsibility. .
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-entry background-white border-1 border-grey-1 margin-bottom-35px wow fadeInRight">
                        <ul class="row no-gutters padding-0px margin-0px list-unstyled">
                            <li class="col-lg-12 col-md-10 with-hover">
                                <img src="{{asset('assets/img/safety.jpg')}} " style="height: auto; width:100%;" alt="">
                                <a href="{{URL::to('assets/img/safety.jpg')}}" data-toggle="lightbox"
                                   data-gallery="example-gallery"
                                   class="d-block hover-option  img-fluid">

                                </a>
                            </li>
                        </ul>
                        <div class="padding-30px">
                            <div class="post-entry">
                                <div class="d-block text-up-small text-grey-4 margin-bottom-15px wow fadeInLeft">
                                    <h3>Environment, Health and Safety (EH & S) Policy
                                    </h3>
                                    <p> Environment, Health and Safety (EH & S) Policy
                                        The Management of Packages Limited realizes that we live in a world where
                                        resources are finite and the eco-system has a limited capacity to absorb the
                                        load mankind is placing on it. That is why it is our belief that we must do
                                        everything practically possible to lessen the load we place on the environment
                                        and make every effort so that sustainable development becomes a reality.
                                        Packages Limited has formulated its environment, health and safety (EH&S) policy
                                        to address these issues in a more effective way. It is very clear to us that
                                        these objectives can not be realized by the efforts of the Management alone.
                                        While the general directions are to be provided by the Management, the help of
                                        all the employees will be required to transform these ambitions into reality. It
                                        is expected that all the employees will do their best to implement the policy in
                                        its true spirit. Packages Limited shall: Minimize its environmental impact, as
                                        is economically and practically possible Save raw materials including energy and
                                        water, avoid waste Ensure that all its present and future activities are
                                        conducted safely, without endangering the health of its employees, its customers
                                        and the public Develop plans and procedures and provide resources to
                                        successfully implement this policy and for dealing effectively with any
                                        emergency Provide environmental, health and safety training to all employees and
                                        other relevant persons to enable them to carry out their duties safely without
                                        causing harm to themselves, to other individuals and to environment Ensure that
                                        all its activities comply with national environmental, health and safety
                                        regulations This policy shall be reviewed as and when required for betterment of
                                        the same.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-entry background-white border-1 border-grey-1 margin-bottom-35px wow fadeInRight">
                        <ul class="row no-gutters padding-0px margin-0px list-unstyled">
                            <li class="col-lg-12 col-md-10 with-hover">
                                <img src="{{asset('assets/img/pol.jpg')}} " style="height: auto; width:100%;" alt="">
                                <a href="{{URL::to('assets/img/pol.jpg')}}" data-toggle="lightbox"
                                   data-gallery="example-gallery"
                                   class="d-block hover-option  img-fluid">

                                </a>
                            </li>
                        </ul>
                        <div class="padding-30px">
                            <div class="post-entry">
                                <div class="d-block text-up-small text-grey-4 margin-bottom-15px wow fadeInLeft">
                                    <h3>Foreword to Code of Conduct</h3>
                                    <p>
                                        Packages Ltd. is strongly committed to produce quality products that conform to
                                        customer’s requirements at a competitive price. We shall continually improve our
                                        Quality Management System and quality performance of all business processes. We
                                        shall set quality objectives at all levels and allocate appropriate resources to
                                        achieve them. We shall ensure all our employees are well aware of company's
                                        Quality Policy and are motivated to apply it in their areas of responsibility. .

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection