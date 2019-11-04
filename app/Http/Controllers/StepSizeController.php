<?php

namespace Mabele\Http\Controllers;

use Illuminate\Http\Request;

use App\Charts\StepSize;

class StepSizeController extends Controller
{
    public function index(){

        $chart = new StepSize;
        // $chart->labels(['One', 'Two', 'Three']);
        // $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
        // $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);
    
        return view("facturacion");
    }
}
