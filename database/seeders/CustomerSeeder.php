<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        customer::Factory(1000)-> create();
    }
}
