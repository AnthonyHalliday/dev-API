<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index( Request $request){
        return new UserCollection(User::paginate());

        //filter users by name and department
        $users = User::where('is_active', true);

        if ($request->has('username')) {
            $users->where('name', $request->username);
        }

        if ($request->has('department')) {
            $users->where('departmentName', $request->department);
        }

        return $users->get();

    }

    public function show(User $user){
        return new UserResource($user);

        
    }
}
