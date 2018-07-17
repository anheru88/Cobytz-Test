<?php

use Illuminate\Database\Seeder;

class SymbolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $symbols =[
            ['currency_exchange_rate_id' => '1', 'slug' => 'ltcbtc', 'inverse' => '0', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['currency_exchange_rate_id' => '2', 'slug' => 'ltcusd', 'inverse' => '0','created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['currency_exchange_rate_id' => '3', 'slug' => 'ltcbtc', 'inverse' => '1','created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['currency_exchange_rate_id' => '4', 'slug' => 'btcusd', 'inverse' => '0','created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['currency_exchange_rate_id' => '5', 'slug' => 'ltcusd', 'inverse' => '1','created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['currency_exchange_rate_id' => '6', 'slug' => 'btcusd', 'inverse' => '1','created_at' => new DateTime(), 'updated_at' => new DateTime()],

        ];

        DB::table('symbols')->insert($symbols);
    }
}
