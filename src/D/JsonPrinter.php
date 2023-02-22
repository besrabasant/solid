<?php

namespace RogueOne\Solid\D;

class JsonPrinter implements Printer
{

    protected $data;

    public function __construct()
    {
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function print()
    {
        $data = [
            'sum' => $this->data
        ];

        return  json_encode($data);
    }
}
