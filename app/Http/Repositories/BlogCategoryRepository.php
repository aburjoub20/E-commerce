<?php

namespace App\Http\Repositories;
use App\Models\BlogCategory;
use App\Http\interfaces\BlogCategoryInterface;

class BlogCategoryRepository implements BlogCategoryInterface
{

    private $BlogCategory;
    public function __construct(BlogCategory $BlogCategory){
        $this->BlogCategory = $BlogCategory;
    }
    public function index( $datatable){
        return $datatable->render('BlogCategory.index');
        return view('index');
    }
    public function create(){
        return view('BlogCategory.create');
    }
    public function store( $request ){
        // dd($request);
        $this->BlogCategory::create([
            'name'=>['ar'=>$request->name_ar,'en'=>$request->name_en],

        ]);
        toast('Your BlogCategory  added successfuly','success');

        return redirect(route('BlogCategory.create'));

    }
    // public function edit($id){
    //    $admin= $this->admin::find($id);
    //     return ($admin)? view('Admin.edit',compact('admin')): back();
    // }

    // public function update( $request)
    // {      
    //     $admin = Admin::findOrFail($request->id);
    //     $admin->update([
    //         'name' => $request->name,
    //         'password' => $request->password,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //     ]); 
    //     toast('Your Admin user modified successfully', 'success');
    //     return redirect()->route('admin.index');

    // }
    
    public function delete($request){
        $BlogCategory=$this->BlogCategory::findOrFail($request->id)->delete();
        if($BlogCategory){
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