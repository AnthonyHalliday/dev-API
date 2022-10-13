<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\department;
use App\Models\User;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

/*
/For test data: run /php artisan migrate:fresh --seed/ to see if it works, as opposed to POSTing alot of data
*/
    public function run()
    {
        Department::factory()
            ->count(2)
            ->hasUsers(25)
            ->create();
    }
}
