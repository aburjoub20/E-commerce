@csrf
<div class="row mb-4">
    <div class="col-sm-12">
        <input type="text" name="name" value="{{old('name', $admin->name ?? '')}}" class="form-control" id="add_name" placeholder="name address *">
    </div>
</div>
<div class="row mb-4">
    <div class="col-sm-12">
        <input type="email" name="email" value="{{old('email', $admin->email ?? '')}}" class="form-control" id="email " placeholder="Enter your email*">
    </div>
</div>
<div class="row mb-4">
    <div class="col-sm-12">
        <input type="password"  name="password"  value="{{old('password', $admin->password ?? '')}}"class="form-control" id="inputPassword3" placeholder="enter your password *">
    </div>
</div>

<div class="row mb-4">
    <div class="col-sm-12">
        <input type="phone"  name="phone" class="form-control" value="{{old('phone' , $admin->phone ?? '')}}" id="phone" placeholder="enter your phone *">
    </div>
</div>



<button type="submit" class="btn btn-primary">Submit</button>
