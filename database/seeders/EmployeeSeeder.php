<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 100; $i++) {
            $employee = new Employee();
            $employee->name = $faker->name();
            $employee->designation = $faker->sentence(3);
            $employee->joining_date = $faker->date();
            $employee->salary = $faker->randomFloat('2', 0, 2);
            $employee->email = $faker->unique()->safeEmail();
            $employee->mobile_no = $faker->phoneNumber();
            $employee->address = $faker->address();
            $employee->save();
        }
    }
}
