<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigTc extends Model
{
    use HasFactory;

    protected $fillable = [
        'sell_value', 'buy_value', 'ext_sell_value', 'ext_buy_value', 'responsible',
    ];
}
