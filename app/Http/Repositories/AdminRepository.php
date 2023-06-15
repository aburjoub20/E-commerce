<?php

namespace App\Http\Repositories;
use App\Models\Admin;
use App\Http\interfaces\AdminInterface;
use App\Http\Requests\Admin\AdminCreateRequest;
use RealRashid\SweetAlert\Facades\Alert;


class AdminRepository implements AdminInterface
{
    private $admin;
    public function __construct(Admin $admin){
        $this->admin = $admin;
    }
    public function index( $datatable){
        return $datatable->render('Admin.index');
        return view('index');
    }
    public function create(){
        return view('Admin.create');
    }
    public function store( $request ){
        // dd($request);
        $this->admin::create([
            'name'=>['ar'=>$request->name_ar,'en'=>$request->name_en],
            'password'=>$request->password,
             'email'=>$request->email,
             'phone'=>$request->phone,
        ]);
        toast('Your Admin user added successfuly','success');

        return redirect(route('admin.create'));

    }
    public function edit($id){
       $admin= $this->admin::find($id);
        return ($admin)? view('Admin.edit',compact('admin')): back();
    }

    public function update( $request)
    {      
        $admin = Admin::findOrFail($request->id);
        $admin->update([
            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email,
            'phone' => $request->phone,
        ]); 
        toast('Your Admin user modified successfully', 'success');
        return redirect()->route('admin.index');

    }
    
    public function delete($request){
        $admin=$this->admin::findOrFail($request->id)->delete();
        if($admin){
            return response()->json([
                'message'=>'success',
                'id'=>$request->id,
            ]);

            return response()->json([
                'message'=>'faild',
                'id'=>$request->id,
            ]);
            

        }

    }

}