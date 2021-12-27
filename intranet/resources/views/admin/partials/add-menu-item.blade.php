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