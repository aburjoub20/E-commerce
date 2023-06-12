<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\DataTables\AdminDataTable;
use App\Http\Interfaces\AdminInterface;

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
    
    public function update(){
        return $this->adminInterface->update();

    }
    public function delete(){
        return $this->adminInterface->delete();

    }
}
