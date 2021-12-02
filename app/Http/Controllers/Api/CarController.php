<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\LogicLayers\CarLogicLayer;
use App\Outputs\CarsOutput;

class CarController extends Controller
{
    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */
    public function index()
    {
        $car_logic_layer = new CarLogicLayer;
        $cars = $car_logic_layer->get_cars();
        return $this->car_output()->cars($cars);
    }

    private function car_output(){
        $cars_output = new CarsOutput;
        return $cars_output;
    }
}