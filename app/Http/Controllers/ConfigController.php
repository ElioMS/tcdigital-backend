<?php

namespace App\Http\Controllers;

use App\Models\ConfigTc;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        $config = ConfigTc::first();
        return response()->json([
            'message' => 'Retornando valores de config',
            'data' => [
                'sellValue' => $config->sell_value,
                'buyValue' => $config->buy_value,
            ]
        ]);
    }

    public function update(Request $request)
    {
        $config = ConfigTc::updateOrCreate(
            ['id' => 1],
            [
                'sell_value' => $request->sell_value,
                'buy_value' => $request->buy_value,
                'ext_sell_value' => $request->ext_sell_value,
                'ext_buy_value' => $request->ext_buy_value,
                'responsible' => $request->responsible,
            ]
        );

        return response()->json([
            'message' => 'Configuración actualizada con éxito',
            'data' => $config
        ]);
    }
}
