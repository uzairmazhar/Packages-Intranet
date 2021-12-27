/**
* Created by PhpStorm.
* User: Abdul Haseeb
* Date: 8/17/2018
* Time: 12:11 AM
*/
@extends('layouts.web-layout')
@section('header')
@endsection
@section('body')
    <div class="m-content">
        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                           Event Form
                        </h3>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form class="m-form m-form--fit m-form--label-align-right" id="m_form_1">
                <div class="m-portlet__body">
                    <div class="m-form__content">
                        <div class="m-alert m-alert--icon alert alert-danger m--hide" role="alert" id="m_form_1_msg">
                            <div class="m-alert__icon">
                                <i class="la la-warning"></i>
                            </div>
                            <div class="m-alert__text">
                                Oh snap! Change a few things up and try submitting again.
                            </div>
                            <div class="m-alert__close">
                                <button type="button" class="close" data-close="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Pick Date&Time
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group date'>
                                <input type='text' class="form-control m-input" name="datetime"
                                       placeholder="Select date & time" id='m_datetimepicker'/>
                                <div class="input-group-append">
													<span class="input-group-text">
														<i class="la la-calendar-check-o glyphicon-th"></i>
													</span>
                                </div>
                            </div>
											<span class="m-form__help">
												Select a date time
											</span>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Multiple File Upload
                        </label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="inc/api/dropzone/upload.php" id="m-dropzone-two">
                                <div class="m-dropzone__msg dz-message needsclick">
                                    <h3 class="m-dropzone__msg-title">
                                        Drop files here or click to upload.
                                    </h3>
													<span class="m-dropzone__msg-desc">
														Upload Photo
													</span>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>
<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>

                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <button type="submit" class="btn btn-success">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Portlet-->
    </div>
@endsection
@section('footer')
@endsection
