<?php
namespace App\Http\Interfaces;
interface AdminInterface
{
    public function index( $datatable);
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request);
    public function delete($request);


}