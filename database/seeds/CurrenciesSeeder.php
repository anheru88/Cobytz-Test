<?php

use Illuminate\Database\Seeder;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies =[
            ['name' => 'Litecoin', 'abbreviation' => 'LTC', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'Bitcoin', 'abbreviation' => 'BTC', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'Dolar', 'abbreviation' => 'USD', 'created_at' => new DateTime(), 'updated_at' => new DateTime()]
        ];

        DB::table('currencies')->insert($currencies);
    }
}
