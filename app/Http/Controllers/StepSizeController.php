<?php

namespace Mabele\Http\Controllers;

use Mabele\Charts\StepSize;
use Illuminate\Http\Request;



class StepSizeController extends Controller
{
    public function index(){

        $chart = new StepSize;
        $chart->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Septiempre', 'Octubre', 'Noviembre', 'Diciembre']);
        $dataset = $chart->dataset('Valores de Facturacion', 'line', [rand(0, 150)/10, rand(0, 150)/10, rand(0, 150)/10, rand(0, 150)/10, rand(0, 150)/10, rand(0, 150)/10, rand(0, 150)/10, rand(0, 150)/10, rand(0, 150)/10, rand(0, 150)/10, rand(0, 150)/10, rand(0, 150)/10])->backgroundcolor('rgba(23, 90, 194, 0.6)');
        $dataset->color('blue');
        return view("facturacion", compact('chart'));
    }
}
