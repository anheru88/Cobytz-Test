<?php

use Illuminate\Database\Seeder;

class CurrencyExchangeRatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currenciy_exchange_rates =[
            ['from_currency_id' => '1', 'from_value' => '1', 'to_currency_id'=> '2', 'to_value' => '0.01225', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['from_currency_id' => '1', 'from_value' => '1', 'to_currency_id'=> '3', 'to_value' => '80.35000', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['from_currency_id' => '2', 'from_value' => '1', 'to_currency_id'=> '1', 'to_value' => '59.26065', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['from_currency_id' => '2', 'from_value' => '1', 'to_currency_id'=> '3', 'to_value' => '8057.23000', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['from_currency_id' => '3', 'from_value' => '1', 'to_currency_id'=> '1', 'to_value' => '0.01245', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['from_currency_id' => '3', 'from_value' => '1', 'to_currency_id'=> '2', 'to_value' => '0.00012', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],

        ];

        DB::table('currency_exchange_rates')->insert($currenciy_exchange_rates);
    }
}
