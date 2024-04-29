<?php

namespace App\Http\Controllers;

use App\Services\Calculator;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'num1' => 'required|numeric',
            'num2' => 'required|numeric',
            'operator' => 'required|in:plus,minus,multiply,divide',
        ]);

        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operator = $request->input('operator');

        $calculator = new Calculator($num1, $num2);

        try {
            switch ($operator) {
                case 'plus':
                    $result = $calculator->add();
                    break;
                case 'minus':
                    $result = $calculator->subtract();
                    break;
                case 'multiply':
                    $result = $calculator->multiply();
                    break;
                case 'divide':
                    $result = $calculator->divide();
                    break;
                default:
                    $result = "Invalid operator";
            }

            return back()->withInput()->with('result', $result);
        } catch (\InvalidArgumentException $e) {
            return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
