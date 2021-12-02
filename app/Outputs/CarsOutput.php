<?php

namespace App\Outputs;

class CarsOutput extends Output
{
    public function cars($datas){
        foreach($datas as $data){
            $id = $data->id;
            $name = $data->name;
            $type = $data->type;

            $data = [
                'id'   => $id,
                'name' => $name,
                'type' => $type,
            ];
            array_push($this->arrayOutput, $data);
        }

        return $this->output($this->arrayOutput, 'success');
    }
}