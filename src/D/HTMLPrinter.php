<?php

namespace RogueOne\Solid\D;

class HTMLPrinter implements Printer
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
        return implode('', [
            '',
            'Sum of the of provided shapes: ',
            $this->data,
            ''
        ]);
    }
}
