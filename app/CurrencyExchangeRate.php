<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrencyExchangeRate extends Model
{
    protected $table = 'currency_exchange_rates';

    protected $fillable = [
        'to_value'
    ];

    public function symbol()
    {
        return $this->hasOne('App\Symbol');
    }
}
