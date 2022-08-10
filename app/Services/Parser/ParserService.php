<?php

namespace App\Services\Parser;

use App\Services\Parser\Components\RequestProcessorInterface;

class ParserService
{
    /**
     * @var RequestProcessorInterface[] $parsers
     *
     */
    private iterable $parsers;

    public function __construct(iterable $parsers)
    {
        $this->parsers = $parsers;
    }
//todo: rename that shit
    public function getResult($inputs)
    {
        foreach ($this->parsers as $parser) {
            if ($parser->isApplicable($inputs)){
                $parser->getResult($inputs);
            }
        }
    }

}
