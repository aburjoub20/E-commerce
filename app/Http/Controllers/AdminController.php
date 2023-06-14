<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\DataTables\AdminDataTable;
use App\Http\Interfaces\AdminInterface;
use App\Http\Requests\AdminDeleteRequest;
use App\Http\Requests\Admin\AdminEditRequest;

class AdminController extends Controller
{
    private $adminInterface;
    private $admin;

    public function __construct(AdminInterface $adminInterface , Admin $admin )
    {
        $this->adminInterface = $adminInterface;
        $this->admin = $admin;
    }

    public function index(AdminDataTable $datatable)
    {
        return $this->adminInterface->index($datatable);
    }

    public function create()
    {
        return $this->adminInterface->create();
    }
    public function store(Request $request)
    {
        return $this->adminInterface->store($request);
    }
    public function edit($id){

     return $this->adminInterface->edit($id);

    }
    
    public function update(AdminEditRequest $request){
        return $this->adminInterface->update($request);

    }
    public function delete(AdminDeleteRequest $request){
        return $this->adminInterface->delete($request);

    }
}
