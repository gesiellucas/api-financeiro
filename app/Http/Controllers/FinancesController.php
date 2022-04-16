<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class FinancesController extends Controller
{
    //
    public function index()
    {

    }

    public function listAmount()
    {
        $value = 40;
        return response()->json($value);
    }

    public function addValue(Request $val)
    {
        $data = $val->all();
        
        $validator = Validator::make($data, [
            'value' => 'required'
        ]);
        
        if ($validator->fails()){
            return response()->json('Value field is required', 404);
        } 
        
        $value = $data['value'];
        $text = 'Adicionado R$ '.floatval($value).' reais';
        return response()->json($text);
    }
}
