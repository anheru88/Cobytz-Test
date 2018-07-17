<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symbol extends Model
{
    protected $table = 'symbols';

    public function currencyExchangeRate()
    {
        return $this->belongsTo('App\CurrencyExchangeRate');
    }
}
