<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\DepartmentController;
use App\Http\Resources\DepartmentResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'bio' => $this->bio,
            //'department' => $this->$departmentName from foreign key

            //Check loggedUser forien depertmant_id against department table and only display 
            //emails for matching department

            //department_id == foreign key in user table from department table
            /* for(department_id in $id = this->get(app->http->DepartmentController)){
                    if $department_id != $id{ return 'HiddenEmail'}
                        elseif $department_id == $id{'email=>this->$email}*/ 

            'email' => $this->email,
        ];
    }
}
