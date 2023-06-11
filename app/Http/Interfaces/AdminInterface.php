<?php
namespace App\Http\Interfaces;
interface AdminInterface
{
    public function index();
    public function create();
    public function store($request);
    public function update();
    public function delete();


}