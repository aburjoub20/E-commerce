@csrf
<div class="row mb-4">
    <div class="col-sm-12">
        <input type="text" name="name_en" value="{{old('name_en', $BlogCategory->name_en ?? '')}}" class="form-control" id="add_name" placeholder="name English *">
    </div>
</div>
<div class="row mb-4">
    <div class="col-sm-12">
        <input type="text" name="name_ar" value="{{old('name', $BlogCategory->name_ar ?? '')}}" class="form-control" id="add_name" placeholder="name Arabic *">
    </div>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
