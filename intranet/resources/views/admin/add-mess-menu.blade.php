@extends('layouts.admin-layout')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/selects/select2.min.css')}}">
@endsection
@section('body')
    <div class="content-body">
        <section id="form-control-repeater">
            <form action="{{URL::to('mess/menu/add')}}" method="post" enctype="multipart/form-data">
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
                                            <input type="date" class="form-control menu_date" name="menu_date[]" required>
                                        </div>
                                        <div class="form-group col-md-6 mb-2">
                                            <label>Menu</label>
                                            <input type="text" class="form-control" value="{{Input::old('menu')}}" name="menu[]" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="btn btn-info btn-sm white" onclick="addMenuItem()"><i class="la la-plus-square-o"></i> Add More </a>
                                    <button class="btn btn-success btn-sm" type="submit"><i class="la la-paper-plane-o"></i> Submit </button>
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
            var self = $(this);
            $('.menu_date').not(self).each(function(i, obj){
               if($(self).val() == $(obj).val()){
                   alert('Already Selected. Please select another date');
                   self.val('');
               }
            });
            evt.preventDefault();
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

        function addMenuItem(){
            var rows = $('#rows').val();
            rows = parseInt(rows)+1;
            $('#rows').val(rows);
            $.ajax({
                url:"{{URL::to('add/menu/item')}}",
                method: "GET",
                success: function(response){
                    var res = JSON.parse(response);
                    $('#formContainer').append(res.row);
                }
            });
        }
    </script>
@endsection
