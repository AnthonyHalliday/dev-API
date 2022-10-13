<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //create random department 
            'departmentName' => $this->faker->randomElement(['IT', 'HR', 'Admin', 'Cleaning']) //faker to create random useable data. Not using as can create duplicant department
            //and using fake.job is simpler for the task, even if it might look a little silly for the example
            //'departmentname' =>this->faker->job()
        ];
    }
}
