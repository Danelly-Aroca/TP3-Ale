<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        employee::Factory(1000)-> create();
    }
}
