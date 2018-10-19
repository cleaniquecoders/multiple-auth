<?php

use Illuminate\Database\Seeder;

class AccountantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Accountant::class, 10)->create();
    }
}
