@extends('layouts.admin-layout')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/selects/select2.min.css')}}">
@endsection
@section('body')
    <div class="content-body">
        <section id="form-control-repeater">
            <form action="{{URL::to('employee/announcement/add')}}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="file-repeater">Add New Employee Announcement</h4>
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
                                            <label>Announcement Category</label>
                                            <select class="select2 form-control" name="category" required>
                                                <option {{Input::old('category') == 'Internal Job Announcement' ? 'selected="Selected"':""}} value="Internal Job Application">Internal Job Application</option>
                                                <option {{Input::old('category') == 'Employee Announcement' ? 'selected="Selected"':""}} value="Employee Announcement">Employee Announcement</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 mb-2">
                                            <label>Title</label>
                                            <input type="text" class="form-control" value="{{Input::old('title')}}" name="title" required>
                                        </div>
                                        <div class="form-group col-md-12 mb-2">
                                            <label>Announcement Description <small>(137 Characters)</small></label>
                                            <textarea type="text" class="form-control" name="description" maxlength="137" required>{{Input::old('description')}}</textarea>
                                        </div>
                                        <div class="form-group col-md-4 mb-2">
                                            <label>Title Attachment</label>
                                            <input type="file" class="form-control" name="title_attachment" >
                                        </div>
                                        <div class="form-group col-md-4 mb-2">
                                            <label>Attachment 1</label>
                                            <input type="file" class="form-control" name="attachment_1" >
                                        </div>
                                        <div class="form-group col-md-4 mb-2">
                                            <label>Attachment 2</label>
                                            <input type="file" class="form-control" name="attachment_2" >
                                        </div>
                                        <div class="form-group col-md-4 mb-2">
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
