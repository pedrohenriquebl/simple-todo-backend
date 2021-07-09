<?php

namespace Pedruhbl\Todo\Code\Read;

class ReadController
{
    public function getAllTodos(){
        return response()->json(
            [
                [
                    "id" => 1,
                    "text" => "lavar roupa"
                ],
                [
                    "id" => 2,
                    "text" => "limpar piano"
                ]
            ]
        );
    }
}