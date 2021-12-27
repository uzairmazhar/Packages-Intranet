@extends('layouts.admin-layout')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/selects/select2.min.css')}}">
@endsection
@section('body')
    <div class="content-body">
        <section id="form-control-repeater">
            <form action="{{URL::to('directory/add')}}" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="file-repeater">Add New Directory</h4>
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
                                            <label>Name</label>
                                            <input type="text" class="form-control" value="{{Input::old('name')}}" name="name" required>
                                        </div>
                                        <div class="form-group col-md-6 mb-2">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" value="{{Input::old('designation')}}" name="designation">
                                        </div>
                                        <div class="form-group col-md-12 mb-2">
                                            <label>Department</label>
                                            <input type="text" class="form-control" value="{{Input::old('department')}}" name="department" required>
                                        </div>
                                        <div class="form-group col-md-5 mb-2">
                                            <label>Direct Line</label>
                                            <input type="text" class="form-control" value="{{Input::old('direct_line')}}" name="direct_line">
                                        </div>
                                        <div class="form-group col-md-2 mb-2">
                                            <label>Ext</label>
                                            <input type="text" class="form-control" value="{{Input::old('extension')}}" name="extension">
                                        </div>
                                        <div class="form-group col-md-5 mb-2">
                                            <label>Mobile #</label>
                                            <input type="text" class="form-control" value="{{Input::old('mobile_number')}}" name="mobile_number">
                                        </div>
                                        <div class="form-group col-md-12 mb-2">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="{{Input::old('email')}}" name="email" required>
                                        </div>
                                        <div class="form-group col-md-6 mb-2">
                                            <label>Enabled</label>
                                            <select class="select2 form-control" name="enabled" required>
                                                <option {{Input::old('enabled') == '1' ? 'selected="Selected"':""}} value="1">Yes</option>
                                                <option {{Input::old('enabled') == '0' ? 'selected="Selected"':""}} value="0">No</option>
                                            </select>
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
    <script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>
@endsection
