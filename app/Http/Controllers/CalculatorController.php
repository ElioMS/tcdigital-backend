<?php

namespace App\Http\Controllers;

use App\Models\ConfigTc;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class CalculatorController extends Controller
{
    public function convert(Request $request)
    {
        $value = $request->type;
        $amount = $request->amount;

        $config = ConfigTc::first();
        $change = $value === 'sell' ? $config->sell_value : $config->buy_value;
        $extChange = $value === 'sell' ? $config->ext_sell_value : $config->ext_buy_value;

        $convertedAmount = $value === 'buy' ? $change * $amount : $amount / $change;
        $extConvertedAmount = $value === 'buy' ? $extChange * $amount : $amount / $extChange;

        $saving = $extConvertedAmount - $convertedAmount;

//        Log::info("Calculator -> type {$value} - amount {$amount} - converted amount {$convertedAmount}");
//
        return response()->json([
            'message' => "Transacción realizada con éxito",
            'data' => [
                'converted' => number_format(round($convertedAmount, 2), 2),
                'saving' => abs(number_format(round($saving, 2), 2)),
            ],
        ]);
    }
}
