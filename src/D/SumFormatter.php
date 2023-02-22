<?php

namespace RogueOne\Solid\D;

class SumFormatter
{

    public function __construct(
        protected AreaCalculator $calculator,
        protected Printer $printer
    ) {
    }

    public function format()
    {
        $this->printer->setData($this->calculator->sum());

        return $this->printer->print();
    }
}
