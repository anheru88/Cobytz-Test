<?php

namespace App\Console\Commands;

use App\CurrencyExchangeRate;
use Illuminate\Console\Command;
use Ixudra\Curl\Facades\Curl;

class SyncCurrencyExchangeRate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:currency';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command sync all data in Currency Exchange Rate Data Table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $currencyExchangeRates = CurrencyExchangeRate::all();

        foreach ($currencyExchangeRates as $currencyExchangeRate){
            $symbol = $currencyExchangeRate->symbol;

            $url = 'https://api.bitfinex.com/v1/pubticker/' . $symbol->slug;

            $response = Curl::to($url)
                ->get();

            $data = (array) json_decode($response);
            
            if($symbol->inverse){
                $low = (float)$data["low"];
                $currencyExchangeRate->to_value = 1 / $low;
                $currencyExchangeRate->save();

            }else{
                $currencyExchangeRate->to_value = $data["low"];
                $currencyExchangeRate->save();
            }
        }

        $this->info("Currency Excchange Rate Table sync successfully");
    }
}
