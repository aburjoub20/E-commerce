<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Interfaces\AdminInterface;

class AdminController extends Controller
{
    private $adminInterface;

    public function __construct(AdminInterface $adminInterface)
    {
        $this->adminInterface = $adminInterface;
    }

    public function index()
    {
        return $this->adminInterface->index();
    }

    public function create()
    {
        return $this->adminInterface->create();
    }
    public function store(Request $request)
    {
        return $this->adminInterface->store($request);
    }
    
    public function update(){
        return $this->adminInterface->update();

    }
    public function delete(){
        return $this->adminInterface->delete();

    }
}
