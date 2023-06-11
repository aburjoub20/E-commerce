<?php

namespace App\Http\Repositories;
use App\Models\Admin;
use App\Http\interfaces\AdminInterface;
use App\Http\Requests\Admin\AdminCreateRequest;

class AdminRepository implements AdminInterface
{
    private $admin;
    public function __construct(Admin $admin){
        $this->admin = $admin;
    }
    public function index(){
        return view('index');
    }
    public function create(){
        return view('Admin.create');
    }
    public function store( $request ){
        // dd($request);
        $this->admin::create([
            'name'=>$request->name,
            'password'=>$request->password,
             'email'=>$request->email,
             'phone'=>$request->phone,
        ]);
        return redirect('/');

    }
    public function update(){}
    public function delete(){}

}