<?php

namespace App\Outputs;

class Output
{
    public $arrayOutput = array();

    public function output($result, $message){
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }
}