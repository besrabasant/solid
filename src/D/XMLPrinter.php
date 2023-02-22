<?php

namespace RogueOne\Solid\D;

use DOMDocument;

class XMLPrinter implements Printer
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
        $dom = new DOMDocument();

        $dom->encoding = 'utf-8';

        $dom->xmlVersion = '1.0';

        $dom->formatOutput = true;

        $label = $dom->createElement('label', 'Sum of the of provided shapes');
        $data = $dom->createElement('data', $this->data);

        $dom->appendChild($label);
        $dom->appendChild($data);

        return $dom->saveXML();
    }
}
