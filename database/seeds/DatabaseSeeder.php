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
        $this->call(CurrenciesSeeder::class);
        $this->call(CurrencyExchangeRatesSeeder::class);
        $this->call(SymbolSeeder::class);
    }
}
