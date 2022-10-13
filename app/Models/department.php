<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;

    protected $fillable = ['departmentName']; //Fillable new department name

    public function users(){
        return $this->hasmany(User::class); //Department has many users
    }
}
