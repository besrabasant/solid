<?php

namespace RogueOne\Solid\S;

class SumFormatter
{
    protected $calculator;

    public function __construct(AreaCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function JSON()
    {
        $data = [
            'sum' => $this->calculator->sum()
        ];

        return json_encode($data);
    }

    public function HTML()
    {
        return implode('', [
            '',
            'Sum of the of provided shapes: ',
            $this->calculator->sum(),
            ''
        ]);
    }
}
