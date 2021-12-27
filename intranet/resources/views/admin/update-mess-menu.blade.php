@extends('layouts.admin-layout')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/selects/select2.min.css')}}">
@endsection
@section('body')
    <div class="content-body">
        <section id="form-control-repeater">
            <form action="{{URL::to('mess/menu/update'.'/'.$messMenu->id)}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="rows" id="rows" value="1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="file-repeater">Add Mess Menu</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body" id="formContainer">
                                    <div class="form row">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group col-md-4 mb-2">
                                            <label>Date</label>
                                            <input type="date" class="form-control menu_date" value="{{$messMenu->date}}" name="menu_date" readonly>
                                        </div>
                                        <div class="form-group col-md-6 mb-2">
                                            <label>Menu</label>
                                            <input type="text" class="form-control" value="{{$messMenu->menu}}" name="menu" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-success btn-sm" type="submit"><i class="la la-paper-plane-o"></i> Update </button>
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
    <script>
        $('body').on('change', 'input.menu_date', function(evt){
            var date = $(this).val();
            var container = $(this);
            $.ajax({
                url:"{{URL::to('get/menu/date/data')}}",
                method:"GET",
                data:{
                    menu_date: date
                },
                success: function(response){
                    var res = JSON.parse(response);
                    if(res.length > 0){
                        alert('Menu against this date already exists. Please select another date.');
                        container.val('');
                    }
                }
            });
        });
    </script>
@endsection
