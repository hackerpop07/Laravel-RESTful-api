<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $customers = new Customer();
            $customers->first_name = 'name';
            $customers->last_name = 'name';
            $customers->save();
        }
    }
}
