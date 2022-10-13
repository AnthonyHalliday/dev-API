<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Http\Requests\StoredepartmentRequest;
use App\Http\Requests\UpdatedepartmentRequest;
use App\Http\Resources\DepartmentResource;
use App\Http\Resources\DepartmentCollection;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //New resource for JSON format - Display All Departments, without referencing DepartmentResource this assumes one already exists and uses it
        return new DepartmentCollection(Department::paginate()); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredepartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredepartmentRequest $request)
    {
        return new DepartmentResource(Department::create($request->all())); //Pass in new request data
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(department $department)
    {
        return new DepartmentResource($department);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedepartmentRequest  $request
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedepartmentRequest $request, department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(department $department)
    {
        //
    }
}
