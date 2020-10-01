<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MortgagesTableSeeder::class);
        $this->call(LoanTableSeeder::class);
        $this->call(EquityTableSeeder::class);
        $this->call(ResourceTableSeeder::class);
    }
}
