<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\DataTables\BlogCategoryDataTable;
use App\Http\Interfaces\BlogCategoryInterface;

class BlogCategoryController extends Controller
{
    

    private $BlogCategoryInterface;
    private $BlogCategory;

    public function __construct(BlogCategoryInterface $BlogCategoryInterface , BlogCategory $BlogCategory )
    {
        $this->BlogCategoryInterface = $BlogCategoryInterface;
        $this->$BlogCategory = $BlogCategory;
    }

    public function index(BlogCategoryDataTable $datatable)
    {
        return $this->BlogCategoryInterface->index($datatable);
    }

    public function create()
    {
        return $this->BlogCategoryInterface->create();
    }
    public function store(Request $request)
    {
        return $this->BlogCategoryInterface->store($request);
    }
    // public function edit($id){

    //  return $this->BlogCategoryInterface->edit($id);

    // }
    
    // public function update(AdminEditRequest $request){
    //     return $this->adminInterface->update($request);

    // }
    public function delete(Request $request){
        return $this->BlogCategoryInterface->delete($request);

    }

}
