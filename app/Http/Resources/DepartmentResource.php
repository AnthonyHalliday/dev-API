<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\DepartmentController;
class DepartmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return array specific to desired properties for json response (camelcase) Also don't display timestamps
        return[
            'departmentID' => $this->id,
            'departmentName' => $this->departmentName
        ];
    }
}
