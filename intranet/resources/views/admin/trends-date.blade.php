@extends('layouts.admin-layout')
@section('header')
@endsection
@section('body')
    <div class="content-body">
        <section id="form-control-repeater">
            <form action="{{URL::to('trends')}}" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="file-repeater">Intranet Trends</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="form row">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group col-md-6 mb-2">
                                            <label>From Date</label>
                                            <input type="date" class="form-control" value="{{date('Y-m-d', strtotime(date('Y-m-d').'- 1 month'))}}" name="from_date">
                                        </div>
                                        <div class="form-group col-md-6 mb-2">
                                            <label>To Date</label>
                                            <input type="date" class="form-control" value="{{date('Y-m-d')}}" name="to_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-info btn-sm" type="submit"><i class="la la-paper-plane-o"></i> Submit </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
@section('footer')
@endsection