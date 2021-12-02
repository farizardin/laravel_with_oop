<?php

namespace App\LogicLayers;
use App\Models\Car;

class CarLogicLayer
{
    public function get_cars(){
        $cars = Car::all();

        return $cars;
    }
}